<?php
$PATH = '';
include_once($PATH.'includes/topo.php');

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
        echo '<p class="font-negrito font-color-preto font-18 font-maiusculo">galeria de imagens</p>';
        echo '<p class="font-negrito font-color-cinza-escuro font-12 font-maiusculo">Selecione uma galeria:</p>';
        br();
        
        for ($i=0; $i < 4; $i++) { 
            iniciarRow();
                
                for ($j=0; $j < 4; $j++) { 
                    iniciarCol(6,6,3,3,'');
                        echo '<a href="galeria-detalhe.php?g=1">';
                            echo '<div class="fundo_preto">';
                                gerarImg($PATH.'imagens/noticias/noticia3.jpg','galeria-img-interna img-noticias-efeito','style="position: relative"');
                                echo '<span class="font-color-branco font-negrito font-16" style="position: absolute;left: 30;width: 90%; z-index:1000; top:50%; padding:0 5px 0 5px">
                                        '.substr($loremIpsum, 0, 70).'<br />
                                        <span class="font-italico font-color-branco font-negrito font-12">28 janeiro de 2016 | Por Luiz Antonio</span>
                                      </span>';
                            echo '</div>';
                        echo '</a>';                
                    finalizarCol();    
                }            
                
            finalizarRow();
            br();
        }
        
            
    finalizarCol();
    iniciarCol(0,0,1,1);
    finalizarCol();
finalizarRow();
br();
iniciarRow();
    iniciarCol(0,0,1,1);        
    finalizarCol();
    iniciarCol(12,12,10,10);
        echo '<center>
                  <nav>
                      <ul class="pagination">
                        <li>
                          <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
                  </nav>
              </center>';
    finalizarCol();
    iniciarCol(0,0,1,1);        
    finalizarCol();    
finalizarRow();
br();
include_once($PATH.'includes/rodape.php');
?>