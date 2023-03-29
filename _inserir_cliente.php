<?php

include 'conexao.php';

$nome_cli = $_POST['nome_cli'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];
$comentarios = $_POST['comentarios'];

$sql = "INSERT INTO clientes VALUES ('$nome_cli', '$endereco', '$cidade', '$estado', '$telefone', '$comentarios')";

$inserir = mysqli_query($conexao, $sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<div class="container" style='width: 300px'>

    <h4>Cliente cadastrado com sucesso!</h4>
    <div style="padding-top: 20px">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo cliente</a>
    </div>
    <div style="padding-top: 20px">
        <a href="listar_clientes.php" role="button" class="btn btn-sm btn-primary">Listar clientes</a>
    </div>
</div>