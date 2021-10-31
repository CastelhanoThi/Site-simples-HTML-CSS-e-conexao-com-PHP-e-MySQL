<?php
$servidor = "localhost:3306";
$usuario = "root";
$senha = "";
$banco ="novosite";

$conexao=mysqli_connect($servidor, $usuario, $senha, $banco) or die (mysqli_error());

?>