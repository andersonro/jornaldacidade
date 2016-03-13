<?php
$PATH = '';
include_once($PATH.'includes/topo.php');

$loremIpsum = 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.';

iniciarRow();

    iniciarCol(12,12,12,12,'fundo_preto noticia');
    
        iniciarRow();
        
            iniciarCol(12,12,7,7,'noticia');
                echo '<a href="noticia-detalhe.php?n=1">';
                    echo '<span class="icone_tags icone_tags_position">Música</span>';
                        gerarImg($PATH.'imagens/noticias/noticia1.jpeg','img-noticias-efeito noticia-1');
                    echo '<span class="noticia-titulo noticia-titulo-1">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</span>';
                echo '</a>';
            finalizarCol();
            
            iniciarCol(12,12,5,5,'noticia');
                iniciarRow();
                    iniciarCol(12,12,12,12,'');
                        echo '<a href="noticia-detalhe.php?n=1">';
                            echo '<span class="icone_tags icone_tags_position1">Politica</span>';
                            gerarImg($PATH.'imagens/noticias/noticia2.jpg','img-noticias-efeito noticia-2');
                            echo '<span class="noticia-titulo noticia-titulo-2">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</span>';
                        echo '</a>';
                    finalizarCol();
                finalizarRow();
                iniciarRow();
                    iniciarCol(12,12,12,12,'');
                        echo '<a href="noticia-detalhe.php?n=1">';
                            echo '<span class="icone_tags icone_tags_position1">Saúde</span>';
                            gerarImg($PATH.'imagens/noticias/noticia3.jpg','img-noticias-efeito noticia-2');
                            echo '<span class="noticia-titulo noticia-titulo-2">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</span>';
                        echo '</a>';
                    finalizarCol();
                finalizarRow();
            finalizarCol();
            
        finalizarRow();
        
    finalizarCol();
    
finalizarRow();
echo '<br />';

//publicidade 2
iniciarRow('');
    iniciarCol(0,0,1,1);
    finalizarCol();
    
    iniciarCol(12,12,10,10,'publicidades');
        echo 'publicidade 1'; 
    finalizarCol();   
    
    iniciarCol(0,0,1,1);
    finalizarCol();
    
finalizarRow();
echo '<br />';


