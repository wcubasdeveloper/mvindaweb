<style>
    .product-inner :hover{
        /* padding : 10px;
      */
    }
</style>
    <!-- Shop Category Area End -->
    <div class="shop-category-area mt-30px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <!-- Left Side start -->
                        <div class="shop-tab nav d-flex">
                            <a class="active" href="#shop-1" data-toggle="tab">
                             
                                <i class="fa fa-th" aria-hidden="true"></i>
                            </a>
                            <a href="#shop-2" data-toggle="tab">
                                <i class="fa fa-list"></i>
                            </a>
                            <p id="lbltextocantresult" >Se han encontrado 14 coincidencias con la palabra MONI.</p>
                        </div>
                        <!-- Left Side End -->
                        
                    </div>
                    <!-- Shop Top Area End -->

                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area mt-35">
                        <!-- Shop Tab Content Start -->
                        <div class="tab-content jump">
                            <!-- Tab One Start -->
                            <div id="shop-1" class="tab-pane active">
                                <div class="row m-0" id="sectionproductos">
                                 
                                </div>
                            </div>
                         
                            <!-- Tab Two Start -->
                            <div id="shop-2" class="tab-pane" >
                               
                            </div>
                            <!-- Tab Two End -->

                        </div>
                        <!-- Shop Tab Content End -->
                        <!--  Pagination Area Start -->
                        <!-- <div class="pro-pagination-style text-center mtb-50px">
                            <ul>
                                <li>
                                    <a class="prev" href="#"><i class="ion-ios-arrow-left"></i></a>
                                </li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li>
                                    <a class="next" href="#"><i class="ion-ios-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> -->
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Category Area End -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.js"></script> -->
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
                                            <button type="button"  onclick="agregaralcarrito();" >Agregar al carrito</button>
                                        </div>
                                    </div>
                               
                                    <div class="pro-details-social-info">
                                        <!-- <span style="padding-top: 4px;">Compartir</span> -->
                                        <div class="social-info">
                                            <ul>
                                                <li>
                                                    <!-- <img title="Compartir en facebook" style="width: 38px;cursor:pointer" src="https://images.vexels.com/media/users/3/223136/isolated/preview/984f500cf9de4519b02b354346eb72e0-facebook-icon-redes-sociales-by-vexels.png"> -->
                                                    <li id="social_facebook">
                                                        <div class="social_action">
                                                            <div class="fb-share-button" 
                                                            data-size="large" 
                                                            data-href="https://www.w3schools.com/w3css/w3css_modal.asp" 
                                                            data-type="button"></div>
                                                        </div>
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

