<link href="<?=base_url()?>assets/csoftcontent/js/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
<script src="<?=base_url()?>assets/csoftcontent/js/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<link href="<?=base_url()?>assets/csoftcontent/js/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
<script src="<?=base_url()?>assets/csoftcontent/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?=base_url()?>assets/csoftcontent/js/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

<link href="<?=base_url()?>assets/plugins/datatables/datatables.min.css" rel="stylesheet" />
<script src="<?=base_url()?>assets/plugins/datatables/datatables.min.js"></script>

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
</style>
<?php
    $CodUsuario = $_SESSION['codusuario'];
?>
<div class="row">


<div class="row wrapper border-bottom white-bg page-heading">
      <div class="col-lg-8">
          <ol class="breadcrumb" style="padding-top: 15px;">
              <li class="breadcrumb-item">
                  <a href="<?=base_url()?>/Inicio/inicio">Inicio</a>
              </li>
              <li class="active breadcrumb-item">
                  <strong><?=str_replace("%20", " ", $Titulo); ?></strong>
              </li>
          </ol>
          <h2>(<strong id="StnCantidadRegistros">-</strong>) Consumo de productos por BUS </h2>
      
      </div>
      <div class="col-lg-4">

      </div>
  </div>

  <div class="row wrapper border-bottom white-bg page-heading form-group">
        <div class="form-group col-lg-2" style="padding-top: 17px;">
            <label>Fecha inicio</label> 
            <input id="TxtFechaInicio" placeholder="Fecha inicio" readonly class="FechaUI form-control" style="width:130px;"/>
        </div>

        <div class="form-group col-lg-2" style="padding-top: 17px;" >
            <label>Fecha fin</label> 
            <input id="TxtFechaFin"  readonly placeholder="Fecha fin" class="FechaUI form-control" style="width:130px;"/>
        </div>

        <div class="form-group col-lg-2" style="padding-top: 17px;" >
            <label>Padrón</label> 
            <select class="form-control" id="selectPadron" ></select>
        </div>

        <div class="form-group col-lg-4" style="padding-top: 17px;" >
           
        </div>

        <div class="col-lg-2" style="padding-top: 17px;" > 
            <label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label> 
            <button class="form-control btn btn-sm btn-success pull-right m-t-n-xs" style="background-color: #1c84c6;border-color: #1c84c6;color:white" type="button" onclick="cargarReporte()"><strong>Consulta</strong></button>
        </div>
  </div>


   <div class="row wrapper border-bottom white-bg page-heading">
      <div class="col-lg-12">
        <br>
        <div class="table-responsive">
          <table class="table table-bordered" id="tbReporte">
            <thead>
              <tr>
                <th style="width: 45px">N</th>
                <th>FECHA</th>
                <th>PADRON</th>
                <th>USUARIO</th>
                <th>FECHA CREA</th>
                <th>PRODUCTO</th>
                <th>U.MEDIDA</th>
                <th  class="text-right" >CANTIDAD</th>
                <th  class="text-right" >P.COSTO</th>
                <th  class="text-right" >P.TOTAL</th>
              </tr>
            </thead>
            <tbody></tbody>
            <tfoot>
                <tr>
                    <td colspan="7">TOTALES</td>
                    <td id="totalCantidad" class="text-right" >0.00</td>
                    <td id="totalCosto" class="text-right" >0.00</td>
                </tr>
            </tfoot>
          </table>
        </div>
      </div>
   </div>
</div>

<script>

var TxtFechaInicio = $('#TxtFechaInicio');
var TxtFechaFin = $('#TxtFechaFin');

var CuerpoTbEgresos = $('#TbEgresos tbody');
var FootTbEgresos = $('#TbEgresos tfoot');


$(document).ajaxStart(function(event, jqXHR, settings) {
	$('#msjload').fadeIn();
});
$(document).ajaxComplete(function(event, jqXHR, settings) {
	$('#msjload').fadeOut();
});

$(document).ready(function(){
    TxtFechaInicio.val(FechaHoraHoy(1));
    TxtFechaFin.val(FechaHoraHoy(1));

    $('.FechaUI').datepicker({
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
    }).inputmask('dd/mm/yyyy', { placeholder: '__/__/____ __:__' });



    //ListarUtilidadDeVenta();

    //TxtFechaInicio.change(function(){
      //ListarUtilidadDeVenta();
   // })
   ListaPadron();
});

function ListaPadron() {
  $('#selectPadron').empty();
  var Procedimiento = 'ProcUnidad';
  var Parametros = 0;
  var Indice = 10;
  var URL = URL_BASE +'Registros/procGeneral';
  var Data = {
    parametros: '',
    indice: Indice,
    nombreProcedimiento: Procedimiento
  };
  $.post(URL, Data, function (Data) {

    var OptionHTML = '';
    //
    $.each(Data, function(i) {
      OptionHTML += '<option value="' + this.CodUnidad +'" >' + this.PadronUnidad + '</option>';
    });
    $('#selectPadron').append(OptionHTML);
    // SelProducto.selectpicker("refresh");
    cargarReporte();
  },'JSON');
}


