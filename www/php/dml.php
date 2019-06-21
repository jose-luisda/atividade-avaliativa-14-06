<?php
include_once('conecta.php');
class ClassDML extends ClassCONN
{
    private $table,$campo,$valor,$sql;
    function FunctionTable($tabela)
    {
        $this->table = $tabela;
    }
    function FunctionCampo($campos)
    {
        $this->campo = $campos;
    }
    function FunctionValor($valores)
    {
        $this->valor = $valores;
    }

   function FunctionIserir()
    {
        $this->sql = "INSERT INTO  `$this->table`($this->campo)VALUES($this->valor)";
        $this->sql = self::ExectSQL($this->sql);
        if ( $this->sql ) {
         $msg = 'Cadastro efetuado com sucesso!';
        }else{
           $msg = 'Não foi possivel efetua o cadastro!';
        }
         echo json_encode([
            'mensagem'=>$msg
          ]);
    }
    function FunctionSelect()
    {
      $this->sql = "SELECT * FROM `$this->table` $this->valor ";
      $this->sql = self::ExectSQL($this->sql);
      $sql=$this->sql->fetchAll(PDO::FETCH_OBJ);
      // foreach ($sql as $value) {
      //   echo $value;
      // }
      echo json_encode([
        'dados'=>$sql
      ]);
    }
  function FunctionDeleta()
    {
        $this->sql = "DELETE FROM `$this->table` WHERE $this->valor";
        $this->sql = self::ExectSQL($this->sql);
        if ($this->sql) {
          echo json_encode([
            'mensagem'=>"Deletado com sucesso!"
         ]);
        }
         
    }
  function FunctionUpdate()
    {
        $this->sql = "UPDATE `$this->table` SET $this->campo WHERE $this->valor";
        echo$this->sql;
        $this->sql = self::ExectSQL($this->sql);
    }
}
