<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<script>
    function mascaraCPF() 
    {
        var cpf = document.getElementById('cpf');
        if(cpf.value.length == 3 || cpf.value.length == 7)
        {
          cpf.value += ".";
        }
        else if(cpf.value.length == 11)
        {
          cpf.value += "-";
        }
    }
</script>

<body>
    <h1>Cadastrar</h1>
    <form type="submit" method="POST" action="cadastraUsuario">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome completo"><br><br>

        <label>Estado Civil:</label>
        <select name="estadoCivil" id="estadoCivil">
            <option value="opcao">Escolha uma opção</option>
            <option value="Casado">Casado</option>
            <option value="Solteiro">Solteiro</option>
            <option value="Não Informar">Não Informar</option>
        </select><br><br>

        <label>Data de Nascimento:</label>
        <input type="text" name="dataNascimento" id="dataNascimento" placeholder="dd/mm/AAAA" maxlength="10"><br><br>

        <label>Estado de Nascimento:</label>
        <input type="text" name="estadoNascimento" id="estadoNascimento" placeholder="Estado"><br><br>

        <label>CPF:</label>
        <input type="text" name="cpf" id="cpf" placeholder="Informe seu CPF" maxlength="14" onkeyup="mascaraCPF()"><br><br>

        <label>Profissão:</label>
        <input type="text" name="profissao" id="profissao" placeholder="Informe sua Profissão"><br><br>

        <button type="submit" name="cadastrarUsu">Cadastrar</button><br><br>
    </form>
</body>
</html>