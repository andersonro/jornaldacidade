<?php
session_start();
$PATH = '../';
require_once($PATH.'conexao/config.php');
require_once($PATH.'conexao/connection.php');
require_once($PATH.'conexao/database.php');
$con = DBConnect();
include_once($PATH.'includes/funcoes.php');

$email = DBEscape($_POST['email']);
$senha = md5(DBEscape($_POST['senha']));

$data  = DBFetchAssoc("usuarios","email = '".$email."'");
if($data){
	if($data['senha'] == $senha){
	    
        if($data['status']==0){
            redirecionar('index.php?e=2');
            exit;
        }
        
		if(!isset($_SESSION['usuario'])){
			$_SESSION['usuario'] = array();
		}
		
		foreach($data as $key=>$value){
			$_SESSION['usuario'][$key] = $value;
		}
		
		redirecionar('principal.php');
		
	}else{
		redirecionar('index.php?e=1');
	}
}else{
	redirecionar('index.php?e=0');
}

DBClose($con);
?>