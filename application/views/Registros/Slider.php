
<link href="<?=base_url()?>assets/csoftcontent/js/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
<script src="<?=base_url()?>assets/csoftcontent/js/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<link href="<?=base_url()?>assets/csoftcontent/js/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
<script src="<?=base_url()?>assets/csoftcontent/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?=base_url()?>assets/csoftcontent/js/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
<style>
  .m-b {
    margin-bottom: 5px !important;
  }
  .form-group {
    margin-bottom: 5px !important;
  }
  .m-t-n-xs {
    margin-top: 0px !important;
  }
  .alert {
    z-index: 10000 !important;
    left: 0px !important;
  }
  .table-wrapper-scroll-y {
    display: block;
    max-height: 400px;
    overflow-y: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-wrapper-scroll-y table td {
    padding: 4px !important;
    vertical-align: middle !important;
  }
  .table-wrapper-scroll-y table td > input {
    text-align: right !important;
  }
  .TextoDerecha {
    text-align: right !important;
  }
  .TamanioTotales {
    font-size: 16px;
  }

  .ImgCargando{width:100%;height:140px;border:1px solid gray;cursor:pointer;}

</style>
<?php
    $CodUsuario = $_SESSION['codusuario'];
?>
<div class="row">
   <div class="row wrapper border-bottom white-bg page-heading">
      <div class="col-lg-12">
        <h2>Imagenes&nbsp;&nbsp;&nbsp;<strong id="StnCantidadRegistros">-</strong>
          <button id="BtnNuevo" class="btn btn-sm btn-primary pull-right m-t-n-xs" onclick="limpiarData();" type="button" data-toggle="modal" data-target="#DivProveedorModal"><strong>Subir Imagen</strong></button>
        </h2>
      </div>
   </div>
   <br>
   <div class="row wrapper border-bottom white-bg page-heading">
      <div class="col-lg-12">
        <br>
        <div class="table-responsive">
          <table class="table table-bordered" id="TbSlider">
            <thead>
              <tr>
                <th>N</th>
                <th>NOMBRE</th>
                <th>U.CREA</th>
                <th>ESTADO</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
   </div>
</div>

<!-- Modal Slider imagen-->
<div class="modal fade" id="DivProveedorModal" role="dialog">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header ui-draggable-handle">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 style="font-weight:100" id="etiquetamodal" data-codproducto="" data-tipomodal="" >Registrar Nueva Imagen</h4>
      </div>
      <div id="ContenidoDialog">
        <div id="divCrearChip">
          <!-- <form id="FrmProducto" class="" enctype="multipart/form-data" method="post"> -->
            <div class="modal-body">


            <div class="tabs-container">
                        <ul class="nav nav-tabs" role="tablist">
                          
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" id="tab-1" class="tab-pane active">
                                <div class="panel-body">
                                <form id="FrmProductoSubirImagen" class="" enctype="multipart/form-data" method="post">
                                  <div class="body">

                                      <div class="col-md-12" >
                                        <div class="form-group">
                                            <div class="form-line">
                                              <input id="txtNombreSlider" name="nombreslider" placeholder="ingresar nombre de imagen"   type="text" value="" class="form-control" required="" >
                                            </div>
                                        </div>
                                      </div>

                                      <div class="col-md-12" id="sectionImagen"  >
                                        <div class="row clearfix">
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <div class="form-line">
                                                  <p id="filedrag" class="text-center" onclick="document.getElementById('FileImagenProducto').click();">
                                                    <img id="ImgCargando" name="imgcargando" class="ImgCargando"/>
                                                  </p>
                                                  <input type="file" accept="image/png,image/gif,image/jpeg" id="FileImagenProducto" name="file" style="display:none;"/>
                                                  <div id="progress"></div>
                                                  <button id="btnSubmitForm" hidden type="submit" class="btn btn-w-m btn-primary" style="display:none;" >Subir Imagen</button>
                                            
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                  </div>
                                </form>

                                </div>
                              </div>
                        </div>
                        </div>
            </div>
            </div>


            <div class="modal-footer">
              <button type="submit" class="btn btn-w-m btn-primary" onclick="guardarSlider();" >Guardar</button>
              <button type="button" class="btn btn-w-m btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
          <!-- </form> -->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Confirmacion-->
<div class="modal fade" id="DivProveedorAnularModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ui-draggable-handle">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 style="font-weight:100" id="textoNombreSlider" >Elimina Slider</h4>
      </div>
      <div>
        <div>
          <div class="modal-body">
            <div class="body">
              <form class="form-vertical">
                <div class="row clearfix">
                  <div class="col-md-12 form-control-label">
                    <h4 class="text-center">Está seguro de realizar esta acción?</h4>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-w-m btn-primary" onclick="EliminarSlider();">SI</button>
            <button type="button" class="btn btn-w-m btn-danger" data-dismiss="modal">NO</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
//
  var TbProveedorCuerpo = $('#TbProveedorGestion tbody');
  var TxtNomProveedor = $("#TxtNomProveedor");
  var TxtRUCProveedor = $("#TxtRUCProveedor");
  var TxtDireccionProveedor = $("#TxtDireccionProveedor");
  var BtnGuardar = $("#BtnGuardar");
  var TxtMotivoAnulacion = $('#TxtMotivoAnulacion');
  var ProveedorModalTitulo = $('#ProveedorModalTitulo');
  var CodProveedorGeneral = 0;
  var FrmProductoSubirImagen = $('#FrmProductoSubirImagen');
  /********************* */

$(document).ajaxStart(function(event, jqXHR, settings) {
	$('#msjload').fadeIn();
});
$(document).ajaxComplete(function(event, jqXHR, settings) {
	$('#msjload').fadeOut();
});
$(document).ready(function(){

  $('#BtnNuevo').click(function(){
    ProveedorModalTitulo.text('Registrar nuevo Slider');
  });

  FrmProductoSubirImagen.submit(function(e){
      e.preventDefault();
      SubirImagen(this);
  });
  //
  ListarSlider();

});
var CodUsuario = '<?php echo $CodUsuario;?>';
//
function ListarSlider() {
  var Procedimiento = 'ProcSlider';
  var Parametros = '';
  var Indice = 10;
  var URL = URL_BASE + 'Registros/procGeneral';
  var Data = {
    parametros: Parametros,
    indice: Indice,
    nombreProcedimiento: Procedimiento
  };
  //
  $.post(URL, Data, function (Data) {
    //
    console.log('data',Data);
    $('#TbSlider tbody').empty();
    var FilasHTML = '';
    var CantidadFilas = Data.length;
    //
    $.each(Data, function(i) {
      FilasHTML += '<tr data-nombreslider="'+ this.Nombre +'" data-id="'+ this.Id +'">' +
        '<td>' + (i + 1) + '</td>' +
        '<td>' + this.Nombre + '</td>' +
        '<td>' + this.UsuarioCrea + '</td>' +
        '<td>' + (this.Estado == '1' ? 'Activo' : 'Inactivo') + '</td>' +
        '<td class="text-center">' + '<a href="'+ URL_BASE + '/assets/images/slider/' + this.UrlImagen +'" target="_blank" ><img style="width: 50px; height: 50px;" src="' + URL_BASE + '/assets/images/slider/' + this.UrlImagen + '" ></a>' + '</td>' +
        '<td style="width:20px">' +
          '<button type="button" class="btn btn-danger btn-xs" onclick="abrirModalElimina('+ this.Id +', $(this).parent().parent())" ><i class="fa fa-trash"></i></button>' +
        '</td>' +
      '</tr>';
    });
    $('#TbSlider tbody').append(FilasHTML);
    $('#StnCantidadRegistros').text(CantidadFilas);
    // toastr.success('Registros cargados correctamente', 'Nota')
  }, "JSON");
}

function Limpiar(){
  TxtNomProveedor.val('');
  TxtRUCProveedor.val('');
  TxtDireccionProveedor.val('');
}

/********************************************** */
function FechaHoraHoy(SoloFecha) { // Obtiene la FechaHoraHoy
  var Fecha = new Date();
  //
  var Dia = Fecha.getDate();
      Dia = (Dia < 10 ? '0' + Dia : Dia);
  var Mes = Fecha.getMonth() + 1;
      Mes = (Mes < 10 ? '0' + Mes : Mes);
  var Anio = Fecha.getFullYear();
  var Hora = Fecha.getHours();
      Hora = (Hora < 10 ? '0' + Hora : Hora);
  var Minuto = Fecha.getMinutes();
      Minuto = (Minuto < 10 ? '0' + Minuto : Minuto);
  var Segundos = Fecha.getSeconds();
      Segundos = (Segundos < 10 ? '0' + Segundos : Segundos);
  //
  if (SoloFecha == 1) {
    // Verifica Hora
    if (Hora <= 3) {
      Fecha.setDate(Fecha.getDate() - 1);
      //
      Dia = Fecha.getDate();
      Mes = Fecha.getMonth() + 1;
      Mes = (Mes < 10 ? '0' + Mes : Mes);
      Anio = Fecha.getFullYear();
      Hora = Fecha.getHours();
      Hora = (Hora < 10 ? '0' + Hora : Hora);
      Minuto = Fecha.getMinutes();
      Minuto = (Minuto < 10 ? '0' + Minuto : Minuto);
    }
    return Dia + '/' + Mes + '/' + Anio;
  }
  else if (SoloFecha == 2) {
    return Dia + '/' + Mes + '/' + Anio + ' ' + Hora + ':' + Minuto;
  }
  else {
    return Dia + '/' + Mes + '/' + Anio + ' ' + Hora + ':' + Minuto + ':' + Segundos;
  }
}
function FechaMySQL(Fecha) {
  var FechaArray = Fecha.split('/');
  var Fecha = FechaArray[2] + '-' + FechaArray[1] + '-' + FechaArray[0];
  return Fecha;
}
function split(val) {
  return val.split(/,\s*/);
}

function SubirImagen(Form){
  // $('#file').val() > 0
  if ( $('#txtNombreSlider').val() == '' ) {
    toastr.warning('Verificar datos!');
    return;
  }
  var URL = URL_BASE + 'Web/SubirImagenSlider';
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
      console.log('Data>>',Data);
      var CodResultado = Data[0].CodResultado,
          DesResultado = Data[0].DesResultado;
      //
      if (CodResultado == 1) {
        ListarSlider();
        //
        $('#DivProveedorModal').modal('hide')
        toastr.success(DesResultado, 'Éxito');
      } else {
        toastr.error(DesResultado, 'Error');
      }
    }
  });
}

