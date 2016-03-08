$(document).ready(function(){
    jQuery(function($){
        $(".campoCnpj").mask("99.999.999/9999-99");
        $(".campoTelefone").mask("(99) 9999-9999");
        
        
        $(".campoCelular8").mask("(99) 9999-9999");
        $(".campoCelular9").mask("(99) 99999-9999");
        
        
        $(".campoCelular").focusout(function(){
            v = $(this).val().length;
            if(v > 10){
                $(this).addClass('campoCelular9');
            }else{
                $(this).addClass('campoCelular8');
            }
        });
       
        //$("#txttelefone").mask("(00) 00009-0000");
        $(".txttelefone")
            .mask("(99) 9999-9999?9")
            .focusout(function (event) {  
                var target, phone, element;  
                target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
                phone = target.value.replace(/\D/g, '');
                element = $(target);  
                element.unmask();  
                if(phone.length > 10) {  
                    element.mask("(99) 99999-999?9");  
                } else {  
                    element.mask("(99) 9999-9999?9");  
                }  
            });
            
        $(".cpf_cnpj")
            .mask("99999999999999")
            .focusout(function (event) {  
                var target, phone, element;  
                target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
                phone = target.value.replace(/\D/g, '');
                element = $(target);  
                element.unmask();
                if(phone.length > 11) {  
                    element.mask("99.999.999/9999-99");  
                }else if(phone.length <= 11 & phone.length > 0){  
                    element.mask("999.999.999-99");  
                }else{
                    element.mask("99999999999999");
                }  
            });
       
       
        $(".campoCep").mask("99999-999");
        $(".campoHora").mask("99:99:99");
        
        /*
        $('.campoCelular').mask("(99) 9999?9-9999").ready(function(event) {
            var target, phone, element;
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;
            phone = target.value.replace(/\D/g, '');
            element = $(target);
            element.unmask();
            if(phone.length > 10) {
                element.mask("(99) 9999?9-9999");
            } else {
                element.mask("(99) 999?9-9999");
            }
        });
        */
    });
});

