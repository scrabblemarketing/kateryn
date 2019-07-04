$(document).ready(() => {


     const formulario = document.getElementById('login-admin');


     $(formulario).on('submit',function(e){
          e.preventDefault();
          let datos = $(this).serializeArray();

          $.ajax({
               type: $(this).attr('method'),
               data: datos,
               url: $(this).attr('action'),
               dataType: 'json',
               success: function(data){
                    var resultado = data;
                    // console.log(resultado);
                    if(resultado.respuesta === 'correcto'){
                        if(resultado.tipo === 'registro'){
                            swal({
                                type: 'success',
                                title: 'Registro',
                                text: 'Exitoso'
                              })
                              setTimeout(function(){
                                window.location.href = 'login.php'
                              }, 2000);
                        }else{
                            swal({
                                type: 'success',
                                title: 'Inicio Exitoso',
                                text: 'Bienvenido ' + resultado.nombre
                              })
                              setTimeout(function(){
                                window.location.href = 'index.php'
                              }, 2000);
                        }
                    }else{
                        swal({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Hubo un error'
                          })
                    }
               }
          })

     })

})