<?php
    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($_POST['email']){
        $utilizadores = [
            [
                "nome" => "nad",
                "email" => "nad@arslvt.min-saude.pt",
                "senha" => "2467",
            ],
            [
                "nome" => "paulo",
                "email" => "paulosilvasantos@gmail.com",
                "senha" => "pauloss",
            ],

        ];

        foreach($utilizadores as $user){
            $email_valido = $email === $user['email'];
            $senha_valida = $senha === $user['senha'];

            if($email_valido && $senha_valida){
                //limpa erros
                $_SESSION['erros'] = null;
                $_SESSION['utilizador'] = $user['nome'];
                header('Location: index.php');
            }
        }
        if(!$_SESSION['utilizador']){
            $_SESSION['erros'] = ['Utilizador/ senha inválidos!'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/login.css">
    <title>Curso PHP</title>
</head>
<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Login - Seja bem vindo</h2>
    </header>    
    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se!</h3>
            <?php if($_SESSION['erros']): ?> 
                <div class="erros">
                    <?php foreach($_SESSION['erros'] as $erro): ?>
                       <p><?= $erro ?></p>
                    <?php endforeach ?>
            <?php endif ?>
            <form action="#" method = "post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>

        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>