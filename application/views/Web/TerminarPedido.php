<style>

    .tab {
    /* display: none; */
    }

    /* Make circles that indicate the steps of the form: */
    .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
    }

    /* Mark the active step: */
    .step.active {
    opacity: 1;
    }


    #mapaLocalizacion .centerMarker{
        position:absolute;
        /*url of the marker*/
        background:url(http://maps.gstatic.com/mapfiles/markers2/marker.png) no-repeat;
        /*center the marker*/
        top:50%;left:50%;
        z-index:1;
        /*fix offset when needed*/
        margin-left:-10px;
        margin-top:-34px;
        /*size of the image*/
        height:34px;
        width:20px;
        cursor:pointer;
    }
</style>

<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8tGjlECbGQm-EsVM95TBnCl07KYl7eLo&callback=inicializarmapa">
</script>

<div class="checkout-area mt-50px mb-40px">
    <div class="container">
        <div class="row">
         

            <div class="col-lg-8" id="regForm" >


                <div class="billing-info-wrap tab">
                    <h3>Datos personales</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20px">
                                <label>Nombres </label>
                                <input id="txtnombresolic" requerido="SI" class="requerido" type="text" />
                                <label style="color:red;" hidden>Es necesario llenar este campo</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20px">
                                <label>Apellidos</label>
                                <input id="txtapellidosolic" requerido="SI" class="requerido" type="text" />
                                <label style="color:red;" hidden>Es necesario llenar este campo</label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20px">
                                <label>Correo</label>
                                <input id="txtcorreosolic" requerido="SI" class="requerido" type="text" />
                                <label style="color:red;" hidden>Es necesario llenar este campo</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20px">
                                <label>Teléfono ó Celular</label>
                                <input id="txtcelularsolic" requerido="SI" maxlength="9" class="requerido" type="number" />
                                <label style="color:red;" hidden>Es necesario llenar este campo</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="billing-info-wrap tab" >
                    <h3>Datos de recepción</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20px">
                                <label>Persona recepciona</label>
                                <input id="txtpersonadirecc" requerido="SI"  type="text" />
                                <label style="color:red;" hidden>Es necesario llenar este campo</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20px">
                                <label>Teléfono contacto</label>
                                <input id="txttelcontdirecc" requerido="SI" type="text" />
                                <label style="color:red;" hidden>Es necesario llenar este campo</label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20px">
                                <label>Dirección</label>
                                <input id="txtdirecciondirecc" requerido="SI" type="text" />
                                <label style="color:red;" hidden>Es necesario llenar este campo</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20px">
                                <label>Referencia (opcional)</label>
                                <input id="txtreferenciadirecc" requerido="NO" type="text" />
                                <label style="color:red;" hidden>Es necesario llenar este campo</label>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <p style="padding-bottom: 5px;" >Nota: Mueva el mapa hasta encontrar la ubicación de la entrega del pedido.</p>
                            <div id="mapaLocalizacion" style="height:400px">

                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div style="float:right;padding-top: 11px;">
                        <!-- <button type="button" id="prevBtn" onclick="nextPrev(-1)" 
                            style="font-weight: 400; font-size: 20px; line-height: 35px; color: white; padding: 0 19px 0 19px; background: rgb(224 16 24); vertical-align: 4px; border-radius: 5px; text-transform: capitalize; margin-left: 5px;"
                         >ANTERIOR</button> -->
                        <!-- <button type="button" id="nextBtn" onclick="nextPrev(1)" 
                            style="font-weight: 400; font-size: 20px; line-height: 35px; color: white; padding: 0 19px 0 19px; background: #4caf50; vertical-align: 4px; border-radius: 5px; text-transform: capitalize; margin-left: 5px;"
                        >REGISTRAR PEDIDO</button> -->
                    </div>
                </div>
     
                <!-- Circles which indicates the steps of the form: -->
                <!-- <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>

                </div> -->
            </div>

    
            <div class="col-lg-4 mt-md-30px mt-lm-30px ">
                <div class="your-order-area">
                    <h3>Tu pedido</h3>
                    <div class="your-order-wrap gray-bg-4">
                        <div class="your-order-product-info">
                            <div class="your-order-top">
                                <ul>
                                    <li id="cantidadproductos" >2 Productos</li>
                                    <li><span  style="color: #266cfb;cursor:pointer" onclick="verDetalleProductos();" >Ver productos</span> </li>
                                </ul>
                            </div>
                            <div class="your-order-middle">
                                    <ul>
                                        <li><span class="order-middle-left">Subtotal</span> <span class="order-price" id="lblsubtotalpagocarrito"> S/. 1520.00 ($ 15.00) </span></li>
                                        <li><span class="order-middle-left">Envio</span> <span class="order-price">Entrega a domicilio</span></li>
                                    </ul>
                            </div>
   
                            <div class="your-order-total">
                                <ul>
                                    <li class="order-total">Total</li>
                                    <li id="lbltotalpagocarrito">-</li>
                                </ul>
                            </div>
                        </div>
                            <div class="payment-method">
                                <div class="payment-accordion element-mrg">
                                    <div class="panel-group" id="accordion">
                                        <div class="panel payment-accordion">
                                            <div class="panel-heading" id="method-one">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#method1">
                                                        Información
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="method1" class="panel-collapse collapse show">
                                                <div class="panel-body">
                                                    <p>En breve se comunicará el encargado de ventas, para la confirmación del pedido.</p>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="Place-order mt-25">
                            <button  class="btn-hover" id="btnRegistrarpedido" onclick="registrarPedidoFinal();" type="button" style="background: #4caf50;width:100%" >REGISTRAR PEDIDO</button>
                            <!-- <a class="btn-hover" href="#" >REGISTRAR PEDIDO</a> -->
                        </div>

                    </div>
                </div>
            </div>
    </div>
