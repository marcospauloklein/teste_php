<?php

include 'conexao.php';

$telefone = $_GET['telefone'];

$sql = "DELETE FROM clientes  WHERE telefone_cliente=$telefone";
$deletar = mysqli_query($conexao, $sql)

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<div class="container" style='width: 300px'>

    <h4>Cliente deletado com sucesso!</h4>
    <div style="padding-top: 50px">
        <a href="listar_clientes.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
</div>
