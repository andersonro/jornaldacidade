<?php
include_once('funcoes.php');
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gerenciador de sites e conteudos">
    <meta name="author" content="Anderson Roberto - anderson_r_oliveira@hotmail.com">
    <title>CMS</title>
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/waves.css" type="text/css">
    <link rel="stylesheet" href="css/layout.css" type="text/css">
    <link rel="stylesheet" href="css/components.css" type="text/css">
    <link rel="stylesheet" href="css/plugins.css" type="text/css">
    <link rel="stylesheet" href="css/common-styles.css" type="text/css">
    <link rel="stylesheet" href="css/pages.css" type="text/css">
    <link rel="stylesheet" href="css/responsive.css" type="text/css">
    <link rel="stylesheet" href="css/matmix-iconfont.css" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,500,500italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" type="text/css">
</head>
<body class="login-page">
    <div class="page-container">
        <div class="login-branding">
            <a href="index.html"><img src="images/logo-large.png" alt="logo"></a>
        </div>
        <div class="login-container">
            <?php
            alerta('Erro','teste','alerta');
            ?>
            <!-- <img class="login-img-card" src="images/avatar/jaman-01.jpg" alt="login thumb" /> -->
            <form class="form-signin" action="login.php" method="post">
                <input type="email" id="email" name="email" class="form-control floatlabel " placeholder="E-mail" required autofocus>
                <input type="password" id="senha" name="senha" class="form-control floatlabel " placeholder="Senha" required>
                <button class="btn btn-primary btn-block btn-signin" type="submit">Acessar</button>
            </form>
            
        </div>
        
        <div class="login-footer">
            <!-- Crafted with<i class="fa fa-heart"></i>by <a href="#">westilian</a> -->

        </div>

    </div>
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jRespond.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/nav-accordion.js"></script>
    <script src="js/hoverintent.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/switchery.js"></script>
    <script src="js/jquery.loadmask.js"></script>
    <script src="js/icheck.js"></script>
    <script src="js/bootbox.js"></script>
    <script src="js/animation.js"></script>
    <script src="js/colorpicker.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/floatlabels.js"></script>
    
    <!--UI Elements & Components-->
    <script src="js/jquery.noty.js"></script>
    <script src="js/switchery.js"></script>
    <script src="js/jquery.nouislider.js"></script>
    <script src="js/bootbox.js"></script>
    <script src="js/sweetalert.js"></script>
    
    <script src="js/smart-resize.js"></script>
    <script src="js/layout.init.js"></script>
    <script src="js/matmix.init.js"></script>
    <script src="js/retina.min.js"></script>
</body>

</html>