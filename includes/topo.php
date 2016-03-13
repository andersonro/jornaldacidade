<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta http-equiv="pragma" content="no-cache" />
        <meta name="description" content="Jornal da Cidade - A fronteira em foco">
        <meta name="author" content="Anderson Roberto de Oliveira">
        <link rel="icon" href="../../favicon.ico">
        
        <title>Jornal da Cidade - A fronteira em foco</title>
        
        <!-- Bootstrap core CSS -->
        <!--<link href="<?=$PATH?>css/bootstrap.min.css?<?=date('dmYHis')?>" rel="stylesheet">-->
        <link href="<?=$PATH?>css/bootstrap.css?v=<?=date('dmYHis')?>" rel="stylesheet">
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="<?=$PATH?>css/ie10-viewport-bug-workaround.css?v=<?=date('dmYHis')?>" rel="stylesheet">
        <link href="<?=$PATH?>css/style.css?v=<?=date('dmYHis')?>" rel="stylesheet">
        
        <link href="<?=$PATH?>css/slick.css?v=<?=date('dmYHis')?>" rel="stylesheet">
        
        <link href="<?=$PATH?>css/mapsEstilo.css?v=<?=date('dmYHis')?>" rel="stylesheet">
        
        <link rel="stylesheet" type="text/css" href="<?=$PATH?>js/fancyBox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?=$PATH?>js/fancyBox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?=$PATH?>js/fancyBox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />

    </head>
    <body>
    <?php
    include_once($PATH.'includes/funcoes.php');
    iniciarContainer(TRUE);
    include_once($PATH.'includes/cabecalho.php');
    include_once($PATH.'includes/menu.php');    
    
    ?>