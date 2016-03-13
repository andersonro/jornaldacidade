<?php
$PATH = '';
include_once($PATH.'includes/topo.php');

$id_noticia = $_REQUEST['noticia'];

$loremIpsum = 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
               É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por lorem ipsum mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero)
               Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
               É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por lorem ipsum mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).';

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
        echo '<p class="font-negrito font-color-preto font-18 font-maiusculo">entre em contato</p>';
        iniciarRow();
            iniciarCol(12,12,8,8);
                echo '<form class="form-horizontal form-contato">';
                    iniciarRow();
                        iniciarCol(12,12,5,5);
                            echo '<div class="form-group">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                          <input type="text" class="form-control" id="nome" name="nome" placeholder="NOME" />
                                        </div>                        
                                    </div>';
                                    
                            echo '<div class="form-group">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                          <input type="email" class="form-control" id="email" name="email" placeholder="E-MAIL" />
                                        </div>                        
                                    </div>';
                           
                            echo '<div class="form-group">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                          <input type="text" class="form-control" id="assunto" name="assunto" placeholder="ASSUNTO" />
                                        </div>                        
                                    </div>';
                                    
                        finalizarCol();
                        iniciarCol(12,12,7,7);
                            echo '<div class="form-group">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                          <textarea rows="6" class="form-control" id="mensagem" name="mensagem" placeholder="MENSAGEM"></textarea>
                                        </div>                        
                                    </div>';
                        finalizarCol();
                    finalizarRow();
                    
                    //botões
                    iniciarRow();
                        iniciarCol(12,12,12,12);
                            echo '<div class="form-group">
                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                        captcha
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                        <button type="submit" class="btn fundo_rosa font-maiusculo btn-comentar">Envie agora</button>
                                    </div>
                                </div>';
                        finalizarCol();
                    finalizarRow();
            finalizarCol();
            
            echo '</form>';
            
            iniciarCol(12,12,4,4);
                echo '<p class="font-justify font-color-cinza-escuro">'.substr($loremIpsum, 0,200).'</p>';
                echo '<p class="font-negrito font-color-preto" style="height: 30px;position: relative;display:table">
                        <span class="glyphicon" aria-hidden="true" style="display: table-cell;vertical-align: middle;top:-5px"><img src="'.$PATH.'imagens/icone_envelope.png" /></span>';
                espaco(4);
                echo '<span style="display: table-cell;">E-mail: contato@jornaldacidade.com.br</span>
                      </p>';
                echo '<p class="font-negrito font-color-preto" style="height: 30px;position: relative;display:table">
                        <span class="glyphicon" aria-hidden="true" style="display: table-cell;vertical-align: middle;top:-5px"><img src="'.$PATH.'imagens/icone_mapa.png" /></span>';
                espaco(4);
                echo '<span style="display: table-cell;">Contato: 0123456789</span>
                      </p>';
            finalizarCol();
        finalizarRow();        
    finalizarCol();
    iniciarCol(0,0,1,1);
    finalizarCol();    
finalizarRow();
br();
iniciarRow();
    iniciarCol(0,0,1,1);        
    finalizarCol();
    iniciarCol(12,12,10,10);
        //echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3891.6279355844654!2d-60.15251664992187!3d-12.737678158560103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93b96bb24aca2367%3A0x5d4f81a21118bd84!2sAv.+Maj.+Amarante%2C+2508+-+Centro%2C+Vilhena+-+RO%2C+76980-000!5e0!3m2!1spt-BR!2sbr!4v1457262593609" width="100%" height="368" frameborder="0" style="border:0" allowfullscreen></iframe>';
        echo '<div id="mapa" style="height: 368px; width: 100%"></div>';
        
    finalizarCol();
    iniciarCol(0,0,1,1);        
    finalizarCol();    
finalizarRow();
br();
include_once($PATH.'includes/rodape.php');
?>