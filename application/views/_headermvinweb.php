<style>
        .item-suggestions :hover{
            background-color: #9e9e9e3d;
        }

        .suggest-item :hover{
            background-color: #9e9e9e3d !important;
        }
    </style>
    <img id="imagenproductodetalle" style="display:none;" src="" />
    <!-- Header Section Start From Here -->
    <header class="header-wrapper">
            <!-- Header Nav Start -->
            <div class="header-nav" style="display:none;">
                <div class="container">
                    <div class="header-nav-wrapper d-md-flex d-sm-flex d-xl-flex d-lg-flex justify-content-between">
                        <div class="header-static-nav">
                        <span class="lnr lnr-envelope"></span> <a href="##">mvinda@mvinda.com.pe  &nbsp;&nbsp;&nbsp;<span class="lnr lnr-phone-handset"></span> 955 102 830</a>
                        </div>
                        <div class="header-menu-nav">
                            <ul class="menu-nav">
                                <li>
                                    <span class="lnr lnr-map-marker"></span> <a href="##"> Av. Inca Garcilaso de la Vega 1261, Cercado de Lima 15001</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Nav End -->
            <div class="header-top bg-white ptb-30px d-lg-block d-none">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 d-flex">
                            <div class="logo align-self-center">
                                <a href="<?=base_url()?>"><img class="img-responsive" src="<?=base_url()?>assets/images/Logo.png" alt="logo.jpg" /></a>
                            </div>
                        </div>
                        <div class="col-md-9 align-self-center">
                            <div class="header-right-element d-flex">
                                <div class="search-element media-body mr-20px">
                                    <div class="d-flex" action="#">
                                        <!-- <div class="search-category">
                                            <select id="selectCategorias">
                                                <option>Todo</option> 
                                            </select>
                                        </div> -->
                                        <form style="width: 100%;" action="<?=base_url()?>Web/BusquedaProducto" >
                                            <input name="termbusqueda" id="txtbusquedaproducto" type="text" placeholder="Buscar un producto" required />
                                            <button type="submit" >
                                                Buscar
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <!--Cart info Start -->
                                <div class="header-tools d-flex">
                                    <div class="cart-info d-flex align-self-center">
                                        <!-- <a href="##offcanvas-wishlist" class="heart offcanvas-toggle"><i class="lnr lnr-heart"></i><span>Wishlist</span></a> -->
                                        <a id="sectioncarrritocomprasico"  href="#offcanvas-cart" style="color: #252423;font-weight: bold;" class="bag offcanvas-toggle">
                                            <span id="cantidadProductos" style='position: absolute; top: -10px; left: 34px; display: inline-block; width: 16px; height: 16px; color: #fff; background: #e80f17d1; line-height: 16px; font-size: 10px; border-radius: 100%; text-align: center; font-weight: 700;'>
                                                0
                                            </span>
                                            <i class="lnr lnr-cart"></i>
                                            <span id="lbltotalcarritocompra" >S/. 0.00</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--Cart info End -->
                        </div>
                    </div>
                </div>
            </div>
            <style>
            #categoriaslink {
                height: 300px; /*your fixed height*/
                -webkit-column-count: 4;
                -moz-column-count: 4;
                column-count: 4; /*3 in those rules is just placeholder -- can be anything*/
            }

            #categoriaslink .a {
                list-style-type: cambodian !important;
            }
            #categoriaslink li {
                /* display: inline-block;  */
            }
            </style>
            <!-- Header Nav End -->
            <div class="header-menu header-menu-2 bg-blue sticky-nav d-lg-block d-none padding-0px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="header-menu-vertical">
                                <h4 class="menu-title">Buscar categorias</h4>
                                <ul class="menu-content display-none" id="categoriaslink" style="height: auto; overflow: auto;min-width: 900px;" >
                                    <li class="menu-item"><a href="##">Televisions</a></li>
                                    <li class="menu-item">
                                        <a href="##">Electronics <i class="ion-ios-arrow-right"></i></a>
                                        <ul class="sub-menu flex-wrap">
                                            <li>
                                                <a href="##">
                                                    <span> <strong> Accessories & Parts</strong></span>
                                                </a>
                                                <ul class="submenu-item">
                                                    <li><a href="##">Cables & Adapters</a></li>
                                                    <li><a href="##">Batteries</a></li>
                                                    <li><a href="##">Chargers</a></li>
                                                    <li><a href="##">Bags & Cases</a></li>
                                                    <li><a href="##">Electronic Cigarettes</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="##">
                                                    <span><strong>Camera & Photo</strong></span>
                                                </a>
                                                <ul class="submenu-item">
                                                    <li><a href="##">Digital Cameras</a></li>
                                                    <li><a href="##">Camcorders</a></li>
                                                    <li><a href="##">Camera Drones</a></li>
                                                    <li><a href="##">Action Cameras</a></li>
                                                    <li><a href="##">Photo Studio Supplie</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="##">
                                                    <span><strong>Smart Electronics</strong></span>
                                                </a>
                                                <ul class="submenu-item">
                                                    <li><a href="##">Wearable Devices</a></li>
                                                    <li><a href="##">Smart Home Appliances</a></li>
                                                    <li><a href="##">Smart Remote Controls</a></li>
                                                    <li><a href="##">Smart Watches</a></li>
                                                    <li><a href="##">Smart Wristbands</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="##">
                                                    <span><strong>Audio & Video</strong></span>
                                                </a>
                                                <ul class="submenu-item">
                                                    <li><a href="##">Televisions</a></li>
                                                    <li><a href="##">TV Receivers</a></li>
                                                    <li><a href="##">Projectors</a></li>
                                                    <li><a href="##">Audio Amplifier Boards</a></li>
                                                    <li><a href="##">TV Sticks</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- sub menu -->
                                    </li>
                                    <li class="menu-item">
                                        <a href="##">Video Games <i class="ion-ios-arrow-right"></i></a>
                                        <ul class="sub-menu sub-menu-2">
                                            <li>
                                                <ul class="submenu-item">
                                                    <li><a href="##">Handheld Game Players</a></li>
                                                    <li><a href="##">Game Controllers</a></li>
                                                    <li><a href="##">Joysticks</a></li>
                                                    <li><a href="##">Stickers</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- sub menu -->
                                    </li>
                                    <li class="menu-item"><a href="##">Digital Cameras</a></li>
                                    <li class="menu-item"><a href="##">Headphones</a></li>
                                    <li class="menu-item"><a href="##"> Wearable Devices</a></li>
                                    <li class="menu-item"><a href="##"> Smart Watches</a></li>
                                    <li class="menu-item"><a href="##"> Game Controllers</a></li>
                                    <li class="menu-item"><a href="##"> Smart Home Appliances</a></li>
                                </ul>
                                <!-- menu content -->
                            </div>
                            <!-- header menu vertical -->
                        </div>
                        <div class="col-lg-9" style="display:none;">
                            <div class="header-horizontal-menu">
                                <ul class="menu-content">
                                    <li class="active menu-dropdown">
                                        <a href="##">Home <i class="ion-ios-arrow-down"></i></a>
                                        <ul class="main-sub-menu">
                                            <li><a href="##">Home 1</a></li>
                                            <li><a href="##">Home 2</a></li>
                                            <li><a href="##">Home 3</a></li>
                                            <li><a href="##">Home 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-dropdown">
                                        <a href="##">Shop <i class="ion-ios-arrow-down"></i></a>
                                        <ul class="mega-menu-wrap">
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><a href="##">Shop Grid</a></li>
                                                    <li><a href="##">Shop Grid 3 Column</a></li>
                                                    <li><a href="##">Shop Grid 4 Column</a></li>
                                                    <li><a href="##">Shop Grid Left Sidebar</a></li>
                                                    <li><a href="##">Shop Grid Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><a href="##">Shop List</a></li>
                                                    <li><a href="##">Shop List</a></li>
                                                    <li><a href="##">Shop List Left Sidebar</a></li>
                                                    <li><a href="##">Shop List Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><a href="##">Shop Single</a></li>
                                                    <li><a href="##">Shop Single</a></li>
                                                    <li><a href="##">Shop Variable</a></li>
                                                    <li><a href="##">Shop Affiliate</a></li>
                                                    <li><a href="##">Shop Group</a></li>
                                                    <li><a href="##">Shop Tab 2</a></li>
                                                    <li><a href="##">Shop Tab 3</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><a href="##">Shop Single</a></li>
                                                    <li><a href="##">Shop Slider</a></li>
                                                    <li><a href="##">Shop Gallery Left</a></li>
                                                    <li><a href="##">Shop Gallery Right</a></li>
                                                    <li><a href="##">Shop Sticky Left</a></li>
                                                    <li><a href="##">Shop Sticky Right</a></li>
                                                </ul>
                                            </li>
                                            <li class="w-100">
                                                <ul class="banner-megamenu-wrapper d-flex">
                                                    <li class="banner-wrapper mr-30px">
                                                    </li>
                                                    <li class="banner-wrapper">
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-dropdown">
                                        <a href="##">Pages <i class="ion-ios-arrow-down"></i></a>
                                        <ul class="main-sub-menu">
                                            <li><a href="##about.html">About Page</a></li>
                                            <li><a href="##cart.html">Cart Page</a></li>
                                            <li><a href="##checkout.html">Checkout Page</a></li>
                                            <li><a href="##compare.html">Compare Page</a></li>
                                            <li><a href="##login.html">Login & Register Page</a></li>
                                            <li><a href="#my-account.html">Account Page</a></li>
                                            <li><a href="#empty-cart.html">Empty Cart Page</a></li>
                                            <li><a href="#404.html">404 Page</a></li>
                                            <li><a href="#wishlist.html">Wishlist Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-dropdown">
                                        <a href="##">Blog <i class="ion-ios-arrow-down"></i></a>
                                        <ul class="main-sub-menu">
                                            <li class="menu-dropdown position-static">
                                                <a href="##">Blog Grid <i class="ion-ios-arrow-right"></i></a>
                                                <ul class="main-sub-menu main-sub-menu-2">
                                                    <li><a href="#blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                                    <li><a href="#blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-dropdown position-static">
                                                <a href="##">Blog List <i class="ion-ios-arrow-right"></i></a>
                                                <ul class="main-sub-menu main-sub-menu-2">
                                                    <li><a href="#blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                                    <li><a href="#blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-dropdown position-static">
                                                <a href="##">Blog Single <i class="ion-ios-arrow-right"></i></a>
                                                <ul class="main-sub-menu main-sub-menu-2">
                                                    <li><a href="#blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                                    <li><a href="#blog-single-right-sidebar.html">Blog Single Right Sidbar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-dropdown">
                                        <a href="##">Custom Menu <i class="ion-ios-arrow-down"></i></a>
                                        <ul class="mega-menu-wrap mega-menu-wrap-2">
                                            <li>
                                                <div class="custom-single-item">
                                                    <h4><a href="#shop-4-column.html">Women Is Clothes & Fashion</a></h4>
                                                    <p>Shop Women Is Clothing And Accessories And Get Inspired By The Latest Fashion Trends.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-single-item">
                                                    <h4><a href="#shop-4-column.html">Simple Style</a></h4>
                                                    <p>A New Flattering Style With All The Comfort Of Our Linen.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-single-item">
                                                    <h4><a href="#shop-4-column.html">Easy Style</a></h4>
                                                    <p>Endless Styling Possibilities In A Collection Full Of Versatile Pieces.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#contact.html">contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- header menu -->
        </header>
        <!-- Header Section End Here -->    



    <!-- Mobile Header Section Start -->
    <div class="mobile-header d-lg-none sticky-nav bg-white ptb-20px">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="#index.html"><img class="img-responsive" src="<?=base_url()?>assets/images/Logo.png" alt="logo.jpg" /></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <!-- <div class="cart-info d-flex align-self-center">
                            <a href="##offcanvas-wishlist" class="heart offcanvas-toggle"><i class="lnr lnr-heart"></i><span>Wishlist</span></a>
                            <a href="##offcanvas-cart" class="bag offcanvas-toggle"><i class="lnr lnr-cart"></i><span>My Cart</span></a>
                        </div> -->
                        <div class="mobile-menu-toggle">
                            <a href="##offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>


    <!-- Search Category Start -->
    <div class="mobile-search-area d-lg-none mb-15px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-element media-body">
                        <form class="d-flex" action="#">
                            <!-- <div class="search-category">
                                <select id="selectCategoriaMovil" >
                                
                                </select>
                            </div> -->
                            <input type="text" id="txtbusquedacatmovi" placeholder="Buscar un producto" />
                            <button><i class="lnr lnr-magnifier"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Category End -->
    <div class="mobile-category-nav d-lg-none">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!--=======  category menu  =======-->
                    <div class="hero-side-category">
                        <!-- Category Toggle Wrap -->
                        <div class="category-toggle-wrap">
                            <!-- Category Toggle -->
                            <button class="category-toggle"><i class="fa fa-bars"></i>Todas las Categorias</button>
                        </div>

                        <!-- Category Menu -->
                        <nav class="category-menu">
                            <ul id="categoriaMovil" >
                                <!-- <li><a href="##">Laptops</a></li> -->
                            </ul>
                        </nav>
                    </div>

                    <!--=======  End of category menu =======-->
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->

    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <?php foreach($slider as $imgslider):?>
                        <li>
                            <a href="#single-product.html" class="image"><img src="<?=base_url()?>assets/abelostyle/assets/images/product-image/1.jpg" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="#single-product.html" class="title">Walnut Cutting Board</a>
                                <span class="quantity-price">1 x <span class="amount">$100000.00</span></span>
                                <a href="##" class="remove">×</a>
                            </div>
                        </li>
                    <?php endforeach;?>
                  
                    <!-- <li>
                        <a href="#single-product.html" class="image"><img src="<?=base_url()?>assets/abelostyle/assets/images/product-image/2.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="#single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="##" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="#single-product.html" class="image"><img src="<?=base_url()?>assets/abelostyle/assets/images/product-image/3.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="#single-product.html" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                            <a href="##" class="remove">×</a>
                        </div>
                    </li> -->
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="#wishlist.html" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->


    
    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart" style="box-shadow: -3px 5px 13px 0px rgb(51 51 51 / 25%);" >
        <div class="inner">
            <div class="head">
                <span class="title">CARRITO</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul id="sectionCarrito" class="minicart-product-list">
                  
                </ul>
            </div>
            <div class="foot">
                <div class="sub-total">
                    <div id="lblmsjAlerta" class="alert alert-primary" role="alert" style="width: 100%;text-align: center;">
                        -
                    </div>

                    <strong>Subtotal :</strong>
                    <span id="lblsubtotal" style="color: gray;" class="amount">0.00</span>
                </div>
                <div class="sub-total" style="padding-top: 0;border-top: 0;margin: 11px 0;" >
                    <strong>Total (impuestos inc.):</strong>
                    <span class="amount" id="lblTotal" style="font-size: 1.5em;font-weight: bold;color:#1ab394;" >0.00</span>
                </div>
                <div class="buttons">
                    <!-- <a href="#cart.html" class="btn btn-dark btn-hover-primary mb-30px">view cart</a> -->
                    <!-- <a href="#checkout.html" class="btn btn-outline-dark current-btn" style="color: #fff; background-color: #9fc037;" >TRAMITAR PEDIDO</a> -->
                    <button onclick="tramitarPedido();" id="btnTramitarPedido" class="btn btn-outline-dark current-btn" style="color: #fff; background-color: #9fc037;width: 100%;" disabled="disabled" >TRAMITAR PEDIDO</button>
                </div>
                <!-- <p class="minicart-message">Free Shipping on All Orders Over $100!</p> -->
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Search Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <div class="inner customScroll">
            <div class="head">
                <span class="title">&nbsp;</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="offcanvas-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="lnr lnr-magnifier"></i></button>
                </form>
            </div>
            <div class="offcanvas-menu">
                <ul>
                    <li><a href="##"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li><a href="#index.html"><span class="menu-text">Home 1</span></a></li>
                            <li><a href="#index-2.html"><span class="menu-text">Home 2</span></a></li>
                            <li> <a href="#index-3.html"><span class="menu-text">Home 3</span></a></li>
                            <li><a href="#index-4.html"><span class="menu-text">Home 4</span></a></li>
                        </ul>
                    </li>
                    <li><a href="##"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="##"><span class="menu-text">Shop Grid</span></a>
                                <ul class="sub-menu">
                                    <li><a href="#shop-3-column.html">Shop Grid 3 Column</a></li>
                                    <li><a href="#shop-4-column.html">Shop Grid 4 Column</a></li>
                                    <li><a href="#shop-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                    <li><a href="#shop-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="##"><span class="menu-text">Shop List</span></a>
                                <ul class="sub-menu">
                                    <li><a href="#shop-list.html">Shop List</a></li>
                                    <li><a href="#shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                    <li><a href="#shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="##"><span class="menu-text">Shop Single</span></a>
                                <ul class="sub-menu">
                                    <li><a href="#single-product.html">Shop Single</a></li>
                                    <li><a href="#single-product-variable.html">Shop Variable</a></li>
                                    <li><a href="#single-product-affiliate.html">Shop Affiliate</a></li>
                                    <li><a href="#single-product-group.html">Shop Group</a></li>
                                    <li><a href="#single-product-tabstyle-2.html">Shop Tab 2</a></li>
                                    <li><a href="#single-product-tabstyle-3.html">Shop Tab 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="##"><span class="menu-text">Shop Single</span></a>
                                <ul class="sub-menu">
                                    <li><a href="#single-product-slider.html">Shop Slider</a></li>
                                    <li><a href="#single-product-gallery-left.html">Shop Gallery Left</a></li>
                                    <li><a href="#single-product-gallery-right.html">Shop Gallery Right</a></li>
                                    <li><a href="#single-product-sticky-left.html">Shop Sticky Left</a></li>
                                    <li><a href="#single-product-sticky-right.html">Shop Sticky Right</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="##"><span class="menu-text">Pages</span></a>
                        <ul class="sub-menu">
                            <li><a href="#about.html">About Page</a></li>
                            <li><a href="#cart.html">Cart Page</a></li>
                            <li><a href="#checkout.html">Checkout Page</a></li>
                            <li><a href="#compare.html">Compare Page</a></li>
                            <li><a href="#login.html">Login & Register Page</a></li>
                            <li><a href="#my-account.html">Account Page</a></li>
                            <li><a href="#empty-cart.html">Empty Cart Page</a></li>
                            <li><a href="#404.html">404 Page</a></li>
                            <li><a href="#wishlist.html">Wishlist Page</a></li>
                        </ul>
                    </li>
                    <li><a href="##"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="##"><span class="menu-text">Blog Grid</span></a>
                                <ul class="sub-menu">
                                    <li><a href="#blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                    <li><a href="#blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="##"><span class="menu-text">Blog List</span></a>
                                <ul class="sub-menu">
                                    <li><a href="#blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                    <li><a href="#blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="##"><span class="menu-text">Blog Single</span></a>
                                <ul class="sub-menu">
                                    <li><a href="#blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                    <li><a href="#blog-single-right-sidebar.html">Blog Single Right Sidbar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="##"><span class="menu-text">Custom Menu</span></a>
                        <ul class="sub-menu">
                            <li><a href="#shop-4-column.html">Women Is Clothes & Fashion</a></li>
                            <li><a href="#shop-4-column.html">Simple Style</a></li>
                            <li><a href="#shop-4-column.html">Easy Style</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact.html">Contact Us</a></li>
                </ul>
            </div>
                         <!-- OffCanvas Menu End -->
            <div class="offcanvas-social mt-30px">
                <ul>
                    <li>
                        <a href="##"><i class="ion-social-facebook"></i></a>
                    </li>
                    <li>
                        <a href="##"><i class="ion-social-twitter"></i></a>
                    </li>
                    <li>
                        <a href="##"><i class="ion-social-google"></i></a>
                    </li>
                    <li>
                        <a href="##"><i class="ion-social-youtube"></i></a>
                    </li>
                    <li>
                        <a href="##"><i class="ion-social-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Search End -->
