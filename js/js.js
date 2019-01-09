$(document).ready(function(){

$('.hid').fadeOut()
$('#uplo').change(function(){
    const file = $(this)[0].files[0]
    const fileReader = new FileReader()
   
  switch (file.type) {
      case "image/jpeg":
      fileReader.onloadend = function(){
        $('img').attr({'src': fileReader.result})
    }
    fileReader.readAsDataURL(file)
          break;
          case "image/png":
          fileReader.onloadend = function(){
            $('img').attr({'src': fileReader.result})
        }
        fileReader.readAsDataURL(file)
          break;
  
      default:
      alert('Não é imagem é '+ file.type)
          break;
  }
    /* console.log(file) */
})




    $('.imgDiv').click(function(){
        $('#uplo').click()
    })
        $('.progress').hide()






    $('#sub').click(function(e){
        e.preventDefault()
       
        let form = $('form')[0]
        var dados = new FormData(form)
         
       /*  var nome = dados.get('nome')
        var email = dados.get('email')
        var senha = dados.get('senha')
        var dd = {'nome':nome, 'email':email, 'senha':senha} */
        
       /*  
        $.ajax({
            type: "post",
            url: "CRUD.php",
            data: dados,
            dataType: "json",
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response)
            },
            error: function(){
                console.log('errado')
            }
        });
 */
            $('form').ajaxForm({

                    uploadProgress: function(evento, posicao, total, porcentagemConcluido ){

                            let tamanho_arquivo = total/1000000;
                            if(tamanho_arquivo <=300){
                                $('.progress').show()
                                $('#prog').css({'width':porcentagemConcluido+'%'})
                                $('#prog').html(porcentagemConcluido+'%')
                            }else{

                            }

                    },

                    success: function(res){
                        $('form').hide()
                        $('.formDiv').animate({'height':'400px'})
                        $('.hid').text(res.nome+ ' - '+res.email)
                        $('.hid').fadeIn(4000)
                        

                    },

                    error: function(){
                        'deu merda'
                    },

                    dataType: 'json',
                    url:'CRUD.php',
                    contentType: false,
                    resetForm: true



            }).submit()/* ajaxForm */


        })
})