<?php
include_once '../model/cliente.php';
include_once '../model/fornecedor.php';
include_once '../model/produto.php';
include_once '../model/venda.php';
include_once '../model/RCGV.php';
include_once '../model/funcionario.php';

class Conexao
{
    private static $conexao;
    private function __construct()
    {}
    public static function getInstance()
    {
       if (is_null(self::$conexao)) {
            self::$conexao = new \PDO();
            self::$conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            self::$conexao->exec('set names utf8');
        }
        return self::$conexao;
    }
}
