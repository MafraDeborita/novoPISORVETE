<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/novoPISORVETE/models/categoria.php';


try {
    $id = $_POST['id'];
    $nome = $_POST['nome'];

    
    if(!empty ($_FILES ['foto']['tmp_name'])){
        $foto = file_get_contents($_FILES['foto']['tmp_name']);

    }

    $categoria = new Categoria($id);
    $categoria->nome_categoria = $nome;
    if ( $foto) {
        $categoria->foto_categoria = $foto;
    } else {
        $categoria->foto_categoria = $categoria->foto_categoria;
    }


$categoria->atualizar();

header('Location: /novoPISORVETE/views/admin/categorias_gerenciar.php');
exit();


    
}catch (PDOException $e){
    echo $e->getMessage();
}