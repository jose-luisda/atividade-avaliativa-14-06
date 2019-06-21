<?php
include_once('criaMSQL.php');
class ClassSeleciona extends Classcria
{
     private $dados;
     function FunctionSeleciona()
    {
        if (isset($_POST['busca10'])) {
            $this->dados = array('busca'=>$_POST['busca10']);
            self::FunctionCriamsql($this->dados);
        }else {
             $this->dados = array('busca'=>$_POST['busca10']);
            self::FunctionCriamsql($this->dados);
        }
    }
    function FunctionAtualiza()
    {
        if(isset($_POST['id'])){
            $this->dados = array('id'=>$_POST['id']);
            self::FunctionUpdata($this->dados);
        }
    }
    function FunctionDados()
    {
        if (isset($_POST['Cadastra'])) {
            $this->dados = array('id'=>$_POST['id'],'descricao'=>$_POST['descricao'],'marca'=>$_POST['marca'],'tipo'=>$_POST['tipo'],
        'quantidade'=>$_POST['quantidade'],'valor_venda'=>$_POST['valor'],'valor_compra'=>$_POST['valor01'],'Data_de_compra'=>$_POST['data'],'vendido'=>$_POST['Vendido']);
            self::Functionup($this->dados);
        }
    }
}
$obj = new ClassSeleciona;
$obj->FunctionSeleciona();
$obj->FunctionAtualiza();
$obj->FunctionDados();
