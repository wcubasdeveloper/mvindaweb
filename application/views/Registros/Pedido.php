
<link href="<?=base_url()?>assets/csoftcontent/js/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
<script src="<?=base_url()?>assets/csoftcontent/js/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<link href="<?=base_url()?>assets/csoftcontent/js/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
<script src="<?=base_url()?>assets/csoftcontent/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?=base_url()?>assets/csoftcontent/js/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
<link href="<?=base_url()?>assets/csoftcontent/js/plugins/select2/select2.min.css" rel="stylesheet" />
<script src="<?=base_url()?>assets/csoftcontent/js/plugins/select2/select2.full.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8tGjlECbGQm-EsVM95TBnCl07KYl7eLo&callback=inicializarmapa">
</script>



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
            <h2>Pedidos realizados</h2>
        </div>

        <div class="col-lg-3">
            <label>Fecha inicio</label>
            <input id="txtFechaInicio" type="text" class="form-control"  />
            
        </div>
        <div class="col-lg-3">
            <label>Fecha fin</label>
            <input id="txtFechaFin" type="text" class="form-control"  />
        </div>

        <div class="col-lg-2">
            <label>&nbsp;&nbsp;</label>
            <input type="button" value="Consultar" onclick="consultarPedidosRealizados()" class="form-control primary" style="background-color: #1ab394; color: white;" />
        </div>

   </div>
   <br>
   <div class="row wrapper border-bottom white-bg page-heading" style="padding-top: 20px;" >
      <div class="col-lg-12">
        <br>
        <div class="table-responsive">
          <table class="table table-bordered" id="tbPedidos">
            <thead>
              <tr>
                <th>N</th>
                <th>CLIENTE</th>
                <th>CORREO</th>
                <!-- <th>DIRECCIÓN</th>
                <th>REFERENCIA</th> -->
                <th>PERSONA RECEPCIONA</th>
                <th>NRO CONTÁCTO</th>
                <th>CANT PRODUCT</th>
                <th>IMPORTE</th>
                <th>F. REGISTRO</th>
                <th>ESTADO</th>
                <th></th>
              </tr>
              <!-- Cliente correo | direccion , referencia, persona recepciona, nro contacto, cantidad productos, fecha registro -->
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
   </div>
</div>

