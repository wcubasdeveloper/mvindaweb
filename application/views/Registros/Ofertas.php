
<link href="<?=base_url()?>assets/csoftcontent/js/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
<script src="<?=base_url()?>assets/csoftcontent/js/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<link href="<?=base_url()?>assets/csoftcontent/js/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
<script src="<?=base_url()?>assets/csoftcontent/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?=base_url()?>assets/csoftcontent/js/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
<link href="<?=base_url()?>assets/csoftcontent/js/plugins/select2/select2.min.css" rel="stylesheet" />
<script src="<?=base_url()?>assets/csoftcontent/js/plugins/select2/select2.full.min.js"></script>
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
   <div class="row wrapper border-bottom white-bg page-heading" style="padding-top: 20px;" >
        <div class="col-lg-12">
            <h2>OFERTAS</h2>
        </div>

        <div class="col-lg-4">
            <label>Categorias</label>
            <select id="selectCategoria" onchange="getProductosByCategoria();" class="form-control" >
                
            </select>
        </div>
        <div class="col-lg-5">
            <label>Productos</label>
            <select id="selectProductos" class="form-control" >
              
            </select>
        </div>

        <div class="col-lg-2">
            <label>&nbsp;&nbsp;</label>
            <input type="button" value="Registrar" onclick="modalOferta()" class="form-control primary" style="background-color: #1ab394; color: white;" />
            
        </div>

   </div>
   <br>
   <div class="row wrapper border-bottom white-bg page-heading" style="padding-top: 20px;" >
      <div class="col-lg-12">
        <br>
        <div class="table-responsive">
          <table class="table table-bordered" id="tbProductoOfertas">
            <thead>
              <tr>
                <th>N</th>
                <th>PRODUCTO</th>
                <th>CATEGORIA</th>
                <th>% DESCUENTO</th>
                <th>FECHA EXPIRA OFERT</th>
                <th>FECHA CREACIÓN</th>
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
<div class="modal fade" id="divmodaloferta" role="dialog">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header ui-draggable-handle">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 style="font-weight:100" id="etiquetamodal" data-codproducto="" data-tipomodal="" >Registrar Nueva oferta</h4>
      </div>
      <div id="ContenidoDialog">
        <div id="divCrearChip">
          <!-- <form id="FrmProducto" class="" enctype="multipart/form-data" method="post"> -->
            <div class="modal-body">
                <div class="form-group row"><label class="col-sm-4 col-form-label">Categoria</label>
                    <div class="col-sm-8"><input id="txtcategoria" disabled="disabled" type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group row"><label class="col-sm-4 col-form-label">Producto</label>
                    <div class="col-sm-8"><input id="txtnombreproducto" disabled="disabled" type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group row"><label class="col-sm-4 col-form-label">% Descuento</label>
                    <div class="col-sm-8"><input id="txtpercentdescuento" onkeypress="return SoloDecimal(event, this);" type="text" class="form-control">
                    </div>
                </div>
                <br>
                <div class="form-group row"><label class="col-sm-4 col-form-label">Vencimiento</label>
                    <div class="col-sm-8"><input id="txtvencimiento" type="text" class="form-control">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
              <button type="submit" class="btn btn-w-m btn-primary" onclick="registrarnuevaOferta();" >Guardar</button>
              <button type="button" class="btn btn-w-m btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
          <!-- </form> -->
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

var dateToday = new Date();

$(document).ready(function(){
    getCategorias();
    $('#txtvencimiento').datepicker({
        autoSize: true,
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
        firstDay: 0,
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        minDate: dateToday,
        changeYear: true,
        yearRange: "-90:+0"
    }).inputmask('dd/mm/yyyy', { placeholder: '__/__/____' });
    listarProductoOfertas();
});

function FechaMySQL(Fecha) {
  var FechaArray = Fecha.split('/');
  var Fecha = FechaArray[2] + '-' + FechaArray[1] + '-' + FechaArray[0];
  return Fecha;
}

function modalOferta(){
    $('#txtcategoria').val('');
    $('#txtnombreproducto').val('');
    $('#txtpercentdescuento').val('');
    $('#txtvencimiento').val('');

    var nomproductoselect = $("#selectProductos option:selected" ).text();
    var nomcategoriaselect =  $("#selectCategoria option:selected" ).text();
    $('#txtcategoria').val(nomcategoriaselect);
    $('#txtnombreproducto').val(nomproductoselect);

    $('#divmodaloferta').modal('show');
}

function registrarnuevaOferta(){
  var codProductoSelect = $('#selectProductos').val();
  var codproductocategoria = $('#selectCategoria').val();
  var nomproductoselect = $("#selectProductos option:selected" ).text();
  var nomcategoriaselect =  $("#selectCategoria option:selected" ).text();
  var porcentdcto = $('#txtpercentdescuento').val();
  var fechaexpira = $('#txtvencimiento').val();
  //
  var estaelproducto = false;
  $.each(JSONPRODUCTOS, function(){
    if(this.idproducto == Number(codProductoSelect) ){
      estaelproducto = true;
    }
  });

  if(estaelproducto){
        toastr.error("El producto "+ nomproductoselect + " ya está registrado.", 'Error');
  }else{
    if(porcentdcto.length == 0){
        toastr.error("Debe ingresar el porcentaje de descuento", 'Error');
        $('#txtpercentdescuento').focus();
        return false;
    }

    if(fechaexpira.length == 0){
        toastr.error("Debe ingresar la fecha de vencimiento de la oferta", 'Error');
        $('#txtvencimiento').focus();
        return false;
    }

    var parametros =    codProductoSelect + '|' + codproductocategoria + '|' + nomproductoselect + '|' + 
                        nomcategoriaselect + '|' + porcentdcto + '|' + FechaMySQL(fechaexpira);

    var indice = 45;
    var nomproc = "ProcSlider";
    $.post(URL_BASE+'Registros/procGeneral', {
      parametros: parametros,
      indice: indice,
      nombreProcedimiento:nomproc
    }, function (respuesta) {

      var codrespuesta = respuesta[0]["CodResultado"];
      var desrespuesta = respuesta[0]["DesResultado"];
    //   listarProductosNuevos();
      
      if(Number(codrespuesta) == 1){
        listarProductoOfertas();
        $('#divmodaloferta').modal('hide');
        toastr.success(desrespuesta, 'Éxito');
      }else{
        toastr.error(desrespuesta, 'Error');
      }

    },"JSON")
  }
}