function guardarSlider(){
  FrmProductoSubirImagen.submit();
  return;
  var parametros = $('#txtNombreSlider').val() + '|' + '' + '|' + '<?php echo $_SESSION['username'];?>';
  var indice = 20;
  var nomproc = "ProcSlider";

 $.post(URL_BASE+'Registros/procGeneral', {parametros: parametros,
                                           indice: indice,nombreProcedimiento:nomproc}, function (respuesta) {
                                            console.log(respuesta);
                                            return;
                                             $('#selectUnidadMedida').empty();
                                             $.each(respuesta,function(){
                                               $('#selectUnidadMedida').append('<option value="'+this.CodProductoUM+'">'+this.NomProductoUM+'</option>');
                                             });
                                           },"JSON");
}

var ID_SLIDER_ELIMINA = null;
function abrirModalElimina(id, elementoTr){
  var nuevoNombreTitle = elementoTr.attr('data-nombreslider');
  ID_SLIDER_ELIMINA = id;
  $('#DivProveedorAnularModal').modal('show');
  $('#textoNombreSlider').html('Eliminando slider <strong>' + nuevoNombreTitle + '</strong>');
}

function EliminarSlider(){

  var Procedimiento = 'ProcSlider';
  var Parametros = ID_SLIDER_ELIMINA;
  var Indice = 40;
  var URL = URL_BASE + 'Registros/procGeneral';
  var Data = {
    parametros: Parametros,
    indice: Indice,
    nombreProcedimiento: Procedimiento
  };
  //
  $.post(URL, Data, function(Data) {
    //
    var CodResultado = Data[0].CodResultado,
        DesResultado = Data[0].DesResultado;
    //
    if (CodResultado == 1) {
      // $('#BtnCerrar').trigger('click');
      $('#DivProveedorAnularModal').modal('hide');
      ListarSlider();
      // Limpia
      toastr.success(DesResultado, 'Éxito');
    } else {
      toastr.error(DesResultado, 'Error');
    }
    // Habilita botón
    // BtnAnularSI.removeAttr("disabled");
  }, "JSON");
}

function limpiarData(){
  $('#txtNombreSlider').val('');
  $('#ImgCargando').attr('src', 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==');
  
}
</script>
<script src="<?=base_url()?>assets/csoftcontent/js/SubirArchivo.js"></script>