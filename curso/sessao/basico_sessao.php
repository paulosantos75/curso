<div class="titulo">Sessão</div>

<?php

    session_start();

    print_r($_SESSION);

if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'Paulo';
}
if(!$_SESSION['email']){
    $_SESSION['email'] = 'paulosilvasantos@gmail.com';
}
?>
<p>
<a href='/sessao/basico_sessao_alterar.php'>Alterar sessão</a>
</p>