//(esporte - cultura) - Noticias principais - (Folha impressa - publicidade)
iniciarRow();
    iniciarCol(0,0,1,1);
    finalizarCol();
    
    //categorias
    iniciarCol(12,12,2,2);
        iniciarRow();
            iniciarCol(12,12,12,12,'categoria');
                echo '<p class="categoria-titulo">
                        <i class="icone-categoria"></i>
                        esporte
                      </p>';
                echo '<a href="noticia-detalhe.php?n=1">';      
                    gerarImg($PATH.'imagens/categorias/categoria1.png');
                    echo '<p class="categoria-resumo">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</p>';
                echo '</a>';
            finalizarCol();
        finalizarRow();
        iniciarRow();
            iniciarCol(12,12,12,12);
                echo '<p class="categoria-titulo">
                        <i class="icone-categoria"></i>
                        cultura
                      </p>';
                echo '<a href="noticia-detalhe.php?n=1">';
                    gerarImg($PATH.'imagens/categorias/categoria2.png');
                    echo '<p class="categoria-resumo">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</p>';
                echo '</a>';
            finalizarCol();            
        finalizarRow();
    finalizarCol();
    
    //noticia principal 1
    iniciarCol(12,12,6,6);
        
        iniciarRow();
            
            echo '<p class="categoria-titulo">
                    Notícias principais
                  </p>';
            
            iniciarCol(12,12,7,7, 'noticia');
                echo '<a href="noticia-detalhe.php?n=1">';                
                    echo '<span class="icone_tags icone-tags-principal">Politica</span>';
                    echo '<div class="fundo_preto noticia-principal-1">';
                        gerarImg($PATH.'imagens/noticias/principal1.jpg','noticia-principal-1 img-noticias-efeito fundo_preto');
                    echo '</div>';
                    echo '<span class="noticia-titulo noticia-titulo-2">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</span>';
                echo '</a>';
            finalizarCol();
            
            iniciarCol(12,12,5,5);
                
                iniciarRow();
                    iniciarCol(12,12,12,12, 'noticia');
                        echo '<a href="noticia-detalhe.php?n=1">';
                            echo '<span class="icone_tags icone-tags-principal">Politica</span>';
                            echo '<div class="fundo_preto noticia-principal-2">';
                                gerarImg($PATH.'imagens/noticias/principal2.png','noticia-principal-2 img-noticias-efeito fundo_preto');
                            echo '</div>';
                            echo '<span class="noticia-titulo noticia-titulo-3">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</span>';
                        echo '</a>';
                    finalizarCol();
                finalizarRow();
                
                iniciarRow();
                    iniciarCol(12,12,12,12, 'noticia');
                        echo '<a href="noticia-detalhe.php?n=1">';
                            echo '<span class="icone_tags icone-tags-principal">Politica</span>';
                            echo '<div class="fundo_preto noticia-principal-2">';
                            gerarImg($PATH.'imagens/noticias/principal3.png','noticia-principal-2 img-noticias-efeito fundo_preto');
                            echo '</div>';
                            echo '<span class="noticia-titulo noticia-titulo-3">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</span>';
                        echo '</a>';
                    finalizarCol();
                finalizarRow();                
                
            finalizarCol();
            
        finalizarRow();    
        
    finalizarCol();    
    
    
    iniciarCol(12,12,2,2,'');
        echo '<p class="categoria-titulo">
                <i class="icone-categoria"></i>
                versão impressa
              </p>';
       
        iniciarRow();
            iniciarCol(12,12,12,12,'fundo_cinza');
                echo '<a href="#">';
                    gerarImg($PATH.'imagens/edicao_impressa/capa.png','edicao-capa');
                echo '</a>';
            finalizarCol();
        finalizarRow();
        echo '<br />';
        iniciarRow();
            iniciarCol(12,12,12,12,'fundo_cinza');
                echo 'publicidade 3';
            finalizarCol();
        finalizarRow();        
    finalizarCol();
    
    iniciarCol(0,0,1,1);
    finalizarCol();
    
finalizarRow();
echo '<br />';

iniciarRow();
    iniciarCol(0,0,1,1);
    finalizarCol();
    iniciarCol(12,12,10,10);
        echo '<hr class="linha-divisao3">';
    finalizarCol();
    iniciarCol(0,0,1,1);
    finalizarCol();
finalizarRow();
echo '<br />';

//Galeria de fotos

iniciarRow();
    iniciarCol(0,0,1,1);
    finalizarCol();
    iniciarCol(12,12,10,10);
        echo '<p class="categoria-titulo">
                GALERIA DE FOTOS
              </p>';
    finalizarCol();
    iniciarCol(0,0,1,1);
    finalizarCol();
finalizarRow();
iniciarRow();
    
    iniciarCol(0,0,1,1);
    finalizarCol();    
    
    iniciarCol(12,12,2,2);
        
        iniciarRow();
            iniciarCol(12,12,12,12,'');
                echo '<a href="noticia-detalhe.php?n=1">';
                    echo '<div class="fundo_preto galeria1">';
                        gerarImg($PATH.'imagens/categorias/categoria1.png','galeria1 img-noticias-efeito');
                        echo '<p class="titulo-sobre_img font-14 negativo40">Lorem Ipsum é simplesmente uma simulação de texto.</p>';
                    echo '</div>';
                echo '</a>';
            finalizarCol();
        finalizarRow();
        echo '<br />';
        iniciarRow();
            iniciarCol(12,12,12,12);
                echo '<a href="noticia-detalhe.php?n=1">';
                    echo '<div class="fundo_preto galeria1">';
                        gerarImg($PATH.'imagens/categorias/categoria2.png','galeria1 img-noticias-efeito');
                    echo '</div>';
                    echo '<p class="titulo-sobre_img font-14 negativo40">Lorem Ipsum é simplesmente uma simulação de texto.</p>';
                echo '</a>';
            finalizarCol();            
        finalizarRow();
        
    finalizarCol();
    
    iniciarCol(12,12,6,6);
        echo '<a href="noticia-detalhe.php?n=1">';
            echo '<span class="icone_tags icone-tags-principal" style="margin-left:30px;">Politica</span>';
            echo '<div class="fundo_preto galeria2">';
                gerarImg($PATH.'imagens/categorias/categoria2.png','galeria2 img-noticias-efeito');
            echo '</div>';
            echo '<p class="titulo-sobre_img galeria-titulo2 font-20 negativo10">Lorem Ipsum é simplesmente uma simulação de texto.</p>';
        echo '</a>';
    finalizarCol();
    
    iniciarCol(12,12,2,2);
        echo '<a href="noticia-detalhe.php?n=1">';
            gerarImg($PATH.'imagens/categorias/categoria2.png','galeria-memoria');
            echo '<p class="font-color-rosa font-12 font-negrito font-maiusculo">foto memória</p>';
            echo '<p class="font-color-preto font-16 font-negrito font-justify">Lorem Ipsum é simplesmente uma simulação de texto</p>';
            echo '<p class="font-color-cinza-escuro font-12 font-justify" >Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</p>';
        echo '</a>';
        
    finalizarCol();
    
    iniciarCol(0,0,1,1);
    finalizarCol();
    
