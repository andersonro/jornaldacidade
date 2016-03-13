<?php
session_start();
$PATH = '../';
include_once($PATH.'includes/funcoes.php');

session_unset();
session_destroy();

redirecionar('index.php');

?>
