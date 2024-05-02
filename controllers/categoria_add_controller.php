<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/novoPISORVETE/models/categoria.php';


try {
    $nome = $_POST ['nome'];
    

    if(!empty ($_FILES ['foto']['tmp_name'])){
        $foto = file_get_contents($_FILES['foto']['tmp_name']);

    }
    $categoria = new Categoria();
    $categoria->nome_categoria =$nome;
    if ($foto) {
        $categoria->foto_categoria =$foto;
    } else {
        $categoria->foto_categoria = file_get_contents('/front_vitrine_profe/imgs/dummy_.png');
    }


    $categoria->criar();

    header('Location: /front_vitrine_profe/views/admin/categorias_gerenciar.php');
    exit();

}

catch (PDOException $e)  {
    echo $e->getMessage();

} 