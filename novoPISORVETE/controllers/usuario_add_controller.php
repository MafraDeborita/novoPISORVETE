<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/novoPISORVETE/models/usuario.php';



try {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha = password_hash($senha, PASSWORD_DEFAULT);

    if (!empty($_FILES['foto']['tmp_name'])) {
        $foto = file_get_contents($_FILES['foto']['tmp_name']);
    }
    

    $usuario = new Usuario();
    $usuario->nome = $nome;
    $usuario->email = $email;
    $usuario->senha = $senha;


    if (isset($foto)) {
        $usuario->foto = $foto;
    } else {
        $usuario->foto = null;
    }


    $usuario->criar();


    header('Location: /novoPISORVETE/views/login.php');
    exit();



} catch (PDOException $e) {
    echo $e->getMessage();
}














?>