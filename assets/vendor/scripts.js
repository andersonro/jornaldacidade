$(document).ready(function(){
    $('.moeda').maskMoney({symbol:'$ ', showSymbol:true, thousands:'.', decimal:',', symbolStay: true});
    
    $('.porcentagem').maskMoney({thousands:'.', decimal:'.', symbolStay: true});
    
    $('.sonums').keypress(function(event) {
        var tecla = (window.event) ? event.keyCode : event.which;
        if ((tecla > 47 && tecla < 58)) return true;
        else {
            if (tecla != 8) return false;
            else return true;
        }
    });
    
    $('.editorHtml').summernote();
    
});
