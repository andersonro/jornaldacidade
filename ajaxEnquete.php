<?php
$PATH = '';
include_once($PATH.'includes/funcoes.php');

$enquete    = $_POST['enquete'];
$acao       = $_POST['acao'];

if($acao=='resultado'){
    for ($i=1; $i < 6; $i++) { 
        $resultado .= '<p>Option one is this - '.($i*10).'%</p>';
    }    
    echo $resultado;    
}

if($acao=='salvar'){
    $ip = $_SERVER["REMOTE_ADDR"];    
    //verificar se já participou pelo IP e Enquete
    //se já votou
    if($ip!=$_SERVER["REMOTE_ADDR"]){        
        echo '<p style="font-size:18px; color:red; text-align: center;">Você já participou dessa enquete.</p>';
    }else{
        //salvar
        echo '<p style="font-size:18px; color:blue; text-align: center;">Obrigado por participar da enquete, acompanhe o resultado.</p>';
    }
}

?>