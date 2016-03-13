<?php
$PATH = '../';
require_once($PATH.'conexao/config.php');
require_once($PATH.'conexao/connection.php');
require_once($PATH.'conexao/database.php');
$con = DBConnect();

if(!$_SESSION['usuario']){
	redirecionar('logout.php');
}
?>