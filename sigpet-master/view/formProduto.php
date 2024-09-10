<?php
ini_set( "display_errors", 0);
  $con = mysqli_connect('us-cdbr-iron-east-03.cleardb.net','b91118ec66dcf8','8ed6f6be','heroku_87bfe723a0b6070');
  mysqli_query("SET NAMES 'utf8'");
mysqli_query('SET character_set_connection=utf8');
mysqli_query('SET character_set_client=utf8');
mysqli_query('SET character_set_results=utf8');
if(isset($_POST['VALOR_COMPRA']) && (trim($_POST['VALOR_COMPRA']) != '') ) {
    $n=$_POST['VALOR_COMPRA'];
}
else {
    $errors[] = "Please give a name";
}
?>
<div class="container">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <form class="was-validated col s12" action="?controller=ProdutosController&<?php echo isset($produto->id) ? "method=atualizar&id={$produto->id}" : "method=salvar"; ?>" method="post" >
        <div class="row" style="top:40px">
            <div class="card-header">
                <h5 class="card-title">Informe os dados do produto</h5>
            </div>
            <div class="card-body">
            </div>
            <div class="input-field col s6">
                <label for="FOR_ID" class="col-sm-2 col-form-label text-right">Produto</label>
                <input type="text" class="form-control col-sm-8" name="FOR_ID" id="FOR_ID" value="<?php
                echo isset($produto->FOR_ID) ? $produto->FOR_ID : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="DESCRICAO" class="col-sm-2 col-form-label text-right">Descrição do produto:</label>
                <input type="text" class="form-control col-sm-8" name="DESCRICAO" id="DESCRICAO" value="<?php
                echo isset($produto->DESCRICAO) ? $produto->DESCRICAO : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="VALOR_COMPRA" class="col-sm-2 col-form-label text-right">Valor de compra:</label>
                <input type="text" class=" form-control col-sm-8" name="VALOR_COMPRA" id="VALOR_COMPRA" value="<?php
                echo isset($produto->VALOR_COMPRA) ? $produto->VALOR_COMPRA : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="VALOR_VENDA" class="col-sm-2 col-form-label text-right">Valor de venda:</label>
                <input type="text" class=" form-control col-sm-8" name="VALOR_VENDA" id="VALOR_VENDA" value="<?php
                echo isset($produto->VALOR_VENDA) ? $produto->VALOR_VENDA : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="ESTOQUE" class="col-sm-2 col-form-label text-right">Estoque:</label>
                <input type="text" class="form-control col-sm-8" name="ESTOQUE" id="ESTOQUE" value="<?php
                echo isset($produto->ESTOQUE) ? $produto->ESTOQUE : null;
                ?>" required/>
            </div>
            <label>Criticidade</label>
            <span> <?php echo isset($produto->CRITICO); ?></span>
            <div class="input-field col s12 m6">
              <select name="CRITICO">
                <option value="" disabled selected>Selecione a criticidade do produto</option>
                <option value="Alta" <?php echo isset($produto->CRITICO)=='Alta'?'selected' :''; ?> >Alta</option>
                <option value="Média" <?php echo isset($produto->CRITICO)=='Média'?'selected' :''; ?> >Média</option>
                <option value="Baixa" <?php echo isset($produto->CRITICO)=='Baixa'?'selected' :''; ?> >Baixa</option>
              </select>
            </div>

             <div class="form-group form-row">
               <label>Fornecedor</label>
                <select name="FORNECEDORE_ID">
          					<option>Escolha o fornecedor</option>
          					<?php
          						$result_niveis_acessos = "SELECT * FROM fornecedores";
          						$resultado_niveis_acesso = mysqli_query($con, $result_niveis_acessos);
          						while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
          							<option value="<?php echo $row_niveis_acessos['id']; ?>"><?php echo $row_niveis_acessos['NOME_FORNECEDOR']; ?></option> <?php
          						}
          					?>
          				</select><br><br>
            </div>

            <div class="card-footer">
		    <input type="hidden" name="id" id="id" value="<?php echo isset($fornecedor->id) ? $fornecedor->id : null; ?>" />
		    <input type="hidden" name="id" id="id" value="<?php echo isset($cliente->id) ? $cliente->id : null; ?>" />
                    <button class="waves-effect waves-light btn-small" type="submit"><i class="material-icons right">save</i>Registrar</button>
                    <a class="waves-effect waves-light btn-small red" href="?controller=ProdutosController&method=listar"><i class="material-icons right">cancel</i>Cancelar</a>
            </div>

        </div>
    </form>
</div>
