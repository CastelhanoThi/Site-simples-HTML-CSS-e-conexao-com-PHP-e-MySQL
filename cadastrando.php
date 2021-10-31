<?php
    include('conexao.php');
//Recebendo valores do formulario de cliente
$nome=$_POST['nome'];
$endereco=$_POST['endereco'];
$email=$_POST['email'];
$cidade=$_POST['cidade'];
$bairro=$_POST['bairro'];
$cpf=$_POST['cpf'];

$insere="INSERT INTO tb_clientes(id_cliente, nome, endereco, email, cidade, bairro, cpf, orientador) values (null,'$nome','$endereco','$email','$cidade','$bairro','$cpf','paciente')";
$sql=mysqli_query($conexao,$insere);

mysqli_close($conexao);

header('Location:cadastro.php?sucess')
    
?>