<script>
    var terminoBusqueda = '<?=$termbusqueda?>';
    var COSTO_DOLAR_HOY = 3.840;
    var URL_BASE = '<?=base_url()?>';

    $(document).ready(function () {

        //
        getCategorias();
        activarBusqueda();
        activarbusquedamovil();
    });

    $(document).click(function(event) {
        var idselect = $(event.target).attr('id');
        if(!idselect){
            $('#ui-id-1, #ui-id-2').css('display','none');
        }
    });

    var widthbusqueda = 0;
    var dataBusquedaProducto = null;
    function activarBusqueda(){
        $("#txtbusquedaproducto").autocomplete({
            source: function (request, response) {
                var positioninput = $('#txtbusquedaproducto').offset();
                $('#ui-id-1').css({
                    'position' : 'absolute',
                    'top' : positioninput.top + 50,
                    'left' : positioninput.left
                });

                if(request.term.length >= 4){ //si el tecleado es igual o mayor a 4 caracteres
                    $(".ui-menu-item").empty();
                    var parametros = request.term + '|' + 0;
                    var URL_GET_PRODUCTOS = "<?php echo base_url()."XbestServicio/getProductosByLike" ?>";
                    $.post(URL_GET_PRODUCTOS,
                    {
                        nombreproducto: parametros
                    }, function (respuesta) {

                        var jsonData = respuesta;
                        // var strCuerpo = '';
                        var item = [];
                        dataBusquedaProducto = jsonData;
                    
                        $('#ui-id-1').empty();
                        var strHTMLlista = '';
                        $.each(dataBusquedaProducto,function(){
                            
                            var precioVenta = this.PrecioVenta;
                            var precio_venta_soles = (this.CodMoneda == 1 ? precioVenta : (precioVenta * COSTO_DOLAR_HOY) );
                            var precio_venta_dolares = (this.CodMoneda == 2 ? precioVenta : (precioVenta/COSTO_DOLAR_HOY) );
                            //
                            strHTMLlista +=     '<li class="item-suggestions" style="margin: 5px;" data-codigoproducto="'+ this.CodProducto +'" style="margin: 5px;" onclick="clickproducto($(this));" >'+
                                                    '<a class="suggest-item" style="display: flex;">' +
                                                        '<img width="64" class="media-object" src="'+
                                                            (this.NomProductoUM == null || this.NomProductoUM == ''  ?  URL_BASE + 'assets/abelostyle/assets/images/product-image/4.jpg' : 
                                                            'http://www.abexacloud.com/XBest/Adjunto/imagenproducto/20602732402/' + this.NomProductoUM  ) +
                                                         '" alt="...">'+
                                                        '<div class="name" style="padding-top: 8px;padding-left: 8px;" >' +
                                                            this.NomProducto +
                                                            '<p style="color: #1ab394;font-weight: 600;">'+ 
                                                                'S/. ' + precio_venta_soles.toFixed(2) + ' <span style="color:black;font-weight: 100;" >($ ' + precio_venta_dolares.toFixed(2) +')</span> </p>'+
                                                        '</div>' + 
                                                    '</a>' +
                                                '</li>';
                        });
                        $('#ui-id-1').append(strHTMLlista);
                        widthbusqueda = $('#txtbusquedaproducto').width();
                        $('#ui-id-1').width(widthbusqueda);
                        $('#ui-id-1').css('display','block');
                        //dataBusquedaProducto = item
                    },'JSON');
                }
            },
            select: function (event, ui) {
                console.log("opcion select-->");
            },
            create: function () {
                // $('#ui-id-1').empty();
                // var strHTMLlista = '';
                // $.each(dataBusquedaProducto,function(){
                //     console.log(this);
                //     strHTMLlista +=     '<li class="item-suggestions" data-codigoproducto="1" style="margin: 5px;" onclick="clickproducto();">'+
                //                                     '<a class="suggest-item" style="display: flex;">' +
                //                                         '<img width="64" class="media-object" src="'+
                //                                             (this.NomProductoUM == null || this.NomProductoUM == ''  ?  URL_BASE + 'assets/abelostyle/assets/images/product-image/4.jpg' : 
                //                                             'http://www.abexacloud.com/XBest/Adjunto/imagenproducto/20602732402/' + this.NomProductoUM  ) +
                //                                          '" alt="...">'+
                //                                         '<div class="name" style="padding-top: 8px;padding-left: 8px;" >' +
                //                                             this.NomProducto +
                //                                             '<p style="color: #1ab394;font-weight: 600;">'+ ( this.CodMoneda == 1 ? 'S/. ' : '$') + ' '+ Number(this.PrecioVenta).toFixed(2) +'</p>'+
                //                                         '</div>' + 
                //                                     '</a>' +
                //                         '</li>'

                // });
                // $('#ui-id-1').append(strHTMLlista);
                // $('.ui-autocomplete').width(widthbusqueda)
           },
        });
    }

    function clickproducto(elemento){
        var codigoProducto = elemento.attr('data-codigoproducto');
        var urlredirect = URL_BASE + 'Web/DetalleProducto/?codigoProducto=' + codigoProducto;
        window.location.replace(urlredirect);
    }

    var widthbusquedaMOV = 0;
    function activarbusquedamovil(){
        $("#txtbusquedacatmovi").autocomplete({
            source: function (request, response) {

                var positioninput = $('#txtbusquedacatmovi').offset();
                $('#ui-id-2').css({
                    'position' : 'absolute',
                    'top' : positioninput.top + 50,
                    'left' : positioninput.left
                });
                //
                if(request.term.length >= 4){ //si el tecleado es igual o mayor a 4 caracteres
                    $(".ui-menu-item").empty();
                    var parametros = request.term + '|' + 1;
                    var URL_GET_PRODUCTOS = "<?php echo base_url()."XbestServicio/getProductosByLike" ?>";
                    $.post(URL_GET_PRODUCTOS,
                    {
                        nombreproducto: parametros
                    }, function (respuesta) {
                        var jsonData = respuesta;
                        // var strCuerpo = '';
                        var item = [];
                        dataBusquedaProducto = jsonData;
                    
                        $('#ui-id-2').empty();
                        var strHTMLlista = '';
                        $.each(dataBusquedaProducto,function(){
                            strHTMLlista +=     '<li class="item-suggestions" style="margin: 5px;">'+
                                                    '<a class="suggest-item" style="display: flex;">' +
                                                        '<img width="64" class="media-object" src="'+
                                                            (this.NomProductoUM == null || this.NomProductoUM == ''  ?  URL_BASE + 'assets/abelostyle/assets/images/product-image/4.jpg' : 
                                                            'http://www.abexacloud.com/XBest/Adjunto/imagenproducto/20602732402/' + this.NomProductoUM  ) +
                                                         '" alt="...">'+
                                                        '<div class="name" style="padding-top: 8px;padding-left: 8px;" >' +
                                                            this.NomProducto +
                                                            '<p style="color: #1ab394;font-weight: 600;">'+ ( this.CodMoneda == 1 ? 'S/. ' : '$') + ' '+ Number(this.PrecioVenta).toFixed(2) +'</p>'+
                                                        '</div>' + 
                                                    '</a>'
                                                '</li>'

                        });
                        $('#ui-id-2').append(strHTMLlista);
                        widthbusquedaMOV = $('#txtbusquedacatmovi').width();
                        $('#ui-id-2').width(widthbusquedaMOV);
                        $('#ui-id-2').css('display','block');
                        //dataBusquedaProducto = item
                    },'JSON');
                }
            },
            select: function (event, ui) {
                
            },
            create: function () {
                $('#ui-id-1').empty();
                var strHTMLlista = '';
                $.each(dataBusquedaProducto,function(){
                    strHTMLlista +=     '<li class="item-suggestions" style="margin: 5px;">'+
                                            '<a class="suggest-item" style="display: flex;">' +
                                                '<img width="64" height="64" class="media-object" src="'+this.urlimg+'" alt="...">'+
                                                '<div class="name" style="padding-top: 8px;padding-left: 8px;" >' +
                                                    this.label +
                                                    '<p style="color: #1ab394;font-weight: 600;">'+ 'categoria' +'</p>'+
                                                '</div>' + 
                                            '</a>'
                                        '</li>'

                });
                $('#ui-id-1').append(strHTMLlista);
           },
        });
    }

    function setLocalDataCarrito(datacarrito){
        localStorage.setItem("datacarritocompra", datacarrito);
        // alert("se agregó el producto con éxito");
    }

    function getLocalDataCarrito(){
        var datacarrito = localStorage.getItem("datacarritocompra");
        return datacarrito;
    }

    function busquedaDeProducto(codproducto){
        var productoEncontrado = null;
        var arrCarrito = getLocalDataCarrito();
        if(arrCarrito){
            arrCarrito = JSON.parse(arrCarrito);
            $.each(arrCarrito,function(){
                var idproducto = Number(this.idproducto);
                var nombre = this.nomProducto;
                var cantidad = this.cantidad;
                //
                if(idproducto == Number(codproducto)){
                    console.log("producto existente", nombre);
                    productoEncontrado = this;
                }
            });
        }
        return productoEncontrado;
    }

    function setCantidadProductoCarrito(codproducto, cantidad){
        var arrCarrito = getLocalDataCarrito();
        var rpta = {
            codresult : 0,
            desresult : "No agregó"
        };
        //
        if(arrCarrito){
            arrCarrito = JSON.parse(arrCarrito);
            $.each(arrCarrito, function(){
                var idproducto = Number(this.idproducto);
                if(idproducto == Number(codproducto)){
                    this.cantidad += Number(cantidad);
                    rpta = {
                        codresult : 1,
                        desresult : "Agregó con éxito"
                    }
                }
            });
        }
        setLocalDataCarrito( JSON.stringify(arrCarrito) );
        return rpta;
    }

    function limpiarDataLocalStorage(){
        console.log("limpiar data total");
        localStorage.clear();
    }

    function removerProducto(idProducto, elemento){ //remueve producto del carrito de compras left
        var elementLi = elemento.parent().parent();
        elementLi.remove();
        // return false;
        var arrCarrito = getLocalDataCarrito();
        var indexofelimina = 0;
        //
        if(arrCarrito){
            arrCarrito = JSON.parse(arrCarrito);
            $.each(arrCarrito, function(i){

                if(Number(this.idproducto) == Number(idProducto)){
                    indexofelimina = i;
                    // this.cantidad += Number(cantidad);
                    // rpta = {
                    //     codresult : 1,
                    //     desresult : "Agregó con éxito"
                    // }
                }
            });
        }

        arrCarrito.splice(indexofelimina, 1);
        setLocalDataCarrito( JSON.stringify(arrCarrito));
        listarProductoEnCarrito();
        // console.log("removerProducto");
    }

    function removerProductoObj(idProducto){ //remueve producto del carrito de compras left
        var rpta = {
            codresult : 0,
            desresult : ''
        }
        var arrCarrito = getLocalDataCarrito();
        var indexofelimina = 0;
        //
        if(arrCarrito){
            arrCarrito = JSON.parse(arrCarrito);
            $.each(arrCarrito, function(i){

                if(Number(this.idproducto) == Number(idProducto)){
                    indexofelimina = i;
     
                }
            });
        }

        arrCarrito.splice(indexofelimina, 1);
        setLocalDataCarrito(JSON.stringify(arrCarrito));
        listarProductoEnCarrito();

        rpta = {
            codresult : 1,
            desresult : 'eliminó con éxito'
        }

        return rpta;
    }


    function listarProductoEnCarrito(){
        var productosCarrito = JSON.parse(getLocalDataCarrito()); //  JSON.parse(getLocalDataCarrito());
        
        var cantidadProducto = 0;
        $('#cantidadProductos').text('0');
        // console.log("productosCarrito", productosCarrito);
        $.each(productosCarrito, function(){
            cantidadProducto +=  Number(this.cantidad);
        });
        $('#cantidadProductos').text(cantidadProducto);
        //seteando productos en la lista
        $('#sectionCarrito').empty();
        $('#lblTotal').text('S/. 0.00');
        $('#lblsubtotal').text('S/. 0.00');
        $('#btnTramitarPedido').attr('disabled','disabled');
        $('#lbltotalcarritocompra').text('S/. 0.00');

        $('#lblmsjAlerta').text('');
        var strHTMLcarrito = '';
        var subtotal = 0;
        
        // console.log("-->", productosCarrito );


        $.each(productosCarrito, function(){
            subtotal += Number(this.ventasoles) * Number(this.cantidad);
            //
            strHTMLcarrito +=   '<li>' +
                                    '<a href="'+ '<?=base_url()?>' + 'Web/DetalleProducto/?codigoProducto=' + this.idproducto + '" class="image"><img src="'+ this.nombreurlimg +'" alt="Cart product Image"></a>' +
                                    '<div class="content">' +
                                        '<a href="'+ '<?=base_url()?>' + 'Web/DetalleProducto/?codigoProducto=' + this.idproducto + '" class="title">'+ this.nomProducto +'</a>' +
                                        '<span class="quantity-price">'+ this.cantidad +' x <span style="color:#f53b01" class="amount">S/. '+ Number(this.ventasoles).toFixed(2)  +'</span></span>' +
                                        // '<a href="##" class="remove">×</a>'  + 
                                        '<button class="remove" onclick="removerProducto('+ this.idproducto +', $(this));" style="background-color: red; color: white;  line-height: 1.3;">'+
                                            '×' +
                                        '</button>' + 
                                    '</div>' +
                                '</li>';
        });
        //
        subtotal = subtotal.toFixed(2);
        $('#sectionCarrito').append(strHTMLcarrito);
        $('#lblsubtotal').text('S/. '+ subtotal);
        $('#lblTotal').text('S/. '+ subtotal);
        $('#lbltotalcarritocompra').text('S/. '+ subtotal);
        $('#lblmsjAlerta').text('Hay ' + cantidadProducto + ' producto' + (cantidadProducto>1 ? 's' : ''  ) + ' en su carrito');
        //
        if(productosCarrito){
           if(productosCarrito.length > 0){
           	$('#btnTramitarPedido').removeAttr('disabled');
        	}
        }
        

    }

    function tramitarPedido(){
        var urlredirect = URL_BASE + '/Web/ResumenPedido';
        window.location.replace(urlredirect);
    }

    function getCategorias(){
        //
        // $('#selectCategorias').empty();
        // $('#selectCategoriaMovil').empty();
        $('#categoriaMovil').empty();
        $('#categoriaslink').empty();
        //
        var URL_GET_CATEGORIA = "<?php echo base_url()."XbestServicio/getCategorias" ?>";
        var data = { };
        //
        var strHTMLoption = "";
        var strHTMLcategoriaMenu = "";
        var strHTMLcategoriaLink = "";
        //
        // console.log('URL_GET_CATEGORIA->', URL_GET_CATEGORIA);
        //
        $.post(URL_GET_CATEGORIA, data, function (rpta) {
            //var respuestaJSON = JSON.parse(rpta);
            // console.log("categorias-->",rpta );
            // console.log("url CATEGORIAS->>", URL_BASE);
            $.each(rpta,function(){
                // strHTMLoption += '<option value="'+this.CodCategoriaProducto+'">'+ this.NomCategoriaProducto +'</option>';
                strHTMLcategoriaMenu += '<li><a href="'+ '<?php base_url()?>' + 'Web/ProductosByCategoria?c=' + this.CodCategoriaProducto +'">' +  '>'+ this.NomCategoriaProducto +'</a></li>';
                strHTMLcategoriaLink += '<li class="menu-item"><a href="'+ URL_BASE + 'Web/ProductosByCategoria?c=' + this.CodCategoriaProducto + '|' + this.NomCategoriaProducto +'">'+ '<span class="lnr lnr-chevron-right-circle"></span> ' +this.NomCategoriaProducto +'</a></li>';
            });
            // strHTMLoption += '<option value="0" selected >Todo</option>';
            // $('#selectCategorias').append(strHTMLoption);
            // $('#selectCategoriaMovil').append(strHTMLoption);
            $('#categoriaMovil').html(strHTMLcategoriaMenu);
            $('#categoriaslink').html(strHTMLcategoriaLink);
            //
            //activarBusqueda();
            // $(".se-pre-con").fadeOut("slow");
        },'JSON')
    }

    function limpiarCarritoCompras(){
        // var datacarritocompras =  [];
        setLocalDataCarrito(JSON.stringify([]));
        listarProductoEnCarrito();
    }
    //limpiarDataLocalStorage();
    listarProductoEnCarrito();
</script>