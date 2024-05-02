<?php  session_start()?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <script src="javascript.js" defer></script>
    <title>Document</title>
</head>

<body>
    <header class="header">
        <h1>sorvetereia</h1>
        <div id="nav-bar">
            <ul>
                <a href="/novoPISORVETE/views/index.php"><li>Início</li></a>
                <a href="#"><li>Sobre</li></a>
                <a href="#produtos"><li>Produtos</li></a>
                <?php if (!isset($_SESSION['id_usuario'])) : ?>
                <a href="/novoPISORVETE/views/login.php"><li>login</li></a> <?php else : ?>
                    <a class="login-btn" href="/novoPISORVETE/controllers/logout.php" style="color: #8c52ff">Sair</a>
                        <?php endif; ?>
                <a href="/novoPISORVETE/views/cadastro.php"><li>cadastro</li></a>
                <a href="/novoPISORVETE/views/perfil.php"><li>Meu Perfil</li></a>
            </ul>

        </div>
        <!-- ?php// if (!isset($_SESSION['id_usuario'])) : ?>
                            <a class="login-btn" href="/defi/views/login.php" style="color: #8c52ff">Login</a>
                        <?php //else : ?>
                            <a class="login-btn" href="/defi/controllers/logout.php" style="color: #8c52ff">Sair</a>
                        <?php //endif; ?> -->

    </header>







        <!-- https://diomio.com.br/?utm_source=google_ads&utm_medium=paid&utm_campaign=search_ecomm&gad_source=1&gclid=Cj0KCQjwztOwBhD7ARIsAPDKnkCTLeQCpI0yop1YwasR9X3WFq6ErgDpu0i-kFuGuyuUisL3t3CiloUaAnb5EALw_wcB
 -->



</body>
</html>