var JSONPRODUCTOS = null;
function listarProductoOfertas(){
  $('#tbProductoOfertas tbody').empty();
  var parametros = '';
  var indice = 44;
  var nomproc = "ProcSlider";
  $.post(URL_BASE+'Registros/procGeneral', {
    parametros: parametros,
    indice: indice,
    nombreProcedimiento:nomproc
  }, function (respuesta) {
    JSONPRODUCTOS = respuesta;
    // $('#txttipodocumento').empty();
  
    var strHTMLtabla = '';
    $.each(respuesta,function(i){
      strHTMLtabla += '<tr>'+
                        '<td>'+ (i+1) +'</td>' +
                        '<td>'+ this.nombreproducto+'</td>' +
                        '<td>'+ this.categoria +'</td>' +
                        '<td>'+ this.percentdcto +'</td>' +
                        '<td>'+ this.fecha_expira_oferta +'</td>' +
                        '<td>'+ this.reg_date +'</td>' +
                        '<td>' + '<button  type="button" data-nomproducto="'+ this.nombreproducto +'" class="btn btn-danger btn-xs" onclick="confirmarAnulacion('+ this.idproductooferta +', $(this))" ><i class="fa fa-trash"></i></button>' + '</td>' +
                      '</tr>';
    });
    $('#tbProductoOfertas tbody').append(strHTMLtabla);
  },"JSON")
}

function confirmarAnulacion(codproductonuevo, elemento){
  var nombreproducto =  elemento.attr('data-nomproducto');
  var codigoproducto = Number(codproductonuevo);
  var confirmarelimina = confirm("Estas seguro de eliminar el producto " + nombreproducto);

  if(confirmarelimina){
    var parametros = codigoproducto;
    var indice = 46;
    var nomproc = "ProcSlider";

    $.post(URL_BASE+'Registros/procGeneral', {
      parametros: parametros,
      indice: indice,
      nombreProcedimiento:nomproc
    }, function (respuesta) {
        console.log("anula", respuesta);
      var codrespuesta = respuesta[0]["CodResultado"];
      var desrespuesta = respuesta[0]["DesResultado"];
      listarProductoOfertas();
      if(Number(codrespuesta) == 1){
        toastr.success(desrespuesta, 'Éxito');
      }else{
        toastr.error(desrespuesta, 'Error');
      }
    },"JSON");
  }
}

function getCategorias(){
    $('#selectCategoria').empty();
    var URL_GET_CATEGORIA = "<?php echo base_url()."XbestServicio/getCategorias" ?>";
    var data = { };
    //
    var strHTMLoption = "";
    var strHTMLcategoriaMenu = "";
    var strHTMLcategoriaLink = "";
    //
    $.post(URL_GET_CATEGORIA, data, function (rpta) {

        $.each(rpta,function(){
            strHTMLoption += '<option value="'+this.CodCategoriaProducto+'">'+ this.NomCategoriaProducto +'</option>';
        });
        $('#selectCategoria').append(strHTMLoption);
        $('#selectCategoria').select2();
        getProductosByCategoria();
    },'JSON')
}

function getProductosByCategoria(){

    $('#selectProductos').empty();
    var URL_GET_PRODUCTOS = "<?php echo base_url()."XbestServicio/getProductosByCategoria" ?>";
    var data = {
        codcategoria : $('#selectCategoria').val()
     };
   
    var strHTMLoption = "";
    var strHTMLcategoriaMenu = "";
    var strHTMLcategoriaLink = "";
    //
    $.post(URL_GET_PRODUCTOS, data, function (rpta) {
    
        $.each(rpta,function(){
            strHTMLoption += '<option value="'+this.CodProducto+'">'+ this.NomProducto +'</option>';
        });
        $('#selectProductos').append(strHTMLoption);
        $('#selectProductos').select2();
    },'JSON')
}

function SoloDecimal(n,t,i){if(key=n.keyCode?n.keyCode:n.which,key==8)return!0;if(key>47&&key<58)return t.value==""?!0:(regexp=/.[0-9]{7}$/,!regexp.test(t.value));if(key==46)return t.value==""?!1:(regexp=/^[0-9]+$/,regexp.test(t.value));if(i&&key==13){var u=$(t).attr("id"),r=u.split("-"),f=r[0],e=parseInt(r[1])+1;$("#"+f+"-"+e).selectRange(0,9999)}return!1}


function abrirModalRegistro(){
    $('#divmodalregistro').modal('show');
}

var CodUsuario = '<?php echo $CodUsuario;?>';
//


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