<!-- Modal Slider imagen-->
<div class="modal fade" id="modalmapasearch" role="dialog">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header ui-draggable-handle">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 style="font-weight:100" id="lbltituloPedidoDireccion" data-codproducto="" data-tipomodal="" >Pedido Numero</h4>
      </div>
      <div id="ContenidoDialog">
        <div id="divCrearChip">
          <!-- <form id="FrmProducto" class="" enctype="multipart/form-data" method="post"> -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12" >
                        <div id="divMapaSearchPedido" style="width: 100%; height: 300px;">

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-w-m btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
          <!-- </form> -->
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal Slider imagen-->
<div class="modal fade" id="infoDelPedido" role="dialog">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header ui-draggable-handle">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 style="font-weight:100" id="lbltituloPedido" data-codproducto="" data-tipomodal="" >Pedido Numero</h4>
      </div>
      <div id="ContenidoDialog">
        <div id="divCrearChip">
          <!-- <form id="FrmProducto" class="" enctype="multipart/form-data" method="post"> -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6" >
                        <h4 style="font-weight: bold; color: #3f51b5d1;" >Datos del Pedido</h4>
                        <div class="form-group row"><label class="col-sm-4 col-form-label">Fecha</label>
                            <div class="col-sm-8">
                                <!-- <input id="txtcategoria" disabled="disabled" type="text" class="form-control"> -->
                                <label id="lblFechaRegistro" style="font-weight: 400;" >-</label>
                            </div>
                        </div>
                        <div class="form-group row"><label class="col-sm-4 col-form-label">Cant Prod</label>
                            <div class="col-sm-8">
                                <!-- <input id="txtcategoria" disabled="disabled" type="text" class="form-control"> -->
                                <label id="lblCantidadProductos" style="font-weight: 400;" >-</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6" >
                        <h4 style="font-weight: bold; color: #3f51b5d1;" >Datos del cliente</h4>
                        <div class="form-group row"><label class="col-sm-4 col-form-label">Cliente</label>
                            <div class="col-sm-8">
                                <!-- <input id="txtcategoria" disabled="disabled" type="text" class="form-control"> -->
                                <label id="lblnombrecliente" style="font-weight: 400;" >-</label>
                            </div>
                        </div>


                        <div class="form-group row"><label class="col-sm-4 col-form-label">Celular</label>
                            <div class="col-sm-8">
                            <!-- <input id="txtnombreproducto" disabled="disabled" type="text" class="form-control"> -->
                                <label id="lblcelularcliente" style="font-weight: 400;" >-</label>
                            </div>

                        </div>

                        <div class="form-group row"><label class="col-sm-4 col-form-label">Correo</label>
                            <div class="col-sm-8">
                                <label id="lblcorreocliente"  >-</label>
                            </div>

                        </div>
                    </div>
                </div>

                <hr>
                <h4 style="font-weight: bold; color: #3f51b5d1;" >Datos del envío</h4>

                <div class="form-group row"><label class="col-sm-4 col-form-label">Dirección</label>
                    <div class="col-sm-8">
                        <!-- <input id="txtcategoria" disabled="disabled" type="text" class="form-control"> -->
                        <label id="lblDireccion" style="font-weight: 400;" >-</label>
                    </div>
                </div>
                <div class="form-group row"><label class="col-sm-4 col-form-label">Persona recepciona</label>
                    <div class="col-sm-8">
                        <!-- <input id="txtcategoria" disabled="disabled" type="text" class="form-control"> -->
                        <label id="lblPersonaRecepciona" style="font-weight: 400;" >-</label>
                    </div>
                </div>
                <div class="form-group row"><label class="col-sm-4 col-form-label">Nro contácto</label>
                    <div class="col-sm-8">
                        <!-- <input id="txtcategoria" disabled="disabled" type="text" class="form-control"> -->
                        <label id="lblnrocontactodir" style="font-weight: 400;" >-</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered" id="tbDetallePedido">
                            <thead>
                                <tr>
                                    <th>N</th>
                                    <th>PRODUCTO</th>
                                    <th>MARCA</th>
                                    <th>CANT</th>
                                    <th>P. UNIT</th>
                                    <th>SUBTOTAL</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-sm-4" >
                        <label>Comentario sobre la atención del pedido</label>
                    </div>
                    <div class="col-sm-8" >
                        <textarea id="txtcomentarioatencion" class="form-control" rows="2"></textarea>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" onclick="registrarAtencion()" class="btn btn-w-m btn-primary" >Atender</button>
                <button type="button" class="btn btn-w-m btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
          <!-- </form> -->
        </div>
      </div>
    </div>
  </div>
</div>

<style>
.swal2-container {
  z-index: 100000 !important;
}

</style>
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
    // getCategorias();
    // listarProductosNuevos();

    $('#txtFechaInicio').val(FechaHoraHoy(1));
    $('#txtFechaFin').val(FechaHoraHoy(1));

    $('#txtFechaInicio, #txtFechaFin').datepicker({
        autoSize: true,
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
        firstDay: 1,
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        yearRange: "-90:+0"
    }).inputmask('dd/mm/yyyy', { placeholder: '__/__/____' });
    //
    consultarPedidosRealizados();
});


