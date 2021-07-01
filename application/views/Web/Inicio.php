<div class="offcanvas-overlay"></div>

   <!-- Slider Start -->
   <div class="slider-area slider-dots-style-3">
            <div class="hero-slider-wrapper">
                <?php foreach($imgslider as $slider):?>
                    <!-- Single Slider  -->
                    <div class="single-slide slider-height-3 bg-img d-flex"  data-bg-image="<?php echo ($slider["Nombre"] == null) ? base_url()."assets/abelostyle/assets/images/slider-image/sample-7.jpg" :  
                    base_url()."assets/images/slider/".$slider["UrlImagen"]  ?>" data-bg-image="<?=base_url()?>assets/abelostyle/assets/images/slider-image/sample-7.jpg">
                        <div class="container align-self-center">
                            <div class="slider-content-1 slider-animated-1 text-left">
                                <h1 class="animated color-black">
                                   <?php echo $slider["Nombre"] ?>
                                    <!-- <br />
                                    Wifi-Camera -->
                                </h1>
                                <!-- <p class="animated color-gray">DCS-934L day & night wifi camera.</p> -->
                                <!-- <a href="##" class="shop-btn animated">Ver mas productos</a> -->
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
               
                <!-- Single Slider  -->
                <!-- <div class="single-slide slider-height-3 bg-img d-flex" data-bg-image="<?=base_url()?>assets/abelostyle/assets/images/slider-image/sample-8.jpg">
                    <div class="container align-self-center">
                        <div class="slider-content-1 slider-animated-2 text-left ">
                            <h1 class="animated color-black">
                                Xbox One Pro <br />
                               Wireless Controller
                            </h1>
                            <p class="animated color-gray">Revolution Pro Controller.</p>
                            <a href="#shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                        </div>
                    </div>
                </div>
          
                <div class="single-slide slider-height-3 bg-img d-flex" data-bg-image="<?=base_url()?>assets/abelostyle/assets/images/slider-image/sample-9.jpg">
                    <div class="container align-self-center">
                        <div class="slider-content-1 slider-animated-3 text-left">
                            <h1 class="animated color-black">
                                Bobovr Z4 Virtual <br />
                                Reality 3D Glasses
                            </h1>
                            <p class="animated color-gray">Virtual reality through a new lens</p>
                            <a href="#shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                        </div>
                    </div>
                </div> -->
                <!-- Single Slider  -->
            </div>
        </div>
        <!-- Slider End -->

        <!-- Arrivals Area Start --> 
        <div class="arrival-area mt-20px mt-lg-50px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>Nuevos productos</h2>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs sub-category">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="##tab-1"></a>
                                </li>
                           
                            </ul>
                            <!-- Nav tabs -->
                        </div>
                    </div>
                </div>
                 <!-- tab content -->
                <div class="tab-content">
                    <!-- First-Tab -->
                    <div id="tab-1" class="tab-pane active fade">
                        <!-- Arrivel slider start will -->
                        <div id="sectionNuevoProductos" class="arrival-slider-wrapper slider-nav-style-1"> 
                           
                        </div>
                        <!-- Arrivel slider end -->
                    </div>
                    <!-- First-Tab -->
              
                </div>
                 <!-- tab content end-->
            </div>
        </div>
        <!-- Arrivals Area End --> 

        <div id="sectioncatdinamicas">
                    
        </div>


        <!-- Banner Area Start -->
        <div class="banner-area mt-20px mb-20px ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner-wrapper">
                            <a href="#shop-4-column.html"><img src="<?=base_url()?>assets/abelostyle/assets/images/banner-image/11.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner-wrapper">
                            <a href="#shop-4-column.html"><img src="<?=base_url()?>assets/abelostyle/assets/images/banner-image/12.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End --> 
        <!-- Hot Deal Area Start -->
        <div  class="hot-deal-area bg-light-gray pt-50px pb-40px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>OFERTAS</h2>
                        </div>
                    </div>
                </div>
                <div id="sectionOfertas" class="hot-deal-slider-wrapper-2 slider-nav-style-2">

                </div>
            </div>
        </div>
        <!-- Hot Deal Area End -->
        <!-- Best sell Area Start --> 
        <div class="best-sell-area mt-50px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>Productos mas Vendidos</h2>
                        </div>
                    </div>
                </div>
                <div id="sectionmasvendidos"  class="best-sell-area-wrapper slider-nav-style-1 slider-nav-style-4">
                    
                    <div class="single-slider-item">
                        <article class="list-product text-center">
                            <div class="product-inner">
                                <div class="img-block">
                                    <a href="#single-product.html" class="thumbnail">
                                        <img class="first-img" src="<?=base_url()?>assets/abelostyle/assets/images/product-image/6.jpg" alt="" />
                                        <img class="second-img" src="<?=base_url()?>assets/abelostyle/assets/images/product-image/7.jpg" alt="" />
                                    </a>
                                    <div class="add-to-link">
                                        <ul>
                                            <li>
                                                <a class="quick_view" href="##" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="lnr lnr-magnifier"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-decs">
                                    <a class="inner-link" href="#shop-4-column.html"><span>Graphic Corner</span></a>
                                    <h2><a href="#single-product.html" class="product-link">SoundBox Pro Portable</a></h2>
                                    <div class="availability-list in-stock">Availability: <span>900 In Stock</span></div>
                                    <p>Android 8.1 (Oreo), Hisilicon Kirin 710 (12 nm), Octa-core (4x2.2 GHz Cortex-A73 &amp; 4x1.7 GHz Cortex-A53), Mali-G51 MP4</p>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="current-price">$29.51</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
        </div>
        <!-- Best sell Area End -->

      
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v11.0&appId=3058970330780590&autoLogAppEvents=1" nonce="RV39vIoK"></script>


        <!-- Modal -->
        <div class="modal fade" id="modalDetalleProducto" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="font-size: 20px; color: gray;" >
                        Detalle del producto
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 mb-lm-100px mb-sm-30px">
                                <div class="quickview-wrapper">
                                     <!-- slider -->
                                      <div class="gallery-top">
                                          <div class="single-slide"> 
                                                <img id="imgProductoselectModal" class="img-responsive m-auto" src="<?=base_url()?>assets/abelostyle/assets/images/product-image/8.jpg" alt="">
                                          </div>
                                      </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="product-details-content quickview-content">
                                    <span id="lbltextoNuevo" class="tag label label-warning" style="background-color: #f0ad4e; margin-right: 2px; color: white; padding-bottom: -1px; padding-left: 17px; padding-right: 22px;">Nuevo<span data-role="remove"></span></span>
                                    <h2 id="lblNombreproductomodal" style="padding-top: 7px;" >-</h2>
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
                                            <li style="text-decoration: line-through; color: #808080a8; font-weight: 100; font-size: 0.9em;" id="lblprecioantiguo" >$23.90</li>
                                            <li class="cuttent-price" id="lblpreciomodal">-</li>
                                        </ul>
                                    </div>
                                    <p class="quickview-para" id="lbldescripcionmodal">-</p>
                                 
                                    <div class="pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <div class="dec qtybutton" style="border-right: 1px solid #8080803b;" onclick="disminuyecantidadIni($(this));">-</div>
                                            <input class="cart-plus-minus-box" type="text" id="txtcantidad" name="qtybutton" value="1" />
                                            <div class="inc qtybutton" onclick="aumentacantidadIni($(this));" style="border-left: 1px solid #8080803b;" >+</div>
                                        </div>
                                        <div class="pro-details-cart btn-hover">
                                            <!-- <a href="##">Agregar al carrito</a> -->
                                            <button type="button" onclick="agregaralcarrito();" >Agregar al carrito</button>
                                        </div>
                                    </div>
                               
                                    <div class="pro-details-social-info">
                                        <!-- <span style="padding-top: 4px;">Compartir</span> -->
                                        <div class="social-info">
                                            <ul style="display: flex;" >
                                                <li style="display: flex" >
                                                    <!-- <img title="Compartir en facebook" style="width: 38px;cursor:pointer" src="https://images.vexels.com/media/users/3/223136/isolated/preview/984f500cf9de4519b02b354346eb72e0-facebook-icon-redes-sociales-by-vexels.png"> -->
                                                    <li id="social_facebook">
                                                        <a href="#" id="linksharedfb" data-type="facebook" data-url="" data-title="Mvinda S.A.C." data-description="Monitor LG de 40 pulgadas." data-media="" class="prettySocial fa fa-facebook" style="width: 100%; background-color: #1877f2; color: white; padding-left: 10px; padding-right: 10px; border-radius: 5px;" >&nbsp; &nbsp;Compartir</a>
                                                        
                                                    </li>

                                                    <li style="padding-left: 24px;" >
                                                        <a d="linksharedWhatsapp" href="#" class="whatsapp" target="_blank" style="display: initial;background-color: #25d366;color: white;padding-left: 10px;font-size: 21px;padding-right: 10px;padding-top: 3px;padding-bottom: 3px;border-radius: 5px;" > <i class="fa fa-whatsapp whatsapp-icon"></i></a>
                                                    </li>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
        <!-- JS
