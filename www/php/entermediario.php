<?php
include_once('dml.php');
class ClassEntermediario extends ClassDML
{
    public function FunctionEntermediario($tabela,$campo,$valor)
    {
        self::FunctionTable($tabela);
        self::FunctionCampo($campo);
        self:: FunctionValor($valor);
        self::FunctionIserir();
        // self:: FunctionDelete();
        // self:: FunctionUpdate();
    }
    public function FunctionSeleciona($valor,$tabela)
    {
         self:: FunctionValor($valor);
         self::FunctionTable($tabela);
         self::FunctionSelect();
    }
    public function FunctionDelet($tabela,$valor)
    {
        self:: FunctionValor($valor);
        self::FunctionTable($tabela);
        self::FunctionDeleta();
    }
    public function FunctionUp($tabela,$campo,$valor)
    {
        self::FunctionTable($tabela);
        self::FunctionCampo($campo);
        self:: FunctionValor($valor);
        self:: FunctionUpdate();
    }
}
