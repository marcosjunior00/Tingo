<!DOCTYPE html>
<html lang="pt-br"> 

<head> 
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
  <!-- Favicon -->
  <link rel="shortcut icon" href="imgs/favicon.png" type="image/x-icon">
 
  <!-- Fontawesome -->
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <link rel="stylesheet" href="fontawesome/css/brands.css">
 
  <!-- Folha de estilos personalizada -->
  <link rel="stylesheet" href="./css/style.css">

  <title>Tingo</title>

  <?php

    include './backend/login.php';

  ?>

</head>

<body>

  <div>

    <header><!-- Início header -->
      <nav class="navbar navbar-expand-sm navbar-principal navbar-light">

        <div class="container">

          <a href="index.php">
            <img src="imgs/logo.png" alt="logo" width="70">
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <i class="fa-solid fa-bars text-white"></i>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto text-white">
              <li class="nav-item"><a href="index.php" class="nav-link" active>Home</a></li>
              <li class="nav-item"><a href="pages/products.php" class="nav-link">Produtos</a></li>
              <li class="nav-item"><a href="pages/more.php" class="nav-link">Saiba mais</a></li>

              <li class="nav-item barra"></li>

              <li class="nav-item">
                <!-- <span class="login"><i class="fa-solid fa-user"></i></span>
                <span class="logged"></span> -->
                <?php 
                  if (isset($_SESSION["email"]))
                  {
                    echo '<a href="./pages/profile.php" class="nav-link"><span class="logged">'. ucwords($_SESSION['nome']) .'</span></a>';
                  } 
                  else 
                  {
                    session_destroy();
                    echo '<a href="./pages/login.html" class="nav-link"><span class="login"><i class="fa-solid fa-user"></i></span></a>';
                  }
                ?>
              </li>

              <li class="nav-item"><a href="" class="nav-link"><i class="fa-solid fa-cart-shopping icon-nav"></i></a>
              </li>
            </ul>
          </div>

        </div>

      </nav>
    </header><!--/ Fim header -->

    <section id="home" class="d-flex"><!-- Início home -->
      <div class="container align-self-center d-flex">
        <div class="col-md-6">
          <h1>Tingo - seu companheiro diário.</h1>
          
          <button class="btn-home" value="compre agora">compre agora <i class="fa-solid fa-cart-shopping"></i></button>
        </div>

        <div class="col-md-6">
        </div>

        <div class="col-md-6 cont-img-home">
          <img src="./imgs/imgHome.png" width="250" id="img_cell">
        </div>

      </div>
    </section><!-- Fim home -->

    <section id="servicos" class="d-flex bg-light"><!-- Início descrição da lixeira -->

      <div class="container">
        <div class="row">
          <div class="col-md-6">

            <img src="imgs/img_parceiro.png" style="width:100%; height: 100%;" alt="">

          </div>
          <div class="col-md-6">

            <h2 class="align-self-center">Saiba mais sobre seu Tingo</h2>

            <h3>Descubra novas possibilidades com seu Tingo!</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam sit amet eius reiciendis at unde
              aspernatur. Tempora, expedita quae. Minima assumenda itaque fuga. Veniam doloribus eaque doloremque sequi,
              debitis eveniet?</p>

            <h3>Como o Tingo pode ajudar a sua rotina?</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, molestias aperiam laboriosam optio
              fugit facere ipsam. Molestias quos voluptatum quia rerum dolorem rem odit in nisi, ex fugit similique a.
            </p>

            <h3></h3>

          </div>
        </div>
      </div>

    </section><!-- Fim descrição da lixeira-->

    <section id="recursos">
      <div class="row d-flex justify-content-around">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" style="width: 18rem;" src="https://img.freepik.com/vetores-gratis/fundo-do-mosaico-do-quadrado-preto_1017-2363.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" style="width: 18rem;" src="https://img.freepik.com/vetores-gratis/fundo-do-mosaico-do-quadrado-preto_1017-2363.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" style="width: 18rem;" src="https://img.freepik.com/vetores-gratis/fundo-do-mosaico-do-quadrado-preto_1017-2363.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
      </div>
    </section> 

    <footer id="rodape">
      <div class="container">
        <div class="row">

          <div class="col-md-1">
            .
          </div>

          <div class="col-md-2">
            <img src="imgs/logo.png" alt="logo" id="logo">
          </div>

          <div class="col-md-2">

            <h4>company</h4>
            <ul class="navbar-nav">
              <li><a href="">Sobre</a></li>
              <li><a href="">Novidades</a></li>
            </ul>

          </div>

          <div class="col-md-2">

            <h4>comunidade</h4>
            <ul class="navbar-nav">
              <li><a href="">Grupo no telegram</a></li>
              <li><a href="">Desenvolvedores</a></li>
              <li><a href="">Manual do usuário</a></li>
            </ul>

          </div>

          <div class="col-md-2">

            <h4>contato</h4>
            <ul class="navbar-nav">
              <li><a href="">Reclame aqui</a></li>
              <li><a href="">Avaliações na PlayStore</a></li>
              <li><a href="">Telefone</a></li>
            </ul>

          </div>

          <div class="col-md-3 d-flex flex-column">
            <h4>redes sociais</h4>
            <ul class="navbar-nav">
              <li>
                <a href="instagram.com"><img src="imgs/instagram.png" alt="Instagram"></a>
                <a href="www.facebook.com"><img src="imgs/facebook.png" alt="Facebook"></a>
                <a href="www.twitter.com"><img src="imgs/twitter.png" alt="Twitter"></a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <button id="btnScrollToTop">
    <i class="fa-solid fa-arrow-up" style="color: #1c1559;"></i>
  </button>

  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>