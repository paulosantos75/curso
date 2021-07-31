
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src = "jquery.min.js"></script>
    <title>Ajax em base de dados</title>
</head>
<body>
   <h3>Clientes</h3>
   <hr>
   <div id="detalhe_cliente"><small>Não existe cliente selecionado</small></div>
   
   <hr>

   <div id="lista_clientes"></div>
   <!-- <button onclick="lista_clientes()">Atualizar</button> -->


   <script>

    $(document).ready(function(){
       
        //carrega a construção da lista de clientes da minha loja
        lista_clientes();
    });



   /////
        function lista_clientes(){
            $.ajax({
                type: "GET",
                url: "todos_clientes.php",
                success: function(dados){
                    //console.log("Sucesso");
                    var clientes = JSON.parse(dados);
                    
                    var html = "<ul>";
                    clientes.forEach(c =>{
                       // html += "<li >" + c['nome'] + "</li>";
                        html += "<li  onclick=\"detalhe_cliente(" + c['id_cliente'] + ")\" style=\"cursor:pointer;\">" + c['nome'] + "</li>";
                    });
                    html += "<ul>";

                    clientes.forEach(
                        cliente => (console.log(cliente['nome']))
                    )
                    $("#lista_clientes").html(html);
                },
                error: function(){
                    console.log('ERRO');
                }

            });
        }

        function detalhe_cliente(id_cliente){
           // console.log(id_cliente);
            $.ajax({
                type: "POST",
                url: "detalhe_cliente.php",
                data: {id_cliente: id_cliente},
                success: function(dados){
                    // console.clear();
                    // console.log(dados);

                    //var cliente = JSON.parse(dados)[0];
                    var cliente = JSON.parse(dados);
                    var html = "<p>Nome: " + cliente['nome'] + "</p>";
                    html += "<p>Email: " + cliente['email'] + "</p>";
                    html += "<p>Telefone: " + cliente['telefone'] + "</p>";

                    $("#detalhe_cliente").html(html);

                    //atualiza lista de clientes 
                    lista_clientes();

                },
                error: function(){
                    console.log('ERRO');
                }

            });

        }
   </script>
</body>
</html>

