<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="teste.css">
    <script src="javascript.js" defer></script>
    <title>Document</title>
</head>

<body>
    <header class="header">
        <h1>sorvetereia</h1>
        <div id="nav-bar">
            <ul>
                <li><a href="/novoPISORVETE/views/index.php">
                        Início
                    </a></li>
                <li><a href="#">
                        Sobre
                    </a></li>
                <li><a href="#campeoes">
                        Produtos
                    </a></li>
                <?php if (!isset($_SESSION['id_usuario'])) : ?>
                    <li><a href="/novoPISORVETE/views/login.php">
                            login
                        </a></li> <?php else : ?>
                    <a class="login-btn" href="/novoPISORVETE/controllers/logout.php" style="color: #8c52ff">Sair</a>
                <?php endif; ?>
                <li><a href="/novoPISORVETE/views/cadastro.php">
                        cadastro
                    </a></li>
                <li><a href="/novoPISORVETE/views/perfil.php">
                        Meu Perfil
                    </a></li>
            </ul>

        </div>
        <!-- ?php// if (!isset($_SESSION['id_usuario'])) : ?>
                            <a class="login-btn" href="/defi/views/login.php" style="color: #8c52ff">Login</a>
                        <?php //else : 
                        ?>
                            <a class="login-btn" href="/defi/controllers/logout.php" style="color: #8c52ff">Sair</a>
                        <?php //endif; 
                        ?> -->

    </header>


































</body>

</html>