</div>


        <!-- Modal -->
        <div class="modal fade" id="modalDetalleProductos" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="font-size: 20px; color: gray;" >
                        Productos en el pedido
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="compare-table table-responsive">
                                    <table class="table mb-0" id="tbProductosDetalle" >
                                        <tbody>
                                            <tr>
                                                <td class="first-column">Price</td>
                                                <td class="pro-price">$295</td>
                                                <td class="pro-price">$275</td>
                                            </tr>

                                            <tr>
                                                <td class="first-column">Color</td>
                                                <td class="pro-color">Black</td>
                                                <td class="pro-color">Black</td>
                                            </tr>

                                            <tr>
                                                <td class="first-column">Stock</td>
                                                <td class="pro-stock">In Stock</td>
                                                <td class="pro-stock">In Stock</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->

<script>
    var currentTab = 0;
    var mapa = null;
    // $('#modalDetalleProducto').modal('show');
    $(document).ready(function () {
        //inicializarmapa();
        getDatosCarritoCompra();
        // $('.offcanvas-toggle').attr('href','#');
        $('#sectioncarrritocomprasico').css('display','none');
    });

    function getDatosCarritoCompra(){
        var productosCarrito = JSON.parse(getLocalDataCarrito()); //  JSON.parse(getLocalDataCarrito());
        var cantidadProducto = 0;
        var totalpagosoles = 0;
        var totalpagodolares = 0;
        //
        $('#tbProductosCarrito tbody').empty();
        $('#lbltextocantidadprod').text('-');
        $('#lblsubtotalpagocarrito').text('-');
        $('#lbltotalpagocarrito').text('-');

        $.each(productosCarrito, function(){
            cantidadProducto +=  Number(this.cantidad);
            // totalpagosoles += this.ventasoles;
            // totalpagodolares += this.ventadolares;
        });

        if(cantidadProducto > 0){
            $('#cantidadproductos').css('display','block');
            $('#cantidadproductos').text(cantidadProducto + ' producto' + (cantidadProducto>1 ? 's' : ''  ) );
        }else{
            $('#cantidadproductos').css('display','none');
        }
        
        //seteando data al carrito

        var htmlTabla = '';
        var totalpagosoles = 0;
        var totalpagodolares = 0;
        if(productosCarrito.length == 0){
            htmlTabla += '<tr><td colspan="4" style="text-align:center">No hay productos en el carrito</td></tr>';
            $(".se-pre-con").fadeOut("slow");
            $('#tbProductosCarrito tbody').append(htmlTabla);
            return false;
        }

        $.each(productosCarrito, function(){
            
            var cantidad = this.cantidad;
            var punitdolares = this.ventadolares;
            var punitsoles = this.ventasoles;
            
            var subtotalsoles = punitsoles * cantidad;
            var subtotaldolares = punitdolares * cantidad;
            totalpagodolares += subtotaldolares ;
            totalpagosoles += subtotalsoles;
            htmlTabla +=    '<tr>'+
                                '<td class="product-thumbnail" >' + '<img class="img-responsive" src="'+ this.nombreurlimg +'" alt="" />' + '</td>' +
                                '<td class="product-name">'+ this.nomProducto +' <p style="padding-top: 10px; font-weight: bold;"> S/. '+ this.ventasoles.toFixed(2) +' (<span>$ '+ this.ventadolares.toFixed(2) +'</span>)</p></td>' +
                                '<td class="product-quantity" >' +
                                    '<div class="cart-plus-minus" codproducto="'+ this.idproducto +'" >' +
                                        '<div class="dec qtybutton" onclick="disminuyecantidad('+ this.idproducto+',$(this));" >-</div>' +
                                            '<input class="cart-plus-minus-box" type="text" onkeypress="cambiocantidad();" name="qtybutton" value="'+ this.cantidad +'" />' +
                                        '<div class="inc qtybutton" onclick="aumentacantidad('+ this.idproducto +',$(this));">+</div>' +
                                    '</div>' +
                                '</td>' +
                                '<td class="product-remove">' +
                                        '<button type="button" onclick="quitarproductodecarrito($(this))" ><i class="fa fa-times"></i></button>' +
                                '</td>' +
                            '</tr>';
            
        });
        //
        console.log("--2---");
        $('#tbProductosCarrito tbody').append(htmlTabla);

        $('#lblsubtotalpagocarrito').text('S/.' + totalpagosoles.toFixed(2) + ' ($ ' + totalpagodolares.toFixed(2) + ')' );
        $('#lbltotalpagocarrito').text('S/.' + totalpagosoles.toFixed(2) + ' ($ ' + totalpagodolares.toFixed(2) + ')' );
    
        $(".se-pre-con").fadeOut("slow");
    }

    function verDetalleProductos(){

        $('#tbProductosDetalle tbody').empty();
        var productosCarrito = JSON.parse(getLocalDataCarrito()); // get data carrito
        var strHTMLtabla = '';
        //
        $.each(productosCarrito, function(){
            strHTMLtabla += '<tr>' + 
                                '<td class="first-column" style="padding-top: 0; padding-bottom: 0;" >' + '<img style="width:104px" src="'+ this.nombreurlimg +'" />' +'</td>' +
                                '<td class="pro-price">'+ this.nomProducto +' x '+ this.cantidad +'</td>' +
                                '<td class="pro-price">'+ 'S./ ' + this.ventasoles.toFixed(2) + ' ( $' + this.ventadolares.toFixed(2) +')' +'</td>' +
                            '</tr>';

        });
        $('#tbProductosDetalle tbody').append(strHTMLtabla);
        $('#modalDetalleProductos').modal('show');
    }

    function registrarPedidoFinal(){

        // var nombresolic = $('#txtnombresolic').val();
        // var apellidosolic = $('#txtapellidosolic').val();
        // var correosolic = $('#txtcorreosolic').val();
        // var celularsolic = $('#txtcelularsolic').val();
        // var personadirecc = $('#txtpersonadirecc').val();
        // var telefdirecc = $('#txttelcontdirecc').val();
        // var direcciondirecc = $('#txtdirecciondirecc').val();
        // var refdirecc = $('#txtreferenciadirecc').val();


    //////////////  DATOS DE PRUEBA /////////////////////////
        // $('#txtnombresolic').val('Jorgito');
        // $('#txtapellidosolic').val('Paz C');
        // $('#txtcorreosolic').val('stwtml@gmail.com');
        // $('#txtcelularsolic').val('987654321');
        // $('#txtdirecciondirecc').val('Mz A Lt 14 Asoc Virgen del Rosario');
        // $('#txtpersonadirecc').val('Rodolfo R. A');
        // $('#txtreferenciadirecc').val('Cruce universitaria con micaela');
        // $('#txttelcontdirecc').val('999999999');
    //////

        var latitud = mapa.getCenter().lat();
        var longitud =mapa.getCenter().lng();
        //
        var textoesrequerido = null;
        //
        var validaformulario = true;
        $.each($('#regForm').find('input'),function(){
            // console.log(this);
            textoesrequerido =  $(this).attr('requerido');
            var labelerror = $(this).parent();
            //
            // console.log("->", textoesrequerido);
            if ($(this).val() == "") {
                if(textoesrequerido == "SI"){
                    labelerror.find('label').eq(1).removeAttr('hidden');
                    validaformulario = false;
                }

                if(textoesrequerido == "NO"){
                    labelerror.find('label').eq(1).prop('hidden',true);
                }

            }else{
                labelerror.find('label').eq(1).prop('hidden',true);
            }
        });
        //
        console.log("validaformulario-->", validaformulario);
        //  console.log(latitud, longitud)

        //datos persona
        var nombres;
        var apellidos;
        var correo;
        var celular;

        //datos direccion
        var direccion;
        var persona_recepciona;
        var lugar_referencia;
        var latitudPedido;
        var longitudPedido;
        var telefono_contacto;
        
        //datos pedido
        var costototalsoles;
        var costototaldolares;
        var tipocambio;
        var cantidadProductos = 0;
        if(validaformulario){ //validó el formaulario correctamente
            $('#btnRegistrarpedido').attr('disabled','disabled');
            $('#btnRegistrarpedido').css({
                'opacity' : '0.4',
                'cursor': 'not-allowed'
            });
            //
            nombres = $('#txtnombresolic').val();
            apellidos = $('#txtapellidosolic').val();
            correo = $('#txtcorreosolic').val();
            celular = $('#txtcelularsolic').val();

            //datos direccion
            direccion =  $('#txtdirecciondirecc').val();
            persona_recepciona = $('#txtpersonadirecc').val();
            lugar_referencia = $('#txtreferenciadirecc').val();
            latitudPedido = latitud;
            longitudPedido = longitud;
            telefono_contacto = $('#txttelcontdirecc').val();
            
            //datos pedido
            costototalsoles = 0;
            costototaldolares = 0;
            tipocambio = 3.9;

            //serializado detllae
            var strDetalleSerializado = '';
            var datacarritocompra = JSON.parse(getLocalDataCarrito());
            //
            $.each(datacarritocompra, function(){
                strDetalleSerializado += this.idproducto + '|' + this.cantidad  + '|' +  this.ventadolares.toFixed(2) + '|' + this.ventasoles.toFixed(2) + '|' + this.nomProducto +'|' + this.marca + '|' +  'descripción del producto' + '~';
                cantidadProductos +=  this.cantidad ;
                costototalsoles += this.ventadolares;
                costototaldolares += this.ventasoles;
            });
            //
            strDetalleSerializado = strDetalleSerializado.substr(0, strDetalleSerializado.length -1);
            //
            var dataPedido = {
                datoscliente : nombres + '|' + apellidos + '|' + correo + '|' + celular,
                datosdireccion : direccion + '|' + persona_recepciona + '|' + lugar_referencia + '|' +  latitudPedido + '|' + longitudPedido + '|' + telefono_contacto,
                datospedido : cantidadProductos + '|' +  costototaldolares.toFixed(2) + '|' + costototalsoles.toFixed(2) + '|' + tipocambio.toFixed(2),
                datosPedidoDetalle : strDetalleSerializado,
                nomcli : nombres + ' ' + apellidos,
                correocli : correo,
                numcelcli : celular
            }
            //
            var URL_REGISTRA_PEDIDO =  URL_BASE + 'Registros/procRegistraPedido';
            //
   
            $.post(URL_REGISTRA_PEDIDO, dataPedido, function (rpta) {
                
                $('#btnRegistrarpedido').removeAttr('disabled');
                $('#btnRegistrarpedido').css({
                    'opacity' : '1',
                    'cursor': 'pointer'
                });

                var codResultado = Number(rpta["CodResultado"]);
                var desResultado = rpta["DesResultado"];
                var codAuxiliar  =  rpta["CodAuxiliar"];
                
                //
                if(codResultado == 0){
                    Swal.fire({
                        icon:  (codResultado == 1 ?  'success' : 'error' ),
                        title: desResultado,
                        showConfirmButton: false,
                        timer: 3000
                    });
                }else{
                    limpiarCarritoCompras();
                    Swal.fire({
                        title: '<strong>Información </strong>',
                        icon: 'info',
                        html:desResultado,
                            // 'Su pedido fué registrado correctamente con el código <h2>P00000'+ codAuxiliar +' .</h2>',
                        showCloseButton: true,
                        showCancelButton: false,
                        focusConfirm: false,
                        confirmButtonText:
                            '<i class="fa fa-thumbs-up"></i> Ok!',
                        confirmButtonAriaLabel: 'Thumbs up, great!',
                    }).then((result) => {
                        window.location.replace(URL_BASE);
                    });
                }

            },"JSON");

        }
    }

    function validarFormulariopedido(){

    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        console.log('input-->',y.length)
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            var elementoinput = $(y[i]);
            var labelerror = elementoinput.parent();

            if (y[i].value == "") {
                
                var textoesrequerido = labelerror.find('input').eq(0).attr('requerido');
                if(textoesrequerido == "SI"){
                    // console.log(labelerror.find('label').eq(1)[0]);
                    valid = false;
                    labelerror.find('label').eq(1).removeAttr('hidden');

                }
                
                if(textoesrequerido == "NO"){
                    // console.log(labelerror.find('label').eq(1)[0]);
                    labelerror.find('label').eq(1).prop('hidden',true);
                }
                // console.log('textoesrequerido->',textoesrequerido);
            }else{
                labelerror.find('label').eq(1).prop('hidden',true);
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }

        return valid; // return the valid status
    }

    function inicializarmapa(){
        $(".se-pre-con").fadeOut("slow");
        var latLng = new google.maps.LatLng( -12.0453, -77.0311);
        var mapOptions = {
        center : latLng,
        zoom : 11,
     
        mapTypeId : google.maps.MapTypeId.ROADMAP
        };
        mapa = new google.maps.Map(document.getElementById("mapaLocalizacion"), mapOptions);

        $('<div/>').addClass('centerMarker').appendTo(mapa.getDiv())
             //do something onclick
            .click(function(){
               var that=$(this);
               console.log(that)
               if(!that.data('win')){
                that.data('win',new google.maps.InfoWindow({content:'this is the center'}));
                that.data('win').bindTo('position',map,'center');
               }
               that.data('win').open(map);
            });

        //showTab(currentTab); // Display the current tab
    }

    function showTab(n) {
        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        // ... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
            console.log("->", 'none');
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "REGISTRAR";
        } else {
            document.getElementById("nextBtn").innerHTML = "SIGUIENTE";
        }
        // ... and run a function that displays the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
      
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
            //...the form gets submitted:
            //document.getElementById("regForm").submit();
            registrarPedidoFinal();

            
            return false;
        }
        // Otherwise, display the correct tab:

     
        showTab(currentTab);
    }


    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class to the current step:
        x[n].className += " active";
    }


</script>