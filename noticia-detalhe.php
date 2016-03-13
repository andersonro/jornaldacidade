<?php
$PATH = '';
include_once($PATH.'includes/topo.php');

$id_noticia = $_REQUEST['noticia'];
//consultar noticia

$loremIpsum = 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
               É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por lorem ipsum mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero)
               Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
               É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por lorem ipsum mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).';

iniciarRow();
    iniciarCol(12,12,12,12);
        echo '<hr class="linha-divisao3">';
    finalizarCol();    
finalizarRow();

iniciarRow();
    iniciarCol(0,0,1,1);
    finalizarCol();
    
    iniciarCol(12,12,10,10);
    
        iniciarRow();
            
            //noticia - Editor - noticias relacionadas - comentarios - form
            iniciarCol(12,12,9,9);
                
                //categoria
                echo '<h5 class="font-negrito font-maiusculo">esporte</h5>';
                
                echo '<h3 class="font-negrito font-justify">'.substr($loremIpsum, 0, 120).'</h3>';
                
                echo '<p>';
                    gerarImg($PATH.'imagens/colunistas/images.jpg','','style="width:40px"',FALSE,FALSE,FALSE,TRUE);
                    espaco(2);
                    echo '<span class="font-color-cinza-escuro font-italico font-12">26 janeiro de 2016 | Por Luiz Antonio</span>';
                    espaco(2);
                    echo '<a href="#" class="btn-compatilhar">compartilhar</a>';
                echo '</p>';
                
                //noticia
                iniciarRow();                
                    iniciarCol(12,12,12,12);
                    
                        //corousel imagens
                        iniciarRow();
                            iniciarCol(12,12,12,12);
                            ?>
                            
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>
                            
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    
                                    <?php
                                    $prim = TRUE;
                                    for ($i=0; $i < 10; $i++) {
                                        
                                        echo '<div class="item '.($prim?'active':'').'">
                                                <img src="'.$PATH.'imagens/noticias/noticia1.jpeg" width="100%" alt="">
                                                <!--
                                                <div class="carousel-caption">
                                                    '.substr($loremIpsum, 0,50).'
                                                </div>
                                                -->
                                              </div>';
                                        
                                        if($prim){
                                            $prim = FALSE;
                                        }      
                                              
                                    }
                                    ?>                                    
                                    
                                </div>
                            
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <?php
                            echo '<span class="font-12 font-negrito font-color-preto font-italico">Fotografia:</span>';
                            espaco(2);
                            echo '<span class="font-12 font-negrito font-color-cinza-escuro font-italico">Luiz Antonio</span>';
                            finalizarCol();
                        finalizarRow();
                        
                        iniciarRow();
                            iniciarCol(12,12,12,12,'noticia-detalhe');
                                echo '<p class="font-color-cinza-escuro font-14 font-justify">'.$loremIpsum.'</p>';
                                
                                //assunto relacionada
                                echo '<p>';
                                    echo '<span class="font-maiusculo font-negrito font-12">Assunto relacionado:</span>';
                                    espaco(2);
                                    echo '<span class="font-maiusculo font-negrito font-12 font-color-rosa">esporte</span>';
                                echo '</p>';
                            finalizarCol();
                        finalizarRow();                        
                        
                    finalizarCol();                    
                finalizarRow();
                
                //Colunista
                iniciarRow();
                    iniciarCol(12,12,12,12,'colunista-noticia-detalhe');
                        iniciarRow();
                            iniciarCol(2,2,2,2);
                                gerarImg($PATH.'imagens/colunistas/images.jpg','colunista-img-interna','style="width:100px"',FALSE,FALSE,FALSE,TRUE);
                            finalizarCol();
                            iniciarCol(10,10,10,10);
                                echo '<p>';
                                    echo '<span class="font-negrito font-13 font-maiusculo">Luiz Antonio</span>';
                                    espaco(5);
                                    echo '<span class="font-negrito font-13 font-italico font-color-cinza-escuro">Administrador - desenhista</span>';
                                echo '</p>';
                                echo '<p class="font-13 font-color-cinza-escuro font-justify">';
                                    echo substr($loremIpsum, 0,250);
                                echo '</p>';
                            finalizarCol();
                        finalizarRow();
                    
                        
                    finalizarCol();                    
                finalizarRow();
                br();
                //noticia - relacionadas
                iniciarRow();
                    iniciarCol(12,12,12,12);
                        echo '<p class="font-negrito font-color-preto font-14 font-maiusculo">notícias relacionadas</p>';
                        iniciarRow();
                            for ($i=0; $i < 3; $i++) { 
                                iniciarCol(12,12,4,4);
                                    echo '<a href="noticia-detalhe.php?n='.$i.'">';
                                        gerarImg($PATH.'imagens/noticias/noticia1.jpeg','noticias-relacionadas-detalhe');
                                        echo '<p class="font-12 font-color-rosa font-negrito font-maiusculo">categoria</p>';
                                        echo '<p class="font-13 font-color-preto font-negrito font-maiusculo">'.substr($loremIpsum,0,50).'</p>';
                                    echo '</a>';                                
                                finalizarCol();
                            }                                
                        finalizarRow();
                    finalizarCol();                    
                finalizarRow();
                
                iniciarRow();
                    iniciarCol(12,12,12,12);
                        echo '<hr class="linha-divisao3">';
                    finalizarCol();
                finalizarRow();
                
                //comentarios
                iniciarRow();                    
                    iniciarCol(12,12,12,12,'comentario-noticia-detalhe');
                        echo '<p class="font-negrito font-color-preto font-14 font-maiusculo">10 comentarios</p>';
                        iniciarRow('','comentario-noticia');
                            iniciarCol(12,12,12,12);
                                for ($i=1; $i <= 10; $i++) { 
                                    iniciarRow('','comentario-linha '.(($i %2)==0?'fundo_cinza':'').'');
                                        iniciarCol(2,2,2,2);
                                            gerarImg($PATH.'imagens/colunistas/images.jpg','comentario-img-interna','style="width:100px"',FALSE,FALSE,FALSE,TRUE);
                                        finalizarCol();
                                        iniciarCol(10,10,10,10);
                                            iniciarRow();
                                                iniciarCol(12,12,10,10);
                                                    echo '<span class="font-maiusculo font-negrito font-12">john doe</span>';
                                                    espaco(2);
                                                    echo '<span class="font-maiusculo font-italico font-11 font-color-cinza-escuro">28 janeiro 2016</span>';
                                                finalizarCol();
                                                iniciarCol(12,12,2,2);
                                                    echo '<a href="#" class="btn fundo_rosa font-color-branco font-maiusculo font-11" style="padding:5px">resposta</a>';    
                                                finalizarCol();
                                            finalizarRow();
                                            iniciarRow();
                                                iniciarCol(1,1,0,0);
                                                finalizarCol();
                                                iniciarCol(11,11,12,12);
                                                    echo '<p>'.substr($loremIpsum, 0,200).'</p>';
                                                finalizarCol();
                                            finalizarRow();                                            
                                        finalizarCol();
                                    finalizarRow();
                                    br();
                                }
                            finalizarCol();
                        finalizarRow();
                    finalizarCol();                                    
                finalizarRow();
                br(2);
                //form comentarios
                iniciarRow();
                    iniciarCol(12,12,12,12);
                    echo '<p class="font-negrito font-color-preto font-14 font-maiusculo">deixe um comentário</p>';
                    ?>
                        <form class="form-horizontal form-comentario">
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                  <input type="text" class="form-control" id="nome" name="nome" placeholder="*NOME" />
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                  <input type="email" class="form-control" id="email" name="email" placeholder="*E-MAIL" />
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                  <input type="text" class="form-control txttelefone" id="telefone" name="telefone" placeholder="*TELEFONE">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <textarea rows="5" class="form-control" id="comentario" name="comentario" placeholder="*COMENTÁRIO"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    captcha
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                    <button type="submit" class="btn fundo_rosa font-maiusculo btn-comentar">POSTAR COMENTÁRIO</button>
                                </div>
                            </div>
                        </form>
                    <?php
                    finalizarCol(); 
                finalizarRow();
                
            finalizarCol();
            
            //principais noticias e publicidades interna lateral direita
            iniciarCol(12,12,3,3);
                echo '<p class="font-negrito font-color-preto font-14 font-maiusculo">principais notícias</p>';
                
                iniciarRow('','noticia-fundo-lateral-interna');
                    iniciarCol(12,12,12,12);
                        
                        for ($i=0; $i < 4; $i++) { 
                            iniciarRow();
                                echo '<a href="noticia-detalhe.php?n=1">';                                
                                if($i==0){
                                    echo '<center>';
                                        gerarImg($PATH.'imagens/noticias/noticia1.jpeg','noticias-img-lateral-interna');
                                    echo '</center>';
                                    br();
                                }
                                //titulo
                                echo '<p class="font-negrito font-13 font-color-preto font-justify">'.substr($loremIpsum, 0, 100).'</p>';
                                //publicação
                                echo '<p class="font-11 font-color-cinza-escuro font-italico">28 janeiro 2016 | Luiz Antonio</p>';
                                //resumo
                                if($i==0) echo '<p class="font-12 font-color-cinza-escuro font-justify">'.substr($loremIpsum, 0, 200).'</p>';
                                echo '</a>';
                            finalizarRow();                            
                            if($i<3) hr('', 'style="border-top: 1px solid #ffffff !important;width: 100%;"');
                        }
                                
                    finalizarCol();
                finalizarRow();
                
                br(2);
                //publicidades
                
                for ($i=0; $i < 2; $i++) { 
                    iniciarRow();
                        iniciarCol(12,12,12,12,'');
                            gerarImg($PATH.'imagens/noticias/principal2.png','publicidade-interna-lateral');
                        finalizarCol();
                    finalizarRow();
                    br();
                }
                
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
    iniciarCol(12,12,10,10,'');
        echo '<center>';
            gerarImg($PATH.'imagens/noticias/principal1.png','publicidade-interna-rodape');
        echo '</center>';
    finalizarCol();
    iniciarCol(0,0,1,1);
    finalizarCol();    
finalizarRow();
echo '<br />';

include_once($PATH.'includes/rodape.php');
?>