$(document).ready(function(){
    //inicio menu
    $(".menu>ul").addClass("js");
    $(".menu>ul").addClass("js").before('<div class="atalho">&equiv;</div>');

    $(".atalho").click(function(){
        $(".menu>ul").toggle('slow');
    });
   
    
    $('.menu li a').click(function(){
        $('.menu li a').css({
            'border-bottom' : ''
        });
        $(this).css({
            'border-bottom' : '2px solid #df0b31'
        });
        
        var mais_editorias = $(this).attr('rel');
        if(mais_editorias=='mais_editorias'){
            $('#div_mais_editorias').toggle('slow');     
        }else{
            $('#div_mais_editorias').hide('slow');
        }
                
    });
    
    //Rodape
    $(".menu-rodape>ul").addClass("js");
    $(".menu-rodape>ul").addClass("js").before('<div class="atalho-rodape">&equiv;</div>');

    $(".atalho-rodape").click(function(){
        $(".menu-rodape>ul").toggle('slow');
    });

    
    
    $('.menu-rodape li a').click(function(){
        var mais_editorias = $(this).attr('rel');
        if(mais_editorias=='mais_editorias'){
            $('#div_mais_editorias').toggle('slow');
            $('#div_mais_editorias').animate({
                scrollTop: $("#div_mais_editorias").offset().top
            }, 800);
        }else{
            $('#div_mais_editorias').hide('slow');
        }                
    });    
    
    
    $(window).resize(function(){
        if(window.innerWidth > 768) {
            $(".menu>ul").removeAttr("style");
            $(".menu-rodape>ul").removeAttr("style");
        }
    });
        
    //final menu
    
    //Slider
    $('.colunista-slider').slick({
        dots: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        touchMove: false,
        arrows: true,
        nextArrow: '.colunista-slide-slick-next',
        prevArrow: '.colunista-slide-slick-prev'
    });
	
	$('.agenda-slider').slick({
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        touchMove: false,
        arrows: true,
        nextArrow: '.agenda-slide-slick-next',
        prevArrow: '.agenda-slide-slick-prev'
    });
    
    $('.evento-slider').slick({
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        touchMove: false,
        arrows: true,
        nextArrow: '.evento-slide-slick-next',
        prevArrow: '.evento-slide-slick-prev'
    });
    //Final Slider
    
    //Enquete
    $('a.link-enquete-resultado').click(function(e){
        e.preventDefault();
        
        arr = {
            enquete:$(this).attr('id'),
            acao:'resultado'
        }
        
        $.ajax({
            url:'ajaxEnquete.php',
            type:'post',
            data:arr,
            success:function(data){
                $('#resultado-enquete div').html(data);
                $('#form-enquete').css({'display':'none'});
                $('#resultado-enquete').css({'display':''});
            }
        });    
        
    });
    
    $('a.link-enquete-voltar').click(function(e){
        e.preventDefault();
        $('#form-enquete').css({'display':''});
        $('#resultado-enquete').css({'display':'none'});
    });
        
    $('a.enquete-btn').click(function(e){
        e.preventDefault();
        formdata = $('#form-enquete form').serialize();
        $.ajax({
            url:'ajaxEnquete.php',
            type:'post',
            data:formdata,
            success:function(data){
                $('#resultado-enquete div').html(data);
                $('#form-enquete').css({'display':'none'});
                $('#resultado-enquete').css({'display':''});                
            }
        });
    });
    
    $(".fancybox").fancybox();
    
});