finalizarRow();

iniciarRow();
    iniciarCol(0,0,1,1);
    finalizarCol();
    iniciarCol(12,12,10,10);
        echo '<hr class="linha-divisao3">';
    finalizarCol();
    iniciarCol(0,0,1,1);
    finalizarCol();
finalizarRow();

//mais lidas
iniciarRow();
    iniciarCol(0,0,1,1);
    finalizarCol();
    iniciarCol(12,12,10,10);
        echo '<p class="categoria-titulo">
                Mais lidas do jornal da cidade
              </p>';
    finalizarCol();
    iniciarCol(0,0,1,1);
    finalizarCol();
finalizarRow();
iniciarRow();
    iniciarCol(0,0,1,1);
    finalizarCol();
    iniciarCol(12,12,10,10);
        iniciarRow();
        for ($i=1; $i <=4 ; $i++) {
            iniciarCol(12,12,3,3,'mais-lidas-col');
                echo '<a href="noticia-detalhe.php?n=1">';
                    echo '<span class="icone_tags icone-tags-principal">Politica</span>'; 
                    echo '<div class="fundo_preto mais-lidas">';
                    gerarImg($PATH.'imagens/categorias/categoria1.png','mais-lidas img-noticias-efeito');
                    echo '</div>';
                    echo '<p class="titulo-sobre_img font-14 font-negrito negativo30">Lorem Ipsum é simplesmente uma simulação de texto.</p>';
                echo '</a>';
            finalizarCol();
        }
        finalizarRow();
    finalizarCol();
    iniciarCol(0,0,1,1);
    finalizarCol();
finalizarRow();
echo '<br />';

iniciarRow();
    iniciarCol(0,0,1,1);
    finalizarCol();
    iniciarCol(12,12,10,10);
        echo '<hr class="linha-divisao3">';
    finalizarCol();
    iniciarCol(0,0,1,1);
    finalizarCol();
finalizarRow();

//eventos
iniciarRow();
    iniciarCol(0,0,1,1);
    finalizarCol();
    iniciarCol(12,12,10,10);
        echo '<div class="categoria-titulo evento-titulo-topo">
                <span>Eventos</span>
              </div>';
        echo '<div class="evento-setas">
                <span class="font-12 font-color-cinza-escuro">selecione</span>
                <a href="javascript:void(0)" class="evento-slide-slick-prev"><img src="'.$PATH.'imagens/seta_esquerda.png" class="evento-seta-img"></a>
                <a href="javascript:void(0)" class="evento-slide-slick-next"><img src="'.$PATH.'imagens/seta_direita.png" class="evento-seta-img"></a>
            </div>';
    finalizarCol();
    iniciarCol(0,0,1,1);
    finalizarCol();
