<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Современный взгляд</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
 <!-- Navigation -->
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark  fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">Современный взгляд</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="about.php">Конкурсы</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="services.php">Инструкция</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contact.php">Подать заявку</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Портфолио работ
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" href="portfolio-1-col.php">Художественный конкурс</a>
            
          </div>
        </li>
       
        
      </ul>
    </div>
  </div>
</nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Заявка/Регистрация
      
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Главная</a>
      </li>
      <li class="breadcrumb-item active">Регистрация</li>
    </ol>

    <!-- Content Row -->
   
    <!-- /.row -->

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <?php  
    require 'tcont.php';
     // главное меню  
    ?>
    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Все заявки</h3>
        <?php
        require 'eddel.php';

         ?>
        
      </div>

    </div>

  </div>
  <!-- /.container -->
</div>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Учавствуй вместе с нами!</p>
    </div>
    <!-- /.container -->
  </footer>



  <script src='js/jquery.min.js'></script>
  <script src='js/bootstrap.bundle.min.js'></script>

  
  <script src='js/jqBootstrapValidation.js'></script>
  <script src='js/contact_me.js'></script>

</body>

</html>


