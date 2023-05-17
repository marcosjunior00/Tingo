<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Tingo</title>
</head>
<body>

<header><!-- Início header -->
      <nav class="navbar navbar-expand-sm navbar-principal navbar-light">

        <div class="container">

          <a href="index.php">
            <img src="imgs/logo.png" alt="logo" width="200">
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <i class="fa-solid fa-bars text-white"></i>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto text-white">
              <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="products.php" class="nav-link">Produtos</a></li>
              <li class="nav-item"><a href="more.php" class="nav-link">Saiba mais</a></li>

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
    
</body>
</html>