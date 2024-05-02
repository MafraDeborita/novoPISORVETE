<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/novoPISORVETE/templates/cabecalho.php";
?>
<!-- "https://source.unsplash.com/random/1920x1080/?icecream" -->

<main>
  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="../img/sorvete2.webp" style="width:100%">
      <div class="text">sorvete ontem</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="../img/sorvete1.png" style="width:100%">
      <div class="text">sorverte hoje</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="../img/sorvete3.jpg" style="width:100%">
      <div class="text">sorvete para sempre</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">4 / 4</div>
      <img src="../img/sorvete4.jpg" style="width:100%">
      <div class="text">sorvete para sempre</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">5 / 5</div>
      <img src="../img/sorvete5.jpg" style="width:100%">
      <div class="text">sorvete para sempre</div>
    </div>

    <a class="anterior" onclick="plusSlides(-1)">&#10094;</a>
    <a class="proximo" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <div style="text-align:center">
    <span class="ponto" onclick="currentSlide(1)"></span>
    <span class="ponto" onclick="currentSlide(2)"></span>
    <span class="ponto" onclick="currentSlide(3)"></span>
    <span class="ponto" onclick="currentSlide(4)"></span>
    <span class="ponto" onclick="currentSlide(5)"></span>
  </div>

  <hr>
  <hr>

  <div id="diferencial">
    <h2>Nossos Diferenciais</h2>
  </div>

  <div id="card001">
    <div class="card" style="width: 18rem; height: 200px;">
      <img class="card-img-top" src="../img/feliz1.png" alt="Imagem de capa do card" width="100px" height="30px">
      <div class="card-body">
        <h5 class="card-title">Sou Uma Delícia</h5>
        <p class="card-text">Somos obstinados por ingredientes de qualidade, do leite às frutas, do cacau às oleaginosas, e acreditamos que a boa indulgência é fundamental pra te fazer sorrir.</p>
        <a href="#" class="btn btn-primary">Visitar</a>
      </div>
    </div>

    <div class="card" style="width: 18rem; width: 18rem; height: 200px;">
      <img class="card-img-top" src="../img/folha.jfif" alt="Imagem de capa do card" width="100px" height="30px">
      <div class="card-body">
        <h5 class="card-title">Sou Saudável</h5>
        <p class="card-text">Somos uma das únicas fábricas do Brasil livres 100% de glúten, trabalhamos com açúcar orgânico, frutas in natura, leite integral e creme de leite fresco em nossa composição.</p>
        <a href="#" class="btn btn-primary">Visitar</a>
      </div>
    </div>

    <div class="card" style="width: 18rem; width: 18rem; height: 200px;">
      <img class="card-img-top" src="../img/balança.avif" alt="Imagem de capa do card" width="100px" height="30px">
      <div class="card-body">
        <h5 class="card-title">E Livre de Culpa</h5>
        <p class="card-text">Nossos gelatos possuem valor calórico e de gordura reduzidos, nossos sorbets são baixo em gordura e vegan-friendly. É pra tomar todo dia e não se preocupar com mais nada.</p>
        <a href="#" class="btn btn-primary">Visitar</a>
      </div>
    </div>
  </div>
  <div id="campeoes">
    <h2>Os Campeões de Venda</h2>
  </div>
  <session id="produtos"><a href="">
      <div id="maisvendidos">
        <div id="card1">
          <img src="../img/sorvete2.webp" alt="Avatar" width="250px" height="300px">
          <div class="container">
            <a href="/views/produto01.php">
              <h4><b>Chocolate Amargo</b></h4>
              <p>R$ 9,99</p>
            </a>
          </div>
        </div>

        <div id="card2">
          <img src="../img/sorvete2.webp" alt="Avatar" width="250px" height="300px">
          <div class="container">
            <a href="">
              <h4><b>Chocolateao Leite</b></h4>
              <p>delicius sorventin</p>
            </a>
          </div>
        </div>

        <div id="card3">
          <img src="../img/sorvete2.webp" width="250px" height="300px">
          <div class="container">
            <a href="">
              <h4><b>Chocolate Branco</b></h4>
              <p>R$ 9,99</p>
            </a>
          </div>
        </div>


      </div>

      <div id="maisvendidos">
        <div id="card1">
          <img src="../img/sorvete3.jpg" alt="Avatar" width="250px" height="300px">
          <div class="container">
            <a href="">
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
              <p>R$ 9,99 </p>
            </a>
          </div>
        </div>

        <div id="card3">
          <img src="../img/sorvete3.jpg" width="250px" height="300px">
          <div class="container">
            <a href="">
              <h4><b>Chocolate Amargo</b></h4>
              <p> R$ 9,99</p>
            </a>
          </div>
        </div>


      </div>

      <div id="maisvendidos">
        <div id="card1">
          <img src="../img/sorvete3.jpg" alt="Avatar" width="250px" height="300px">
          <div class="container">
            <h4><b>Chocolate Amargo</b></h4>
            <p>R$ 9,99</p>
          </div>
        </div>

        <div id="card2">
          <img src="../img/sorvete3.jpg" alt="Avatar" width="250px" height="300px">
          <div class="container">
            <h4><b>Chocolateao Leite</b></h4>
            <p>R$ 9,99</p>
          </div>
        </div>

        <div id="card3">
          <img src="../img/sorvete3.jpg" width="250px" height="300px">
          <div class="container">
            <h4><b>Chocolate Branco</b></h4>
            <p>R$ 9,99</p>
          </div>
        </div>
    </a>
  </session>
  </div>

</main>







<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/novoPISORVETE/templates/rodape.php";
?>
</body>

</html>