<script>
    
    var codCategoria = '<?=$codcategoria?>';
    var nomCategoria = '<?=$nomcategoria?>';
    //
    $(document).ready(function () {
        $('#lbltextocantresult').text("Resultados para la categoria " + nomCategoria)
        getProductosByCategoria();
        $('#txtbusquedaproducto').val('');
    });
    //
    function getProductosByCategoria(){
        var parametros = Number(codCategoria);
        var URL_GET_PRODUCTOS = "<?php echo base_url()."XbestServicio/getProductosByCategoria" ?>";
        //
        $.post(URL_GET_PRODUCTOS,
        {
            codcategoria: parametros
        }, function (respuesta) {
           
            $('#sectionproductos').empty();
            $('#shop-2').empty();
            //
            var jsonData = respuesta;
            var cantidadRegistros = jsonData.length;
            //
            var strHTML = "";
            var strHTMLtab2 = "";
            
            $.each(jsonData ,function(){
                // console.log("this", this);
                //
                var precioVenta = this.PrecioVenta;
                // var precio_venta_soles = (this.CodMoneda == 1 ? precioVenta : (precioVenta * COSTO_DOLAR_HOY) );
                // var precio_venta_dolares = (this.CodMoneda == 2 ? precioVenta : (precioVenta/COSTO_DOLAR_HOY) );
                // var urlProducto = this.NomProductoUM;
                //
                var codigoProducto = this.CodProducto;
                var nombreproducto = this.NomProducto;
                var codmoneda = this.CodMoneda;
                var precioventa = this.PrecioVenta;
                var marca =  this.Marca;
                var urlimagenProducto = ( this.UrlImagen == 0 ? '<?=base_url()?>assets/abelostyle/assets/images/product-image/7.jpg' : 'http://www.abexacloud.com/XBest/Adjunto/imagenproducto/20602732402/'+ this.UrlImagen )
                var precioventasoles= (codmoneda == 1 ? precioventa : (precioventa * COSTO_DOLAR_HOY) );
                var precioventadolares = (codmoneda == 2 ? precioventa : (precioventa/COSTO_DOLAR_HOY) );
                var caracteristicas = this.Caracteristicas;
                var categoriaproducto = this.NomCategoriaProducto;
                var stockalmacen = this.StockAlmacen;

                strHTMLtab2 += '<div class="shop-list-wrap mb-30px scroll-zoom">' +
                                    '<div class="slider-single-item">' +
                                        '<div class="row list-product m-0px">' +
                                            '<div class="col-md-12 padding-0px product-inner" style="box-shadow: 0px 0px 4.65px 0.35px rgb(0 0 0 / 20%);">' +
                                                '<div class="row">' +
                                                    '<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-10">' +
                                                        '<div class="left-img">' +
                                                            '<div class="img-block">' +
                                                                '<a href="single-product.html" class="thumbnail">' +
                                                                    '<img class="first-img" src="'+urlimagenProducto+'"  />' +
                                                                '</a>'+
                                                            '</div>'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 p-10">'+
                                                        '<div class="product-desc-wrap">'+
                                                            '<div class="product-decs">'+
                                                                '<h2><a   href="'+ URL_BASE + 'Web/DetalleProducto/?codigoProducto=' + codigoProducto +'"  class="product-link"  style="font-size: 0.7em; font-weight: bold;" >'+ this.NomProducto +'</a></h2>'+
                                                                '<span class="inner-link" ><span style="font-size: 21px;" >'+ this.Marca +'</span></span>'+
                                                                '<div class="product-intro-info">'+
                                                                    '<p>'+ (caracteristicas.length == 0 ? 'No se ha registrado ninguna descripción' :  caracteristicas ) +'</p>'+
                                                                '</div>'+
                                                            '</div>'+
                                                            '<div class="box-inner d-flex">'+
                                                                '<div class="align-self-center">'+
                                                                    // '<div class="in-stock">Disponibilidad: <span>299 In Stock</span></div>'+
                                                                    '<div class="pricing-meta">'+
                                                                        '<ul>'+
                                                                            // '<li class="old-price">S/. '+ precio_venta_soles +'</li>'+
                                                                            '<li class="current-price">S/. ' + precioventasoles.toFixed(2) + ' ($ '+ precioventadolares.toFixed(2) +')</li>'+
                                                                        '</ul>'+
                                                                    '</div>'+
                                                                    // '<div class="cart-btn" style="text-align: center;" >'+
                                                                    //     '<a href="#" class="add-to-curt" title="Agregar al carrito de compras">Comprar</a>'+
                                                                    // '</div>'+
                                                                    '<div class="add-to-link">'+
                                                                        '<ul>'+
                                                                            '<li style="padding-right: 10px;" >'+
                                                                                '<span '+
                                                                                            ' data-codproducto="'+ codigoProducto +'" '+
                                                                                            ' data-nombre="'+ nombreproducto +'" '+
                                                                                            ' data-psoles="'+ precioventasoles +'" '+
                                                                                            ' data-pdolares="'+ precioventadolares +'" '+
                                                                                            ' data-caracteristicas="'+ (caracteristicas.length == 0 ? 'No se ha registrado ninguna descripción' : caracteristicas )  +'" '+
                                                                                            ' data-urlimg="'+ urlimagenProducto +'" '+
                                                                                            ' data-marca="'+ marca +'" '+
                                                                                            ' data-nuevo="NO" ' +
                                                                                            '  onclick="verDetalleProducto($(this));" class="quick_view" data-link-action="quickview" title="Ver detalle del producto" >' +
                                                                                    '<i class="lnr lnr-eye"></i>' +
                                                                                '</span>' +
                                                                            '</li>'+
                                                                         
                                                                            // '<li>'+
                                                                            //     '<a href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>'+
                                                                            // '</li>'+
                                                                        '</ul>'+
                                                                    '</div>'+
                                                                '</div>'+
                                                            '</div>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>' +
                                '</div>';

                strHTML += '<div class="mb-30px col-md-3 col-sm-6  p-10">' +
                                        '<div class="slider-single-item">' + 
                                            '<article class="list-product p-10 text-center"  >' + 
                                                '<div class="product-inner" style="box-shadow: 0px 0px 4.65px 0.35px rgb(0 0 0 / 20%);" >' +
                                                    '<div class="img-block">' +
                                                        // '<a href="#" class="thumbnail">' +
                                                        '<div>' +
                                                            '<img class="first-img" src=" '+ urlimagenProducto+' " alt="" />' +
                                                        // '</a>' + 
                                                        '</div>' +
                                                        '<div class="add-to-link">' +
                                                            '<ul>' +
                                                                '<li>' +
                                                                    '<span '+
                                                                                ' data-codproducto="'+ codigoProducto +'" '+
                                                                                ' data-nombre="'+ nombreproducto +'" '+
                                                                                ' data-psoles="'+ precioventasoles +'" '+
                                                                                ' data-pdolares="'+ precioventadolares +'" '+
                                                                                ' data-caracteristicas="'+ (caracteristicas.length == 0 ? 'No se ha registrado ninguna descripción' : caracteristicas )  +'" '+
                                                                                ' data-urlimg="'+ urlimagenProducto +'" '+
                                                                                ' data-marca="'+ marca +'" '+
                                                                                '  onclick="verDetalleProducto($(this));" class="quick_view" data-link-action="quickview" title="Ver detalle del producto" >' +
                                                                        '<i class="lnr lnr-eye"></i>' +
                                                                    '</span>' +
                                                                '</li>' +
                                                                // '<li>' +
                                                                //     '<a href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>' +
                                                                // '</li>' +
                                                            '</ul>' +
                                                        '</div>' +
                                                    '</div>' +
                                                    '<div class="product-decs">' +
                                                        '<span class="inner-link" ><span style="font-size: 20px;" >'+ this.Marca +'</span></span>' +
                                                        '<h2><a href="'+ URL_BASE + 'Web/DetalleProducto/?codigoProducto=' + codigoProducto +'" style="font-weight: bold; color: #5d5d5d;" class="product-link">'+ this.NomProducto +'</a></h2>' +
                                                        '<div class="pricing-meta">' +
                                                            '<ul>' +
                                                                // '<li class="old-price">$23.90</li>' +
                                                                // '<li class="current-price">$21.51</li>' +
                                                                '<li class="current-price">S/. ' + precioventasoles.toFixed(2) + ' ($ '+ precioventadolares.toFixed(2) +')</li>'+
                                                            '</ul>' +
                                                        '</div>' +
                                                    '</div>' +
                                                    '<div class="cart-btn">'  +
                                                        '<button '+
                                                            ' data-codproducto="'+ codigoProducto +'" '+
                                                            ' data-nombre="'+ nombreproducto +'" '+
                                                            ' data-psoles="'+ precioventasoles +'" '+
                                                            ' data-pdolares="'+ precioventadolares +'" '+
                                                            ' data-caracteristicas="'+ caracteristicas +'" '+
                                                            ' data-urlimg="'+ urlimagenProducto +'" '+
                                                            ' data-marca="'+ marca +'" '+
                                                            ' onclick="accesodirectoagregacarrito($(this));" '+
                                                            ' class="add-to-curt" style="font-size: 13px;color: white; border: 1px solid gray; /* background: #266cfb; */ border: none; box-shadow: none; padding: 0 20px; line-height: 36px; border-radius: 5px; text-transform: uppercase; cursor: pointer; display: inline-block;" title="Agregar al carrito">Comprar</button>' +
                                                    '</div>' +
                                                '</div>' +
                                            '</article>' +
                                        '</div>' +
                                    '</div>';
            });
            $('#sectionproductos').append(strHTML);
            $('#shop-2').append(strHTMLtab2);
            $(".se-pre-con").fadeOut("slow");
            
            // console.log("data rpta->", jsonData);
        },'JSON');
    }

    var ITEMPRODUCTO = {
        idproducto : 0,
        nomProducto : '',
        marca : '',
        nombreurlimg : '',
        ventasoles : '',
        ventadolares : '',
        cantidad : 0
    };

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
        //  console.log("oferta->", productoenoferta);
        console.log('caracteristicas-->',caracteristicas);
        $('#lbltextoNuevo').text('-').prop('hidden', true);
        $('#lblpreciomodal').text('S./ '+ Number(preciosoles).toFixed(2) + ' ($ '+ Number(preciodolares).toFixed(2) +')');
        $('#lblNombreproductomodal').html(nombre);
        $('#lbldescripcionmodal').text(caracteristicas);
        $('#imgProductoselectModal').attr('src',urlprod);
        ITEMPRODUCTO.idproducto = Number(codigoprod);
        ITEMPRODUCTO.nomProducto = nombre;
        ITEMPRODUCTO.marca = marcaprod;
        ITEMPRODUCTO.nombreurlimg = urlprod;
        ITEMPRODUCTO.ventasoles = Number(preciosoles);
        ITEMPRODUCTO.ventadolares = Number(preciodolares); 
        //
        $('#modalDetalleProducto').modal('show');
    }
    
    function aumentacantidadIni(elemento){
        var inputcantidad = elemento.parent().find('input').eq(0);
        var currcantidad = inputcantidad.val();
        var nuevacantidad = Number(currcantidad)+1
        inputcantidad.val(nuevacantidad);
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
                        Swal.fire({
                                    icon: 'success',// : 'error',
                                    title: "El producto se agegró correctamente al carrito de compras.",
                                    showConfirmButton: false,
                                    timer: 3000
                                });  
                    }else{ //producto encontrado
                        var rpta = setCantidadProductoCarrito(ITEMPRODUCTO.idproducto, ITEMPRODUCTO.cantidad);
                        var dataaa = JSON.parse(getLocalDataCarrito()); //  JSON.parse(getLocalDataCarrito());
                        if(rpta.codresult == 1){
                            
                        
                            //$('#offcanvas-cart').modal('show');
                            //alert("se agregó el producto con exito")
                            //$('#btnagregaralcarro').prop('disabled', true).css('background', 'rgb(38 108 251 / 27%)');

                            // var interval = setInterval(function() {
                            Swal.fire({
                                    icon: 'success',// : 'error',
                                    title: "El producto se agegró correctamente al carrito de compras.",
                                    showConfirmButton: false,
                                    timer: 3000
                                });    
                                //$('#btnagregaralcarro').prop('disabled', false).css('background', '#266cfb');
                                //clearInterval(interval);
                            // }, 1000);
                            
                        }
                    }
                    $('#modalDetalleProducto').modal('hide');
                    // Swal.fire({
                    //     icon: 'success',// : 'error',
                    //     title: "El producto se agegró correctamente al carrito de compras.",
                    //     showConfirmButton: false,
                    //     timer: 3000
                    // });

                }
            }
        listarProductoEnCarrito();
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
</script>