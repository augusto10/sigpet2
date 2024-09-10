<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
<script type="text/javascript" src="../js/jquery.mask.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<div class="container">
    <form class="was-validated col s12" action="?controller=FuncionariosController&<?php echo isset($funcionario->id) ? "method=atualizar&id={$funcionario->id}" : "method=salvar"; ?>" method="post" >
        <div class="row" style="top:40px">
            <div class="card-header">
                <h5 class="card-title">Cadastro de funcionarios</h5>
            </div>
            <div class="card-body">
            </div>
            <div class="input-field col s6">
                <label for="NOME_FUNCIONARIO" class="col-sm-2 col-form-label text-right">Nome do Funcionario:</label>
                <input type="text" class="form-control col-sm-8" name="NOME_FUNCIONARIO" id="NOME_FUNCIONARIO" value="<?php
                echo isset($funcionario->NOME_FUNCIONARIO) ? $funcionario->NOME_FUNCIONARIO : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="FUNCAO" class="col-sm-2 col-form-label text-right">Função</label>
                <input type="text" class="form-control col-sm-8" placeholder="Digite a função do funcionário" name="FUNCAO" id="FUNCAO" value="<?php
                echo isset($funcionario->FUNCAO) ? $funcionario->FUNCAO : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="LOGIN" class="col-sm-2 col-form-label text-right">Login do funcionário:</label>
                <input type="text" class="form-control col-sm-8" name="LOGIN" id="LOGIN" value="<?php
                echo isset($funcionario->LOGIN) ? $funcionario->LOGIN : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="SENHA" class="col-sm-2 col-form-label text-right">Senha do funcionário:</label>
                <input type="password" class="form-control" name="SENHA" id="SENHA" value="<?php
                echo isset($funcionario->SENHA) ? $funcionario->SENHA : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="ADMISSAO" class="col-sm-2 col-form-label text-right">Data de admissão:</label>
                <input placeholder="" type="date" class="date form-control col-sm-8" name="ADMISSAO" id="ADMISSAO" value="<?php
                echo isset($funcionario->ADMISSAO) ? $funcionario->ADMISSAO : null;
                ?>" required/>
            <div class="input-field col s6">
                <label for="DEPARTAMENTO_ID" class="col-sm-2 col-form-label text-right">Departamento:</label>
                <input type="text" class="form-control" name="DEPARTAMENTO_ID" id="DEPARTAMENTO_ID" value="<?php
                echo isset($funcionario->DEPARTAMENTO_ID) ? $funcionario->DEPARTAMENTO_ID : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="EMAIL" class="col-sm-2 col-form-label text-right">EMAIL do funcionário:</label>
                <input type="email" class="form-control col-sm-8" name="EMAIL" id="EMAIL" value="<?php
                echo isset($funcionario->EMAIL) ? $funcionario->EMAIL : null;
                ?>" required/>
            </div>
            <div class="card-footer">
                <input type="hidden" name="id" id="id" value="<?php echo isset($funcionario->id) ? $funcionario->id : null; ?>" />
                <button class="waves-effect waves-light btn-small" type="submit"><i class="material-icons right">save</i>Registrar</button>
                <a class="waves-effect waves-light btn-small red" href="?controller=FuncionariosController&method=listar"><i class="material-icons right">cancel</i>Cancelar</a>
            </div>
        </div>
    </form>
</div>
