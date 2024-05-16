<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/novoPISORVETE/models/produto.php';
require_once $_SERVER["DOCUMENT_ROOT"] . "/novoPISORVETE/configs/sessions.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/novoPISORVETE/configs/utils.php";

if (!Utilidades::isAdmin()) {
    setcookie('msg', 'Você não tem permissão para acessar este conteúdo', time() + 3600, '/vitrine/');
    setcookie('tipo', 'perigo', time() + 3600, '/novoPISORVETE/');
    header('Location: /novoPISORVETE/views/index.php');
    exit();
}

try {
    $id_produto = $_GET['id'];

    $produto = new Produto($id_produto);

    $produto->deletar();

    setcookie('msg', "O produto $produto->nome_produto foi deletado com sucesso!", time() + 3600, '/vitrine/');
    setcookie('tipo', 'sucesso', time() + 3600, '/novoPISORVETE/');
    header("Location: /novoPISORVETE/views/admin/produtos_gerenciar.php");
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
}