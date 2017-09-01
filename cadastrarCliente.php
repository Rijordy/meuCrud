<html lang="pt-br">
    <link rel="stylesheet" type="text/css" href="style.css" />
<head>
<meta charset="UTF-8">
    <title>Cadastrar Cliente</title>

</head>
<body>
 
    <form name="cadastro" action="conexaoCliente.php" method="post">
        
    <div id="formCadastro">
    <input name="nome" type="text" placeholder="Nome"><br/><br/>
        
    <select name="sexo">
        <option selected="selecione" disabled="disabled">Selecione...</option>
        <option value="masculino">Masculino</option>
        <option value="feminino">Feminino</option> 
    </select><br/><br/>
        
    <select name="civil">
        <option selected="selecione" disabled="disabled">Selecione...</option>
        <option value="solteiro">Solteiro(a)</option>
        <option value="casado">Casado(a)</option> 
        <option value="divorciado">Divorciado(a)</option> 
        <option value="viuvo">Víuvo(a)</option> 
    </select><br/><br/>
        
    <input name="telefone" type="text" placeholder="Telefone"><br/><br/>
        
    <input name="celular" type="text" placeholder="Celular"><br/><br/>

    <input name="email" type="email" placeholder="Email"><br/><br/>
    
    <button type="submit" name="btnCadastrar" value="enviar">Cadastrar</button>
        

		</div>
        
    </form>

</body>

</html>