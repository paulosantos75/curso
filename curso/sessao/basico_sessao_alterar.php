<?php

session_start();
print_r($_SESSION);

?>

<p>
    <b>Nome:</b><?=$_SESSION['nome']?><br>
    <b>Email:</b><?=$_SESSION['email']?>
</p>

<?php
    $_SESSION['email']='santos.ps@emgfa.pt';
?>
<p> <a href='basico_sessao.php'>Voltar</p>
<p> <a href='basico_sessao_limpar.php'>Limpar sessão</p>