function registrarAtencion(){
    var comentariopedido = $('#txtcomentarioatencion').val();
    var idpedido =  $('#txtcomentarioatencion').attr('codpedido');

    Swal.fire({
        title: '<strong>Confirmación</strong>',
        icon: 'info',
        html:
            'Estás seguro de confirmar la atención de este pedido ?',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: 'SI',
        cancelButtonText: 'NO',
    }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            //Swal.fire('Saved!', '', 'success')
            
            var parametros = idpedido  + '|' + comentariopedido;
            var indice = 16;
            var nomproc = "MvindaProcPedido";
            $.post(URL_BASE+'Registros/procGeneral', {
                parametros: parametros,
                indice: indice,
                nombreProcedimiento:nomproc
            }, function (respuesta) {
                console.log("respuesta update->", respuesta);
                var codResultado = Number(respuesta[0].CodResultado);

                if(codResultado == 1){
                    Swal.fire('La atención se registró correctamente', '', 'success');
                }
            },'JSON')


        } else if (result.isDenied) {
            Swal.fire('Changes are not saved', '', 'info')
        }
    })
}

function consultarPedidosRealizados(){
    // console.log("consulta pedidos reealizados");

    $('#tbPedidos tbody').empty();
        var parametros = '';
        var indice = 14;
        var nomproc = "MvindaProcPedido";
        $.post(URL_BASE+'Registros/procGeneral', {
            parametros: parametros,
            indice: indice,
            nombreProcedimiento:nomproc
        }, function (respuesta) {
            console.log("respuesta->", respuesta)
            var strHTMLtabla = '';
            $.each(respuesta,function(i){
                console.log(Number(this.idEstadoPedido))
            strHTMLtabla += '<tr>'+
                                '<td>'+ (i+1) +'</td>' +
                                '<td>'+ this.clinombres + ' ' + this.cliapellidos +'</td>' +
                                '<td>'+ this.clicorreo +'</td>' +
                                // '<td>'+ this.dirDireccion +'</td>' +
                                // '<td>'+ this.dirReferencia +'</td>' +
                                '<td>'+ this.dirPersonaRecepciona +'</td>' +
                                '<td>'+ this.dirCelContacto +'</td>' +
                                '<td>'+ this.pedCantProducto +'</td>' +
                                '<td class="text-right" >'+ 'S/. ' + this.montosoles + ' ( $' + this.montodolares  +')</td>' +
                                '<td>'+ this.fechahoraregistro +'</td>' +
                                '<td>' + '<span class="label label-'+ ( Number(this.idEstadoPedido) == 1 ? 'warning' : 'primary')+'">' + this.nombreEstado + '</span>'  + '</td>' +
                                '<td class="text-center" >' +
                                    '<button '+
                                    ' data-codpedido="'+ this.idPedido +'" '+
                                    ' data-cliente="'+ this.clinombres + ' ' + this.cliapellidos +'" '+
                                    ' data-correo="'+ this.clicorreo +'" '+
                                    ' data-celular="'+ this.clicelular +'" '+
                                    ' data-dirdireccion="'+ this.dirDireccion +'" '+
                                    ' data-dirreferencia="'+ this.dirReferencia +'" '+
                                    ' data-dirpersonarecepciona="'+ this.dirPersonaRecepciona +'" '+
                                    ' data-dircelcontacto="'+ this.dirCelContacto +'" '+
                                    ' data-pedcantproducto="'+ this.pedCantProducto +'" '+
                                    ' data-fechahoraregistro="'+ this.fechahoraregistro +'" '+
                                    
                                    '  type="button" class="btn btn-success btn-xs" onclick="verPedidoCompleto($(this))" ><i class="fa fa-eye"></i></button>' + 
                                    '&nbsp;<button data-codpedido="'+this.idPedido +'"  data-latitud="'+ this.dirLatitud +'"  data-longitud="'+ this.dirLongitud +'" type="button" class="btn btn-primary btn-xs" onclick="verUbicacionEnMapa($(this))" ><i class="fa fa-map-marker"></i></button>' + 
                                    // '&nbsp;<button  type="button" class="btn btn-warning btn-xs" data-codpedido="'+ this.idPedido +'" onclick="confirmarPedido()" ><i class="fa fa-check"></i></button>' + 
                                    // '<button  type="button" data-nomproducto="'+ this.nombreproducto +'" class="btn btn-danger btn-xs" onclick="confirmarAnulacion('+ this.idproductonuevo +', $(this))" ><i class="fa fa-trash"></i></button>' + 
                                '</td>' +
                                
                            '</tr>';
            });
            $('#tbPedidos tbody').append(strHTMLtabla);
    },"JSON")
}

