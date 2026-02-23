<?php

// ESTOU NO ARQUIVO UsuarioController.php
session_start(); // "banco de dados"
require_once "./Model/UsuarioModel.php";

class UsuarioController{

    public function telaCadastro(){
        require "View/usuarioCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $usuario = new Usuario($nome, $email);
        $usuario->salvar();
        // redirecionar ao depois de salvar
        header('Location: /PHP_PBE_2IDS_2025/MVCExemplo/usuario/telaCadastro');
        exit;
    }

    // ESTOU NO ARQUIVO UsuarioController.php
    public function listarUsuarios(){
        $usuarios = Usuario::listar();
        echo "<pre>";
        print_r($usuarios);
        echo "</pre>";
        require 'View/usuarioListar.php';
    }
}