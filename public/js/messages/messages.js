function errorsMsg(obj){
    var ob = obj.split('&quot;');
    var err = ob[1];
    var errors = err.split('.');

    swal({
        'type': 'error',
        'title': 'Error',
        'html':'<div style="font-size: 14px; font-weight: 400">' +
                    'Hay algunos problemas con su entrada.<br><br>'+
                    '<ul id="mensajes" style="list-style-type: none;"></ul>' +
               '</div>',
        'confirmButtonText':  'Cerrar',
    });
    $.each(errors, function(index, error) {
        $('#mensajes').append('<li align="left">' + error + '</li>');
    });
}

function successMsg(obj){
    var msg = obj;

    swal({
        'type': 'success',
        'title': 'Exito!',
        'text': msg,
        'confirmButtonText':  'Cerrar',
    });
}
