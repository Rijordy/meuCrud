<?php
$nome = $_POST['nome'];
&sexo = $_POST['sexo'];
$cargo = $_POST['civil'];
$nome = $_POST['telefone'];
$nome = $_POST['celular'];
$cargo = $_POST['email'];

$conn = mysqli_connect('localhost','root','','tcc') or die('Erro ao conectar ao banco de dados');

$sql = "INSERT INTO cliente VALUES ";
$sql .= "('$nome', '$sexo', '$civil', '$telefone', '$celular', '$email')"; 
mysqli_query($conn,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($conn);

header("Location:cadastrarCliente.php");
echo "Funcionario cadastrado com sucesso!";
?>