function cargarReporte(){
    if ( $.fn.DataTable.isDataTable('#tbReporte') ) {
    $('#tbReporte').DataTable().destroy();
  }

    //CALL ProcAlmacenMovimientoReporte('2021-01-01|2021-03-01|1', 11);
  var Procedimiento = 'ProcAlmacenMovimientoReporte';
  var fechaInicio = FechaMySQL($('#TxtFechaInicio').val());
  var fechaFin =  FechaMySQL($('#TxtFechaFin').val());
  var padronSeleccionado = $('#selectPadron').val();

  var Parametros = fechaInicio + '|' + fechaFin + '|' + padronSeleccionado;
  var Indice = 11;
  var URL = URL_BASE + 'Registros/procGeneral';
  var Data = {
    parametros: Parametros,
    indice: Indice,
    nombreProcedimiento: Procedimiento
  };
  //
  $.post(URL, Data, function (Data) {
    $('#tbReporte tbody').empty();
    var FilasHTML = '';
    var CantidadFilas = Data.length;

    var totalCantidad =0;
    var totalPrecioCosto = 0;
    //
    $.each(Data, function(i) {
      FilasHTML += '<tr data-codProductoCategoriagestion="' + this.CodProductoCategoria +'" >' +
        '<td>' + (i + 1) + '</td>' +
        '<td>' + this.Fecha + '</td>' +
        '<td>' + this.PadronUnidad + '</td>' +
        '<td>' + this.NomUsuario + '</td>' +
        '<td>' + this.FechaCreacion + '</td>' +
        '<td>' + this.NomProducto + '</td>' +
        '<td>' + this.NomProductoUM + '</td>' +
        '<td class="text-right" >' + this.Cantidad + '</td>' +
        '<td class="text-right" >' + this.PrecioCosto + '</td>' +
        '<td class="text-right" >' + this.PrecioCostoTotal + '</td>' +
      '</tr>';

      totalCantidad += Number(this.Cantidad);
      totalPrecioCosto += Number(this.PrecioCosto);
    });
    
    $('#tbReporte tbody').append(FilasHTML);
    $('#StnCantidadRegistros').text(CantidadFilas);
    $('#totalCantidad').text(totalCantidad);
    $('#totalCosto').text(totalPrecioCosto.toFixed(2));

    $('#tbReporte').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );


  },'JSON');
}

function ListarUtilidadDeVenta() {
  var Procedimiento = 'ProcVentaReporte';
  var Parametros = FechaMySQL(TxtFechaInicio.val());
  var Indice = 13;
  var URL = URL_BASE + 'Registros/procGeneral';
  var Data = {
    parametros: Parametros,
    indice: Indice,
    nombreProcedimiento: Procedimiento
  };
  //
  $.post(URL, Data, function (Data) {
    CuerpoTbEgresos.empty();
    FootTbEgresos.empty();
    var FilasHTML = '';
    var strFoot = '';

    var totalCantidad = 0;
    var totalPrecio = 0;
    var totalTotal = 0;
    
    //
    $.each(Data, function(i) {
      FilasHTML += '<tr>' +
                      '<td>' + (i + 1) + '</td>' +
                      '<td>' + this.NomProducto + '</td>' +
                      '<td class="text-right">' + Number(this.Cantidad).toFixed(2) + '</td>' +
                      '<td class="text-right">' + Number(this.Precio).toFixed(2) + '</td>' +
                      '<td class="text-right">' + Number(this.Total).toFixed(2) + '</td>' +
                    '</tr>';

      totalCantidad += (this.Cantidad == null || this.Cantidad == '' ? Number(0) : Number(this.Cantidad));
      totalPrecio += (this.Precio == null || this.Precio == '' ? Number(0) : Number(this.Precio));
      totalTotal += (this.Total == null || this.Total == '' ? Number(0) : Number(this.Total));
    });
    CuerpoTbEgresos.append(FilasHTML);

    //armando tfoot (totales)
    strFoot += '<tr>'+
                  '<th colspan="2">TOTALES</th>' +
                  '<th class="text-right" style="text-align:right">'+ Number(totalCantidad).toFixed(2) +'</th>' +
                  '<th class="text-right" style="text-align:right">'+ Number(totalPrecio).toFixed(2)  +'</th>' +
                  '<th class="text-right" style="text-align:right">'+ Number(totalTotal).toFixed(2)  +'</th>' +
                '</tr>';
                FootTbEgresos.append(strFoot);
  }, "JSON");
}

function exportarReporte(){
    var opciones = {
        sistema: 'REPORTE EGRESOS',
        title: 'REPORTE EGRESOS',
        filename: 'REPORTE EGRESOS',
        empresa: 'PRUEBA',
    }

    var parametros = {
        ruc: '',
        nomUsuario: '',
        //fechaInicio: $('#txtFecha').val(),
        //usuarioImpresion: $("#cmbCajaGestion option:selected").text()
    }
    fnExcelReport("TbEgresos", opciones, parametros, "REPORTE EGRESOS");
}

</script>