<div class="container">
    <form action="?controller=ProdutosController&<?php echo isset($produto->id) ? "method=atualizar&id={$produto->id}" : "method=salvar"; ?>" method="post" >
        <div class="card" style="top:40px">
            <div class="card-header">
                <span class="card-title">Produtos</span>
            </div>
            <div class="card-body">
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Produto:</label>
                <input type="text" readonly class="form-control col-sm-8" name="FOR_ID" id="FOR_ID" value="<?php
                echo isset($produto->FOR_ID) ? $produto->FOR_ID : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Descrição do produto:</label>
                <input type="text" readonly class="form-control col-sm-8" name="DESCRICAO" id="DESCRICAO" value="<?php
                echo isset($produto->DESCRICAO) ? $produto->DESCRICAO : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Valor de compra:</label>
                <input type="text" readonly class="form-control col-sm-8" name="VALOR_COMPRA" id="VALOR_COMPRA" value="<?php
                echo isset($produto->VALOR_COMPRA) ? $produto->VALOR_COMPRA : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Valor de venda:</label>
                <input type="text" readonly class="form-control col-sm-8" name="VALOR_VENDA" id="VALOR_VENDA" value="<?php
                echo isset($produto->VALOR_VENDA) ? $produto->VALOR_VENDA : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Estoque:</label>
                <input type="text" readonly class="form-control col-sm-8" name="ESTOQUE" id="ESTOQUE" value="<?php
                echo isset($produto->ESTOQUE) ? $produto->ESTOQUE : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Criticidade:</label>
                <input type="text" readonly class="form-control col-sm-8" name="CRITICO" id="CRITICO" value="<?php
                echo isset($produto->CRITICO) ? $produto->CRITICO : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Fornecedor:</label>
                <input type="text" readonly class="form-control col-sm-8" name="FORNECEDORE_ID" id="FORNECEDORE_ID" value="<?php
                echo isset($fornecedores->NOME_FORNECEDOR) ? $fornecedores->NOME_FORNECEDOR : null;
                ?>" />
            <div class="card-footer">
                    <input type="hidden" name="id" id="id" value="<?php echo isset($cliente->id) ? $cliente->id : null; ?>" />
                    <a class="btn btn-danger" href="?controller=ProdutosController&method=relProduto">Voltar</a>
            </div>

        </div>
    </form>
</div>
