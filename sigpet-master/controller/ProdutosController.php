<?php
require_once '../model/produto.php';
require_once 'Controller.php';
class ProdutosController extends Controller
{
    /**
     * Lista os cliente
     */
    public function listar()
    {
        $produtos = Produto::all();
        return $this->view('gradeProdutos', ['produtos' => $produtos]);
    }

    public function relProduto()
    {
        $produtos = Produto::all();
        $fornecedores = Produto::findFornecedor();
        return $this->view('RelProdutos', ['produtos' => $produtos], ['fornecedores' => $fornecedores]);
    }
    /**
     * Mostrar formulario para criar um novo cliente
     */
    public function criar()
    {
        $fornecedores = Produto::findFornecedor();
        return $this->view('formProduto', ['fornecedores' => $fornecedores]);
    }
    /**
     * Mostrar formulário para editar um cliente
     */
    public function editar($dados)
    {
        $id      = (int) $dados['id'];
        $produto = Produto::find($id);
        $fornecedores = Produto::findFornecedor();
        return $this->view('formProduto', ['produto' => $produto], ['fornecedores' => $fornecedores]);
    }
    public function relatorio($dados)
    {
        $id      = (int) $dados['id'];
        $produto = Produto::find($id);
        return $this->view('RelformProduto', ['produto' => $produto]);
    }
    /**
     * Salvar o cliente submetido pelo formulário
     */
    public function salvar()
    {
        $produto           = new Produto;
        $produto->FOR_ID     = $this->request->FOR_ID;
        $produto->DESCRICAO = $this->request->DESCRICAO;
        $produto->VALOR_COMPRA    = $this->request->VALOR_COMPRA;
        $produto->VALOR_VENDA    = $this->request->VALOR_VENDA;
        $produto->ESTOQUE    = $this->request->ESTOQUE;
        $produto->CRITICO    = $this->request->CRITICO;
        $produto->FORNECEDORE_ID    = $this->request->FORNECEDORE_ID;
        if ($produto->save()) {
            return $this->listar();
        }
    }
    /**
     * Atualizar o cliente conforme dados submetidos
     */
    public function atualizar($dados)
    {
        $id                = (int) $dados['id'];
        $produto           = Produto::find($id);
        $produto->FOR_ID     = $this->request->FOR_ID;
        $produto->DESCRICAO = $this->request->DESCRICAO;
        $produto->VALOR_COMPRA    = $this->request->VALOR_COMPRA;
        $produto->VALOR_VENDA    = $this->request->VALOR_VENDA;
        $produto->ESTOQUE    = $this->request->ESTOQUE;
        $produto->CRITICO    = $this->request->CRITICO;
        $produto->FORNECEDORE_ID    = $this->request->FORNECEDORE_ID;
        if ($produto->save()) {
            return $this->listar();
        }
    }
    /**
     * Apagar um cliente conforme o id informado
     */
    public function excluir($dados)
    {
        $id      = (int) $dados['id'];
        $produto = Produto::destroy($id);
        return $this->listar();
    }
}
