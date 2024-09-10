<?php
require_once '../model/funcionario.php';
require_once 'Controller.php';

class FuncionariosController extends Controller
{
    /**
     * Lista os funcionario
     */
    public function listar()
    {
        $funcionarios = Funcionario::all();
        return $this->view('gradeFuncionarios', ['funcionarios' => $funcionarios]);
    }
    /**
     * Mostrar formulario para criar um novo funcionario
     */
    public function criar()
    {
        return $this->view('formFuncionario');
    }
    /**
     * Mostrar formulário para editar um funcionario
     */
    public function editar($dados)
    {
        $id      = (int) $dados['id'];
        $funcionario = Funcionario::find($id);
        return $this->view('formFuncionario', ['funcionario' => $funcionario]);
    }
    /**
     * Salvar o funcionario submetido pelo formulário
     */
    public function salvar()
    {
        $funcionario           = new Funcionario;
        $funcionario->NOME_FUNCIONARIO     = $this->request->NOME_FUNCIONARIO;
        $funcionario->FUNCAO = $this->request->FUNCAO;
        $funcionario->LOGIN    = $this->request->LOGIN;
        $funcionario->SENHA    = $this->request->SENHA;
        $funcionario->ADMISSAO    = $this->request->ADMISSAO;
        $funcionario->ACESSO_TOTAL    = $this->request->ACESSO_TOTAL;
        $funcionario->MODIFICADO    = $this->request->MODIFICADO;
        $funcionario->CRIADO    = $this->request->CRIADO;
        $funcionario->DEPARTAMENTO_ID    = $this->request->DEPARTAMENTO_ID;
        $funcionario->EMAIL    = $this->request->EMAIL;


        if ($funcionario->save()) {
            return $this->listar();
        }
    }
    /**
     * Atualizar o funcionario conforme dados submetidos
     */
    public function atualizar($dados)
    {
        $id                = (int) $dados['id'];
        $funcionario           = Funcionario::find($id);
        $funcionario->NOME_FUNCIONARIO     = $this->request->NOME_FUNCIONARIO;
        $funcionario->FUNCAO = $this->request->FUNCAO;
        $funcionario->LOGIN    = $this->request->LOGIN;
        $funcionario->SENHA    = $this->request->SENHA;
        $funcionario->ADMISSAO    = $this->request->ADMISSAO;
        $funcionario->ACESSO_TOTAL    = $this->request->ACESSO_TOTAL;
        $funcionario->MODIFICADO    = $this->request->MODIFICADO;
        $funcionario->CRIADO    = $this->request->CRIADO;
        $funcionario->DEPARTAMENTO_ID    = $this->request->DEPARTAMENTO_ID;
        if ($funcionario->save()) {
            return $this->listar();
        }
    }
    /**
     * Apagar um funcionario conforme o id informado
     */
    public function excluir($dados)
    {
        $id      = (int) $dados['id'];
        $funcionario = Funcionario::destroy($id);
        return $this->listar();
    }
}
