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
            <a class="nav-link active" href="services.php">Инструкция</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Подать заявку</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Порфолио работ
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
    <h1 class="mt-4 mb-3">Подробная инструкция
      
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Главная</a>
      </li>
      <li class="breadcrumb-item active">Инструкция</li>
    </ol>

    <!-- Image Header -->
    <img class="img-fluid rounded mb-4" src="https://www.derpauker.at/wp-content/uploads/2017/02/Theaterspielen-4-min.jpg" alt="">

    <!-- Marketing Icons Section -->
    <div class="row">
    <?php
    
    // осуществляем подключение к базе данных
    $mysqli = mysqli_connect('localhost', 'mysql', 'mysql', 'injener');
    if( mysqli_connect_errno() ) // проверяем корректность подключения
    return 'Ошибка подключения к БД: '.mysqli_connect_error();
    // формируем и выполняем SQL-запрос для определения числа записей
    $sql_res=mysqli_query($mysqli, 'SELECT COUNT(*) FROM servis');
    // проверяем корректность выполнения запроса и определяем его результат
    if( !mysqli_errno($mysqli) && $row=mysqli_fetch_row($sql_res) )
    {
         if(!$TOTAL=$row[0] ) // если в таблице нет записей
             return 'В таблице нет данных'; // возвращаем сообщение
         $PAGES = ceil($TOTAL/10); // вычисляем общее количество страниц
         
         
         
        
         $sql_res = mysqli_query($mysqli,'SELECT id, namber,glavn,text FROM servis');
          // строка с будущим контентом страницы
        
         while( $row=mysqli_fetch_assoc($sql_res) ) // пока есть записи
         {
            // выводим каждую запись как строку таблицы
                $ret.="
    <div class='col-lg-4 mb-4'>
      <div class='card h-100 '>
      <h4 class='card-header'>Шаг ".$row['namber']." - ".$row['glavn']."</h4>
      <div class='card-body'>
       
        <p class='card-text'>".$row['text']."</p>
        </div>
      </div>
    </div>";
                }
         // заканчиваем формирование таблицы с контентом
        
         echo $ret; // возвращаем сформированный контент
          }
           // если запрос выполнен некорректно
     
?>
     
    <!-- /.row -->
        </div>

  </div>
  <!-- /.container -->
  <div class="card-footer" style="text-align: center;">
    <a href="#" class="btn btn-primary">Подать заявку</a>
  </div>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Учавствуй вместе с нами!</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
