<!-- cart area start -->
<div class="cart-main-area mtb-50px">
        <div class="container">
            <h3 class="cart-page-title">Productos en el carrito</h3>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            <table id="tbProductosCarrito" >
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a style="color: #fff; background-color: #9fc037;" href="<?=base_url()?>">Continuar comprando</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-4 sectionconfirmacionenvio" >
                    <div class="grand-totall">
                        <div class="title-wrap">
                            <h4 class="cart-bottom-title section-bg-gary-cart" style="margin-bottom: 11px;" >
                                Total
                            </h4>
                            <div id="lbltextocantidadprod"  class="alert alert-primary" role="alert" style="width: 100%;text-align: center;">-</div>
                        </div>
                        <h5>Subtotal <span id="lblsubtotalpagocarrito" >-</span></h5>
                      
                        <h4 class="grand-totall-title" style="padding-top: 32px;" >Total <span id="lbltotalpagocarrito">$260.00</span></h4>
                        <a href="<?=base_url()?>Web/TerminarPedido"  >Confirmar envio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart area end -->

    <script>
        $(document).ready(function () {
            getDatosCarritoCompra();
            // $('.offcanvas-toggle').attr('href','');
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
                $('#lbltextocantidadprod').css('display','block');
                $('#lbltextocantidadprod').text('Hay ' + cantidadProducto + ' producto' + (cantidadProducto>1 ? 's' : ''  ) );
            }else{
                $('#lbltextocantidadprod').css('display','none');
            }
            
            //seteando data al carrito

            var htmlTabla = '';
            var totalpagosoles = 0;
            var totalpagodolares = 0;
            if(productosCarrito.length == 0){
                htmlTabla += '<tr><td colspan="4" style="text-align:center">No hay productos en el carrito</td></tr>';
                $(".se-pre-con").fadeOut("slow");
                $('#tbProductosCarrito tbody').append(htmlTabla);
                $('.sectionconfirmacionenvio').css('display','none');
                return false;
            }
            $('.sectionconfirmacionenvio').css('display','block');

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

        function aumentacantidad(idprod, elemento){
            var inputcantidad = elemento.parent().find('input').eq(0);
            var currcantidad = inputcantidad.val();
            var nuevacantidad = Number(currcantidad)+1
            inputcantidad.val(nuevacantidad);

            var rpta = setCantidadProductoCarrito(idprod, 1 );
            listarProductoEnCarrito();
            getDatosCarritoCompra();
        }

        function disminuyecantidad(idprod, elemento){
            var inputcantidad = elemento.parent().find('input').eq(0);
            var currcantidad = inputcantidad.val();

            if(Number(currcantidad) == 1){
                return false;
            }

            var nuevacantidad = Number(currcantidad) - 1
            inputcantidad.val(nuevacantidad);
            var rpta = setCantidadProductoCarrito(idprod, -1 );
            listarProductoEnCarrito();
            getDatosCarritoCompra();
        }

        function quitarproductodecarrito(elemento){
            var el = elemento.parent().parent();
            var rptaelimina = removerProductoObj();
            //
            if(rptaelimina.codresult == 1){//si eliminó el objeto
                el.remove();
                getDatosCarritoCompra();
            }
        }

    </script>