finalizarRow();
iniciarRow();
    iniciarCol(0,0,1,1);
    finalizarCol();
    iniciarCol(12,12,10,10);
        iniciarRow();
        echo '<div class="evento-slider" style="overflow: hidden;">';
        for ($i=1; $i <=8 ; $i++) {
            iniciarCol(12,12,3,3,'evento-col');
                echo '<a href="noticia-detalhe.php?n=1">';
                    echo '<span class="icone_tags icone-tags-principal">Politica</span>'; 
                    echo '<div class="fundo_preto mais-lidas">';
                    gerarImg($PATH.'imagens/categorias/categoria1.png','evento-img img-noticias-efeito');
                    echo '</div>';
                    echo '<p class="titulo-sobre_img evento-titulo font-14 font-negrito negativo30">Lorem Ipsum é simplesmente uma simulação de texto.</p>';
                echo '</a>';
            finalizarCol();
        }
        echo '</div>';
        finalizarRow();
        
    finalizarCol();
    iniciarCol(0,0,1,1);
    finalizarCol();
finalizarRow();

iniciarRow();
    iniciarCol(0,0,1,1);
    finalizarCol();
    iniciarCol(12,12,10,10,'font-right');
        echo '<a href="#" class="font-14 font-color-cinza-escuro decoration-none">+ ver mais</a>';
    finalizarCol();
    iniciarCol(0,0,1,1);
    finalizarCol();
finalizarRow();

echo '<br />';

iniciarRow();
    iniciarCol(0,0,1,1);
    finalizarCol();
    iniciarCol(12,12,10,10);
        echo '<hr class="linha-divisao3">';
    finalizarCol();
    iniciarCol(0,0,1,1);
    finalizarCol();
finalizarRow();


iniciarRow();
    
    iniciarCol(0,0,1,1);
    finalizarCol();
    
    iniciarCol(12,12,10,10);
        
        iniciarRow();
            //agenda
            iniciarCol(12,12,9,9);
                //titulo agenda - navegador
                iniciarRow();
                    iniciarCol(12,12,12,12, '', 'style="padding-bottom:10px"');
                        
						echo '<div class="categoria-titulo agenda-titulo-topo">
								<span>agenda</span>
							  </div>';
						echo '<div class="agenda-setas">
								<span class="font-12 font-color-cinza-escuro">selecione</span>
								<a href="javascript:void(0)" class="agenda-slide-slick-prev"><img src="'.$PATH.'imagens/seta_esquerda.png" class="agenda-seta-img"></a>
								<a href="javascript:void(0)" class="agenda-slide-slick-next"><img src="'.$PATH.'imagens/seta_direita.png" class="agenda-seta-img"></a>
							</div>';
                    finalizarCol();
                finalizarRow();
                
                
                iniciarRow('style="padding:0 0 10px 0;"');
					echo '<div class="agenda-slider" style="overflow: hidden;">';
                    for ($i=0; $i < 6; $i++) { 
                        iniciarCol(4,4,4,4);
                            echo '<a href="noticia-detalhe.php?n='.$i.'">';
                                echo '<div class="agenda">';                                
                                    echo '<div class="agenda-icone">
                                            <span class="agenda-dia font-color-preto font-18 font-center font-negrito">26</span><br />
                                            <span class="agenda-mes font-minusculo font-color-preto font-10 font-center">Janeiro</span>
                                          </div>';
                                    echo '<p class="agenda-titulo font-18 font-negrito font-center">
                                            '.substr($loremIpsum, 0,50).'
                                          </p>';
                                    echo '<p class="agenda-resumo font-12 font-center font-color-cinza-escuro">
                                            '.substr($loremIpsum, 0,150).'
                                          </p>';
                                echo '</div>';
                            echo '</a>';
                        finalizarCol();
                    }
					echo '</div>';
                finalizarRow();
                
            finalizarCol();
            
            //enquete
            iniciarCol(12,12,3,3);
            
                echo '<p class="categoria-titulo" style="padding:0 0 8px 0">
                                enquete
                              </p>';
                
                iniciarRow();
                    iniciarCol(12,12,12,12,'fundo_rosa');
                        echo '<p class="enquete-titulo font-color-branco font-negrito font-16">'.substr($loremIpsum, 0,20).'?</p>';
                    finalizarCol();
                finalizarRow();
                
                iniciarRow();
                    iniciarCol(12,12,12,12,'fundo_cinza');
                        echo '<div id="form-enquete">';
                            echo '<form class="form-horizontal">
                                        <br />';
                                        echo '<input type="hidden" name="enquete" id="enquete" value="1" />';
                                        echo '<input type="hidden" name="acao" id="acao" value="salvar" />';
                                        for ($i=0; $i < 5; $i++) {
                                             
                                            echo '<div class="form-group">
                                                  <div class="radio">
                                                        <label>
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                <input type="radio" name="enqueteOpcao" id="enqueteOpcao" value="option'.($i+1).'" checked>
                                                                <b>Option one is this</b>
                                                            </div>
                                                        </label>
                                                  </div>
                                                  </div>';
                                            if($i<4){
                                                echo '<hr class="linha-divisao">';
                                            }              
                                        }
                                        
                                 echo '<div class="form-group">
                                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <a href="#" class="btn btn-default enquete-btn">Votar</a>
                                            <a href="#" id="1" class="font-color-cinza-escuro font-16 link-enquete-resultado">Ver resultado</a>
                                          </div>                                     
                                       </div>';       
                                        
                                        
                           echo '</form>';
                       echo '</div>';
                       
                       echo '<div id="resultado-enquete" style="display:none">
                                <div></div>
                                <a href="#" class="font-color-cinza-escuro font-16 link-enquete-voltar">Voltar para Enquete</a>
                             </div>';
                       
                    finalizarCol();
                finalizarRow();
                
            finalizarCol();
            
        finalizarRow();
        
    finalizarCol();
    
    iniciarCol(0,0,1,1);
    finalizarCol();
    
