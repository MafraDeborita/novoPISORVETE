<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/novoPISORVETE/models/usuario.php';
require_once $_SERVER["DOCUMENT_ROOT"] . "/novoPISORVETE/configs/sessions.php";
require_once $_SERVER["DOCUMENT_ROOT"] . '/novoPISORVETE/configs/utils.php';

if (!Utilidades::isLogado()) {
    setcookie('msg', 'Você não tem permissão para acessar este conteúdo', time() + 3600, '/novoPISORVETE/');
    setcookie('tipo', 'perigo', time() + 3600, '/novoPISORVETE/');
    header('Location: /novoPISORVETE/index.php');
    exit();
}

try {
    $id_usuario = $_POST['id'];
    $senha = $_POST['senha'];
    $nova_senha = $_POST['nova_senha'];
    $nova_senha = password_hash($nova_senha, PASSWORD_DEFAULT);

    $usuario = new Usuario($id_usuario);
    
    if(password_verify($senha, $usuario->senha)){
        $usuario->senha = $nova_senha;
        $usuario->editarSenha();
        header("Location: /novoPISORVETE/controllers/logout_controller.php");
        exit();
    } else {
        setcookie('msg', 'Algo deu Errado', time() + 3600, '/novoPISORVETE/');
        setcookie('tipo', 'perigo', time() + 3600, '/novoPISORVETE/');
        header("Location: /novoPISORVETE/views/perfil.php");
        exit();
    }


    
} catch (PDOException $e) {
    echo $e->getMessage();
}