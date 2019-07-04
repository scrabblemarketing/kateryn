$(document).ready(function() {

    //EDITOR
    $('.textarea').wysihtml5()
        /****************** */


    /****  ****/

    $(function() {

        $('#example1').DataTable()
    })




    /**************/





    const formulario = document.getElementById('guardar-registro-archivo');

    $('#agregar-carec').on('click', function(e) {
        e.preventDefault();

        //Creamos las variables que construiremos
        const li = document.createElement('li');
        const addCarec = document.createElement('input');


        //agregamos los atributos del input
        addCarec.className = 'form-control';
        addCarec.setAttribute('type', 'text');
        addCarec.setAttribute('id', 'caracteristica_producto');
        addCarec.setAttribute('name', 'caracteristicas[]');
        addCarec.setAttribute('placeholder', 'Caracteristica');

        //buscamos la caja donde se debe agregar el input

        let carecteristica = formulario.childNodes[1].childNodes[7];

        li.appendChild(addCarec);


        let btnAgregar = this.parentElement;
        this.parentElement.remove();
        carecteristica.childNodes[3].appendChild(li);
        carecteristica.childNodes[3].appendChild(btnAgregar);

    });



    //Formularios
    $('#guardar-registro').on('submit', function(e) {
        e.preventDefault();

        let datos = $(this).serializeArray();

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                var resultado = data;
                console.log(resultado)
                if (resultado.respuesta === 'correcto') {
                    swal({
                        type: 'success',
                        title: 'Registro',
                        text: resultado.mensaje
                    }).then(() => {
                        console.log(resultado.id_cat);
                        if (resultado.id_cat !== 'undefined') {
                            const tabla = document.querySelector('.tabla-cat');
                            const tr = document.createElement('tr');
                            const contenido = `
                                            <td>${resultado.titulo}</td>
                                            <td>
                                                <a href="editar-categoria.php?id=${resultado.id_cat}"class="btn bg-orange btn-flat margin"> <i class="fa fa-pencil"></i></a>
                                                <a href="#" data-id="${resultado.id_cat}" data-type="clientes" class="btn bg-maroon btn-flat margin borrar_registro"><i class="fa fa-trash"></i> </a>
                                            </td>
                                    `;
                            tr.innerHTML = contenido
                            tabla.appendChild(tr);
                        }
                    })
                } else {
                    swal({
                        type: 'error',
                        title: 'Ha ocurrido un error',
                        text: 'Datos suministrados erroneos'
                    })
                }
            }
        })



    });


    $('#guardar-registro-archivo').on('submit', function(e) {
        e.preventDefault();

        let datos = new FormData(this);

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            contentType: false,
            processData: false,
            async: true,
            cache: false,
            success: function(data) {
                var resultado = data;
                console.log(resultado)
                if (resultado.respuesta === 'correcto') {

                    swal({
                        type: 'success',
                        title: 'Registro',
                        text: resultado.mensaje
                    })



                } else {
                    swal({
                        type: 'error',
                        title: 'Ha ocurrido un error',
                        text: 'Datos suministrados erroneos'
                    })
                }
            }
        })



    });

    //Eliminar registros

    $('.borrar_registro').on('click', function(e) {
        e.preventDefault();

        const id = $(this).attr('data-id');
        const tipo = $(this).attr('data-type');

        swal({
            title: '¿Estas seguro?',
            text: "No lo podras revertir",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar',
            cancelButtonText: 'Cancelar'
        }).then(function() {
            $.ajax({
                type: 'post',
                data: {
                    'id': id,
                    'registro': 'eliminar'
                },
                url: 'modelo-' + tipo + '.php',
                success: function(data) {
                    var resultado = JSON.parse(data);
                    console.log(resultado);
                    if (resultado.respuesta === 'correcto') {
                        jQuery('[data-id="' + resultado.id_eliminado + '"]').parents('tr').remove();
                        swal({
                            type: 'success',
                            title: 'Eliminado',
                            text: 'Satisfactoriamente'
                        });
                    } else {
                        console.log('error');
                        swal({
                            type: 'error',
                            title: 'Ha ocurrido un error',
                            text: 'No se puede eliminar'
                        });
                    }
                }
            });
        });
    });





})