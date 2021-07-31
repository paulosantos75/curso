
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
                type: 'GET',
                url: 'resposta.php',
                success: function(dados) {
                    //console.log(dados);
                   // document.getElementById('texto').innerHTML = dados;
                    var nomes = JSON.parse(dados);
                   $("#texto").text(nomes[0]['nome'] + ' ' + nomes[0]['apelido']);

                },
                error: function() {
                    console.log('ERRO');
                }
             });
        }
    </script>
</body>
</html>