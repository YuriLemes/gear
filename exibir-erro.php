<?php
if(!empty($_SESSION['excecao']['mensagem'])) :
    $msg = $_SESSION['excecao']['mensagem'];
    unset($_SESSION['excecao']['mensagem']);
    ?>
    <script>
        $().ready(function() {
            setTimeout(function () {
                $('#msg-erro').fadeIn( 300 ).delay( 1500 ).fadeOut( 400 ); // Os valores são representados em milisegundos.
            });
        });
    </script>
    <div id="msg-erro" class="alert alert-danger alert-dismissible fade in show">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?=$msg?>
    </div>
<?php
endif;
?>