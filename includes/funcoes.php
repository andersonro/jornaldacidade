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

//Inicio painel ADM

function coresTemplate($cor='padrao'){
    switch ($cor) {
        case 'padrao':
            return 'default';
            break;
        case 'azul':
            return 'primary';
            break;
        case 'verde':
            return 'success';
            break;
        case 'azul':
            return 'info';
            break;
        case 'vermelho':
            return 'danger';
            break;
        case 'preto':
            return 'dark';
            break;    
        
    }
}

function verMatriz($vet=''){
    echo '<pre>';
        var_dump($vet);
    echo '</pre>';
}

function redirecionar($url=''){
    //header("Location:".$url); 
    echo '<script language= "JavaScript">
            location.href="'.$url.'"
          </script>';
}

function gerarAlertas($msg='', $cor='', $msgDestaque='', $aux=''){
    echo '<div class="alert alert-'.coresTemplate($cor).'">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                '.($msgDestaque?'<strong>'.$msgDestaque.'</strong> ':'').'
                '.($msg?$msg:'').'
                '.$aux.'
            </div>';
}

//Formularios
function gerarFormulario($action='',$titulo='',$class='',$aux='',$method=''){
    echo '<section class="panel">
            <header class="panel-heading">
                <!--
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>
                -->
                <h2 class="panel-title">'.$titulo.'</h2>
            </header>
            <div class="panel-body">
            <form class="form-horizontal form-bordered '.$class.'" action="'.$action.'" method="'.$method.'" '.$aux.' enctype="multipart/form-data">';
}

function finalizarFormulario(){
    echo '</form>
            </div>
              </section>';
}

function gerarInput($type='', $name='', $value='', $label='', $placeholder='', $class='', $aux='', $obr='', $tamInput=6){
    echo'<div class="form-group">
            <label class="col-md-3 control-label" for="inputSuccess">'.$label.''.($obr?' <span class="required">*</span>':'').'</label>
            <div class="col-md-'.$tamInput.'">
                <input class="form-control input-lg mb-md '.$class.'" type="'.$type.'" placeholder="'.$placeholder.'" id="'.$name.'" name="'.$name.'" '.($obr?'required':'').' />
            </div>
        </div>';
}

//Final painel ADM
?>