<style>
        
        
#fb-share-button {
    background: #4381fffa;
    border-radius: 3px;
    font-weight: 600;
    padding: 0px 9px;
    display: inline-block;
    position: static;
}

#fb-share-button:hover {
    cursor: pointer;
    background: #213A6F
}

#fb-share-button svg {
    width: 18px;
    fill: white;
    vertical-align: middle;
    border-radius: 2px
}

#fb-share-button span {
    vertical-align: middle;
    color: white;
    font-size: 14px;
    padding: 0 3px
}
        </style>
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
                                            <a href="<?=$UrlImagen?>" class="zoom">
                                            <img src="<?=$UrlImagen?>" /></a>
                                        </center>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="product-details-content">
                                <h2 id="lblnombreProducto"><?=$NomProducto?></h2>
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
                                        <li class="cuttent-price" id="lblprecioproducto" ><?=$PrecioProducto?></li>
                                    </ul>
                                </div>
                                <div class="pro-details-list">
                                    <p id="lblcaracteristicas"><?=$Caracteristicas?></p>
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
                                        <ul style="display: flex;" >
                                            <li id="social_facebook">
                                                <div id="contenedorFbShared">
                                                    <a href="#" id="linksharedfb" data-type="facebook"  data-url="<?=$urlfbshared?>" data-title="Mvinda S.A.C." data-description="Monitor LG de 40 pulgadas." data-media="" class="prettySocial fa fa-facebook" style="width: 100%; background-color: #1877f2; color: white; padding-left: 10px; padding-right: 10px; border-radius: 5px;" >&nbsp; &nbsp;Compartir</a>
                                                </div>   
                                            </li>

                                            <li style="padding-left: 24px;" >
                                                <a id="linksharedWhatsapp" 
                                                href="#" 
                                                class="whatsapp" target="_blank" style="display: initial;background-color: #25d366;color: white;padding-left: 10px;font-size: 21px;padding-right: 10px;padding-top: 3px;padding-bottom: 3px;border-radius: 5px;" > <i class="fa fa-whatsapp whatsapp-icon"></i></a>
                                                
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

            <script src="http://sonnyt.com/prettySocial/jquery.prettySocial.min.js"></script>

<script>
    var URL_BASE = '<?=base_url()?>';
    var codproducto = '<?=$codproducto?>';
    var itemProducto = null;
    //
    $(document).ready(function () {
        // getproductosBusqueda();
        // $('#txtbusquedaproducto').val(terminoBusqueda);
        //mostrarProductosEnOferta();;;;;
        $(".se-pre-con").fadeOut("slow");
        
        socialwhatsappshared();
    });
    
    function socialwhatsappshared(){
        var urlproductodetalle = 'Web/DetalleProducto/?codigoProducto=' +codproducto;

        $('#linksharedWhatsapp').attr('href',"https://web.whatsapp.com/send?text=" + URL_BASE +  urlproductodetalle);

        $('.prettySocial').prettySocial();
    }

    function compartirProducto(e){
        alert(2)
        var url = "http://www.mvinda.com/Web/DetalleProducto/?codigoProducto=122";
        // window.open('https://www.facebook.com/sharer/sharer.php?u=' + url,
        //     'facebook-share-dialog',
        //     'width=800,height=600'
        // );
       


        //$('img').click(function(){
            var $this = $(this);
            var obj = {
                
            method: 'feed',
            link: url,
            picture: 'http://www.abexacloud.com/XBest/Adjunto/imagenproducto/20602732402/imgproducto_122.png',
            name: "este es el titulo",
            caption: 'Your cdescripcion here',
            description: 'Your description here.'
            };
            function callback(response) {
                alert( "Post ID: " + response['post_id']);
            }

            FB.ui(obj,callback);
        //});
        return false;

    }

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
                $('title').text(nombreProducto)
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
                
                $('#imagenproductodetalle').attr('src',urlimagen);
                // $('.imagenproducto').attr('data-zoom-image',urlimagen)
                $('#fotoproducto').attr('src',urlimagen);

                $('.prettySocial').prettySocial();

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