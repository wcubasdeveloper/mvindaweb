        <img src="http://www.abexacloud.com/XBest/Adjunto/imagenproducto/20602732402/imgproducto_2622.jpg" />


        <!-- News letter area  End -->
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v11.0&appId=3058970330780590&autoLogAppEvents=1" nonce="RV39vIoK"></script>


       <!-- Shop details Area start -->
         <section class="product-details-area mtb-60px ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="product-details-img product-details-tab product-details-tab-2">
                                
                                <div class="zoompro-wrap-2 zoompro-2">
                                    <div id="sectionfotoproducto" class="zoom">
                                        <center>
                                            <a href="http://www.abexacloud.com/XBest/Adjunto/imagenproducto/20602732402/imgproducto_2622.jpg" class="zoom">
                                            <img src="http://www.abexacloud.com/XBest/Adjunto/imagenproducto/20602732402/imgproducto_2622.jpg" /></a>
                                        </center>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="product-details-content">
                                <h2 id="lblnombreProducto">-</h2>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <!-- <li class="old-price">$23.90</li> -->
                                        <li class="cuttent-price" id="lblprecioproducto" >-</li>
                                    </ul>
                                </div>
                                <div class="pro-details-list">
                                    <p id="lblcaracteristicas">-</p>
                                </div>
                                <div class="pro-details-quality mt-0px">
                                    <div class="cart-plus-minus">
                                        <div class="dec qtybutton" style="border-right: 1px solid #8080803b;" onclick="disminuyecantidadIni($(this));">-</div>
                                        <input id="txtcantidad" class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                        <div class="inc qtybutton" onclick="aumentacantidadIni($(this));" style="border-left: 1px solid #8080803b;" >+</div>
                                    </div>
                                    <div class="pro-details-cart btn-hover">
                                        <button id="btnagregaralcarro"  type="button" onclick="agregaralcarrito();"    >Agregar al carrito <span class="lnr lnr-cart"></span></button>
                                        <!-- <a href="#">Agregar al carrito  <span class="lnr lnr-cart"></span> </a> -->
                                    </div>
                                </div>
                            
                                <div class="pro-details-social-info">
                                    <!-- <span style="padding-top: 4px;">Compartir</span> -->
                                    <div class="social-info">
                                        <ul>
                                            <!-- <li>
                                                <img title="Compartir en facebook" style="width: 38px;cursor:pointer" src="https://images.vexels.com/media/users/3/223136/isolated/preview/984f500cf9de4519b02b354346eb72e0-facebook-icon-redes-sociales-by-vexels.png" />
                                            </li> -->
                                            <li id="social_facebook">
                                                <div class="social_action">
                                                    <div class="fb-share-button" 
                                                    data-size="large" 
                                                    data-href="https://www.w3schools.com/w3css/w3css_modal.asp" 
                                                    data-type="button"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pro-details-policy">
                                    <ul>
                                        <li><img src="<?=base_url()?>/assets/abelostyle/assets/images/icons/policy.png" alt="" /><span>Seguridad en la entrega</span></li>
                                        <li><img src="<?=base_url()?>/assets/abelostyle/assets/images/icons/policy-2.png" alt="" /><span>Servicio de delivery</span></li>
                                        <li><img src="<?=base_url()?>/assets/abelostyle/assets/images/icons/policy-3.png" alt="" /><span>Comunicación en todo momento</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<script>
    var URL_BASE = '<?=base_url()?>';
    var codproducto = '<?=$codproducto?>';
    var itemProducto = null;
    $(document).ready(function () {
        // getproductosBusqueda();
        // $('#txtbusquedaproducto').val(terminoBusqueda);
        mostrarProductosEnOferta();
    });

    var URL_IMG_ZOOM = null;
    function mostrarProductosEnOferta(){
        //$('#sectionOfertas').empty();
        var URL_GET_PRODUCTOS = "<?php echo base_url()."XbestServicio/getProductosById" ?>";
        var data = {
            codproductos : codproducto
         };
        //
        $.post(URL_GET_PRODUCTOS, data, function (rpta) {
            //
            if(rpta.length == 1){

            
                var codProducto =  rpta[0]["CodProducto"];
                var nombreProducto = rpta[0]["NomProducto"];
                var marcaProducto = rpta[0]["Marca"];
                var caracteristicas = rpta[0]["Caracteristicas"];
                var precioVenta = rpta[0]["PrecioVenta"];
                var codmoneda = rpta[0]["CodMoneda"];
                var urlproducto = rpta[0]["UrlImagen"];
                //
              
                //
                var precio_venta_soles = (codmoneda == 1 ? precioVenta : (precioVenta * COSTO_DOLAR_HOY) );
                var precio_venta_dolares = (codmoneda == 2 ? precioVenta : (precioVenta/COSTO_DOLAR_HOY) );
                var urlimagen = ( urlproducto.length == 0 ? '<?=base_url()?>assets/abelostyle/assets/images/product-image/6.jpg' : 'http://www.abexacloud.com/XBest/Adjunto/imagenproducto/20602732402/'+ urlproducto )

                itemProducto = {
                    idproducto : codProducto,
                    nomProducto : nombreProducto,
                    marca : marcaProducto,
                    nombreurlimg : urlimagen,
                    ventasoles : precio_venta_soles,
                    ventadolares : precio_venta_dolares,
                    cantidad : 0
                }

                $('#lblnombreProducto').text(nombreProducto);
                $('#lblprecioproducto').text('S./ '+precio_venta_soles.toFixed(2) + ' ($' +precio_venta_dolares.toFixed(2) + ')' );
                $('#lblcaracteristicas').text(caracteristicas);
                

                // $('.imagenproductopequenio').attr('data-image',urlimagen)
                // $('.imagenproductopequenio').attr('data-zoom-image',urlimagen)
                // $('.imagenproductopequenio').attr('src',urlimagen)

                // $('.imagenproducto').attr('data-zoom-image',urlimagen)
                $('#fotoproducto').attr('src',urlimagen);
                URL_IMG_ZOOM = urlimagen;
                // console.log("nombreProducto", nombreProducto)
                // console.log("url----->", URL_IMG_ZOOM);
                // $('#sectionfotoproducto').zoom();
            }
            $(".se-pre-con").fadeOut("slow");
        },'JSON');
    }

    function disminuyecantidadIni(elemento){
        var inputcantidad = elemento.parent().find('input').eq(0);
        var currcantidad = inputcantidad.val();
        if(Number(currcantidad) == 1){
            return false;
        }
        var nuevacantidad = Number(currcantidad) - 1
        inputcantidad.val(nuevacantidad);   
    }

    function aumentacantidadIni(elemento){
        var inputcantidad = elemento.parent().find('input').eq(0);
        var currcantidad = inputcantidad.val();
        var nuevacantidad = Number(currcantidad)+1
        inputcantidad.val(nuevacantidad);
    }


    function agregaralcarrito(){
        var getProductosEnCarrito = getLocalDataCarrito();
        var rptaBusquedaProducto = null;
        var datatemparrprod = [];
        var cantidadingresada = Number($('#txtcantidad').val());
        //
        itemProducto.cantidad = cantidadingresada;
        if(!getProductosEnCarrito){
            setLocalDataCarrito('[]');
            getProductosEnCarrito = getLocalDataCarrito();
            //
            getProductosEnCarrito = JSON.parse(getProductosEnCarrito)
            //
            // console.log(getProductosEnCarrito)
            console.log("3-->");
            if(itemProducto){
                console.log("4-->");
                
                rptaBusquedaProducto = busquedaDeProducto(itemProducto.idproducto);
                console.log("5-->");
                if(!rptaBusquedaProducto){ //si no está el producto en el carrito
                    // console.log("no está en el carrito-->");
                    console.log("6-->");
                    
                    getProductosEnCarrito.push(itemProducto);
                    setLocalDataCarrito( JSON.stringify(getProductosEnCarrito));
                    $('#txtcantidad').val(1)
                }else{ //si está el producto en el carrito
                    alert("producto existente");
                }
            }
        }else{
            getProductosEnCarrito = JSON.parse(getProductosEnCarrito);
            if(itemProducto){
                rptaBusquedaProducto = busquedaDeProducto(itemProducto.idproducto);
                //
                if(!rptaBusquedaProducto){ //producto no encontrado
                    console.log("producto no encontrado-->")
                    getProductosEnCarrito.push(itemProducto);
                    setLocalDataCarrito( JSON.stringify(getProductosEnCarrito));
                }else{ //producto encontrado
                    var rpta = setCantidadProductoCarrito(itemProducto.idproducto, itemProducto.cantidad);
                    console.log(rpta);
                    var dataaa = JSON.parse(getLocalDataCarrito()); //  JSON.parse(getLocalDataCarrito());
                    if(rpta.codresult == 1){
                        
                        $('#btnagregaralcarro').prop('disabled', true).css('background', 'rgb(38 108 251 / 27%)');
                        var interval = setInterval(function() {
                            Swal.fire({
                                icon: 'success',// : 'error',
                                title: "El producto se agegró correctamente al carrito de compras.",
                                showConfirmButton: false,
                                timer: 3000
                            });    
                            $('#btnagregaralcarro').prop('disabled', false).css('background', '#266cfb');
                            $('#txtcantidad').val(1);
                            clearInterval(interval);
                        }, 1000);

                        
                        // alert("se agregó el producto con éxito 2");
                        // console.log("--->", dataaa);
                    }
                }
            }
        }
        listarProductoEnCarrito();
    }
    //limpiarDataLocalStorage();
    //  var dataaa = JSON.parse(getLocalDataCarrito()); //  JSON.parse(getLocalDataCarrito());
    //  console.log("--->", dataaa);
</script>