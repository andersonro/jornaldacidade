<?php
//publicidades
iniciarRow('');
	iniciarCol(0,0,1,1);
	finalizarCol();
	
    iniciarCol(12,12,5,5,'publicidades');
        echo 'publicidade 1'; 
    finalizarCol();
    
    iniciarCol(12,12,5,5,'publicidades');
        echo 'publicidade 2';
    finalizarCol();
	
	iniciarCol(0,0,1,1);
	finalizarCol();
	
finalizarRow();

echo '<br />';

iniciarRow();
	
	iniciarCol(12,12,12,12);
		
		iniciarRow();
			
			iniciarCol(12,12,6,6,'logo');
                iniciarRow();
                    
                    iniciarCol(11,11,11,11,'div_img_logo');
                        echo '<a href="'.$PATH.'index.php">';
                            gerarImg($PATH.'imagens/logo.png','img_logo','',TRUE);
                        echo '</a>';
                    finalizarCol();
                    
                    iniciarCol(1,1,1,1);
                        echo '<div class="seta-esquerda"></div>';
                    finalizarCol();
                    
                finalizarRow();           
				 
			finalizarCol();
			
			
			iniciarCol(12,12,6,6,'fundo_cinza previsao_radio');
				
				iniciarRow();
                    
                    //previsao
                    iniciarCol(12,12,5,5,'previsao');
                        iniciarRow();
                            echo '<p class="previsao_cidade">Paraíso do Norte-PR</p>';
                            iniciarCol(3,3,3,4,'previsao_icone');
                                gerarImg($PATH.'imagens/previsao/c.png');
                            finalizarCol();
                            iniciarCol(9,9,9,8);
                                iniciarRow();
                                    iniciarCol(5,5,5,5);
                                        echo '<p class="previsao_min">
                                                <span class="previsao_temp_min">23º</span><br />
                                                <span>Min</span>
                                              </p>';
                                    finalizarCol();
                                    iniciarCol(5,5,5,5);
                                        echo '<p class="previsao_max">
                                                <span class="previsao_temp_max">31º</span><br />
                                                <span>Max</span>
                                              </p>';
                                    finalizarCol();
                                    iniciarCol(2,2,2,2);
                                    finalizarCol();
                                finalizarRow();
                            finalizarCol();
                        finalizarRow();                        
                        
                    finalizarCol();
                    
                    //radio
                    iniciarCol(12,12,5,5,'radio');
                    
                        iniciarRow();
                            iniciarCol(12,12,12,12);
                                gerarImg($PATH.'imagens/icone_radio.png','radio_icone','',TRUE, TRUE);    
                            finalizarCol();
                        finalizarRow();
                        echo '<br />';
                        iniciarRow();
                            iniciarCol(12,12,12,12, 'campo_procurar');
                                gerarForm('#');
                                    echo '<div class="form-group has-feedback">
                                            <input type="text" class="form-control" id="input_procurar" name="input_procurar" placeholder="O que você procura?" aria-describedby="inputError2Status">
                                            <span id="icone_lupa" class="glyphicon form-control-feedback" aria-hidden="true">
                                                <img src="'.$PATH.'imagens/icone_lupa.png" >
                                            </span>
                                          </div>';
                                finalizarForm();
                            finalizarCol();                               
                        finalizarRow();
                        
                    finalizarCol();
                    
                    iniciarCol(0,0,1,1);                                                
                    finalizarCol();
                
                finalizarRow();
                 
			finalizarCol();
			
		finalizarRow();
		
	finalizarCol();
	
finalizarRow();

echo '<br />';
?>