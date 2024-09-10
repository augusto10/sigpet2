<?php
use MongoDB\BSON\Type;

require_once '../config/conexao.php';


class Venda
{
    private $atributos;
    public function __construct()
    {
    }
    public function __set(string $atributo, $valor)
    {
        $this->atributos[$atributo] = $valor;
        return $this;
    }
    public function __get(string $atributo)
    {
        return $this->atributos[$atributo];
    }
    public function __isset($atributo)
    {
        return isset($this->atributos[$atributo]);
    }
    /**
     * Salvar o cliente
     * @return boolean
     */
	 //`heroku_87bfe723a0b6070`.
    public function save()
    {
        $colunas = $this->preparar($this->atributos);
			$arrayNomes = array_keys($colunas);
			$valores = array_values($colunas);
        if ($this->ID == null) {
			$nomesVendaCabs = "`".$arrayNomes[1]."`, `".$arrayNomes[2]."`, `DATA_VENDA_CAB`";
			$valVendaCabs = $valores[1].", ".$valores[2].", CURDATE()";
            $query = "INSERT INTO venda_cabs (".$nomesVendaCabs.") VALUES (".$valVendaCabs.");";
        }else {
            foreach ($colunas as $key => $value) {
                if ($key !== 'ID') {
                    $definir[] = "{$key}={$value}";
                }
            }
            $query = "UPDATE venda_cabs SET ".$definir[0].", ".$definir[1]." WHERE `ID`={$this->ID};";
        }
			//var_dump($query); exit;

        if ($conexao = Conexao::getInstance()) {
            $stmt = $conexao->prepare($query);
            if ($stmt->execute()) {

				$qProd = '';
				$nomesProd = $arrayNomes[3].", ".$arrayNomes[4].", ".$arrayNomes[5].", ".$arrayNomes[6].", `VENDA_CAB_ID`";
				$prodID = explode('/', str_replace('\'', '', $valores[3]));
				$prodVlrUn = explode('/', str_replace('\'', '', $valores[4]));
				$prodVleTotal = explode('/', str_replace('\'', '', $valores[5]));
				$prodQt = explode('/', str_replace('\'', '', $valores[6]));

				if($this->ID == null){

					$lastid = $conexao->prepare('SELECT LAST_INSERT_ID() as lastid from venda_cabs;');
					if ($lastid->execute()) {
						$resultado = $lastid->fetchObject('Venda');
						if ($resultado) {
				//var_dump($prodQt); exit;
							for($j=0;$j<count($prodID)-1;$j++){
								$valProd = $prodID[$j].", ".$prodVlrUn[$j].", ".$prodVleTotal[$j].", ".$prodQt[$j].", ".$resultado->lastid;
								$qProd .= "INSERT INTO venda_dets (".$nomesProd.") VALUES (".$valProd.");";
							}
						}
					}


				}else{
					//var_dump("delete from venda_cabs where `VENDA_CAB_ID`=".$this->ID.";"); exit;
					if ($conexao->exec("delete from venda_dets where `VENDA_CAB_ID`=".$this->ID.";")) {
						for($j=0;$j<count($prodID)-1;$j++){
							$valProd = $prodID[$j].", ".$prodVlrUn[$j].", ".$prodVleTotal[$j].", ".$prodQt[$j].", ".$this->ID;
							$qProd .= "INSERT INTO venda_dets (".$nomesProd.") VALUES (".$valProd.");";
						}
					}else{
						return false;
					}
				}

				$inProd = $conexao->prepare($qProd);
				if ($inProd->execute()) {
					return $inProd->rowCount();
				}else{
					return false;
				}

				return $stmt->rowCount();
            }
        }
        return false;
    }
    /**
     * Tornar valores aceitos para sintaxe SQL
     * @param type $dados
     * @return string
     */
    private function escapar($dados)
    {
        if (is_string($dados) & !empty($dados)) {
            return "'".addslashes($dados)."'";
        } elseif (is_bool($dados)) {
            return $dados ? 'TRUE' : 'FALSE';
        } elseif ($dados !== '') {
            return $dados;
        } else {
            return 'NULL';
        }
    }
    /**
     * Verifica se dados são próprios para ser salvos
     * @param array $dados
     * @return array
     */
    private function preparar($dados)
    {
        $resultado = array();
        foreach ($dados as $k => $v) {
            if (is_scalar($v)) {
                $resultado[$k] = $this->escapar($v);
            }
        }
        return $resultado;
    }
    /**
     * Retorna uma lista de vendas
     * @return array/boolean
     */
    public static function all()
    {
        $conexao = Conexao::getInstance();
        $stmt    = $conexao->prepare("SELECT a.*,
        b.NOME_CLIENTE, c.DESCRICAO_PAGAMT FROM heroku_87bfe723a0b6070.venda_cabs as a
        LEFT JOIN heroku_87bfe723a0b6070.clientes as b ON a.CLIENTE_ID = b.id
        LEFT JOIN heroku_87bfe723a0b6070.tipo_pagamentos as c on a.TIPO_PAGAMENTO_ID = c.ID order by a.DATA_VENDA_CAB desc;");
        $result  = array();
        if ($stmt->execute()) {
            while ($rs = $stmt->fetchObject(Venda::class)) {
                $result[] = $rs;
            }
        }
        if (count($result) > 0) {
            return $result;
        }
        return false;
    }
    /**
     * Retornar o número de registros
     * @return int/boolean
     */
    public static function count()
    {
        $conexao = Conexao::getInstance();
        $count   = $conexao->exec("SELECT count(*) FROM venda_cabs;");
        if ($count) {
            return (int) $count;
        }
        return false;
    }
    /**
     * Encontra um recurso pelo id
     * @param type $id
     * @return type
     */
    public static function find($id)
    {
        $conexao = Conexao::getInstance();
        $stmt    = $conexao->prepare("SELECT a.ID, a.CLIENTE_ID, a.VALOR_VENDA_CAB, b.PRODUTO_ID, b.QTD_VENDA_DETA, b.VLR_UNIT_VENDA_DETA, c.NOME_CLIENTE, d.DESCRICAO FROM venda_cabs as a left join venda_dets as b on a.ID = b.VENDA_CAB_ID left join clientes as c on a.CLIENTE_ID = c.id left join produtos as d on b.PRODUTO_ID = d.id  where a.ID ='{$id}';");
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                while ($rs = $stmt->fetchObject(Venda::class)) {
					$result[] = $rs;
				}
                if (count($result) > 0) {
					return $result;
				}
            }
        }
        return false;
    }
    /** pegar lista de clientes */
    public static function findCliente()
    {
        $conexao = Conexao::getInstance();
        $stmt    = $conexao->prepare("SELECT * FROM clientes");
        if ($stmt->execute()) {
            while ($rs = $stmt->fetchObject(Venda::class)) {
                $result[] = $rs;
            }
        }
        if (count($result) > 0) {
            return $result;
        }
        return false;
    }
    /** pegar lista de produtos */
    public static function findProduto()
    {
        $conexao = Conexao::getInstance();
        $stmt    = $conexao->prepare("SELECT * FROM produtos");
        if ($stmt->execute()) {
            while ($rs = $stmt->fetchObject(Venda::class)) {
                $result[] = $rs;
            }
        }
        if (count($result) > 0) {
            return $result;
        }
        return false;
    }
    /**
     * Destruir um recurso
     * @param type $id
     * @return boolean
     */

     //DELETE messages , usersmessages  FROM messages  INNER JOIN usersmessages
     //WHERE messages.messageid= usersmessages.messageid and messages.messageid = '1'


  /**
  *if ($conexao->exec("DELETE FROM venda_dets WHERE `VENDA_CAB_ID`=".$id->ID." ;
  *                      DELETE FROM venda_cabs WHERE ID='{$id}'"))
  *  {
  *  if ($conexao->exec("DELETE venda_dets , venda_cabs FROM venda_cabs as a INNER JOIN venda_dets as b
  *                      WHERE a.ID = b.VENDA_CAB_ID
  *                      and a.ID = '{$id}'")
  *
  */

    public static function destroy($id)
    {
        $conexao = Conexao::getInstance();
        if ($conexao->exec("DELETE FROM venda_dets WHERE `VENDA_CAB_ID`='{$id}';
                            DELETE FROM venda_cabs WHERE ID='{$id}'"))
        {
            return true;
        }

        return false;
    }
}
