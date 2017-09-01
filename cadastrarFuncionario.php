<html lang="pt-br">
    <link rel="stylesheet" type="text/css" href="style.css" />
<head>
<meta charset="UTF-8">
    <title>Cadastrar Funcionario</title>

</head>
<body>
 
    <form name="cadastro" action="conexaoFuncionario.php" method="post">
        
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

        
    <select name="cargo">
        <option selected="selecione" disabled="disabled">Selecione...</option>
        <option value="gerente">Gerente</option>
        <option value="administrativo">Administrativo</option>
        <option value="operario">Operário</option>
        <option value="tecnico">Técnico</option>
    
    
    </select><br/><br/>
    
    <button type="submit" name="btnCadastrar" value="enviar">Cadastrar</button>

		</div>
        
    </form>

</body>

</html>