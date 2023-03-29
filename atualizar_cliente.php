<?php

include 'conexao.php';

$nome_cli = $_POST['nome_cli'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_GET['telefone'];
$comentarios = $_POST['comentarios'];

echo $sql = "UPDATE clientes SET nome_cliente='$nome_cli', endereco_cliente='$endereco', cidade_cliente='$cidade', estado_cliente='$estado', comentarios_cliente='$comentarios' WHERE telefone_cliente='$telefone'";

$atualizar = mysqli_query($conexao, $sql);

?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<div class="container" style='width: 300px'>

    <h4>Cadastro atualizado com sucesso!</h4>
    <div style="padding-top: 50px">
        <a href="listar_clientes.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
</div>