<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/novoPISORVETE/templates/cabecalho.php";
?>

<div id="pagamento01">
    <div id="pg1">
        <h1>Identifique-se</h1>
        <p>Utilizaremos seu e-mail para: Identificar seu perfil, histórico de compra, notificação de pedidos e carrinho de compras.</p>

        <form class="px-4 py-3">

            <div class="form-group">
                <label for="exampleDropdownFormEmail1">Endereço de email</label>
                <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@exemplo.com">
            </div>

            <div class="form-group">
                <label for="exampleDropdownFormPassword1">Senha</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Senha">
            </div>

            <button type="submit" class="btn btn-primary">Entrar</button>

        </form>


    </div>
    <div id="pg01">
        <h3>DISPONIVEL APENAS PARA RETIRADA</h3>
        <img src="../img/cartao.jpg" alt="cartao" width="480px">
    </div>
    <div id="pg001">
        <h3>TOTAL CONFIRMAR PEDIDO</h3>

        <form class="formulario">

            <label class="campo-grupo">
                <span class="texto-medio-azul">Produto</span>
                <select class="produto-input" name="produto" id="produto">
                    <option value="Sorvete Casquinha- R$2,99">Sorvete Casquinha- R$2,99</option>
                    <option value="Sorvete Porte - R$14,99">Sorvete Porte - R$14,99</option>
                    <option value="Sorvete Peso - R$5,99">Sorvete Peso - R$5,99</option>
                </select>

            </label>

            <section class="parte-inferior">
                <label class="campo-grupo">
                    <span class="texto-medio-azul">Qtde.</span>
                    <input class="quantidade-input" id="quantidade" type="number" placeholder="100">
                </label>
                <section class="botoes-wrapper">
                    <button onclick="adicionar()" type="button" class="botao-form botao-adicionar">Adicionar</button>
                    <button onclick="limpar()" type="button" class="botao-form botao-limpar">Limpar</button>
                </section>
            </section>
        </form>
        <section class="carrinho">
            <!-- <img src="./assets/carrinho-cinza.svg" alt="Imagem de um carrinho de compras cinza"> -->

            <!-- <div class="titulo-wrapper">
                <img src="./assets/icone-carrinho.svg" alt="ícone de carrinho">

                <h2 class="carrinho__titulo">Produtos no carrinho</h2>
            </div> -->

            <section class="carrinho__produtos" id="lista-produtos">
                <section class="carrinho__produtos__produto">
                    <span class="texto-azul">1x</span> Sorvete Casquinha <span class="texto-azul">R$2,99</span>
                </section>
            </section>

            <div class="divisoria"></div>

            <p class="carrinho__total">
                Total: <span class="texto-azul" id="valor-total">R$2,99</span>
            </p>
        </section>
    </div>
</div>
</div>

<!-- OBS: O BOTÃO LIMPAR NAO ESTA FUNCIONANDO NO JS  -->


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/novoPISORVETE/templates/rodape.php";
?>