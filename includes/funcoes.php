<?php
function iniciarContainer($fluid=FALSE, $class='', $aux=''){
        echo '<div class="container'.($fluid?'-fluid':'').' '.$class.'" '.$aux.'>';
}
function finalizarContainer(){
    echo '</div>';
}
function iniciarRow($aux='',$class=""){
    echo '<div class="row '.($class?$class:'').'" '.$aux.'>';
}
function finalizarRow(){
    echo '</div>';
}

function iniciarCol($col_xs='', $col_sm='', $col_md='', $col_lg='', $class='', $aux=''){
    echo '<div class="'.($col_xs?'col-xs-'.$col_xs.' ':'').''.($col_sm?'col-sm-'.$col_sm.' ':'').''.($col_md?'col-md-'.$col_md.' ':'').''.($col_lg?'col-lg-'.$col_lg.' ':'').' '.$class.'" '.$aux.'>';
}
function finalizarCol(){
    echo '</div>';
}
function gerarImg($img='', $class='', $aux='', $responsive=FALSE, $rounded=FALSE, $thumbnail=FALSE, $circle=FALSE, $width='', $height=''){
    echo '<img src="'.$img.'" 
               class="'.($responsive?'img-responsive ':'').'
                      '.($rounded?'img-rounded ':'').'
                      '.($circle?'img-circle ':'').'
                      '.($thumbnail?'img-thumbnail ':'').''.$class.'" 
               width="'.$width.'" 
               height="'.$height.'" '.$aux.' />';
}

function gerarForm($action='', $class='', $aux='', $method='post'){
    echo '<form action="'.$action.'" method="'.$method.'" class="'.$class.'" '.$aux.' enctype="multipart/form-data">';
}
function finalizarForm(){
    echo '</form>';
}

function espaco($qtd=''){
    for ($i=1; $i <= $qtd ; $i++) { 
        $espaco .= '&nbsp;';
    }
    echo $espaco;
}

function br($qtd=''){
    for ($i=1; $i <= ($qtd?$qtd:1); $i++) { 
        $br .= '<br />';
    }
    echo $br;
}

function hr($class='', $aux=''){
    echo '<hr class="'.$class.'" '.$aux.'>';
}
?>