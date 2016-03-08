<?php
$PATH = '';
include_once($PATH.'includes/topo.php');

$id_noticia = $_REQUEST['noticia'];

iniciarRow();
    iniciarCol(12,12,12,12);
        echo '<hr class="linha-divisao3">';
    finalizarCol();    
finalizarRow();

br();
iniciarRow();
    iniciarCol(0,0,1,1);
    finalizarCol();
    iniciarCol(12,12,10,10,'');
        echo '<p class="font-negrito font-color-preto font-18 font-maiusculo">anuncie</p>';
        echo '<center>';
            gerarImg($PATH.'imagens/anuncie/anuncie.png','anuncie-img');
        echo '</center>';
    finalizarCol();
    iniciarCol(0,0,1,1);
    finalizarCol();    
finalizarRow();
br();
iniciarRow();
    iniciarCol(0,0,1,1);
    finalizarCol();
    iniciarCol(12,12,10,10,'');
        echo '<form class="form-horizontal form-anuncie">';
            iniciarRow();
                iniciarCol(12,12,9,9);
                    iniciarRow();
                        iniciarCol(12,12,8,8);
                            echo '<div class="form-group">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                          <input type="text" class="form-control" id="nome" name="nome" placeholder="NOME" />
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                          <input type="text" class="form-control txttelefone" id="telefone" name="telefone" placeholder="TELEFONE">
                                        </div>                        
                                    </div>';
                                    
                                echo '<div class="form-group">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                          <input type="text" class="form-control cpf_cnpj" id="cnpj_cpf" name="cnpj_cpf" placeholder="CNPJ / CPF" />
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                          <input type="email" class="form-control" id="email" name="email" placeholder="E-MAIL">
                                        </div>                        
                                    </div>';
                                    
                                echo '<div class="form-group">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                          <input type="text" class="form-control" id="nome_empresa" name="nome_empresa" placeholder="NOME DA EMPRESA" />
                                        </div>                        
                                    </div>';
                        finalizarCol();
                        
                        iniciarCol(12,12,4,4);
                            echo '<div class="form-group">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                          <textarea rows="6" class="form-control" id="anuncio" name="anuncio" placeholder="O QUE PRENTENDE ANUNCIAR?"></textarea>
                                        </div>                        
                                    </div>';
                        finalizarCol();
                    finalizarRow();
                    
                    //botoes - captcha
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
                
                iniciarCol(12,12,3,3);
                    echo '<p class="font-negrito font-color-preto font-18 font-maiusculo">contato</p>';
                    echo '<p class="font-color-cinza-escuro font-12">Avenida Major Amarante, 2508,<br /> Centro - Vilhena (RO)<br /> 76980-000</p>';
                    echo '<p class="font-negrito font-color-cinza-escuro font-12">Comercial: (69) 3222-3322<br />Redação: (69) 3222-4871</p>';
                finalizarCol();
            finalizarRow();        
        echo '</form>';
    finalizarCol();
    iniciarCol(0,0,1,1);
    finalizarCol();    
finalizarRow();
br();
include_once($PATH.'includes/rodape.php');
?>