function confirmarPedido(){
    $('#modalAtencionPedido').modal('show');
}

var mapa = null;
function inicializarmapa(){
        var latLng = new google.maps.LatLng( -12.0453, -77.0311);
        var mapOptions = {
        center : latLng,
        zoom : 11,
     
        mapTypeId : google.maps.MapTypeId.ROADMAP
        };
        mapa = new google.maps.Map(document.getElementById("divMapaSearchPedido"), mapOptions);

      
        //showTab(currentTab); // Display the current tab
}

var  marcadorubicacion = null;
function verUbicacionEnMapa(elemento){
    
    var latitud = Number(elemento.attr('data-latitud'));
    var longitud = Number(elemento.attr('data-longitud'));
    var codPedido = elemento.attr('data-codpedido');
    //
    $('#lbltituloPedidoDireccion').html("Pedido número <strong>"+ 'P00000' + codPedido  +"</strong>")
    var latLngPedido = { lat:  latitud , lng:  longitud };
    
    if(!marcadorubicacion){
        marcadorubicacion = new google.maps.Marker({
            position: latLngPedido,
            map : mapa,
            // title: "Hello World!",
        });
    }else{
        marcadorubicacion.setPosition(latLngPedido);
    }
    

    mapa.panTo(latLngPedido); //Make map global
    mapa.setZoom(13); //Make map global

    $('#modalmapasearch').modal('show');
}

