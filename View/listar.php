<?php
    //Usar antes de implementar a tabela para ver se os dados estão vindo do banco
    //print_r($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="View/style.css">
</head>
<body>
    <h1>Listar Usuários</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Estado Civil</th>
                    <th>Data de Nascimento</th>
                    <th>Estado</th>
                    <th>CPF</th>
                    <th>Profissão</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($result as $dados)
                    {
                ?>
                <tr>
                    <td><?=$dados['id']?></td>
                    <td><?=$dados['nomeUsuario']?></td>
                    <td><?=$dados['estadoCivil']?></td>
                    <td><?=$dados['dataNascimento']?></td>
                    <td><?=$dados['estadoNascimento']?></td>
                    <td><?=$dados['cpf']?></td>
                    <td><?=$dados['profissao']?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>    
</body>
</html>