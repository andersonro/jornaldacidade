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
        echo '<p class="font-negrito font-color-preto font-18 font-maiusculo">sobre nós</p>';
        iniciarRow();
            iniciarCol(12,12,6,6);
                gerarImg($PATH.'imagens/anuncie/anuncie.png','sobre-img-1');    
            finalizarCol();
            
            iniciarCol(12,12,6,6);
                echo '<p>'.substr($loremIpsum, 0,1199).'</p>';
            finalizarCol();
        finalizarRow();        
    finalizarCol();
    iniciarCol(0,0,1,1);
    finalizarCol();    
finalizarRow();
br();
iniciarRow();
    iniciarCol(12,12,12,12,'sobre-linha-2');
        gerarImg($PATH.'imagens/anuncie/anuncie.png','sobre-img-2');
    finalizarCol();    
finalizarRow();
br();
iniciarRow();
    iniciarCol(0,0,1,1);        
    finalizarCol();
    iniciarCol(12,12,10,10);
        iniciarRow();
            iniciarCol(12,12,6,6);
                echo '<p class="font-negrito font-color-preto font-18 font-maiusculo">outro título</p>';
                echo '<p>'.substr($loremIpsum, 0,400).'</p>';
            finalizarCol();
            iniciarCol(12,12,6,6);
                echo '<p class="font-negrito font-color-preto font-18 font-maiusculo">outro título</p>';
                echo '<p>'.substr($loremIpsum, 0,400).'</p>';
            finalizarCol();
        finalizarRow();
    finalizarCol();
    iniciarCol(0,0,1,1);        
    finalizarCol();    
finalizarRow();
br();
include_once($PATH.'includes/rodape.php');
?>