<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/novoPISORVETE/models/categoria.php';

try {
    $id = $_GET['id'];

    $categoria= new Categoria ($id);

    $categoria->delete();

    header('Location: /front_vitrine_profe/views/admin/categorias_gerenciar.php');



} catch (\PDOException$e) {
    echo $e->getMessage();
}