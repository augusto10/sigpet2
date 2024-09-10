<div class="container">
    <form class="was-validated col s12" action="?controller=FornecedoresController&<?php echo isset($fornecedor->id) ? "method=atualizar&id={$fornecedor->id}" : "method=salvar"; ?>" method="post" >
        <div class="row" style="top:60px">
            <div class="card-header">
                <h5 class="card-title">Fornecedores</h5>
            </div>
            <div class="card-body">
            </div>
            <div class="input-field col s6">
                <label for="NOME_FORNECEDOR" class="col-sm-2 col-form-label text-right">Nome do fornecedor:</label>
                <input type="text" class="form-control col-sm-8 " name="NOME_FORNECEDOR" id="NOME_FORNECEDOR" value="<?php
                echo isset($fornecedor->NOME_FORNECEDOR) ? $fornecedor->NOME_FORNECEDOR : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="CNPJ_FORNECEDOR" class="col-sm-2 col-form-label text-right">CNPJ:</label>
                <input type="text" class="cnpj form-control col-sm-8" name="CNPJ_FORNECEDOR" id="CNPJ_FORNECEDOR" value="<?php
                echo isset($fornecedor->CNPJ_FORNECEDOR) ? $fornecedor->CNPJ_FORNECEDOR : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label class="col-sm-2 col-form-label text-right">CPF:</label>
                <input type="text" class="cpf form-control col-sm-8" name="CPF_FORNECEDOR" id="CPF_FORNECEDOR" value="<?php
                echo isset($fornecedor->CPF_FORNECEDOR) ? $fornecedor->CPF_FORNECEDOR : null;
                ?>" />
            </div>
            <div class="input-field col s6">
                <label for="CELULAR_FORNECEDOR" class="col-sm-2 col-form-label text-right">Celular:</label>
                <input type="text" class="celular form-control col-sm-8" name="CELULAR_FORNECEDOR" id="CELULAR_FORNECEDOR" value="<?php
                echo isset($fornecedor->CELULAR_FORNECEDOR) ? $fornecedor->CELULAR_FORNECEDOR : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label class="col-sm-2 col-form-label text-right">Telefone Fixo:</label>
                <input type="text" class="telefone form-control col-sm-8" name="TELEFONE_FORNECEDOR" id="TELEFONE_FORNECEDOR" value="<?php
                echo isset($fornecedor->TELEFONE_FORNECEDOR) ? $fornecedor->TELEFONE_FORNECEDOR : null;
                ?>" />
            </div>
            <div class="input-field col s6">
                <label for="INSCRICAOESTADUAL_FORNECEDOR" class="col-sm-2 col-form-label text-right">Inscrição estadual:</label>
                <input type="text" class="InscricaoEstadual form-control col-sm-8" name="INSCRICAOESTADUAL_FORNECEDOR" id="INSCRICAOESTADUAL_FORNECEDOR" value="<?php
                echo isset($fornecedor->INSCRICAOESTADUAL_FORNECEDOR) ? $fornecedor->INSCRICAOESTADUAL_FORNECEDOR : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="TIPO_FORNECEDOR" class="col-sm-2 col-form-label text-right">Tipo:</label>
                <input type="text" class="form-control col-sm-8" name="TIPO_FORNECEDOR" id="TIPO_FORNECEDOR" value="<?php
                echo isset($fornecedor->TIPO_FORNECEDOR) ? $fornecedor->TIPO_FORNECEDOR : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="NDERECO_FORNECEDOR_7" class="col-sm-2 col-form-label text-right">Endereço:</label>
                <input type="text" class="form-control col-sm-8" name="NDERECO_FORNECEDOR_7" id="NDERECO_FORNECEDOR_7" value="<?php
                echo isset($fornecedor->NDERECO_FORNECEDOR_7) ? $fornecedor->NDERECO_FORNECEDOR_7 : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="BAIRRO_FORNECEDOR" class="col-sm-2 col-form-label text-right">Bairro:</label>
                <input type="text" class="form-control col-sm-8" name="BAIRRO_FORNECEDOR" id="BAIRRO_FORNECEDOR" value="<?php
                echo isset($fornecedor->BAIRRO_FORNECEDOR) ? $fornecedor->BAIRRO_FORNECEDOR : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="CIDADE_FORNECEDOR" class="col-sm-2 col-form-label text-right">Cidade:</label>
                <input type="text" class="form-control col-sm-8" name="CIDADE_FORNECEDOR" id="CIDADE_FORNECEDOR" value="<?php
                echo isset($fornecedor->CIDADE_FORNECEDOR) ? $fornecedor->CIDADE_FORNECEDOR : null;
                ?>" required/>
            </div>

            <label>Estado do Fornecedor: </label> <span> <?php echo isset($fornecedor->UF_FORNECEDOR); ?></span>
            <div class="input-field col s12">
              <select name="UF_FORNECEDOR" required>
                <option value="" disabled selected>Selecione uma unidade da federação</option>
                <option value="AC" <?php echo isset($fornecedor->UF_FORNECEDOR)=='AC'?'selected' :''; ?> >AC</option>
                <option value="AL" <?php echo isset($fornecedor->UF_FORNECEDOR)=='AL'?'selected' :''; ?> >AL</option>
                <option value="AP" <?php echo isset($fornecedor->UF_FORNECEDOR)=='AP'?'selected' :''; ?> >AP</option>
                <option value="AM" <?php echo isset($fornecedor->UF_FORNECEDOR)=='AM'?'selected' :''; ?> >AM</option>
                <option value="BA" <?php echo isset($fornecedor->UF_FORNECEDOR)=='BA'?'selected' :''; ?> >BA</option>
                <option value="CE" <?php echo isset($fornecedor->UF_FORNECEDOR)=='CE'?'selected' :''; ?> >CE</option>
                <option value="DF" <?php echo isset($fornecedor->UF_FORNECEDOR)=='DF'?'selected' :''; ?> >DF</option>
                <option value="ES" <?php echo isset($fornecedor->UF_FORNECEDOR)=='ES'?'selected' :''; ?> >ES</option>
                <option value="GO" <?php echo isset($fornecedor->UF_FORNECEDOR)=='GO'?'selected' :''; ?> >GO</option>
                <option value="MA" <?php echo isset($fornecedor->UF_FORNECEDOR)=='MA'?'selected' :''; ?> >MA</option>
                <option value="MT" <?php echo isset($fornecedor->UF_FORNECEDOR)=='MT'?'selected' :''; ?> >MT</option>
                <option value="MS" <?php echo isset($fornecedor->UF_FORNECEDOR)=='MS'?'selected' :''; ?> >MS</option>
                <option value="MG" <?php echo isset($fornecedor->UF_FORNECEDOR)=='MG'?'selected' :''; ?> >MG</option>
                <option value="PA" <?php echo isset($fornecedor->UF_FORNECEDOR)=='PA'?'selected' :''; ?> >PA</option>
                <option value="PB" <?php echo isset($fornecedor->UF_FORNECEDOR)=='PB'?'selected' :''; ?> >PB</option>
                <option value="PR" <?php echo isset($fornecedor->UF_FORNECEDOR)=='PR'?'selected' :''; ?> >PR</option>
                <option value="PE" <?php echo isset($fornecedor->UF_FORNECEDOR)=='PE'?'selected' :''; ?> >PE</option>
                <option value="PI" <?php echo isset($fornecedor->UF_FORNECEDOR)=='PI'?'selected' :''; ?> >PI</option>
                <option value="RJ" <?php echo isset($fornecedor->UF_FORNECEDOR)=='RJ'?'selected' :''; ?> >RJ</option>
                <option value="RN" <?php echo isset($fornecedor->UF_FORNECEDOR)=='RN'?'selected' :''; ?> >RN</option>
                <option value="RS" <?php echo isset($fornecedor->UF_FORNECEDOR)=='RS'?'selected' :''; ?> >RS</option>
                <option value="RO" <?php echo isset($fornecedor->UF_FORNECEDOR)=='RO'?'selected' :''; ?> >RO</option>
                <option value="RR" <?php echo isset($fornecedor->UF_FORNECEDOR)=='RR'?'selected' :''; ?> >RR</option>
                <option value="SC" <?php echo isset($fornecedor->UF_FORNECEDOR)=='SC'?'selected' :''; ?> >SC</option>
                <option value="SP" <?php echo isset($fornecedor->UF_FORNECEDOR)=='SP'?'selected' :''; ?> >SP</option>
                <option value="SE" <?php echo isset($fornecedor->UF_FORNECEDOR)=='SE'?'selected' :''; ?> >SE</option>
                <option value="TO" <?php echo isset($fornecedor->UF_FORNECEDOR)=='TO'?'selected' :''; ?> >TO</option>
              </select>
            </div>
            <div class="input-field col s6">
                <label for="CEP_FORNECEDOR" class="col-sm-2 col-form-label text-right">CEP:</label>
                <input type="text" class="cep form-control col-sm-8" name="CEP_FORNECEDOR" id="CEP_FORNECEDOR" value="<?php
                echo isset($fornecedor->CEP_FORNECEDOR) ? $fornecedor->CEP_FORNECEDOR : null;
                ?>" required/>
            </div>
            <div class="input-field col s6">
                <label for="EMAIL_FORNECEDOR" class="col-sm-2 col-form-label text-right">Email:</label>
                <input type="text" class="form-control col-sm-8" name="EMAIL_FORNECEDOR" id="EMAIL_FORNECEDOR" value="<?php
                echo isset($fornecedor->EMAIL_FORNECEDOR) ? $fornecedor->EMAIL_FORNECEDOR : null;
                ?>" required/>
            </div>
            <div class="card-footer">
                <input type="hidden" name="id" id="id" value="<?php echo isset($fornecedor->id) ? $fornecedor->id : null; ?>" />
              <button class="waves-effect waves-light btn-small" type="submit"><i class="material-icons right">save</i>Registrar</button>
                <a class="waves-effect waves-light btn-small red" href="?controller=FornecedoresController&method=listar"><i class="material-icons right">cancel</i>Cancelar</a>
            </div>
        </div>
    </form>
</div>
