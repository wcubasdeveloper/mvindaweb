
<link href="<?=base_url()?>assets/csoftcontent/js/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
<script src="<?=base_url()?>assets/csoftcontent/js/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<link href="<?=base_url()?>assets/csoftcontent/js/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
<script src="<?=base_url()?>assets/csoftcontent/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?=base_url()?>assets/csoftcontent/js/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
<link href="<?=base_url()?>assets/csoftcontent/js/plugins/select2/select2.min.css" rel="stylesheet" />
<script src="<?=base_url()?>assets/csoftcontent/js/plugins/select2/select2.full.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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
            <h2>CATEGORIAS EN WEB</h2>
        </div>

        <div class="col-lg-4">
            <label>Categorias</label>
            <select id="selectCategoria" class="form-control" >
                
            </select>
        </div>
      

        <div class="col-lg-2">
            <label>&nbsp;&nbsp;</label>
            <input type="button" value="Registrar" onclick="registrarNuevaCategoriaView()" class="form-control primary" style="background-color: #1ab394; color: white;" />
            
        </div>

   </div>
   <br>
   <div class="row wrapper border-bottom white-bg page-heading" style="padding-top: 20px;" >
      <div class="col-lg-12">
        <br>
        <div class="table-responsive">
          <table class="table table-bordered" id="tbCategoriasView">
            <thead>
              <tr>
                <th>N</th>
                <th>CATEGORIA</th>
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
    getCategorias();
    listarCategoriasView();
    // listarProductosNuevos();
});

function listarCategoriasView(){
    var parametros = '';
    var indice = 18;
    var nomproc = "MvindaProcPedido";
    $.post(URL_BASE+'Registros/procGeneral', {
        parametros: parametros,
        indice: indice,
        nombreProcedimiento:nomproc
    }, function (respuesta) {
        //
        JSONCATEGORIAS = respuesta;

        console.log("respuesta", respuesta);
        $('#tbCategoriasView tbody').empty();

        var strHTMLtabla = '';
        $.each(respuesta,function(i){
        strHTMLtabla += '<tr>'+
                            '<td>'+ (i+1) +'</td>' +
                            '<td>'+ this.nombrecategoria +'</td>' +
                            '<td>'+ this.reg_date +'</td>' +
                            '<td>' + '<button  data-nomcategoria="'+ this.nombrecategoria +'"  data-codcategoriaview="'+ this.idcategoriaview +'" type="button" data-nomproducto="'+ this.nombreproducto +'" class="btn btn-danger btn-xs" onclick="confirmarAnulacion($(this))" ><i class="fa fa-trash"></i></button>' + '</td>' +
                        '</tr>';
        });
        $('#tbCategoriasView tbody').append(strHTMLtabla);
    },"JSON")
}

var JSONCATEGORIAS = null;
//
function registrarNuevaCategoriaView(){
  var codCategoriaXbest = $('#selectCategoria').val();
  var nomcategoriaselect =  $("#selectCategoria option:selected" ).text();
  //

  var estaelproducto = false;
  $.each(JSONCATEGORIAS, function(){

    if(Number(this.idcategoriaxbest) == Number(codCategoriaXbest) ){
      estaelproducto = true;
    }
  });
 
  if(estaelproducto){
    toastr.error("El producto "+ nomcategoriaselect + " ya está registrado.", 'Error');
  }else{

    if(JSONCATEGORIAS.length == 2){
        toastr.error("Solo puede registrarse 2 categorias", 'Error');
        return false;
    }

    var parametros = codCategoriaXbest + '|' + nomcategoriaselect;
    var indice = 17;
    var nomproc = "MvindaProcPedido";
    //
    $.post(URL_BASE+'Registros/procGeneral', {
      parametros: parametros,
      indice: indice,
      nombreProcedimiento:nomproc
    }, function (respuesta) {
        var codrespuesta = respuesta[0]["CodResultado"];
        var desrespuesta = respuesta[0]["DesResultado"];
        listarCategoriasView();
        
        if(Number(codrespuesta) == 1){
            toastr.success(desrespuesta, 'Éxito');
        }else{
            toastr.error(desrespuesta, 'Error');
        }

    },"JSON")
  }
}


function confirmarAnulacion(elemento){
    var nombreCategoriaView = elemento.attr('data-nomcategoria');
    var idcategoriaView = elemento.attr('data-codcategoriaview'); 
    //
    Swal.fire({
        title: '<strong>Información</strong>',
        icon: 'info',
        html:
            'Estas seguro de anular la categoria ' + '<h2>'+ nombreCategoriaView +'</h2>',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText:
            'SI',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText:
            'NO',
        // cancelButtonAriaLabel: 'Thumbs down'
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            //Swal.fire('Saved!', '', 'success');

            var parametros = idcategoriaView;
            var indice = 19;
            var nomproc = "MvindaProcPedido";
            //
            $.post(URL_BASE+'Registros/procGeneral', {
            parametros: parametros,
            indice: indice,
            nombreProcedimiento:nomproc
            }, function (respuesta) {
                var codrespuesta = respuesta[0]["CodResultado"];
                var desrespuesta = respuesta[0]["DesResultado"];
                listarCategoriasView();
                
                if(Number(codrespuesta) == 1){
                    toastr.success(desrespuesta, 'Éxito');
                }else{
                    toastr.error(desrespuesta, 'Error');
                }

            },"JSON");

        } 
        // else if (result.isDenied) {
        //     Swal.fire('Changes are not saved', '', 'info')
        // }
    })

}

// var JSONPRODUCTOS = null;
// function listarProductosNuevos(){
//   $('#tbProductosnuevos tbody').empty();
//   var parametros = '';
//   var indice = 42;
//   var nomproc = "ProcSlider";
//   $.post(URL_BASE+'Registros/procGeneral', {
//     parametros: parametros,
//     indice: indice,
//     nombreProcedimiento:nomproc
//   }, function (respuesta) {
//     JSONPRODUCTOS = respuesta;
//     // $('#txttipodocumento').empty();
//     var strHTMLtabla = '';
//     $.each(respuesta,function(i){
//       strHTMLtabla += '<tr>'+
//                         '<td>'+ (i+1) +'</td>' +
//                         '<td>'+ this.nombreproducto+'</td>' +
//                         '<td>'+ this.categoria +'</td>' +
//                         '<td>'+ this.reg_date +'</td>' +
//                         '<td>' + '<button data-nomcategoria="'+ this. +'"  data-codcategoriaview="'+ this.idcategoriaview +'" type="button" data-nomproducto="'+ this.nombreproducto +'" class="btn btn-danger btn-xs" onclick="confirmarAnulacion('+ this.idproductonuevo +', $(this))" ><i class="fa fa-trash"></i></button>' + '</td>' +
//                       '</tr>';
//     });
//     $('#tbProductosnuevos tbody').append(strHTMLtabla);
//   },"JSON")
// }



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
        // getProductosByCategoria();
    },'JSON')
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


</script>