<?php
include_once('criaMSQL.php');
class ClassDados extends Classcria
{
    private $dados;
     function FunctionDados()
    {
        if (isset($_POST['Cadastra'])) {
            $this->dados = array('descricao'=>$_POST['descricao'],'marca'=>$_POST['marca'],'tipo'=>$_POST['tipo'],
        'quantidade'=>$_POST['quantidade'],'valor'=>$_POST['valor'],'valor01'=>$_POST['valor01'],'data'=>$_POST['data'],'Vendido'=>$_POST['Vendido']);
            self::FunctionCriamsql($this->dados);
        }
    }
   
    function FunctionDeleta()
    {
        if (isset($_POST['id'])) {
            $this->dados = array('id' =>$_POST['id']);
            self::FunctionDel($this->dados);
        }
    }
}
$obj = new ClassDados;
$obj->FunctionDados();
$obj->FunctionDeleta();