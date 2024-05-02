<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/novoPISORVETE/templates/cabecalho.php";
?>



<main>
    <div id="venda01">
        <div id="prod1"><img src="../img/sorvete1.png" alt="sorvete" width="500px" height="500px"></div>
        <div id="info1">
            <h1>Gelato Chocolate Amargo</h1>
            <p id="preco01">R$ 9,99</p>
            <p id="descricao1">Com intensidade ideal e teor de 54,5% de cacau, 
                a torrefação do grão inteiro garante seu sabor encorpado,
                corpo sólido e notas finas e frutadas.</p>
            <a href="pagamento01.php"><button onclick="" type="submit" name="add" id="comprarprod1">Comprar Agora</button></a>
        </div>
    </div>

    <h2>Você também pode gostar</h2>



    <div id="maisvendidos">
        <div id="card1">
            <img src="../img/sorvete3.jpg" alt="Avatar" width="250px" height="300px">
            <div class="container">
                <a href="produto01.php">
                    <h4><b>Chocolate Amargo</b></h4>
                    <p>R$ 9,99</p>
                </a>
            </div>
        </div>

        <div id="card2">
            <img src="../img/sorvete3.jpg" alt="Avatar" width="250px" height="300px">
            <div class="container">
                <a href="">
                    <h4><b>Chocolateao Leite</b></h4>
                    <p>delicius sorventin</p>
                </a>
            </div>
        </div>

        <div id="card3">
            <img src="../img/sorvete3.jpg" width="250px" height="300px">
            <div class="container">
                <a href="">
                    <h4><b>Chocolate Branco</b></h4>
                    <p>R$ 9,99</p>
                </a>
            </div>
        </div>


    </div>
  

</main>




</body>

</html>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/novoPISORVETE/templates/rodape.php";
?>