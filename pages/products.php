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
  <link rel="shortcut icon" href="../imgs/favicon.png" type="image/x-icon">

  <!-- Fontawesome -->
  <link rel="stylesheet" href="../fontawesome/css/all.css">
  <link rel="stylesheet" href="../fontawesome/css/brands.css">

  <!-- Folha de estilos personalizada -->
  <link rel="stylesheet" href="../css/style.css">

  <title>Tingo</title>

  <?php

    include '../login.php';

  ?>

</head>
<body>

    <header><!-- Início header -->
      <nav class="navbar navbar-expand-sm navbar-principal navbar-light">

        <div class="container">

          <a href="index.php">
            <img src="../imgs/logo.png" alt="logo" width="200">
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <i class="fa-solid fa-bars text-white"></i>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto text-white">
              <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="products.php" class="nav-link">Produtos</a></li>
              <li class="nav-item"><a href="more.php" class="nav-link">Saiba mais</a></li>

              <li class="nav-item barra"></li>

              <li class="nav-item">
                <?php 
                  if (isset($_SESSION["email"]))
                  {
                    echo '<a href="./pages/profile.php" class="nav-link"><span class="logged">'. ucwords($_SESSION['nome']) .'</span></a>';
                  } 
                  else 
                  {
                    session_destroy();
                    echo '<a href="login.html" class="nav-link"><span class="login"><i class="fa-solid fa-user"></i></span></a>';
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

    <section id="products" class="container"><!-- Início section products -->
        <div class="row justify-content-between">
            <div class="product-container col-md-2">
                <img src="../imgs/img_parceiro.png" width="100%" alt="img_product">

                <hr>

                <h4 class="valor">R$ 100,00</h4>

                <p class="title">Lorem ipsum</p>

                <p class="description">Um produto de altíssima qualidade da Tingo!</p>
            </div>
            <div class="product-container col-md-2">
                <img src="../imgs/img_parceiro.png" width="100%" alt="img_product">

                <hr>

                <h4 class="valor">R$ 100,00</h4>

                <p class="title">Lorem ipsum</p>

                <p class="description">Um produto de altíssima qualidade da Tingo!</p>
            </div>
            <div class="product-container col-md-2">
                <img src="../imgs/img_parceiro.png" width="100%" alt="img_product">

                <hr>

                <h4 class="valor">R$ 100,00</h4>

                <p class="title">Lorem ipsum</p>

                <p class="description">Um produto de altíssima qualidade da Tingo!</p>
            </div>
            <div class="product-container col-md-2">
                <img src="../imgs/img_parceiro.png" width="100%" alt="img_product">

                <hr>

                <h4 class="valor">R$ 100,00</h4>

                <p class="title">Lorem ipsum</p>

                <p class="description">Um produto de altíssima qualidade da Tingo!</p>
            </div>
            <div class="product-container col-md-2">
                <img src="../imgs/img_parceiro.png" width="100%" alt="img_product">

                <hr>

                <h4 class="valor">R$ 100,00</h4>

                <p class="title">Lorem ipsum</p>

                <p class="description">Um produto de altíssima qualidade da Tingo!</p>
            </div>
        </div>
    </section><!-- / Fim section products -->
    
</body>
</html>