<!DOCTYPE html>
<!-- TELA usuarioEditar.php -->
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Tela Editar</title>
    </head>
    <body>
        <h2>Editar usuário</h2>
        <a href="/PHP_PBE_2IDS_2025/MVCMysql/usuario/listar">Ir para tela Listar</a>
        <!-- TELA usuarioEditar.php -->
        <form method="POST" action="atualizar?id=<?= $_GET['id'] ?>">
            <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled>
            <input type="text" name="nome" value="<?= htmlspecialchars($usuario['NOME'])?>" require>
            <input type="email" name="email" value="<?= htmlspecialchars($usuario['EMAIL'])?>" require>
            <button type="submit">Editar</button>
        </form>
    </body>
</html>