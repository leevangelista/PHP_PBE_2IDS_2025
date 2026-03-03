
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h2>Usuários</h2>
    <a href="/PHP_PBE_2IDS_2025/MVCMysql/usuario/telaCadastro">
        Ir para tela Cadastrar</a>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <!-- TELA usuarioListar.php -->
        <?php foreach($usuarios as $id => $u): ?>
            <tr>
                <td><?= $u['NOME']?></td>
                <td><?= $u['EMAIL']?></td>
                <td>
    <a href="/PHP_PBE_2IDS_2025/MVCMysql/usuario/telaEditar?id=<?= $u['ID'] ?>">
        Editar
    </a>
    <a href="/PHP_PBE_2IDS_2025/MVCMysql/usuario/excluir?id=<?= $u['ID'] ?>">
        Excluir
    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>