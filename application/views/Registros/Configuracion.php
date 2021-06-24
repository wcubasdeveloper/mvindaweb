<div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Datos de la empresa </h5>
                            
                        </div>
                        <div class="ibox-content">
                            <div >
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Nombre</label>

                                    <div class="col-sm-10"><input type="text" id="txtNombreEmpresa" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">RUC</label>
                                    <div class="col-sm-10"><input id="txtRucEmpresa" type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row"><label class="col-sm-2 col-form-label">Número principal</label>
                                    <div class="col-sm-10"><input id="txtNumeroPrincipal" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Números whatsapp</label>
                                    <div class="col-sm-10"><input id="txtNumerosWhatsapp" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10"><input id="txtEmail" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Dirección</label>
                                    <div class="col-sm-10"><input id="txtDireccion" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Texto inferior</label>
                                    <div class="col-sm-10">
                                        <textarea id="txttextoinferior" class="form-control" ></textarea>
                                    </div>
                                </div>

                            
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Banner Uno</label>

                                    <form id="formCargarBannerUno"  enctype="multipart/form-data" method="post" >
                                        <div class="col-sm-4">
                                            <input onchange="subirArchivoTemp($(this))" name="file"  accept="image/gif, image/jpeg, image/png"  id="inputbanneruno" type="file" class="custom-file-input">
                                        </div>
                                        <button id="btnenviarfoto" type="submit" style="display:none" >guardar</button>
                                    </form>

                                    <div>
                                        <div class="col-sm-6">
                                            <img style="cursor:pointer" onclick="cargarArchivo();"  src="http://localhost/mvindaweb/assets/abelostyle/assets/images/banner-image/11.jpg" alt="">
                                        </div>
                                    </div>

                                </div>

                                <br>
                                <br>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Banner Dos</label>
                                    <div class="col-sm-4">
                                        <input id="inputbannerdos" type="file"  accept="image/gif, image/jpeg, image/png"  class="custom-file-input">
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="http://localhost/mvindaweb/assets/abelostyle/assets/images/banner-image/11.jpg" alt="">
                                    </div>
                                </div>
                             
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <button style="width: 100%;" onclick="actualizarDatosConfiguracion();" type="button" class="btn btn-w-m btn-info">Guardar</button>
                                    </div>
                                </div>
                                
                                    


                            </div>
                        </div>
                    </div>
                </div>
            </div>

<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css" id="theme-styles">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>

    $(document).ready(function(){
        cargarConfiguraion();

        $("#formCargarBannerUno").submit(function(e){
            console.log("dentro del submit");
            e.preventDefault();
            var formData = new FormData(this);
            var formularioDatos = new FormData(document.getElementById("formCargarBannerUno"));
            //var URL = URL_BASE + 'Liquidacion/subirArchivo';
            //var fechaRegistra = $('#TxtFechaInicio').val();
            var fechaRegistra = "";

            //var URL = URL_BASE + 'Liquidacion/subirArchivo/?fechaconsulta=' +FechaMySQL(fechaRegistra);
            var URL = URL_BASE + 'Registros/subirImagenBannerUno';
            console.log("adentrooo");
            //
            $.ajax({
                //url: URL_ACTION_UPLOAD_FILE + '/?correo_para=' + $('#correo_para').val(),
                url: URL,
                type: "post",
                // dataType: "json",
                dataType: "text",
                data: formularioDatos,
                cache: false,
                contentType: false,
                processData: false
            }).done(function (respuesta) {

                //var splitRpta = respuesta.split('{');
                //var rptaJSONstring = '{' + splitRpta[1];
                //var rptaJSON = JSON.parse(rptaJSONstring);
                // console.log("ddd", rptaJSON);
                
                // var res = JSON.parse(respuesta);
                // var codRespuesta = res.CODIGORESULTADO;
                // var desRespuesta = res.NOMBRERESULTADO;
                // if (codRespuesta == 1) {
                //     consultarRegistrosCargados();
                // }
                // Swal.fire({
                //     icon: (codRespuesta == 1 ? 'success' : 'error'),
                //     title: desRespuesta,
                //     showConfirmButton: false,
                //     timer: 5000
                // });
                // $('#archivoSubido').val('');
                // //consultarData();
                // $('#btn_registrar').prop('disabled', false).html('Subir excel <i class="fa fa-upload"></i>');

            }).fail(function (data) {
                console.log("dadsadsad", data);
                //Validaciones.ValidarSession();
            });
        })
    });

    function subirArchivoTemp(element) {
        console.log("change")
        var uploadField = document.getElementById("inputbanneruno");
       
        var nombreArchivo = element.val().split("\\").pop();
        var extension = nombreArchivo.substr((nombreArchivo.lastIndexOf('.') + 1));

        //jpeg a jpg
        extension =  extension.toUpperCase();
        if (extension == 'JPEG' || extension == 'JPG' || extension == 'PNG' ) { //tipo imagenes
            if ($('#inputbanneruno').val().length == 0) {
                toastr.error("Debe cargar el archivo", 'Error');
                return false;
            }

            Swal.fire({
                title: '¿Estás seguro de cargar el archivo para el primer banner ?',
                // html:
                // '<br><p><strong>Seleccionar fecha registro</strong></p><input  id="TxtFechaInicio" style="text-align: center;" name="fechainicio" readonly class="swal2-input FechaUI form-control">',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'No'
            }).then((result) => {
                
                if (result.isConfirmed) {
                    $("#btnenviarfoto").click();
                    
                }
            });

        } else {
            toastr.error("Solo se permite cargar imagenes", 'Error');
        }
    }

    function cargarArchivo(){
        $('#inputbanneruno').click();
    }

    function actualizarDatosConfiguracion(){
        console.log("actualiza");
    }

    function cargarConfiguraion(){
        $('#txtNombreEmpresa').val();
        $('#txtRucEmpresa').val();
        $('#txtNumeroPrincipal').val();
        $('#txtNumerosWhatsapp').val();
        $('#txtEmail').val();
        $('#txtDireccion').val();
        $('#txttextoinferior').val();
        var parametros = '';
        var indice = 47;
        var nomproc = "ProcSlider";
        $.post(URL_BASE+'Registros/procGeneral', {
            parametros: parametros,
            indice: indice,
            nombreProcedimiento:nomproc
        }, function (respuesta) {
            if(respuesta.length > 0){

                $('#txtNombreEmpresa').val(respuesta[0]["nombre_empresa"]);
                $('#txtRucEmpresa').val(respuesta[0]["ruc"]);
                $('#txtNumeroPrincipal').val(respuesta[0]["numero_principal"]);
                $('#txtNumerosWhatsapp').val(respuesta[0]["numeros_whatsapps"]);
                $('#txtEmail').val(respuesta[0]["email"]);
                $('#txtDireccion').val(respuesta[0]["direccion"]);
                $('#txttextoinferior').val(respuesta[0]["texto_inferior"]);
            }

        },"JSON")
    }
</script>