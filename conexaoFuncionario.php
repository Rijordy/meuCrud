<?php
$nome = $_POST['nome'];
&sexo = $_POST['sexo'];
$cargo = $_POST['civil'];
$nome = $_POST['telefone'];
$nome = $_POST['celular'];
$cargo = $_POST['cargo'];

$conn = mysqli_connect('localhost','root','','banco_teste') or die('Erro ao conectar ao banco de dados');

$sql = "INSERT INTO cadastro VALUES ";
$sql .= "('$nome', '$sexo', '$civil', '$telefone', '$celular', '$cargo')"; 
mysqli_query($conn,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($conn);

echo "Funcionario cadastrado com sucesso!";
?>