function verPedidoCompleto(elemento){
    //
    $('#tbDetallePedido tbody').empty();
    $('#txtcomentarioatencion').val('');

    var codPedido = elemento.attr('data-codpedido');
    var clientenombres = elemento.attr('data-cliente');
    var celularcliente = elemento.attr('data-celular');
    var correo =  elemento.attr('data-correo');

    var direccionEnvio = elemento.attr('data-dirdireccion');
    var dirreferencia =  elemento.attr('data-dirreferencia');
    var dirpersonarecepciona =  elemento.attr('data-dirpersonarecepciona');
    var dircontactorecepciona =  elemento.attr('data-dircelcontacto');
    var fechaPedido = elemento.attr('data-fechahoraregistro');
    var cantidadProductos = elemento.attr('data-pedcantproducto');

    $('#txtcomentarioatencion').attr('codpedido',codPedido )
    $('#lbltituloPedido').html('Pedido número P00000' + codPedido);
    $('#lblFechaRegistro').text('');
    $('#lblCantidadProductos').text('');

    $('#lblnombrecliente').text('');
    $('#lblcelularcliente').text('');
    $('#lblcorreocliente').text('');

    $('#lblDireccion').text('');
    $('#lblReferencia').text('');
    $('#lblPersonaRecepciona').text('');
    $('#lblnrocontactodir').text('');
    
    //obteniendo data del pedidodetalle
    var parametros = codPedido;
    var indice = 15;
    var nomproc = "MvindaProcPedido";
    $.post(URL_BASE+'Registros/procGeneral', {
            parametros: parametros,
            indice: indice,
            nombreProcedimiento:nomproc
    }, function (respuesta) {

        $('#lblFechaRegistro').text(fechaPedido);
        $('#lblCantidadProductos').text(cantidadProductos);

        $('#lblnombrecliente').text(clientenombres);
        $('#lblcelularcliente').text(celularcliente);
        $('#lblcorreocliente').text(correo);

        $('#lblDireccion').text(direccionEnvio + ' ('+ dirreferencia + ')' );
        $('#lblPersonaRecepciona').text(dirpersonarecepciona);
        $('#lblnrocontactodir').text(dircontactorecepciona);

        console.log("respuesta->",respuesta);
        //seteando detalle
        var strHTMLtablapedido = '';
        $.each(respuesta, function(i){
            var subtotalRow_soles = Number(this.cantidad) * Number(this.precioproducto_soles);
            var subtotalRow_dolares =  Number(this.cantidad) * Number(this.precioproducto_dolar) ;
            //
            strHTMLtablapedido+= '<tr>'+
                                    '<td>' + (i +1) + '</td>' +
                                    '<td>' + this.nombreproducto + '</td>' +
                                    '<td>' + this.marca + '</td>' +
                                    '<td>' + this.cantidad + '</td>' +
                                    '<td style="text-align: right;" >' + this.precioproducto_soles + ' ($' + this.precioproducto_dolar + ')' + '</td>' +
                                    '<td style="text-align: right;" >' + subtotalRow_soles + ' ($' + subtotalRow_dolares + ')</td>' +
                                '</tr>';

        });
        $('#tbDetallePedido tbody').append(strHTMLtablapedido);
        $('#infoDelPedido').modal('show');
        // console.log("respuesta", respuesta);
    },'JSON');




 
    //

}

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
    if (Hora < 3) {
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



function registrarNuevoProducto(){
  var codProductoSelect = $('#selectProductos').val();
  var codproductocategoria = $('#selectCategoria').val();
  var nomproductoselect = $("#selectProductos option:selected" ).text();
  var nomcategoriaselect =  $("#selectCategoria option:selected" ).text();
  //verifica si el producto está registrado
  var estaelproducto = false;
  $.each(JSONPRODUCTOS, function(){
    if(this.idproducto == Number(codProductoSelect) ){
      estaelproducto = true;
    }
  });

  if(estaelproducto){
    toastr.error("El producto "+ nomproductoselect + " ya está registrado.", 'Error');
  }else{
    var parametros = codProductoSelect + '|' + codproductocategoria + '|' + nomproductoselect + '|' + nomcategoriaselect;
    var indice = 41;
    var nomproc = "ProcSlider";

    $.post(URL_BASE+'Registros/procGeneral', {
      parametros: parametros,
      indice: indice,
      nombreProcedimiento:nomproc
    }, function (respuesta) {

      var codrespuesta = respuesta[0]["CodResultado"];
      var desrespuesta = respuesta[0]["DesResultado"];
      listarProductosNuevos();
      
      if(Number(codrespuesta) == 1){
        toastr.success(desrespuesta, 'Éxito');
      }else{
        toastr.error(desrespuesta, 'Error');
      }

    },"JSON")
  }
}



var JSONPRODUCTOS = null;
function listarProductosNuevos(){
  $('#tbProductosnuevos tbody').empty();
  var parametros = '';
  var indice = 42;
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
                        '<td>'+ this.reg_date +'</td>' +
                        '<td>' + '<button  type="button" data-nomproducto="'+ this.nombreproducto +'" class="btn btn-danger btn-xs" onclick="confirmarAnulacion('+ this.idproductonuevo +', $(this))" ><i class="fa fa-trash"></i></button>' + '</td>' +
                      '</tr>';
    });
    $('#tbProductosnuevos tbody').append(strHTMLtabla);
  },"JSON")
}

function confirmarAnulacion(codproductonuevo, elemento){
  var nombreproducto =  elemento.attr('data-nomproducto');
  var codigoproducto = Number(codproductonuevo);
  var confirmarelimina = confirm("Estas seguro de eliminar el producto " + nombreproducto);

  if(confirmarelimina){
    var parametros = codigoproducto;
    var indice = 43;
    var nomproc = "ProcSlider";

    $.post(URL_BASE+'Registros/procGeneral', {
      parametros: parametros,
      indice: indice,
      nombreProcedimiento:nomproc
    }, function (respuesta) {

      var codrespuesta = respuesta[0]["CodResultado"];
      var desrespuesta = respuesta[0]["DesResultado"];
      listarProductosNuevos();
      if(Number(codrespuesta) == 1){
        toastr.success(desrespuesta, 'Éxito');
      }else{
        toastr.error(desrespuesta, 'Error');
      }
    });
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