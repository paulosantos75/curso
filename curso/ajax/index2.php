
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <script src = "jquery.min.js"></script>
    <title>Ajax</title>
</head>
<body>
    <p id="texto">Texto original</p>
    <button onclick="alterar()">Alterar</button>

    <script>
        function alterar(){
            $.ajax({
                type: 'POST',
                url: 'resposta2.php',
                data: {p1: 10, p2: 20, operacao: "adicao"},
                success: function(dados) {
                   // console.log(dados);
                   $("#texto").text(dados);

                },
                error: function() {
                    console.log('ERRO');
                }
             });
        }
    </script>
</body>
</html>