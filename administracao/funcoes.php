<?php
function alerta($titulo='',$msg='',$tipo=''){
    //Tipos success - alert
    echo '<script>
            swal({
                title: "'.$titulo.'",
                text: "'.$msg.'",
                type: "'.($tipo=='sucesso'?'success':'alert').'",
                confirmButtonColor: "'.($tipo=='sucesso'?'#4caf50':'#DD6B55').'"
            });          
          </script>';
}
?>