<?php
iniciarRow();
   
   iniciarCol(0,0,1,1);
   finalizarCol();
   
   iniciarCol(12,12,10,10);
   ?>
    <div class="div_menu">
        <nav class="menu">
            <ul>
                <li class="">
                    <a href="<?=$PATH?>index.php">Início</a>
                </li>
                <li class="">
                    <a href="<?=$PATH?>sobre.php">Sobre o Jornal</a>
                </li>
                <li class="">
                    <a href="<?=$PATH?>noticias.php?tipo=n" >Notícias</a>                    
                </li>
                <li class="">
                    <a href="#" rel="mais_editorias">Editorias <img id="seta_menu" rel="baixo" src="<?=$PATH?>imagens/seta_menu.png"></a>
                </li>
                <li class="">
                    <a href="<?=$PATH?>galeria.php">Galeria de fotos</a>                        
                </li>
                <li class="">
                    <a href="<?=$PATH?>anuncie.php">Anuncie</a>
                </li>
                <li class="">
                    <a href="<?=$PATH?>anuncie.php">Envie sua Matéria</a>
                </li>
                <li class="">
                    <a href="<?=$PATH?>contato.php">Contato</a>
                </li>
            </ul>
        </nav>
    </div>
   <?php
   finalizarCol();
   
   iniciarCol(0,0,1,1);
   finalizarCol();
   
finalizarRow();

iniciarRow('id="div_mais_editorias" style="display:none;"');
   iniciarCol(0,0,1,1);
   finalizarCol();
   
   iniciarCol(12,12,10,10,'','style="background-color: #df0b31; padding:20px 10px 20px 10px"');
        iniciarRow();
            iniciarCol(9,9,9,9);
                iniciarRow();
                    
                    $j = 1;
                    for ($i=1; $i <= 20; $i++) { 
                        if($j==1) iniciarCol(3,3,3,3);
                            if($j<=5) echo '<a href="'.$PATH.'noticias.php?tipo=e">
                                            <p style="height: 30px;position: relative;display:table;">
                                             <span class="glyphicon" aria-hidden="true" style="display: table-cell;vertical-align: middle;top:-8px">
                                                <img src="'.$PATH.'imagens/icone_editoriais.png" />                                                
                                             </span>';
                                             espaco(2);
                                             echo '<span class="font-color-branco" style="display: table-cell;">Categoria '.$i.'</span>
                                                  </p>
                                                  </a>';
                        if($j==5){
                            finalizarCol();
                            $j=1;
                        }else{
                            $j++;
                        }
                    }
                    if($j==5)finalizarCol();
                    
                finalizarRow();
            finalizarCol();
            iniciarCol(3,3,3,3);
                gerarImg($PATH.'imagens/editoriais_menu.png','','',TRUE);
            finalizarCol();
        finalizarRow();
   finalizarCol();
   
   iniciarCol(0,0,1,1);
   finalizarCol();
finalizarRow();
?>