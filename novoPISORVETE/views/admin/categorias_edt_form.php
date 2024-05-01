<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/novoPISORVETE/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/novoPISORVETE/models/categoria.php';

try {
   $lista = Categoria::listar();
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

<section class="m-3">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>

                <th scope="col" colspan="2" class="text-center">
                    <a href="/novoPISORVETE/views/admin/categorias_add_form.php" title="Adicionar Categoria">
                        <span class="material-symbols-outlined text-success">add_box</span>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $cat) : ?>
                <tr>
                    <th scope="row"><?=$cat['id_categoria'] ?></th>
                    <td><?=$cat['nome_categoria'] ?></td>

                    <td class="text-center">
                        <a href="/novoPISORVETE/views/admin/categorias_edt_form.php?id=<?= $cat['id_categoria'] ?>" title="Editar Categoria">
                            <span class="material-symbols-outlined">edit</span>
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="/novoPISORVETE/controllers/categoria_del_controller.php?id=<?= $cat ['id_categoria'] ?>" title="Deletar Categoria">
                            <span class="material-symbols-outlined text-danger">delete</span>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>

<?php
require_once "../../templates/_rodape.php";
?>