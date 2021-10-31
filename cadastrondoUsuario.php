<?php
    include('conexao.php');
//Recebendo valores do formulario de cliente
$nome=$_POST['nome'];
$endereco=$_POST['endereco'];
$email=$_POST['email'];
$cidade=$_POST['cidade'];
$bairro=$_POST['bairro'];
$cpf=$_POST['cpf'];

$id_cuidador=$_POST['id_cuidador'];
$login=$_POST['login'];
$senha=$_POST['senha'];

$insere="INSERT INTO tb_clientes(id_cliente, nome, endereco, email, cidade, bairro, cpf, orientador) values (null,'$nome','$endereco','$email','$cidade','$bairro','$cpf','cuidador')";
$sql=mysqli_query($conexao,$insere);

$insere1="SELECT * FROM tb_clientes WHERE cpf='$cpf'";

$res=mysqli_query($conexao,$insere1);
while($cliente=mysqli_fetch_array($res)){
    $cli=$cliente['id_cliente'];
}

$insere2="INSERT INTO tb_usuario(id_cuidador, id_cliente, login, senha) values (null,'$cli','$login','$senha')";

$sql=mysqli_query($conexao,$insere2);

mysqli_close($conexao);


header('Location:cuidador.php?sucess')
    
?>