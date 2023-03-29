<?php

$servername = "localhost";
$database = "sakila";
$username = "root";
$password = "marcos";

// conexão com o SQL Server
//$serverName = "DESKTOP-BR9HIU4";
//$connectionInfo = array("Database"=>"BancoCliente", "UID"=>"sa", "PWD"=>"marcos");
//$conexao = sqlsrv_connect($serverName, $connectionInfo);

$conexao = mysqli_connect($servername, $username, $password, $database);


?>