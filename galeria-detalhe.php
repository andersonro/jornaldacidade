<?php
$PATH = '';
include_once($PATH.'includes/topo.php');

for ($i=0; $i < 19; $i++) { 
	$fotos[] = $i;
}

iniciarRow();
    iniciarCol(12,12,12,12);
        echo '<hr class="linha-divisao3">';
    finalizarCol();    
finalizarRow();
br();
iniciarRow();
    iniciarCol(0,0,1,1);
    finalizarCol();
    iniciarCol(12,12,10,10);
        echo '<p class="font-negrito font-color-preto font-18 font-maiusculo">galeria de xxx</p>';
        echo '<p class="font-negrito font-color-cinza-escuro font-12 font-maiusculo">Selecione uma galeria:</p>';
        br();
        
        $i = 1;
        foreach ($fotos as $key => $value) {
            if($i==1) iniciarRow();
                
                if($i<=4){
                    iniciarCol(3,3,3,3);
                        echo '<a class="fancybox" rel="group" href="'.$PATH.'imagens/noticias/noticia3.jpg">';                            
                            gerarImg($PATH.'imagens/noticias/noticia3.jpg','','title="'.$i.'"',TRUE);                                
                        echo '</a>';                
                    finalizarCol();
                }
            if($i==4){
                $i=1;
                finalizarRow();
                br();
            }else{
                $i++;
            }
            
        }
        if($i<4){
            finalizarRow();
            br();
        }
            
    finalizarCol();
    iniciarCol(0,0,1,1);
    finalizarCol();
finalizarRow();
br(5);

include_once($PATH.'includes/rodape.php');
?>