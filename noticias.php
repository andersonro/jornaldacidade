<?php
$PATH = '';
include_once($PATH.'includes/topo.php');

$loremIpsum = 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
               É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por lorem ipsum mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero)
               Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
               É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por lorem ipsum mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).';

$tipo = $_REQUEST['tipo'];
if ($tipo=='e') {
	$titulo = 'editoriais';
}else if($tipo=='n'){
    $titulo = 'notícias';
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
        echo '<p class="font-negrito font-color-preto font-18 font-maiusculo">'.$titulo.'</p>';
        
        iniciarRow();
            
            //noticias
            iniciarCol(12,12,9,9);
                
                for ($i=0; $i < 5; $i++) { 
                    
                    iniciarRow();
                        iniciarCol(3,3,3,3);
                            gerarImg($PATH.'imagens/editoriais.png','','',TRUE);
                        finalizarCol();
                        iniciarCol(9,9,9,9);
                            echo '<span class="font-negrito font-color-preto font-16">'.substr($loremIpsum, 0,120).'</span>';
                            br();
                            echo '<span class="font-color-cinza-escuro font-italico font-12">28 janeiro de 2016 | Por Luiz Antonio</span>';
                            br(2);
                            echo '<span class="font-color-cinza-escuro font-13">'.substr($loremIpsum, 0, 180).'</span>';
                        finalizarCol();
                    finalizarRow();
                    br();    
                }
                                
            finalizarCol();
            
            //publicidades
            iniciarCol(12,12,3,3);
            
                for ($i=0; $i < 5; $i++) { 
                    
                    iniciarRow();
                        iniciarCol(12,12,12,12);
                            gerarImg($PATH.'imagens/publicidade.png','','',TRUE);
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