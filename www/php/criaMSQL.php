<?php
include_once('entermediario.php');
class Classcria extends ClassEntermediario
{
    private $dados,$msg,$tabela,$campo,$valor;
    function FunctionCriamsql($valor)
    {
        $this->dados = $valor;
        foreach ($this->dados as $key => $value) {
            if ($key == 'descricao' && empty($value)) {
                $this->msg = 'Não pode descrição esta vazia!';
            } else {
                if ($key == 'marca' && empty($value)) {
                    $this->msg = 'Não pode marca esta vazia!';
                } else {
                     if ($key == 'tipo' && empty($value)) {
                        $this->msg = 'Não pode tipo esta vazia!';
                    } else {
                         if ($key == 'quantidade' && empty($value)) {
                            $this->msg = 'Não pode quantidade esta vazia!';
                        } else {
                             if ($key == 'valor' && empty($value)) {
                                 $this->msg = 'Não pode valor esta vazia!';
                            } else {
                                 if ($key == 'valor01' && empty($value)) {
                                    $this->msg = 'Não pode valor esta vazia!';
                                } else {
                                     if ($key == 'data' && empty($value)) {
                                         $this->msg = 'Não pode data esta vazia!';
                                    } else {
                                         if ($key == 'Vendido' && empty($value)) {
                                             $this->msg = 'Não pode Vendido esta vazia!';
                                        } 
                                    }
                                }
                            }
                        }
                    }
                }
            }
            
        }
         $this->tabela = 'caracteristicas';
          foreach ($this->dados as $key => $value) {
                if ($key == 'busca' && !empty($value)) {
                    $valor = "WHERE descricao  like '".$value."%'";
                    
                    self::FunctionSeleciona($valor, $this->tabela);
                }else {
                    $valor = '';
                    self::FunctionSeleciona($valor, $this->tabela);
                }
             }
          if(empty($this->msg)) {
                foreach ($this->dados as $key => $value) {
                    if ($key == 'descricao') {
                        $this->campo .= 'descricao,';
                        $this->valor .= "'$value',";
                    } else {
                        if ($key == 'marca') {
                            $this->campo .= 'marcas,';
                            $this->valor .= "'$value',";
                        } else {
                            if ($key == 'tipo') {
                                $this->campo .= 'tipo,';
                                $this->valor .= "'$value',";
                            } else {
                                if ($key == 'quantidade') {
                                    $this->campo .= 'quantidade,';
                                    $this->valor .= "'$value',";
                                } else {
                                    if ($key == 'valor') {
                                        $this->campo .= 'valor_venda,';
                                        $this->valor .= "'$value',";
                                    } else {
                                        if ($key == 'valor01') {
                                            $this->campo .= 'valor_compra,';
                                            $this->valor .= "'$value',";
                                        } else {
                                            if ($key == 'data') {
                                                $this->campo .= 'Data_de_compra,';
                                                $this->valor .= "'$value',";
                                            } else {
                                                if($key == 'Vendido'){
                                                     $this->campo .= 'vendido';
                                                    $this->valor .= "'$value'";
                                                    self::FunctionEntermediario($this->tabela,$this->campo,$this->valor);
                                                }
                                                   
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                    
                }
              
               
                
            } else {
                echo json_encode([
                    'erros'=>false,
                    'mensagem'=>$this->msg,
                ]);
            }
    }
    function FunctionDel($valor)
    {
         $this->tabela = 'caracteristicas';
         $this->dados = $valor;
         foreach ($this->dados as $key => $value) {
             $deleta = $key."=".(int)$value;
             self::FunctionDelet($this->tabela,$deleta);
         }
    }
    function FunctionUpdata($valor)
    {
        $this->tabela = 'caracteristicas';
         foreach ($this->dados as $key => $value) {
                if ($key == 'id' && !empty($value)) {
                    $valor = "WHERE".$key."=".(int)$value;
                    self::FunctionSeleciona($valor, $this->tabela);
                }
             }
    }
    function Functionup($valor)
    {
        $this->tabela = 'caracteristicas';
        $this->dados = $valor;
        print_r($this->dados);
        // foreach ($this->dados as $key => $value) {
        //      if ($key == 'descricao') {
        //                 $this->campo .= $key.'='.$value.',';
        //             } else {
        //                 if ($key == 'marca') {
        //                    $this->campo .= $key.'='.$value.',';
        //                 } else {
        //                     if ($key == 'tipo') {
        //                        $this->campo .= $key.'='.$value.',';
        //                     } else {
        //                         if ($key == 'quantidade') {
        //                            $this->campo .= $key.'='.$value.',';
        //                         } else {
        //                             if ($key == 'valor_venda') {
        //                                $this->campo .= $key.'='.$value.',';
        //                             } else {
        //                                 if ($key == 'valor_compra') {
        //                                   $this->campo .= $key.'='.$value.',';
        //                                 } else {
        //                                     if ($key == 'Data_de_compra') {
        //                                        $this->campo .= $key.'='.$value.',';
        //                                     } else {
        //                                         if($key == 'vendido'){
        //                                            $this->campo .= $key.'='.$value;
                                                   
        //                                         }else {
        //                                             if($key == 'id'){
        //                                                 $id = $key.'='.$value;
        //                                                 self::FunctionUp($this->tabela,$campo,$id);
        //                                             }
        //                                         }
                                                   
        //                                     }
        //                                 }
        //                             }
        //                         }
        //                     }
        //                 }
        //             }
        // }
        
    }
  
    
}
