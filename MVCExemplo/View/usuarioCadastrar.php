<!DOCTYPE html>
<!-- TELA UsuarioCadastrar.php -->
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Formulário Cadastro</title>
    </head>
    <body>
        <a href="/PHP_PBE_2IDS_2025/MVCExemplo/usuario/listar">Ir para tela Listar</a>
        <form method="POST" action="salvar">
            <input type="text" name="nome" placeholder="Seu nome" require>
            <input type="text" name="email" placeholder="Seu email" require>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>