finalizarRow();
echo '<br />';

iniciarRow();
    iniciarCol(0,0,1,1);
    finalizarCol();
    iniciarCol(12,12,10,10);
	
		iniciarRow();
			iniciarCol(12,12,12,12);
				echo '<div class="categoria-titulo colunista-titulo-topo">
						<span>colunistas</span>
					  </div>';
				echo '<div class="colunista-setas">
						<span class="font-14 font-color-cinza-escuro">selecione</span>
						<a href="javascript:void(0)" class="colunista-slide-slick-prev"><img src="'.$PATH.'imagens/seta_esquerda.png" class="colunista-seta-img"></a>
						<a href="javascript:void(0)" class="colunista-slide-slick-next"><img src="'.$PATH.'imagens/seta_direita.png" class="colunista-seta-img"></a>
					</div>';			
			finalizarCol();
		finalizarRow();
		echo '<br />';
        iniciarRow();
            echo '<div class="colunista-slider" style="overflow: hidden;">';           
                
            for ($i=0; $i < 7; $i++) { 
                iniciarCol(12,12,3,3);
                echo '<a href="noticia-detalhe.php?n='.$i.'">';
                    echo '<div class="colunista">';
                        echo '<div class="colunista-icone">
                              </div>';
                        echo '<p class="colunista-titulo font-18 font-negrito font-center">
                                '.substr($loremIpsum, 0,50).'
                              </p>';
                        echo '<p class="colunista-resumo font-12 font-center">
                                '.substr($loremIpsum, 0,150).'
                              </p>';
                        echo '<figure class="colunista-foto">';
                            gerarImg($PATH.'imagens/colunistas/images.jpg','colunista-foto','','','','',TRUE);
                        echo '</figure>';
                    echo '</div>';
                echo '</a>';
                finalizarCol();
            }
            echo '</div>';
        finalizarRow();
        
    finalizarCol();
    iniciarCol(0,0,1,1);
    finalizarCol();
finalizarRow();
echo '<br />';

//publicidade 2
iniciarRow('');
    iniciarCol(0,0,1,1);
    finalizarCol();
    
    iniciarCol(12,12,10,10,'publicidades');
        echo 'publicidade 1'; 
    finalizarCol();   
    
    iniciarCol(0,0,1,1);
    finalizarCol();
    
finalizarRow();
echo '<br />';

include_once($PATH.'includes/rodape.php');
?>