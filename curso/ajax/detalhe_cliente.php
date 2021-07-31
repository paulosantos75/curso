<?php 
    require "../bd/conexao.inc.php";
    $conexao = novaConexao();
    // $params = array(
    //     ':id_cliente' => $_POST['id_cliente']
    // );
    $sql = "SELECT * FROM cliente WHERE id_cliente = :id_cliente ";

    $stmt = $conexao->prepare($sql);    
    $stmt->bindValue(':id_cliente', $_POST['id_cliente'], PDO::PARAM_INT);

    if($stmt->execute()){
        $detalhe_cliente = $stmt->fetch(PDO::FETCH_ASSOC);
        echo json_encode($detalhe_cliente, 128);
    }

?>
