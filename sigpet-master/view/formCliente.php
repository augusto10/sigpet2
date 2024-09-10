<div class="container">
    <form class="was-validated col s12" action="?controller=ClientesController&<?php echo isset($cliente->id) ? "method=atualizar&id={$cliente->id}" : "method=salvar"; ?>" method="post" >
        <div class="row" style="top:40px">
            <div class="card-header">
                <h5 class="row-title">Cadastro de clientes</h5>
            </div>
            <div class="card-body">
            </div>
            <div class="input-field col s6">
                <label for="NOME_CLIENTE" class="col-sm-2 col-form-label text-right">Nome do cliente:</label>
                <input type="text" class="form-control col-sm-8" name="NOME_CLIENTE" id="NOME_CLIENTE" value="<?php
                echo isset($cliente->NOME_CLIENTE) ? $cliente->NOME_CLIENTE : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="CPF_CLIENTE" class="col-sm-2 col-form-label text-right">CPF do cliente:</label>
                <input type="text" class="cpf form-control col-sm-8" name="CPF_CLIENTE" id="CPF_CLIENTE" value="<?php
                echo isset($cliente->CPF_CLIENTE) ? $cliente->CPF_CLIENTE : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="RG_CLIENTE" class="col-sm-2 col-form-label text-right">RG do cliente:</label>
                <input type="text" class="rg form-control col-sm-8" name="RG_CLIENTE" id="RG_CLIENTE" value="<?php
                echo isset($cliente->RG_CLIENTE) ? $cliente->RG_CLIENTE : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="DT_NASCIMENTO" class="browser-default">Data de nascimento:</label>
                <input placeholder="" type="date" class="date form-control col-sm-8" name="DT_NASCIMENTO" id="DT_NASCIMENTO" value="<?php
                echo isset($cliente->DT_NASCIMENTO) ? $cliente->DT_NASCIMENTO : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="DT_CADASTRO" class="col-sm-2 col-form-label text-right">Data de cadastro:</label>
                <input  placeholder="" type="date" class="date form-control col-sm-8" name="DT_CADASTRO" id="DT_CADASTRO" value="<?php
                echo isset($cliente->DT_CADASTRO) ? $cliente->DT_CADASTRO : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="TELEFONE" class="col-sm-2 col-form-label text-right">Telefone do cliente:</label>
                <input type="text" class="telefone form-control col-sm-8" name="TELEFONE" id="TELEFONE" value="<?php
                echo isset($cliente->TELEFONE) ? $cliente->TELEFONE : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="EMAIL" class="col-sm-2 col-form-label text-right">EMAIL do cliente:</label>
                <input type="text" class="form-control col-sm-8" name="EMAIL" id="EMAIL" value="<?php
                echo isset($cliente->EMAIL) ? $cliente->EMAIL : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="CNPJ_CLIENTE" class="col-sm-2 col-form-label text-right">CNPJ do cliente:</label>
                <input type="text" class="cnpj form-control col-sm-8" name="CNPJ_CLIENTE" id="CNPJ_CLIENTE" value="<?php
                echo isset($cliente->CNPJ_CLIENTE) ? $cliente->CNPJ_CLIENTE : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="TIPO_CLIENTE" class="col-sm-2 col-form-label text-right">Tipo do cliente:</label>
                <input type="text" class="form-control col-sm-8" name="TIPO_CLIENTE" id="TIPO_CLIENTE" value="<?php
                echo isset($cliente->TIPO_CLIENTE) ? $cliente->TIPO_CLIENTE : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="REFERENCIA_CLIENTE" class="col-sm-2 col-form-label text-right">Referencia do cliente:</label>
                <input type="text" class="form-control col-sm-8" name="REFERENCIA_CLIENTE" id="REFERENCIA_CLIENTE" value="<?php
                echo isset($cliente->REFERENCIA_CLIENTE) ? $cliente->REFERENCIA_CLIENTE : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="CELULAR" class="col-sm-2 col-form-label text-right">Celular do cliente:</label>
                <input type="text" class="celular form-control col-sm-8" name="CELULAR" id="CELULAR" value="<?php
                echo isset($cliente->CELULAR) ? $cliente->CELULAR : null;
                ?>" required/>
            </div>
          </div>
          <div class="row-footer">
              <input type="hidden" name="id" id="id" value="<?php echo isset($cliente->id) ? $cliente->id : null; ?>" />
              <button class="waves-effect waves-light btn-small" type="submit"><i class="material-icons right">save</i>Registrar</button>
              <a class="waves-effect waves-light btn-small red" href="?controller=ClientesController&method=listar"><i class="material-icons right">cancel</i>Cancelar</a>
          </div>
    </form>
</div>
