    <?php
        echo '<footer>';
            //menu rodape
            iniciarRow();
                //logo rodape
                iniciarCol(12,12,4,4,'logo_rodape');
                    iniciarRow();
                        
                        iniciarCol(11,11,11,11);
                            echo '<a href="'.$PATH.'index.php">';
                                gerarImg($PATH.'imagens/logo_rodape.png','logo_rodape_img','',TRUE);
                            echo '</a>';
                        finalizarCol();
                        
                        iniciarCol(1,1,1,1);
                            echo '<div class="seta-esquerda-pequena"></div>';
                        finalizarCol();
                        
                    finalizarRow();                
                    
                finalizarCol();
                
                iniciarCol(12,12,8,8,'fundo_preto col-menu-rodape','');
                    
                    iniciarRow();
                        iniciarCol(12,12,11,11);
                    
                        ?>
                        <div class="div_menu-rodape">
                            <nav class="menu-rodape">
                                <ul>
                                    <li class="">
                                        <a href="<?=$PATH?>sobre.php">Sobre o Jornal</a>
                                    </li>
                                    <li class="">
                                        <a href="#" >Notícias</a>
                                        
                                    </li>
                                    <li class="">
                                        <a href="#" rel="mais_editorias">Editorias</a>
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
                                    
                finalizarCol();
                
            finalizarRow();
            
            //Rodape
            iniciarRow();
                iniciarCol(12,12,12,12,'rodape_fundo');                    
                    
                    iniciarRow();
                        
						iniciarCol(0,0,1,1);
                        finalizarCol();
                        
						iniciarCol(12,12,10,10);
						
							iniciarRow();
								
								iniciarCol(12,12,6,6,'rodape-sobre');
									echo '<h4 class="rodape-titulo">SOBRE O JORNAL</h4>';
									echo '<p class="rodape-paragrafo">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI</p>';
									echo '<p class="rodape-paragrafo">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI</p>';
                                    
                                    echo '<div class="rodape-icones-social">';
                                          iniciarRow();
                                            
                                            iniciarCol(12,12,12,12);
                                                gerarImg($PATH.'imagens/icone_facebook.png');
                                                gerarImg($PATH.'imagens/icone_twitter.png');
                                                gerarImg($PATH.'imagens/icone_google.png');
                                                gerarImg($PATH.'imagens/icone_youtube.png');
                                                gerarImg($PATH.'imagens/icone_instragam.png');
                                            finalizarCol();                                            
                                            
                                          finalizarRow();
                                    echo '</div>';
                                    
                                    echo '<h4 class="rodape-titulo">NEWSLETTER</h4>';
                                    
                                    echo '<form class="form-inline newsletter-form">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="newsletter_nome" name="newsletter_nome" placeholder="Nome">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="newsletter_email" name="newsletter_email" placeholder="E-mail">
                                                </div>
                                                <button type="submit" class="btn btn-default newsletter-btn">Cadastrar</button>
                                          </form>'; 
                                    
								finalizarCol();
								
								iniciarCol(12,12,3,3);
									echo '<h4 class="rodape-titulo">DESTAQUES</h4>';
                                    
                                    iniciarRow();
                                        iniciarCol(12,12,12,12);
                                            iniciarRow();
                                                echo '<a href="noticia-detalhe.php?n='.$i.'">';
                                                iniciarCol(5,5,5,5);
                                                    gerarImg($PATH.'imagens/imagem_destaque_rodape.png','','',TRUE);
                                                finalizarCol();
                                                iniciarCol(7,7,7,7);
                                                    echo '<span class="destaque-titulo">Lorem Ipsum é simplesmente uma simulação de texto</span>';
                                                finalizarCol();
                                                echo '</a>';
                                            finalizarRow();
                                            
                                            echo '<hr class="linha-divisao">';
                                            
                                        finalizarCol();
                                    finalizarRow();
                                    
                                    iniciarRow();
                                        iniciarCol(12,12,12,12);
                                            iniciarRow();
                                                echo '<a href="noticia-detalhe.php?n='.$i.'">';
                                                iniciarCol(5,5,5,5);
                                                    gerarImg($PATH.'imagens/imagem_destaque_rodape.png','','',TRUE);
                                                finalizarCol();
                                                iniciarCol(7,7,7,7);
                                                    echo '<span class="destaque-titulo">Lorem Ipsum é simplesmente uma simulação de texto</span>';
                                                finalizarCol();
                                                echo '</a>';
                                            finalizarRow();
                                            
                                            echo '<hr class="linha-divisao">';
                                            
                                        finalizarCol();
                                    finalizarRow();
                                    
                                    iniciarRow();                                        
                                        iniciarCol(12,12,12,12);
                                            iniciarRow();
                                                echo '<a href="noticia-detalhe.php?n='.$i.'">';
                                                iniciarCol(5,5,5,5);
                                                    gerarImg($PATH.'imagens/imagem_destaque_rodape.png','','',TRUE);
                                                finalizarCol();
                                                iniciarCol(7,7,7,7);
                                                    echo '<span class="destaque-titulo">Lorem Ipsum é simplesmente uma simulação de texto</span>';
                                                finalizarCol();
                                                echo '</a>';
                                            finalizarRow();
                                            
                                        finalizarCol();
                                    finalizarRow();
                                    
								finalizarCol();
								
								iniciarCol(12,12,3,3);
									echo '<h4 class="rodape-titulo">TAGS</h4>';
                                    iniciarRow();
                                        iniciarCol(12,12,12,12);
                                        
                                        $tags = array('Tecnologia','Moda','Mundo','Vídeo','Esporte','Música','Imagem','Redes sociais',
                                                      'Polícia','Politica','Futebol','TV','Chuva','Carnaval','Véiculos','Governo','Guerra');
                                        foreach ($tags as $key => $value) {
                                            echo '<a href="#"><span class="tags">'.$value.'</span></a>';
                                        }
                                        
                                        finalizarCol();
                                    finalizarRow();
                                    iniciarRow();
                                        iniciarCol(12,12,12,12,'icone_gnt_criativa');
                                            echo '<a href="http://gntcriativa.com.br/" target="_blank">';
                                                gerarImg($PATH.'imagens/logo_gnt_criativa.png','','',TRUE);
                                            echo '</a>';
                                        finalizarCol();
                                    finalizarRow();
								finalizarCol();
								
							finalizarRow();
						
                        finalizarCol();
						
						iniciarCol(0,0,1,1);
                        finalizarCol();
						
                    finalizarRow();
                
                finalizarCol();
                
            finalizarRow();
            
            iniciarRow();
                iniciarCol(0,0,1,1);
                finalizarCol();
                
                iniciarCol(0,0,10,10,'direitos-reservados');
                    echo '<p>Jornal da Cidade &copy; '.date('Y').' - Todos os direitor reservados</p>';
                finalizarCol();
                
                iniciarCol(0,0,1,1);
                finalizarCol();
            finalizarRow();
            
        echo '</footer>';
    finalizarContainer();
    ?>    
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?=$PATH?>js/ie-emulation-modes-warning.js?v=<?=date('dmYHis')?>"></script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=$PATH?>js/jquery-1.12.1.min.js?v=<?=date('dmYHis')?>"></script>
    <!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
    <script src="<?=$PATH?>js/bootstrap.min.js?v=<?=date('dmYHis')?>"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?=$PATH?>js/holder.min.js?v=<?=date('dmYHis')?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?=$PATH?>js/ie10-viewport-bug-workaround.js?v=<?=date('dmYHis')?>"></script>
    
    <script src="<?=$PATH?>js/scripts.js?v=<?=date('dmYHis')?>"></script>
    
    <script src="<?=$PATH?>js/slick.js?v=<?=date('dmYHis')?>"></script>
    
    <script src="<?=$PATH?>js/jquery.maskedinput.js?v=<?=date('dmYHis')?>"></script>
    <script src="<?=$PATH?>js/mascaras.js?v=<?=date('dmYHis')?>"></script>
    
    <!-- Maps Google -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    
    <script src="<?=$PATH?>js/infobox.js?v=<?=date('dmYHis')?>"></script>        
    <!-- Agrupamento dos marcadores -->
    <script src="<?=$PATH?>js/markerclusterer.js?v=<?=date('dmYHis')?>"></script>
    
    <script src="<?=$PATH?>js/mapa.js?v=<?=date('dmYHis')?>"></script>
    
    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="<?=$PATH?>js/fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="<?=$PATH?>js/fancyBox/source/jquery.fancybox.js?v=2.1.5"></script>
    <!-- Add Button helper (this is optional) -->   
    <script type="text/javascript" src="<?=$PATH?>js/fancyBox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <!-- Add Thumbnail helper (this is optional) -->    
    <script type="text/javascript" src="<?=$PATH?>js/fancyBox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <!-- Add Media helper (this is optional) -->
    <script type="text/javascript" src="<?=$PATH?>js/fancyBox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>    
    
  </body>
</html>