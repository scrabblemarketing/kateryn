if (document.querySelector('#navTratamiento')) {


    const tecnologias = document.querySelectorAll('.card');
    const menuTecno = document.querySelector('#navTratamiento');




    $('.tecnologias .card').hide()
    $('.tecnologias .card:first').show()
    $('.tecnologias .card:first').addClass('fadeInRight');

    menuTecno.addEventListener('click', (e) => {
        e.preventDefault();
        const link = e.target.getAttribute('href').split('#');
        $('.tecnologias .card').hide()
        $('.tecnologias .card').removeClass('fadeInRight');
        $(`.tecnologias .card#${link[1]}`).show()
        $(`.tecnologias .card#${link[1]}`).addClass('fadeInRight')
    })



    /**Tratamientos */
    const categorias = document.querySelectorAll('.categoria');
    const menuTratamientos = document.querySelector('#navTratamiento');




    $('.lista-tratamientos .categoria').hide()
    $('.lista-tratamientos .categoria:first').show()
    $('.lista-tratamientos .categoria:first').addClass('fadeInRight');

    menuTratamientos.addEventListener('click', (e) => {
        e.preventDefault();
        const link = e.target.getAttribute('href').split('#');
        $('.lista-tratamientos .categoria').hide()
        $('.lista-tratamientos .categoria').removeClass('fadeInRight');
        $(`.lista-tratamientos .categoria#${link[1]}`).show()
        $(`.lista-tratamientos .categoria#${link[1]}`).addClass('fadeInRight')
    })


}


/************** 
 * Imagen para cuando carga la pagina
 * ****************/
/*
$('body').css({ 'overflow': 'hidden' });
const boxCarga = document.createElement('div');
boxCarga.innerHTML = `<img src="img/logo.png" class="img-fluid position-relative d-block mx-auto">`
boxCarga.classList.add('carga');

const cuerpo = document.querySelector('body');
cuerpo.appendChild(boxCarga);

setInterval(() => {
    boxCarga.querySelector('img').classList.add('aparicion-corta')
    boxCarga.querySelector('img').classList.remove('aparicion-corta')
    boxCarga.querySelector('img').classList.add('desaparicion-corta')

    boxCarga.querySelector('img').classList.remove('desaparicion-corta')
}, .4)

window.onload = function(e) {

    boxCarga.classList.add('desaparicion');
    setTimeout(() => boxCarga.remove(), 2000);
    $('body').css({ 'overflow': 'initial' });
}
*/

/*********************************** */


$(document).ready(function() {
    if (document.querySelector('#rowTemas')) {
        //Animaciones del Home Page
        const temaPrincipales = document.querySelector('#rowTemas');

        const temas = new Waypoint({
            element: temaPrincipales,
            handler: function() {
                temaPrincipales.classList.remove('fadeOut')
                temaPrincipales.classList.add('fadeInUp')
            },
            offset: '80%'
        });

        const seccion2 = document.querySelector('#seccion2');
        const sec = new Waypoint({
            element: seccion2,
            handler: function() {
                //Remover clase fadeOut
                seccion2.querySelectorAll('.col-md-3')[0].classList.remove('fadeOut')
                seccion2.querySelectorAll('.col-md-3')[1].classList.remove('fadeOut')
                seccion2.querySelector('.col-md-6').classList.remove('fadeOut')

                //Mostrar
                seccion2.querySelectorAll('.col-md-3')[0].classList.add('fadeInLeft')
                seccion2.querySelectorAll('.col-md-3')[1].classList.add('fadeInRight')
                seccion2.querySelector('.col-md-6').classList.add('fadeIn')
            },
            offset: '50%'
        })

        // $('#rowTemas').waypoint(function(direction) {
        //     console.log('Pasa');
        // })
    }


    /***************Carousel ***********/
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        margin: 2,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1500: {
                items: 3
            }
        },
        mouseDrag: true,
        autoplay: true
    })
    
   

})


/************* CORREO ***************** */



$('#form-contacto').on('submit', function(e){
    e.preventDefault();

    // const data = $(this).serializeArray();
    const data =new FormData();
    const nombre= document.querySelector('#nombre').value,
        email= document.querySelector('#email').value,
        telefono= document.querySelector('#telefono').value,
        mensaje= document.querySelector('#mensaje').value,
        envio = document.querySelector('#envio').value;

        if(document.querySelector('#apellido')){
            const apellido= document.querySelector('#apellido').value,
                asunto= document.querySelector('#asunto').value;

            data.append('apellido', apellido);
            data.append('asunto', asunto);
        }
            data.append('nombre', nombre);
            data.append('email', email);
            data.append('telefono', telefono);
            data.append('mensaje', mensaje);
            data.append('envio', envio);
        
    
    
        console.log(...data);

    let xml = new XMLHttpRequest();

    xml.open('post','sendmail.php',true)


    xml.onload = function(){
        if(this.status == 200){
            console.log(JSON.parse(this.responseText));
            const resultado = JSON.parse(this.responseText);
            if(resultado.ok){
                swal({
                    type: 'success',
                    title: 'Registro',
                    text: resultado.mensaje
                })
            }else{
                swal({
                    type: 'error',
                    title: 'Registro',
                    text: 'Error'
                })
            }
        }
    }

    xml.send(data);

    // $.ajax({
    //     type:$(this).attr('method'),
    //     data,
    //     url: $(this).attr('action'),
    //     dataType:'json',
    //     success:function(data){
           
    //     }
    // })


})

$('#form-contacto').on('submit', function(e){
    e.preventDefault();

    // const data = $(this).serializeArray();
    const data =new FormData();
    const url = this.getAttribute('action');
    const nombre= document.querySelector('#nombre').value,
        email= document.querySelector('#email').value,
        telefono= document.querySelector('#telefono').value,
        mensaje= document.querySelector('#mensaje').value,
        envio = document.querySelector('#envio').value;

        if(document.querySelector('#apellido')){
            const apellido= document.querySelector('#apellido').value,
                asunto= document.querySelector('#asunto').value;

            data.append('apellido', apellido);
            data.append('asunto', asunto);
        }
            data.append('nombre', nombre);
            data.append('email', email);
            data.append('telefono', telefono);
            data.append('mensaje', mensaje);
            data.append('envio', envio);
        


        enviarDatos(data, url)

    // $.ajax({
    //     type:$(this).attr('method'),
    //     data,
    //     url: $(this).attr('action'),
    //     dataType:'json',
    //     success:function(data){
           
    //     }
    // })


})

$('#form-susc').on('submit', function(e){
    e.preventDefault();

    // const data = $(this).serializeArray();
    const data =new FormData();
    const email= document.querySelector('#email-sus').value
    const url = this.getAttribute('action');
    
        data.append('correo', email);
        


        enviarDatos(data, url)

    // $.ajax({
    //     type:$(this).attr('method'),
    //     data,
    //     url: $(this).attr('action'),
    //     dataType:'json',
    //     success:function(data){
           
    //     }
    // })


})

function enviarDatos(datos, url){
    let xml = new XMLHttpRequest();

    xml.open('post',url,true)


    xml.onload = function(){
        if(this.status == 200){
            
            const resultado = JSON.parse(xml.responseText);
            console.log(resultado)
            if(resultado.ok){
                swal({
                    type: 'success',
                    title: 'Registro',
                    text: resultado.mensaje
                })
            }else{
                swal({
                    type: 'error',
                    title: 'Registro',
                    text: 'Error'
                })
            }
        }
    }

    xml.send(datos);
}






