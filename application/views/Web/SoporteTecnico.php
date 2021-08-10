     <!-- About Area Start -->
    <section class="about-area mtb-50px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>SOPORTE TÉCNICO</h2>
                </div>
                <br></br>
                <div class="col-lg-12" >
                <div class="single-blog-post blog-grid-post">
                <br></br>        
                    <div class="col-lg-12" >
                                        

                        <div>
                            <div class="form-group">
                                <label for="txtnombrescompletos"></label>
                                <input type="text" class="form-control" id="txtnombrescompletos" placeholder="Nombres completos">
                            </div>

                            <div class="form-group">
                                <label for="txtcelular"></label>
                                <input type="text" class="form-control" id="txtcelular" placeholder="Celular">
                            </div>

                            <div class="form-group">
                                <label for="txtemail"></label>
                                <input type="text" class="form-control" id="txtemail"  placeholder="Email (opcional)">
                            </div>

                            <div class="form-group">
                                <label for="txtDNI"></label>
                                <input type="text" class="form-control" id="txtDNI"  placeholder="Número de documento">
                            </div>

                            <div class="form-group">
                                <textarea id="txtmensaje"  placeholder="Ingrese su mensaje" class="form-control">

                                </textarea>
                            </div>

                            <div class="alert alert-success" role="alert" id="txtmensajealerta" hidden >
                            
                            </div>
                     
                            <button type="button" class="btn btn-primary" onclick="registrarSoporteTecnico();">Enviar</button>
                        </div>

                        </div>
                        
                    </div>

                 

            </div>
        </div>
    </section>
<script>
    $(document).ready(function () {
        $('#txtmensaje').val('');
        $(".se-pre-con").fadeOut("slow");
    });
            
    function registrarSoporteTecnico(){
        var nombrescompletos = $('#txtnombrescompletos').val();
        var celular =  $('#txtcelular').val();
        var correo =  $('#txtemail').val();
        var nroDocumento = $('#txtDNI').val();
        var mensaje = $('#txtmensaje').val();

        var parametros =    nombrescompletos + '|' + celular + '|' + correo + '|' + 
        nroDocumento + '|' + mensaje;


        $('#txtmensajealerta').removeAttr('hidden');
        var valida_form = true;

        if(nombrescompletos.length == 0){
            $('#txtmensajealerta').text("Debe llenar su nombre.");
            $('#txtmensajealerta').removeClass('alert-success').addClass('alert-danger');
            $('#txtnombrescompletos').focus();
            return false;
        }

        if(celular.length == 0){
            $('#txtmensajealerta').text("Debe indicar un número de contacto.");
            $('#txtmensajealerta').removeClass('alert-success').addClass('alert-danger');
            $('#txtcelular').focus();
            return false;
        }

        if(nroDocumento.length == 0){
            $('#txtmensajealerta').text("Debe registrar su número de documento.");
            $('#txtmensajealerta').removeClass('alert-success').addClass('alert-danger');
            $('#txtDNI').focus();
            return false;       
        }

        if(mensaje.length == 0){
            $('#txtmensajealerta').text("Debe registrar el motivo.");
            $('#txtmensajealerta').removeClass('alert-success').addClass('alert-danger');
            $('#txtmensaje').focus();
            return false;        
        }

        
        var indice = 22;
        var nomproc = "MvindaProcPedido";
        $.post(URL_BASE+'Registros/procGeneral', {
            parametros: parametros,
            indice: indice,
            nombreProcedimiento:nomproc
        }, function (respuesta) {
            console.log("respuesta-->", respuesta);

        var codrespuesta = respuesta[0]["CodResultado"];
        var desrespuesta = respuesta[0]["DesResultado"];

        //   listarProductosNuevos();
      
        if(Number(codrespuesta) == 1){
        
            $('#txtmensajealerta').text("Gracias por contactarte con nosotros, en breve nos pondremos en contacto.");
            $('#txtmensajealerta').removeClass('alert-danger').addClass('alert-success');

        }else{
            $('#txtmensajealerta').text("ERROR!, no se registró, verificar los datos ingresados");
            $('#txtmensajealerta').removeClass('alert-success').addClass('alert-danger');

        }
        limpiarFormulario();
        
      

        },"JSON")
    }

    function limpiarFormulario(){
        
        $('#txtnombrescompletos').val('');
        $('#txtcelular').val('');
        $('#txtemail').val('');
        $('#txtDNI').val('');
        $('#txtmensaje').val('');
        
    }

    // function listarSoportesRegistrados(){

    //     var parametros =    ''

    //     var indice = 24;
    //     var nomproc = "MvindaProcPedido";
    //     $.post(URL_BASE+'Registros/procGeneral', {
    //         parametros: parametros,
    //         indice: indice,
    //         nombreProcedimiento:nomproc
    //     }, function (respuesta) {
    //         console.log("respuesta-->", respuesta);

     

    //     },"JSON")
    // }

</script>