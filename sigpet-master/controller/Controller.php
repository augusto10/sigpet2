<?php
require_once 'Request.php';

class Controller
{
    public $request;
    public function __construct()
    {
        $this->request = new Request;
    }
    public function view($arquivo, $array = null)
    {
        if (!is_null($array)) {
            foreach ($array as $var => $value) {
                ${$var} = $value;
            }
        }
        ob_start();
        include "{$arquivo}.php";
        ob_flush();
    }
	
	//para um array multidimensional
	public function view2($arquivo, $array = null)
    {
		if (!is_null($array)) {
			//var_dump($array);
			for ($i = 0; $i < count($array); $i++) {
				foreach ($array[$i] as $var => $value) {
					${$var} = $value;
				}
            }
		}
        ob_start();
        include "{$arquivo}.php";
        ob_flush();
    }
}
/*
array(2) { 
	[0]=> array(1) { 
		["clientes"]=> array(3) { 
			[0]=> object(Venda)#6 (1) { ["atributos":"Venda":private]=> array(12) { 
				["id"]=> string(2) "22" ["NOME_CLIENTE"]=> string(5) "João" ["CPF_CLIENTE"]=> string(3) "121" ["RG_CLIENTE"]=> string(8) "21212121" ["DT_NASCIMENTO"]=> string(10) "0000-00-00" ["DT_CADASTRO"]=> string(10) "0000-00-00" ["TELEFONE"]=> string(11) "(21) 2223-4" ["EMAIL"]=> string(4) "1212" ["TIPO_CLIENTE"]=> string(1) "2" ["CNPJ_CLIENTE"]=> string(14) "23.423.423/423" ["REFERENCIA_CLIENTE"]=> string(4) "2121" ["CELULAR"]=> string(11) "(21) 2 3333" } } 
			[1]=> object(Venda)#7 (1) { ["atributos":"Venda":private]=> array(12) { 
				["id"]=> string(2) "52" ["NOME_CLIENTE"]=> string(4) "Nika" ["CPF_CLIENTE"]=> string(8) "95830958" ["RG_CLIENTE"]=> string(9) "pe0irpofi" ["DT_NASCIMENTO"]=> string(10) "0000-00-00" ["DT_CADASTRO"]=> string(10) "0000-00-00" ["TELEFONE"]=> string(11) "sdfjsdfklsd" ["EMAIL"]=> string(17) "klcjklsdfjsdkljfl" ["TIPO_CLIENTE"]=> string(1) "5" ["CNPJ_CLIENTE"]=> string(7) "xlkjklj" ["REFERENCIA_CLIENTE"]=> string(4) "5345" ["CELULAR"]=> string(6) "345345" } } 
			[2]=> object(Venda)#8 (1) { ["atributos":"Venda":private]=> array(12) { 
				["id"]=> string(2) "62" ["NOME_CLIENTE"]=> string(3) "Bea" ["CPF_CLIENTE"]=> string(10) "2147483647" ["RG_CLIENTE"]=> string(6) "534534" ["DT_NASCIMENTO"]=> string(10) "0000-00-00" ["DT_CADASTRO"]=> string(10) "0000-00-00" ["TELEFONE"]=> string(9) "345345345" ["EMAIL"]=> string(6) "dbccvb" ["TIPO_CLIENTE"]=> string(1) "c" ["CNPJ_CLIENTE"]=> string(6) "cvbcvb" ["REFERENCIA_CLIENTE"]=> string(6) "cvbcvb" ["CELULAR"]=> string(9) "cvbcvbcvb" } } } } 
	[1]=> array(1) { 
		["produtos"]=> array(3) { 
			[0]=> object(Venda)#9 (1) { ["atributos":"Venda":private]=> array(8) { 
				["id"]=> string(1) "2" ["FOR_ID"]=> string(2) "33" ["DESCRICAO"]=> string(7) "Ração" ["VALOR_COMPRA"]=> string(1) "2" ["VALOR_VENDA"]=> string(1) "0" ["ESTOQUE"]=> string(1) "0" ["CRITICO"]=> string(1) "0" ["FORNECEDORE_ID"]=> string(7) "Premier" } } 
			[1]=> object(Venda)#10 (1) { ["atributos":"Venda":private]=> array(8) { 
				["id"]=> string(2) "12" ["FOR_ID"]=> string(4) "2121" ["DESCRICAO"]=> string(8) "editado2" ["VALOR_COMPRA"]=> string(5) "21212" ["VALOR_VENDA"]=> string(6) "121212" ["ESTOQUE"]=> string(2) "12" ["CRITICO"]=> string(5) "21212" ["FORNECEDORE_ID"]=> string(7) "2121221" } } 
			[2]=> object(Venda)#11 (1) { ["atributos":"Venda":private]=> array(8) { 
				["id"]=> string(2) "22" ["FOR_ID"]=> string(1) "2" ["DESCRICAO"]=> string(15) "Bolo de Cenoura" ["VALOR_COMPRA"]=> string(2) "99" ["VALOR_VENDA"]=> string(3) "159" ["ESTOQUE"]=> string(1) "3" ["CRITICO"]=> string(1) "1" ["FORNECEDORE_ID"]=> string(10) "Bangladesh" } } } } } 

				
				*/
				
				
				
				
				
				
				