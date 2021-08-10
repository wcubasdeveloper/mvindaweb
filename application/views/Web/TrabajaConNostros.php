     <!-- About Area Start -->
    <section class="about-area mtb-50px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>TRABAJA CON NOSTROS</h2>
                </div>

                <div class="col-lg-12" >
                <div class="single-blog-post blog-grid-post">         
                    <div class="col-lg-12" >
                            
                

                        <form id="frmTrabajaconnosotros" >

                            <div class="form-group">
                                <label for="txtnumerodocumento"></label>
                                <input type="text" name="txtnumerodocumento" class="form-control" id="txtnumerodocumento" placeholder="Número de documento">
                            </div>

                            <div class="form-group">
                                <label for="txtnombrescompletos"></label>
                                <input type="text" name="txtnombrescompletos" class="form-control" id="txtnombrescompletos" placeholder="Nombres completos">
                            </div>

                            <div class="form-group">
                                <label for="txtapellidos"></label>
                                <input type="text" name="txtapellidos"  class="form-control" id="txtapellidos" placeholder="Apellidos">
                            </div>

                            <div class="form-group">
                                <label for="txttelefono"></label>
                                <input type="text" name="txttelefono"  class="form-control" id="txttelefono"  placeholder="Teléfono o celular">
                            </div>

                            <div class="form-group">
                                <label for="txtemail"></label>
                                <input type="text" name="txtemail" class="form-control" id="txtemail"  placeholder="Email (opcional)">
                            </div>

                            <div class="form-group">
                                <label for="txtasunto"></label>
                                <input type="text"  name="txtasunto"  class="form-control" id="txtasunto"  placeholder="Asunto (opcional)">
                            </div>

                            <div class="form-group">
                                <div class="custom-file">
                                    <input  name="file" onchange="cambioarchivo($(this));" type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">
                                        Seleccionar archivo de su Curriculum Vitae
                                    </label>
                                </div>
                            </div>

                            <div class="alert alert-success" role="alert" id="txtmensajealerta" hidden >
                            
                            </div>

                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
<script>
    $(document).ready(function () {
        $(".se-pre-con").fadeOut("slow");

        $('#frmTrabajaconnosotros').submit(function(e){
            e.preventDefault();
            SubirArchivo(this);
        });

    });

    function cambioarchivo(archivo){
        var filename = archivo.val().split('\\').pop();
        $('.custom-file-label').text(filename)
    }
           
    function registrarTrabajaConNosotros(){

    }

    function SubirArchivo(Form){

        var nrodocumento = $('#txtnumerodocumento').val();
        var nombrescompletos = $('#txtnombrescompletos').val();
        var apellidos = $('#txtapellidos').val();
        var telefcelular = $('#txttelefono').val();
        var correo = $('#txtemail').val();
        var asunto = $('#txtasunto').val();
      
        $('#txtmensajealerta').removeAttr('hidden');

        if(nrodocumento.length == 0){
            $('#txtmensajealerta').text("Debe llenar el número de documento.");
            $('#txtmensajealerta').removeClass('alert-success').addClass('alert-danger');
            $('#txtnumerodocumento').focus();
            return false;
        }

        if(nombrescompletos.length == 0){
            $('#txtmensajealerta').text("Debe llenar sus nombres.");
            $('#txtmensajealerta').removeClass('alert-success').addClass('alert-danger');
            $('#txtnombrescompletos').focus();
            return false;
        }

        if(apellidos.length == 0){
            $('#txtmensajealerta').text("Debe llenar sus apellidos.");
            $('#txtmensajealerta').removeClass('alert-success').addClass('alert-danger');
            $('#txtapellidos').focus();
            return false;
        }

        if(telefcelular.length == 0){
            $('#txtmensajealerta').text("Debe llenar un número de contacto.");
            $('#txtmensajealerta').removeClass('alert-success').addClass('alert-danger');
            $('#txttelefono').focus();
            return false;
        }

     
        
        var URL = URL_BASE + 'Web/SubirArchivoCV';
        var formData = new FormData(Form);

        $.ajax({
            url: URL,
            type: "post",
            data: formData,
            processData: false,
            contentType: false,//'application/json',
            cache: false,
            async: true,
            success: function(data){

            Data = JSON.parse(data);
           
            var CodResultado = Data[0].CodResultado,
                DesResultado = Data[0].DesResultado;
            //
                if (CodResultado == 1) {
                    $('#txtmensajealerta').text("Gracias por contactarte con nosotros, en breve nos pondremos en contacto.");
                    $('#txtmensajealerta').removeClass('alert-danger').addClass('alert-success');
                } else {
                    $('#txtmensajealerta').text("ERROR!, no se registró, verificar los datos ingresados");
                    $('#txtmensajealerta').removeClass('alert-success').addClass('alert-danger');
                }

                limpiarFormulario();
            }
        });
    }

    
    function limpiarFormulario(){
        
        $('#txtnumerodocumento').val('');
        $('#txtnombrescompletos').val('');
        $('#txtapellidos').val('');
        $('#txttelefono').val('');
        $('#txtemail').val('');
        $('#txtasunto').val('');
        $('#customFile').val('');

    }
</script>