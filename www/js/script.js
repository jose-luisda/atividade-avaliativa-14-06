$(document).ready(() => {
var form = document.querySelector('#form');
form.addEventListener('submit',(event)=>{
    event.preventDefault();
    var formulario = new FormData(form);
    $.ajax({
        url:"php/receberDados.php",
        type: 'post',
        dataType:'json',
        data:formulario,
        contentType:false,
        cache:false,
        processData:false,
    }).done((resposta)=>{
        
    })
})
   

function Buscas() {
    this.ajax = (valor)=>{
        var formulario
        var url
        if(valor){
            formulario = new FormData(valor);
            url = "php/receberDados.php";
        }else{
            formulario = '';
            url = "php/select.php";
        }
        $.ajax({
            url: url ,
            type: 'post',
            dataType: 'json',
            data: formulario,
            contentType: false,
            cache: false,
            processData: false,
        }).done((resposta) => {
            
            if(resposta){
                tabela(resposta);
            }
        })
    }
}

var Busca = document.querySelector('#busca');
var input = Busca.querySelector('input')
Busca.addEventListener('submit',(event)=>{
    event.preventDefault();
    // var valor = input.value;
    var busca = new Buscas();
    busca.ajax(Busca)
})
var busca = new Buscas();
busca.ajax()


function tabela(dados) {
    
    for (let index = 0; index < dados.dados.length; index++) {
        $('.table').append("<tr><td>" + dados.dados[index].Data_de_compra + "</td><td>" + dados.dados[index].marcas + "</td><td>" + dados.dados[index].quantidade + "</td><td>" + dados.dados[index].tipo + "</td><td>" + dados.dados[index].valor_compra + "</td><td>" + dados.dados[index].valor_venda + "</td><td>" + dados.dados[index].vendido + "</td><td><button class='btn excluir' value='" + dados.dados[index].id + "'>excluir</button></td><td><button  type='button' class='btn atualizar' data-toggle='modal' data-target='#modalExemplo' value='" + dados.dados[index].id +"'>atualizar</button></td></tr>")
    }

   var excluir = document.querySelectorAll('.excluir');
   excluir.forEach((item)=>{
       item.addEventListener('click',()=>{
           $.ajax({
               url: "php/receberDados.php",
               type: 'post',
               dataType: 'json',
               data: {
                   'id': item.value,
               },
              
           }).done((resposta) => {
                if (resposta) {
                    alert(resposta.mensagem)
                }
           })
       })
   })
    var adiciona = document.querySelectorAll('.atualizar');
    adiciona.forEach((item) => {
        item.addEventListener('click', () => {
            $.ajax({
                url: "php/select.php",
                type: 'post',
                dataType: 'json',
                data: {
                    'id': item.value,
                },

            }).done((resposta) => {
                if (resposta) {
                    update(resposta);
                }
            })
        })
    })
}
var input = document.querySelectorAll('#form input');
var form = document.querySelector('#form');
  function update(dados) {
      form.setAttribute('id', 'formulario');
      input.forEach((item,index)=>{
          if (index == 0) {
              item.setAttribute('value', dados.dados[0].descricao);
          }else{
              if (index == 1) {
                  item.setAttribute('value', dados.dados[0].marcas);
              } else {
                  if (index == 2) {
                      item.setAttribute('value', dados.dados[0].tipo);
                  } else {
                      if (index == 3) {
                          item.setAttribute('value', dados.dados[0].quantidade);
                      } else {
                          if (index == 4) {
                              item.setAttribute('value', dados.dados[0].valor_venda);
                          } else {
                              if (index == 5) {
                                  item.setAttribute('value', dados.dados[0].valor_compra);
                              } else {
                                  if (index == 6) {
                                      item.setAttribute('value', dados.dados[0].Data_de_compra);
                                  } else {
                                      if(index == 7){
                                          item.setAttribute('value', dados.dados[0].vendido);
                                      }else{
                                          item.setAttribute('value', dados.dados[0].id);
                                      }
                                      
                                  }
                              }
                          }
                      }
                  }
              }
          }
      })
      var formul = document.querySelector('#formulario');
      formul.addEventListener('submit', (event) => {
          event.preventDefault();
          var formulario = new FormData(formul);
          $.ajax({
              url: "php/select.php",
              type: 'post',
              dataType: 'json',
              data: formulario,
              contentType: false,
              cache: false,
              processData: false,
          }).done((resposta) => {

          })
      })
  }  
})