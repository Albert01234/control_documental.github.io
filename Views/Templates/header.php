<!DOCTYPE html>
<html lang="SITE_LANG">

<head>
    <meta charset="<?= SITE_CHARSET ?>">
    <?= get_favicon(); ?>
    <title><?php echo $data['page_name']; ?></title>


    <!-- Bootstrap -->
    <link href="<?= CSS ?>/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= FONTS ?>/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= CSS ?>/nprogress.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?= CSS ?>/custom.min.css" rel="stylesheet">
    <!-- plugins -->
    <link href="<?= PLUGINS ?>/noty/noty.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.5/af-2.3.7/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/datatables.min.css"/>
    <!-- Mis estilos -->
    <link href="<?= ASSETS ?>/app/css/app.css" rel="stylesheet">

</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a  class="site_title"> <span>I N S O M  E  D </span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="<?= IMG ?>img.jpg" alt="foto del perfil" class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Bienvenido</span>
                            <h2>Usuario</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />
                    <?php
                    include_once "nav.php";
                    ?>