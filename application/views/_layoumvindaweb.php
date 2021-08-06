<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Mvinda S.A.C</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <?php if(isset($CodProducto)) { ?>

        <meta property="og:locale" content="en_ES" />
        <meta property="og:type" content="Producto electrónico" />
        <meta property="og:title" content="<?=$NomProducto?>" />
        <meta property="og:description" content="<?=$descfacebook?>" />
        <meta property="og:url" content="<?=$urlfbshared?>" />
        <meta property="og:site_name" content="Mvinda Company S.AC" />
        <meta property="article:publisher" content="https://www.facebook.com/MvindaCompanyOficial" />
        <meta property="article:author" content="https://www.facebook.com/MvindaCompanyOficial" />

        <meta property="fb:app_id" content="3058970330780590" />
        <meta property="og:image" content="<?=$imgfbshared?>" />
        <meta property="og:image:secure_url" content="https://kinsta.com/wp-content/uploads/2016/03/website-speed-optimization-2.png" />

        <?php } ?>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/abelostyle/assets/images/favicon/favicon.png" />
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" type="text/css" media="all">

        <!-- CSS
  ============================================ -->
        <!-- Vendor CSS (Bootstrap & Icon Font) -->
        <link rel="stylesheet" href="<?=base_url()?>assets/abelostyle/assets/css/vendor/bootstrap.min.css">
       
        <link rel="stylesheet" href="<?=base_url()?>assets/abelostyle/assets/css/vendor/sofiaPro.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/abelostyle/assets/css/vendor/font-awesome.min.css">
        <!-- Plugins CSS (All Plugins Files) -->
        <link rel="stylesheet" href="<?=base_url()?>assets/abelostyle/assets/css/plugins/animate.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/abelostyle/assets/css/plugins/jquery-ui.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/abelostyle/assets/css/plugins/slick.css">
        <!-- Use the minified version files listed below for better performance and remove the files listed above -->
        <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css" />
        <link rel="stylesheet" href="assets/css/plugins/plugins.min.css" />
        <link rel="stylesheet" href="assets/css/style.min.css"> -->
        
        <link href="<?=base_url()?>assets/csoftcontent/font-awesome/css/font-awesome.css" rel="stylesheet">

        <!-- <link rel="stylesheet" href="<?=base_url()?>assets/abelostyle/assets/css/vendor/ionicons.min.css"> -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons-core.min.css" integrity="sha512-OmevVDECSDeo7M4G+Nvh0+VLVGS2XnEOkXWJcJ0TRom3GpGgc/ryQIgpRZw20mb5eR2U0sqsm33MaR8yD1zdsQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css" >
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/abelostyle/assets/css/style.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
        
    </head>

    <body>
    <style>
        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(<?=base_url()?>assets/images/images/loader-64x/Preloader_2.gif) center no-repeat #fff;
        }
    </style>

    <style type="text/css">
        .ui-autocomplete-row
        {
            padding:8px;
            background-color: #f4f4f4;
            border-bottom:1px solid #ccc;
            font-weight:bold;
        }
        .ui-autocomplete-row:hover
        {
            background-color: #ddd;
        }
    </style>


    <style media="screen">
    .botoncategoria{
        width:100%;
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .botonProducto{
        width:100%;
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .ibox {
        clear: both;
        margin-bottom: 9px;
        margin-top: 0;
        padding: 0;
    }

    .ui-autocomplete{
        border: 1px solid #f3f3f4;
        width:300px;
        padding-left: 9px;
        list-style: none;
        background-color: white;
        height: 400px !important;
        overflow: auto;
    }

    .selectize-control{
        width: 98% !important;
        padding-left: 13px !important;
    }

    .ui-autocomplete li{
        display:block;
    }

    .item-suggestions{
        cursor:pointer;
    }
    
    #ui-id-1 , #ui-id-2{
        border: 2px solid #d9d9d9;
    }

    .item-suggestions : hover{
        color : red;
        font-weight: bold;  
        }
    </style>

    <div class="se-pre-con"></div>