============================================ -->

<!-- Modal de producto -->
<div id="modalvistaproducto" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script src="http://sonnyt.com/prettySocial/jquery.prettySocial.min.js"></script>

<script>
    var URL_BASE = '<?=base_url()?>';
    $(document).ready(function () {
        getCategoriasView();
        getProductosNuevos();
    });
    //
    var ITEMPRODUCTO = {
        idproducto : 0,
        nomProducto : '',
        marca : '',
        nombreurlimg : '',
        ventasoles : '',
        ventadolares : '',
        cantidad : 0
    };
    //
    function verDetalleProducto(elemento){
    
        $('#txtcantidad').val(1);
        $('#lblNombreproductomodal').text('-');
        $('#lblpreciomodal').text('-');
        $('#lbldescripcionmodal').text('-');
        $('#lbltextoNuevo').text('-');
        $('#lblprecioantiguo').text('-');
        //
        $('#lblprecioantiguo').prop('hidden', true);
        //
        var codigoprod = elemento.attr('data-codproducto'); 
        var nombre = elemento.attr('data-nombre');
        var preciosoles = Number(elemento.attr('data-psoles'));
        var preciodolares = Number(elemento.attr('data-pdolares'));
        var caracteristicas = elemento.attr('data-caracteristicas');
        var urlprod = elemento.attr('data-urlimg');
        var marcaprod = elemento.attr('data-marca');
        var esproductoNuevo = elemento.attr('data-nuevo');
        var productoenoferta = elemento.attr('data-oferta');
        var percentdctooferta = elemento.attr('data-percentdcto');
        //
        var costoconofertasoles =  elemento.attr('data-costoofertasoles');
        var costoconofertadolares =  elemento.attr('data-costoofertadolares');
        //
        // console.log("percentdctooferta->", percentdctooferta);
        // console.log("oferta->", productoenoferta);
        console.log('esproductoNuevo-->',esproductoNuevo);
        $('#lbltextoNuevo').text('-').prop('hidden', true);

        if(esproductoNuevo == "SI"){
            $('#lbltextoNuevo').text('Nuevo').removeAttr('hidden');
        }
        //
        if(productoenoferta == "SI"){ //si es un producto en oferta 
            $('#lblprecioantiguo').removeAttr('hidden');
            $('#lblprecioantiguo').text('S/. ' + preciosoles.toFixed(2));
            $('#lbltextoNuevo').text('OFERTA : -' + percentdctooferta + '%' ).removeAttr('hidden');
            $('#lbltextoNuevo').text('OFERTA : -' + percentdctooferta + '%' ).removeAttr('hidden');
            //
            $('#lblpreciomodal').text('S./ '+ Number(costoconofertasoles).toFixed(2) + ' ($ '+ Number(costoconofertadolares).toFixed(2) +')');
        }else{
            $('#lblpreciomodal').text('S./ '+ Number(preciosoles).toFixed(2) + ' ($ '+ Number(preciodolares).toFixed(2) +')');
        }
        //
        var urlproductodetalle = 'Web/DetalleProducto/?codigoProducto=' +codigoprod;
        // console.log('urlproductodetalle->',urlproductodetalle);
        $('#lblNombreproductomodal').html(nombre);
        $('#lbldescripcionmodal').text(caracteristicas);
        $('#imgProductoselectModal').attr('src',urlprod);
        $('#btncompartirfacebook').attr('data-href',urlproductodetalle)
        $('#btncompartirfacebook').attr('href',urlproductodetalle)
        //
        ITEMPRODUCTO.idproducto = Number(codigoprod);
        ITEMPRODUCTO.nomProducto = nombre;
        ITEMPRODUCTO.marca = marcaprod;
        ITEMPRODUCTO.nombreurlimg = urlprod;
        ITEMPRODUCTO.ventasoles = Number(preciosoles);
        ITEMPRODUCTO.ventadolares = Number(preciodolares); 
        //
        $('#linksharedfb').attr('data-href',urlproductodetalle);
        $('#linksharedfb').attr('href',urlproductodetalle);

   
        $('#linksharedWhatsapp').attr('href', "Puedes encontrar mas información del producto Aqui " + " " + urlproductodetalle);

        $('#modalDetalleProducto').modal('show');
        $('.prettySocial').prettySocial();
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

    function accesodirectoagregacarrito(elemento){
        var codigoprod = elemento.attr('data-codproducto'); 
        var nombre = elemento.attr('data-nombre');
        var preciosoles = Number(elemento.attr('data-psoles'));
        var preciodolares = Number(elemento.attr('data-pdolares'));
        var caracteristicas = elemento.attr('data-caracteristicas');
        var urlprod = elemento.attr('data-urlimg');
        var marcaprod = elemento.attr('data-marca');
        ITEMPRODUCTO.idproducto = Number(codigoprod);
        ITEMPRODUCTO.nomProducto = nombre;
        ITEMPRODUCTO.marca = marcaprod;
        ITEMPRODUCTO.nombreurlimg = urlprod;
        ITEMPRODUCTO.ventasoles = Number(preciosoles);
        ITEMPRODUCTO.ventadolares = Number(preciodolares); 
        agregaralcarrito();
    }

    function agregaralcarrito(){

        var getProductosEnCarrito = getLocalDataCarrito();
        var rptaBusquedaProducto = null;
        var datatemparrprod = [];
        var cantidadingresada = Number($('#txtcantidad').val());
        //
        ITEMPRODUCTO.cantidad = cantidadingresada;
        if(!getProductosEnCarrito){
            setLocalDataCarrito('[]');
            getProductosEnCarrito = getLocalDataCarrito();
            //
            getProductosEnCarrito = JSON.parse(getProductosEnCarrito)
            //
            // console.log(getProductosEnCarrito)
            console.log("3-->");
            if(ITEMPRODUCTO){
                console.log("4-->");
                
                rptaBusquedaProducto = busquedaDeProducto(ITEMPRODUCTO.idproducto);
                console.log("5-->");
                if(!rptaBusquedaProducto){ //si no está el producto en el carrito
                    // console.log("no está en el carrito-->");
                    console.log("6-->");
                    
                    getProductosEnCarrito.push(ITEMPRODUCTO);
                    setLocalDataCarrito( JSON.stringify(getProductosEnCarrito));
                    $('#txtcantidad').val(1)
                }else{ //si está el producto en el carrito
                    alert("producto existente");
                }
            }
        }else{
            getProductosEnCarrito = JSON.parse(getProductosEnCarrito);
            if(ITEMPRODUCTO){
                rptaBusquedaProducto = busquedaDeProducto(ITEMPRODUCTO.idproducto);
                //
                if(!rptaBusquedaProducto){ //producto no encontrado
                    getProductosEnCarrito.push(ITEMPRODUCTO);
                    setLocalDataCarrito( JSON.stringify(getProductosEnCarrito));
                }else{ //producto encontrado
                    var rpta = setCantidadProductoCarrito(ITEMPRODUCTO.idproducto, ITEMPRODUCTO.cantidad);
                    var dataaa = JSON.parse(getLocalDataCarrito()); //  JSON.parse(getLocalDataCarrito());
                    if(rpta.codresult == 1){
                        //$('#offcanvas-cart').modal('show');
                        // alert("se agregó el producto con exito");
                        // alert("adentrito");
                    }
                }
                $('#modalDetalleProducto').modal('hide');
                Swal.fire({
                    icon: 'success',// : 'error',
                    title: "El producto se agregó correctamente al carrito de compras.",
                    showConfirmButton: false,
                    timer: 3000
                });

            }
        }
        listarProductoEnCarrito();
    }

    function aumentacantidadIni(elemento){
        var inputcantidad = elemento.parent().find('input').eq(0);
        var currcantidad = inputcantidad.val();
        var nuevacantidad = Number(currcantidad)+1
        inputcantidad.val(nuevacantidad);
    }
    // function getProductosGeneral(){
    //     var parametros = '';
    //     var indice = 49;
    //     var nomproc = "ProcSlider";
    //     var URL_GET_PRODUCTOS = "" ?>";
    //     $.post(URL_BASE+'Registros/procGeneral', {
    //         parametros: parametros,
    //         indice: indice,
    //         nombreProcedimiento:nomproc
    //     }, function (dataproductos) {
    //         console.log("dataproductos->", dataproductos);
    //         var dataProductoOFERTAS = [];
    //         var serializadoProductos = "";

    //         $.each(dataproductos,function(){
    //             serializadoProductos += this.idproducto + ',';
    //             if(this.fuente == "OFERTAS"){
    //                 dataProductoOFERTAS.push(this);
    //             }
    //         });

    //         //
    //         if(serializadoProductos != ''){
    //             serializadoProductos = serializadoProductos.substr(0 , serializadoProductos.length - 1 );
    //         }
    //     },"JSON");
    // }

    // function mostrarProductosGeneral(serializadoproductos, datafuente, dataofertas){ //mostrar el HTML de producto general

    //     var URL_GET_PRODUCTOS = "" ?>";
    //     var data = {
    //         codproductos : serializadoproductos
    //      };
    //     //
    //     $('#sectionNuevoProductos').html('');
        
    //     //
    //     $.post(URL_GET_PRODUCTOS, data, function (datageneralproductos) {
    //         console.log("data productos", rpta);

    //     },"JSON");
    // }

    // function busquedafuentebyobj(datafuente, codproducto){
    //     var rptaFuente = null;
    //     $.each(datafuente,function(){
    //         var idproducto = Number(this.idproducto);
    //         if(codproducto == idproducto){
    //             rptaFuente = this.fuente;
    //         }
    //     });
    //     return rpta;
    // }

    function getProductosNuevos(){
        
        var parametros = '';
        var indice = 42;
        var nomproc = "ProcSlider";
        var URL_GET_PRODUCTOS = "XbestServicio/getCategorias";
        $.post('Registros/procGeneral', {
            parametros: parametros,
            indice: indice,
            nombreProcedimiento:nomproc
        }, function (dataproductos) {
            var serializadoProductos = "";
            $.each(dataproductos,function(){
                serializadoProductos += this.idproducto + ',';
            });
            //
            if(serializadoProductos != ''){
                serializadoProductos = serializadoProductos.substr(0 , serializadoProductos.length - 1 );
            }
            getProductosByService(serializadoProductos);
        },"JSON");
    }

    function getProductosByService(serializadoproductos){
        //
        var URL_GET_PRODUCTOS = "XbestServicio/getProductosById";
        var data = {
            codproductos : serializadoproductos
         };
        //
        $('#sectionNuevoProductos').html('');
        //
        $.post(URL_GET_PRODUCTOS, data, function (rpta) {
            var strHTML = '';
            //
           for(i = 0 ; i < rpta.length ; i++){
            //    console.log((i+1) +'-->>',rpta[i], rpta[i+1]);
                var nombreproductoUno = "";
                var marcauno = "";
                var codmonedauno = "";
                var precioventauno = "";
                var urlimagenuno = "";
                var codigoProducto =  0;
                var caracteristicas = "";
                var precio_venta_soles = 0;
                var precio_venta_dolares = 0;
                var urlimagen;
                //
                if(rpta[i]){
                    nombreproductoUno = rpta[i]["NomProducto"];
                    // nombreProdcutoDos = rpta[i+1]["NomProducto"];
                    marcauno =  rpta[i]["Marca"];
                    // marcados =  rpta[i+1]["Marca"];
                    codmonedauno =  rpta[i]["CodMoneda"];
                    // codmonedados = rpta[i+1]["CodMoneda"];
                    precioventauno = rpta[i]["PrecioVenta"];
                    // precioventados = rpta[i+1]["PrecioVenta"];
                    urlimagenuno = rpta[i]["UrlImagen"];
                    // urlimagendos = rpta[i+1]["UrlImagen"];
                    codigoProducto = rpta[i]["CodProducto"];
                    caracteristicas = rpta[i]["Caracteristicas"]; 
                    precio_venta_soles = (codmonedauno == 1 ? precioventauno : (precioventauno * COSTO_DOLAR_HOY) );
                    precio_venta_dolares = (codmonedauno == 2 ? precioventauno : (precioventauno/COSTO_DOLAR_HOY) );
                    urlimagen = ( urlimagenuno.length == 0 ? '<?=base_url()?>assets/abelostyle/assets/images/product-image/8.jpg' : 'http://www.abexacloud.com/XBest/Adjunto/imagenproducto/20602732402/'+ urlimagenuno )

                    //

                    strHTML += '<div class="slider-single-item">' +
                                '<article class="list-product text-center">' +
                                    '<div class="product-inner">' +
                                        '<div class="img-block">' +
                                            '<a href="Web/DetalleProducto/?codigoProducto=' + codigoProducto +'"  target="_blank" class="thumbnail">' +
                                                 ( urlimagenuno.length == 0 ? '<img class="first-img" src="<?=base_url()?>assets/abelostyle/assets/images/product-image/4.jpg" alt="" />' : '<img class="first-img" src="http://www.abexacloud.com/XBest/Adjunto/imagenproducto/20602732402/'+ urlimagenuno +'" alt="" />' ) +
                                            '</a>' +
                                            '<div class="add-to-link">' +
                                                '<ul>' +
                                                    '<li>' +
                                                        '<span '+
                                                            ' data-codproducto="'+ codigoProducto +'" '+
                                                            ' data-nombre="'+ nombreproductoUno +'" '+
                                                            ' data-psoles="'+ precio_venta_soles +'" '+
                                                            ' data-pdolares="'+ precio_venta_dolares +'" '+
                                                            ' data-caracteristicas="'+ caracteristicas +'" '+
                                                            ' data-urlimg="'+ urlimagen +'" '+
                                                            ' data-marca="'+ marcauno +'" '+
                                                            ' data-nuevo="SI" ' +
                                                        '  onclick="verDetalleProducto($(this));" class="quick_view" data-link-action="quickview" title="Ver detalle del producto" >' +
                                                            '<i class="lnr lnr-magnifier"></i>' +
                                                        '</span>' +
                                                    '</li>' +
                                                    '<li>' +
                                                        '<span '+
                                                            ' data-codproducto="'+ codigoProducto +'" '+
                                                            ' data-nombre="'+ nombreproductoUno +'" '+
                                                            ' data-psoles="'+ precio_venta_soles +'" '+
                                                            ' data-pdolares="'+ precio_venta_dolares +'" '+
                                                            ' data-caracteristicas="'+ caracteristicas +'" '+
                                                            ' data-urlimg="'+ urlimagen +'" '+
                                                            ' data-marca="'+ marcauno +'" '+
                                                        '  onclick="accesodirectoagregacarrito($(this));" title="agregar al carrito"><i class="lnr lnr-cart"></i></span>' +
                                                    '</li>' +
                                                '</ul>' +
                                            '</div>' +
                                        '</div>' +
                                        '<ul class="product-flag">' +
                                            '<li class="new">Nuevo</li>' +
                                        '</ul>' +
                                        '<div class="product-decs">' +
                                            '<span style="font-size: 18px;white-space: nowrap;"  >'+ marcauno +'</span>' +
                                            '<h2><span class="product-link" style="white-space: nowrap;" >'+ nombreproductoUno +'</span></h2>' +
                                            '<div class="pricing-meta">' +
                                                '<ul>' +
                                                    '<li class="current-price">' + 'S./ ' + precio_venta_soles.toFixed(2) +' ($ ' + precio_venta_dolares.toFixed(2) + ')</li>' +
                                                '</ul>' +
                                            '</div>' +
                                        '</div>' +
                                        '<div class="cart-btn">' +
                                            '<a href="Web/DetalleProducto/?codigoProducto=' + codigoProducto +'" target="_blank" class="add-to-curt" title="Ver producto ">Ver Producto</a>' +
                                        '</div>' +
                                    '</div>' +
                                '</article>' +
                            '</div>';
                }
           }
           //return false;
            // $.each(rpta, function(){
            //     console.log("this", this);
                  
            // });
            $('#sectionNuevoProductos').html(strHTML);

            $('.arrival-slider-wrapper').slick({
                infinite: true,
                autoplay: true,
                slidesToShow: 5,
                arrows: true,
                loop: true,
                slidesToScroll: 1,
                prevArrow: '<span class="prev"><i class="ion-ios-arrow-left"></i></span>',
                nextArrow: '<span class="next"><i class="ion-ios-arrow-right"></i></span>',
                speed: 800,
                cssEase: 'linear',
                dots: false,
                responsive: [{
                        breakpoint: 1200,
                        Settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 992,
                        Settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 767,
                        Settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 479,
                        Settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
            
            getProductosEnOferta();
        },'JSON');
    }



    function getProductosMasVendidos(){
        //
        var URL_GET_MASVENDIDOS = "XbestServicio/getProductosMasVendidos";
        var data = { };
        var strHTMLoption = "";
        var strHTMLcategoriaMenu = "";
        var strHTMLcategoriaLink = "";
        //
        $.post(URL_GET_MASVENDIDOS, data, function (arrproductosmasvendidos) {
            
            var serializadoProductos = "";
            $.each(arrproductosmasvendidos,function(){
                serializadoProductos += this.CodProducto + ',';
            });
            //
            if(serializadoProductos != ''){
                serializadoProductos = serializadoProductos.substr(0 , serializadoProductos.length - 1 );
            }
            //console.log("serializadoProductos->", serializadoProductos);
            mostrarProductosMasVendidos(serializadoProductos)
            // $.each(rpta,function(){
            //     strHTMLoption += '<option value="'+this.CodCategoriaProducto+'">'+ this.NomCategoriaProducto +'</option>';
            //     strHTMLcategoriaMenu += '<li><a href="##">'+ this.NomCategoriaProducto +'</a></li>';
            //     strHTMLcategoriaLink += '<li class="menu-item"><a href="##">'+ this.NomCategoriaProducto +'</a></li>';
            // });
            // strHTMLoption += '<option value="0" selected >Todo</option>';
            // $('#selectCategorias').append(strHTMLoption);
            // $('#selectCategoriaMovil').append(strHTMLoption);
            // $('#categoriaMovil').html(strHTMLcategoriaMenu);
            // $('#categoriaslink').html(strHTMLcategoriaLink);

        },'JSON')
    }

    function mostrarProductosMasVendidos(serializadoproductos){
        
        $('#sectionmasvendidos').empty();
        var URL_GET_PRODUCTOS = "XbestServicio/getProductosById";
        var data = {
            codproductos : serializadoproductos
         };
        //
        
        //
        $.post(URL_GET_PRODUCTOS, data, function (rpta) {
          
            var strHTMLmasvendidos = "";
            //
            $.each(rpta,function(){
                var codigoProducto = this.CodProducto;
                var nombreproducto = this.NomProducto;
                var codmoneda = this.CodMoneda;
                var precioventa = this.PrecioVenta;
                var marca =  this.Marca;
                var urlimagenProducto = ( this.UrlImagen == 0 ? '<?=base_url()?>assets/abelostyle/assets/images/product-image/6.jpg' : 'http://www.abexacloud.com/XBest/Adjunto/imagenproducto/20602732402/'+ this.UrlImagen )
                var precioventasoles= (codmoneda == 1 ? precioventa : (precioventa * COSTO_DOLAR_HOY) );
                var precioventadolares = (codmoneda == 2 ? precioventa : (precioventa/COSTO_DOLAR_HOY) );
                var caracteristicas = this.Caracteristicas;
                var categoriaproducto = this.NomCategoriaProducto;
                var stockalmacen = this.StockAlmacen;

                //
                strHTMLmasvendidos += 
                    '<div class="single-slider-item">' +
                        '<article class="list-product text-center">' +
                            '<div class="product-inner">' +
                                '<div class="img-block">' +
                                    // '<a href="'+ URL_BASE + 'Web/DetalleProducto/?codigoProducto=' + codigoProducto +'" class="thumbnail">' +
                                        '<img class="first-img" src="'+urlimagenProducto+'" alt="" />' +
                                    // '</a>' +
                                    '<div class="add-to-link">' +
                                        '<ul>' +
                                            '<li>' +
                                                '<span '+
                                                ' data-codproducto="'+ codigoProducto +'" '+
                                                            ' data-nombre="'+ nombreproducto +'" '+
                                                            ' data-psoles="'+ precioventasoles +'" '+
                                                            ' data-pdolares="'+ precioventadolares +'" '+
                                                            ' data-caracteristicas="'+ caracteristicas +'" '+
                                                            ' data-urlimg="'+ urlimagenProducto +'" '+
                                                            ' data-marca="'+ marca +'" '+
                                                            ' data-nuevo="NO" ' +
                                                            '  onclick="verDetalleProducto($(this));" class="quick_view" data-link-action="quickview" title="Ver detalle del producto" >' +
                                                    '<i class="lnr lnr-magnifier"></i>' +
                                                '</span>' +
                                            '</li>' +
                                            '<li>' +
                                                '<span ' +
                                                ' data-codproducto="'+ codigoProducto +'" '+
                                                ' data-nombre="'+ nombreproducto +'" '+
                                                ' data-psoles="'+ precioventasoles +'" '+
                                                ' data-pdolares="'+ precioventadolares +'" '+
                                                ' data-caracteristicas="'+ caracteristicas +'" '+
                                                ' data-urlimg="'+ urlimagenProducto +'" '+
                                                ' data-marca="'+ marca +'" '+
                                                ' onclick="accesodirectoagregacarrito($(this));" title="agregar al carrito">'+
                                                '<i class="lnr lnr-cart"></i>'+
                                                '</span>' +
                                            '</li>' +
                                        '</ul>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="product-decs">' +
                                    '<a class="inner-link" href="#shop-4-column.html"><span>'+ marca + ' - ' + categoriaproducto +'</span></a>' +
                                    '<h2><a href="'+ URL_BASE + 'Web/DetalleProducto/?codigoProducto=' + codigoProducto +'" target="_blank" class="product-link">'+ nombreproducto +'</a></h2>' +
                                    '<div class="availability-list in-stock">Disponible: <span>'+ stockalmacen +' en stock</span></div>' +
                                    '<p>'+ caracteristicas +'</p>' +
                                    '<div class="pricing-meta">' +
                                        '<ul>' +
                                            '<li class="current-price">'+ 'S./ ' + precioventasoles.toFixed(2) +' ($ ' + precioventadolares.toFixed(2) + ')</li>' +
                                        '</ul>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                        '</article>' +
                    '</div>';

            });
            $('#sectionmasvendidos').html(strHTMLmasvendidos);

            $('.best-sell-area-wrapper').slick({
                infinite: true,
                autoplay: true,
                slidesToShow: 2,
                arrows: true,
                slidesToScroll: 1,
                prevArrow: '<span class="prev"><i class="ion-ios-arrow-left"></i></span>',
                nextArrow: '<span class="next"><i class="ion-ios-arrow-right"></i></span>',
                speed: 800,
                cssEase: 'linear',
                dots: false,
                responsive: [{
                        breakpoint: 992,
                        Settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 767,
                        Settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 479,
                        Settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
           // getProductosEnOferta();
        },'JSON');
    }

    function getProductosEnOferta(){
        var parametros = '';
        var indice = 44;
        var nomproc = "ProcSlider";
        //
        $.post('Registros/procGeneral', {
            parametros: parametros,
            indice: indice,
            nombreProcedimiento:nomproc
        }, function (dataproductos) {
            // console.log("dataproductos en oferta ->", dataproductos);
            var serializadoProductos = "";
            var dataResultado = dataproductos;
            $.each(dataproductos,function(){
                serializadoProductos += this.idproducto + ',';
            });
            //
            if(serializadoProductos != ''){
                serializadoProductos = serializadoProductos.substr(0 , serializadoProductos.length - 1 );
            }
            mostrarProductosEnOferta(serializadoProductos, dataResultado);
        },"JSON")
    }

    function buscarEnDataOferta(codproductobusqueda, arrData){
        var resultado = null;
        $.each(arrData,function(){
            if(Number(this.idproducto) == Number(codproductobusqueda) ){
                resultado = this;
            }
        });

        return resultado;
    }

    function mostrarProductosEnOferta(serializado, dataOfertas){
        //$('#sectionOfertas').empty();
        var URL_GET_PRODUCTOS = "XbestServicio/getProductosById";
        var data = {
            codproductos : serializado
         };
        //
        $.post(URL_GET_PRODUCTOS, data, function (rpta) {
            // console.log("productos en ofertita", rpta)
            var strHTMLofertas = "";
            $.each(rpta, function(){
                //
                var productooferta = buscarEnDataOferta(this.CodProducto, dataOfertas);

              
                var codigoProducto = this.CodProducto;
                var nombreproducto = this.NomProducto;
                var codmoneda = this.CodMoneda;
                var precioventa = this.PrecioVenta;
                var marca =  this.Marca;
                var urlimagenProducto = ( this.UrlImagen == 0 ? '<?=base_url()?>assets/abelostyle/assets/images/product-image/6.jpg' : 'http://www.abexacloud.com/XBest/Adjunto/imagenproducto/20602732402/'+ this.UrlImagen )
                var precioventasoles= (codmoneda == 1 ? precioventa : (precioventa * COSTO_DOLAR_HOY) );
                var precioventadolares = (codmoneda == 2 ? precioventa : (precioventa/COSTO_DOLAR_HOY) );
                var caracteristicas = this.Caracteristicas;
                var categoriaproducto = this.NomCategoriaProducto;
                // var stockalmacen = this.StockAlmacen;

                var numerodescuento = productooferta.percentdcto;
                var fechaexpiraoferta = productooferta.fecha_expira_oferta.replace(/\-/g, '/');
                fechaexpiraoferta = fechaexpiraoferta.trim();
                var costoconoferta = Number(precioventasoles) * (Number(numerodescuento)/100);
                    costoconoferta =  Number(precioventasoles) - costoconoferta ;
                var costoofertadolar = costoconoferta/COSTO_DOLAR_HOY;

                strHTMLofertas += 
                    '<div class="slider-single-item">' +
                        '<article class="list-product text-center">' +
                            '<div class="product-inner">' +
                                '<div class="img-block">' +
                                    // '<a href="'+ URL_BASE + 'Web/DetalleProducto/?codigoProducto=' + codigoProducto +'" class="thumbnail">' +
                                        '<img class="first-img" src="'+ urlimagenProducto +'" alt="" />' +
                                    // '</a>' +
                                    '<div class="add-to-link">' +
                                        '<ul>' +
                                            '<li>' +
                                                '<span '+
                                                    ' data-codproducto="'+ codigoProducto +'" '+
                                                            ' data-nombre="'+ nombreproducto +'" '+
                                                            ' data-psoles="'+ precioventasoles +'" '+
                                                            ' data-pdolares="'+ precioventadolares +'" '+
                                                            ' data-caracteristicas="'+ caracteristicas +'" '+
                                                            ' data-urlimg="'+ urlimagenProducto +'" '+
                                                            ' data-marca="'+ marca +'" '+
                                                            ' data-oferta="SI" ' +
                                                            ' data-percentdcto="'+ numerodescuento +'" ' +
                                                            ' data-costoofertasoles="'+ costoconoferta +'" ' +
                                                            ' data-costoofertadolares="'+ costoofertadolar +'" ' +
                                                            ' onclick="verDetalleProducto($(this));" class="quick_view" data-link-action="quickview" title="Ver detalle del producto" >' +
                                                    '<i class="lnr lnr-magnifier"></i>' +
                                                '</span>' + 
                                            '</li>' + 
                                            '<li>' + 
                                                '<span ' + 
                                                    ' data-codproducto="'+ codigoProducto +'" '+
                                                    ' data-nombre="'+ nombreproducto +'" '+
                                                    ' data-psoles="'+ precioventasoles +'" '+
                                                    ' data-pdolares="'+ precioventadolares +'" '+
                                                    ' data-caracteristicas="'+ caracteristicas +'" '+
                                                    ' data-urlimg="'+ urlimagenProducto +'" '+
                                                    ' data-marca="'+ marca +'" '+
                                                    ' onclick="accesodirectoagregacarrito($(this));" title="agregar al carrito">'+
                                                    '<i class="lnr lnr-cart"></i>'+
                                                '</span>' +
                                            '</li>' +
                                            
                                        '</ul>' +
                                    '</div>' +
                                '</div>' +
                                '<ul class="product-flag">' +
                                    '<li class="new">-'+ Number(numerodescuento).toFixed(2) +'%</li>' +
                                '</ul>' +
                                '<div class="clockdiv">' +
                                    '<div data-countdown="'+ fechaexpiraoferta +'"></div>' +
                                '</div>' +
                                '<div class="product-decs">' +
                                    '<span class="inner-link"  ><span>'+ this.Marca + ' - ' + this.NomCategoriaProducto +'</span></span>' +
                                    '<h2><span class="product-link">' + this.NomProducto + '</span></h2>' +
                                    '<div class="pricing-meta">' +
                                        '<ul>' +
                                            '<li class="old-price">S/. '+  Number(precioventasoles).toFixed(2) +'</li>' +
                                            '<li class="current-price">S/. '+  Number(costoconoferta).toFixed(2) +'</li>' +
                                        '</ul>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="cart-btn">' +
                                    '<a  href="'+ URL_BASE + 'Web/DetalleProducto/?codigoProducto=' + codigoProducto +'" class="add-to-curt" title="Ver producto">Ver Producto</a>' +
                                '</div>' +
                            '</div>' +
                        '</article>' +
                    '</div>';
            });

            $('#sectionOfertas').html(strHTMLofertas);
            $('.hot-deal-slider-wrapper-2').slick({
                    infinite: true,
                    slidesToShow: 4,
                    arrows: true,
                    slidesToScroll: 1,
                    prevArrow: '<span class="prev"><i class="ion-ios-arrow-left"></i></span>',
                    nextArrow: '<span class="next"><i class="ion-ios-arrow-right"></i></span>',
                    speed: 800,
                    cssEase: 'linear',
                    dots: false,
                    responsive: [{
                            breakpoint: 1200,
                            Settings: {
                                slidesToShow: 4,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 992,
                            Settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 767,
                            Settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 492,
                            Settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        },
                    ]
            });

            // contador
            $("[data-countdown]").each(function() {
                var $this = $(this),
                    finalDate = $(this).data("countdown");
                $this.countdown(finalDate, function(event) {
                    $this.html(event.strftime('<span class="cdown day">%-D <p>Days</p></span> <span class="cdown hour">%-H <p>Hours</p></span> <span class="cdown minutes">%M <p>Mins</p></span> <span class="cdown second">%S <p>Sec</p></span>'));
                });
            });

            $(".se-pre-con").fadeOut("slow");
            getProductosMasVendidos();
        },'JSON');
    }

    var JSON_CATEGORIAS_VIEW = null;
    //
    function getCategoriasView(){
        $('#sectioncatdinamicas').html();
        var parametros = '';
        var indice = 18;
        var nomproc = "MvindaProcPedido";
        //
        $.post('Registros/procGeneral', {
            parametros: parametros,
            indice: indice,
            nombreProcedimiento:nomproc
        }, function (respuesta) {
            //
            JSON_CATEGORIAS_VIEW = respuesta;
            var strCategoriasId = '';
            $.each(respuesta, function(){
                strCategoriasId += this.idcategoriaxbest + '|';
            });
            //
            strCategoriasId = strCategoriasId.substring(0, strCategoriasId.length -1);
            //
            // console.log("strCategoriasId->", strCategoriasId);            
            var URL_GET_PROD_BY_CAT = "XbestServicio/getProductosByCategoriaMult";
            $.post(URL_GET_PROD_BY_CAT, {
                codcategorias: strCategoriasId
            }, function (productos) {
                //
                var grupoProductosByCat = _.groupBy(productos, function (d) { return d.CodCategoriaProducto });
                //
                var strCategoriasDinamicas = '';
                $.each(grupoProductosByCat, function(key, data){
                    var codigocategoriaview = key;
                    var nombreCategoriaView = busquedaNombreProducto(codigocategoriaview);
                    //
                    strCategoriasDinamicas += '<div class="arrival-area mt-20px mt-lg-50px">' +
                                                '<div class="container">' +
                                                    '<div class="row">' +
                                                        '<div class="col-md-12">' +
                                                            '<div class="section-title">' +
                                                                '<h2>'+ nombreCategoriaView +'</h2>' +
                                                                '<ul class="nav nav-tabs sub-category">' +
                                                                    '<li class="nav-item">' +
                                                                        '<a class="nav-link active" data-toggle="tab" href="##tab-1"></a>' +
                                                                    '</li>' +
                                                                '</ul>' +
                                                            '</div>' +
                                                        '</div>' +
                                                    '</div>' +
                                                    '<div class="tab-content">' +
                                                        '<div id="tab-1" class="tab-pane active fade">' +
                                                            '<div  class="arrival-slider-wrapper-produc slider-nav-style-1">';
                    var strHTMLproductos = '';                           
                    $.each(data, function(){
                        var codigoProducto = this.CodProducto;
                        var urlimagenuno = this.NomProductoUM; 
                        var nombreproductoUno = this.NomProducto; 
                        var precioventauno = this.PrecioVenta;

                        var codmonedauno = this.CodMoneda;
                        var precio_venta_soles = (codmonedauno == 1 ? precioventauno : (precioventauno * COSTO_DOLAR_HOY) );
                        var precio_venta_dolares = (codmonedauno == 2 ? precioventauno : (precioventauno/COSTO_DOLAR_HOY) );
                        var caracteristicas = this.Caracteristicas;
                        var urlimagen = ( urlimagenuno.length == 0 ? '<?=base_url()?>assets/abelostyle/assets/images/product-image/8.jpg' : 'http://www.abexacloud.com/XBest/Adjunto/imagenproducto/20602732402/'+ urlimagenuno );
                        var marcauno = (this.Marca ? this.Marca : '-') ;


                        strHTMLproductos += '<div class="slider-single-item">' +
                                '<article class="list-product text-center">' +
                                    '<div class="product-inner">' +
                                        '<div class="img-block">' +
                                            '<a href="'+ URL_BASE + 'Web/DetalleProducto/?codigoProducto=' + codigoProducto +'" target="_blank" class="thumbnail">' +
                                                 ( urlimagenuno.length == 0 ? '<img class="first-img" src="<?=base_url()?>assets/abelostyle/assets/images/product-image/4.jpg" alt="" />' : '<img class="first-img" src="http://www.abexacloud.com/XBest/Adjunto/imagenproducto/20602732402/'+ urlimagenuno +'" alt="" />' ) +
                                            '</a>' +
                                            '<div class="add-to-link">' +
                                                '<ul>' +
                                                    '<li>' +
                                                        '<span '+
                                                            ' data-codproducto="'+ codigoProducto +'" '+
                                                            ' data-nombre="'+ nombreproductoUno +'" '+
                                                            ' data-psoles="'+ precio_venta_soles +'" '+
                                                            ' data-pdolares="'+ precio_venta_dolares +'" '+
                                                            ' data-caracteristicas="'+ caracteristicas +'" '+
                                                            ' data-urlimg="'+ urlimagen +'" '+
                                                            ' data-marca="'+ marcauno +'" '+
                                                            ' data-nuevo="NO" ' +
                                                        '  onclick="verDetalleProducto($(this));" class="quick_view" data-link-action="quickview" title="Ver detalle del producto" >' +
                                                            '<i class="lnr lnr-magnifier"></i>' +
                                                        '</span>' +
                                                    '</li>' +
                                                    '<li>' +
                                                        '<span '+
                                                            ' data-codproducto="'+ codigoProducto +'" '+
                                                            ' data-nombre="'+ nombreproductoUno +'" '+
                                                            ' data-psoles="'+ precio_venta_soles +'" '+
                                                            ' data-pdolares="'+ precio_venta_dolares +'" '+
                                                            ' data-caracteristicas="'+ caracteristicas +'" '+
                                                            ' data-urlimg="'+ urlimagen +'" '+
                                                            ' data-marca="'+ marcauno +'" '+
                                                        '  onclick="accesodirectoagregacarrito($(this));" title="agregar al carrito"><i class="lnr lnr-cart"></i></span>' +
                                                    '</li>' +
                                                '</ul>' +
                                            '</div>' +
                                        '</div>' +
                                        // '<ul class="product-flag">' +
                                        //     '<li class="new">Nuevo</li>' +
                                        // '</ul>' +
                                        '<div class="product-decs">' +
                                            '<span style="font-size: 18px;white-space: nowrap;"  >'+ marcauno +'</span>' +
                                            '<h2><span class="product-link" style="white-space: nowrap;" >'+ nombreproductoUno +'</span></h2>' +
                                            '<div class="pricing-meta">' +
                                                '<ul>' +
                                                    '<li class="current-price">' + 'S./ ' + precio_venta_soles.toFixed(2) +' ($ ' + precio_venta_dolares.toFixed(2) + ')</li>' +
                                                '</ul>' +
                                            '</div>' +
                                        '</div>' +
                                        '<div class="cart-btn">' +
                                            '<a href="'+ URL_BASE + 'Web/DetalleProducto/?codigoProducto=' + codigoProducto +'" target="_blank" class="add-to-curt" title="Ver producto ">Ver Producto</a>' +
                                        '</div>' +
                                    '</div>' +
                                '</article>' +
                            '</div>';

                    });

                    strCategoriasDinamicas += strHTMLproductos;
                    strCategoriasDinamicas +=           '</div>' +
                                                    '</div>' +
                                                '</div>' +
                                            '</div>' +
                                        '</div>';
                });
                //
                $('#sectioncatdinamicas').html(strCategoriasDinamicas);
                //
                $('.arrival-slider-wrapper-produc').slick({
                    infinite: true,
                    autoplay: true,
                    slidesToShow: 5,
                    arrows: true,
                    loop: true,
                    slidesToScroll: 1,
                    prevArrow: '<span class="prev"><i class="ion-ios-arrow-left"></i></span>',
                    nextArrow: '<span class="next"><i class="ion-ios-arrow-right"></i></span>',
                    speed: 800,
                    cssEase: 'linear',
                    dots: false,
                    responsive: [{
                            breakpoint: 1200,
                            Settings: {
                                slidesToShow: 4,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 992,
                            Settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 767,
                            Settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 479,
                            Settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
                // $(".se-pre-con").fadeOut("slow");

            },"JSON");
        },"JSON");
    }

    function busquedaNombreProducto(idcategoriaprod){
        var nomcategoria = "";
        $.each(JSON_CATEGORIAS_VIEW, function(){
            if(Number(this.idcategoriaxbest) == Number(idcategoriaprod)){
                nomcategoria = this.nombrecategoria;
            }
        });
        return nomcategoria;
    }
</script>