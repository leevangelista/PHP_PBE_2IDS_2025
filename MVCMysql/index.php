<?php 

require_once "Controller/UsuarioController.php";

$usuarioController = new UsuarioController();
$route = $_GET["route"] ?? '';
// estou no INDEX.PHP
switch ($route) {
    case 'usuario/telaCadastro':
        $usuarioController->telaCadastro();
        break;

    case "usuario/salvar":
        $usuarioController->cadastrar();
        break;
// estou no INDEX.PHP
    case "usuario/listar":
        $usuarioController->listarUsuarios();
        break;

    case "usuario/telaEditar":
        $usuarioController->telaEditar();
        break;
    
    case "usuario/atualizar":
        $usuarioController->atualizar();
        break;

    case "usuario/excluir":
        $usuarioController->excluir();
        break;

    default:
        echo "Página não encontrada";
        break;
}