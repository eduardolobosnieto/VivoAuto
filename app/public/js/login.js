$(document).ready(function(){
    $(document).on('submit', '#frmLogin', function(event){
        event.preventDefault();
        username = $("#txtUser").val();
        password = $("#txtPass").val();

        if (username != ""){
            if(password != ""){
                $.ajax({
                    //url:'path/to/file',
                    //type: 'default GET',
                    //datatype: 'default: Intelligent Guess(Other values: xml, json)',
                    //data: {param1: 'value1'}
                    url:'startLogin',
                    type: 'POST',
                    datatype: 'JSON',
                    data: {user: username, pass: password}
                })
                .done(function(datos){
                    var respuesta = JSON.parse(datos);
                    if(respuesta.estado){
                        window.location= "../home/dashboard";
                    }else{
                        Lobibox.notify('error', {
                            msg: respuesta.mensaje
                        });
                        //console.log(respuesta.mensaje);
                    }
                })
                .fail(function(){
                    Lobibox.notify('error', {
                        msg: 'Proceso fallido.'
                    });
                    //console.log("error");
                });
            }else{
                Lobibox.notify('error', {
                    msg: 'Password requerida'
                });
                //console.log("password requerida");
            }
        }else{
            Lobibox.notify('error', {
                msg: 'Usuario requerido.'
            });
            //console.log("Username requerido");
            event.preventDefault();
        }

    });


});


