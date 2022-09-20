$(function() {

    $("#frmRUsuario").submit(function() {
        if ($('#nombres').val().length < 1 && $('#apellidos').val().length < 1 ||
            $('#ciudad').val().length < 1 && $('#correo').val().length < 1) {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '¡ Campos Vacios !',
                text: "¡ Debe completar todos los datos para hacer el registro ¡",
                confirmButtonText: 'De acuerdo'
            })
            return false;
        } else {
            datos = $(this).serialize();
            url = $(this).attr("action");
            $.post(url, datos, function(e) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: '¡ Registrado Correctamente !',
                    text: "El cliente se registro en la base de datos",
                    confirmButtonText: 'Aceptar'
                })
                $('#frmRUsuario')[0].reset();

            }, "json");
            return false;
        }
    });

    $("#frmEcliente").submit(function() {
        if ($('#nombres').val().length == 0 || $('#apellidos').val().length == 0 ||
            $('#ciudad').val().length == 0 || $('#correo').val().length == 0) {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '¡ Campos Vacios !',
                text: "¡ No deben haber campos vacios para la actualizacion ¡",
                confirmButtonText: 'De acuerdo'
            })
            return false;
        } else {
            datos = $(this).serialize();
            url = $(this).attr("action");
            alert("Actualizado correctamente");
            $.post(url, datos, function(e) {
                window.location.href = "?controlador=clientes&accion=listadoClientes";
            }, "json");
            return false;
        }
    });


    $(document).on('click', '#EliminarCliente', function() {
        var url = $(this).attr("href");
        var id = $(this).attr("data-id");
        Swal.fire({
            title: '¿ Quieres Eliminar Este Registro ?',
            text: "¡ Si eliminas este registro se borrara de la base de datos !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminar'
        }).then((result) => {
            if (result.value) {
                Swal.fire({
                    title: '¡ Registro Eliminado Correctamente !',
                    text: "¡ Se elimino el registro de la base de datos !",
                    icon: 'success',
                    showConfirmButton: true
                })
                $.post(url, "", function(e) {
                    $("#fila" + id).remove();
                }, 'json');
            }
        })
        return false;
    });
});