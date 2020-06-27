<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Онлайн конкурс работ "Современный взгляд"</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

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
            <a class="nav-link" href="services.php">Инструкция</a>
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

  <header >
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox" >
        <!-- Slide One - Установите фоновое изображение для этого слайда в строке ниже -->
        <div class="carousel-item active" style="background-image: url(img/3.jpg); height: 520px;">
          <div class="carousel-caption d-none d-md-block">
            <h1>Не упусти шанс!</h1>
            <h4>ВСЕРОССИЙСКИЙ КОНКУРС ДЕТСКОГО ТВОРЧЕСТВА С ДИСТАНЦИОННЫМ УЧАСТИЕМ</h4>
          </div>
        </div>
        <!-- Slide Two - Установите фоновое изображение для этого слайда в строке ниже -->
        <div class="carousel-item" style="background-image: url(img/2.jpg);height: 520px;">
          <div class="carousel-caption d-none d-md-block">
            <h1>Никаких творческих ограничений</h1>
            
          </div>
        </div>
        <!-- Slide Three - Установите фоновое изображение для этого слайда в строке ниже -->
        <div class="carousel-item" style="background-image: url(img/1.jpg);height: 520px;">
          <div class="carousel-caption d-none d-md-block">
            <h1>Незабываемые эмоции</h1>
            
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">
   <div style="margin: 0 auto; text-align: center;">
    <h2 class="my-4" style="color: rgb(230, 50, 50);">Инструкция для участников конкурса</h2>
    <h3>Три простых шага</h3>
  </div>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-4 mb-4 instr">
        <div class="card h-100">
          <h4 class="card-header">Шаг 1</h4>
          <div class="card-body">
            <p class="card-text">Разместите видео вашего конкурсного выступления (или фотографии работ в номинации "ИЗО") на одном из файловых хостингов: YouTube, Яндекс.Диск, Google Drive или Облако Mail.ru.</p>
          </div>
         
        </div>
      </div>
      <div class="col-lg-4 mb-4 instr">
        <div class="card h-100">
          <h4 class="card-header">Шаг 2</h4>
          <div class="card-body">
            <p class="card-text">Внимательно заполните заявку на нашем сайте, указав все необходимые данные, часть которых будет отображена в дипломах: ваш город, учебное заведение, название ансамбля, номинация и т.д.</p>
          </div>
          
        </div>
      </div>
      <div class="col-lg-4 mb-4 instr">
        <div class="card h-100">
          <h4 class="card-header">Шаг 3</h4>
          <div class="card-body">
            <p class="card-text">После подачи заявки вы будете перенаправлены на страницу с оплатой участия в режиме онлайн. Обращаем ваше внимание, что регистрация заявки возможна только после внесения оплаты.</p>
          </div>
          
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->
    <h2 style=" text-align: center; color: rgb(230, 50, 50);">Члены жюри дистанционного конкурса </h2>

    <div class="row">
    <?php
    
    // осуществляем подключение к базе данных
    $mysqli = mysqli_connect('localhost', 'mysql', 'mysql', 'injener');
    if( mysqli_connect_errno() ) // проверяем корректность подключения
    return 'Ошибка подключения к БД: '.mysqli_connect_error();
    // формируем и выполняем SQL-запрос для определения числа записей
    $sql_res=mysqli_query($mysqli, 'SELECT COUNT(*) FROM juri');
    // проверяем корректность выполнения запроса и определяем его результат
    if( !mysqli_errno($mysqli) && $row=mysqli_fetch_row($sql_res) )
    {
         if(!$TOTAL=$row[0] ) // если в таблице нет записей
             return 'В таблице нет данных'; // возвращаем сообщение
         $PAGES = ceil($TOTAL/10); // вычисляем общее количество страниц
         
         
         
        
         $sql_res = mysqli_query($mysqli,'SELECT id, img,glavn,text FROM juri');
          // строка с будущим контентом страницы
        
         while( $row=mysqli_fetch_assoc($sql_res) ) // пока есть записи
         {
            // выводим каждую запись как строку таблицы
                $ret.="
    
    
    <div class='col-lg-4 col-sm-6 portfolio-item'>
    <div class='card h-100'>
      <a href='#'><img class='card-img-top' src='".$row['img']."' ></a>
      <div class='card-body'>
        <h4 class='card-title'>
          <a href='#'>".$row['glavn']."</a>
        </h4>
        <p class='card-text'>".$row['text']."</p>
      </div>
    </div>
  </div>
    ";
                }
         // заканчиваем формирование таблицы с контентом
        
         echo $ret; // возвращаем сформированный контент
          }
           // если запрос выполнен некорректно
     
?>
<?php
$mysqli = mysqli_connect('localhost', 'mysql', 'mysql', 'injener');
if( mysqli_connect_errno() ) // проверяем корректность подключения
return 'Ошибка подключения к БД: '.mysqli_connect_error();
// формируем и выполняем SQL-запрос для определения числа записей
$sql_res=mysqli_query($mysqli, 'SELECT COUNT(*) FROM juri');

$row = mysqli_fetch_row($sql_res);
$total = $row[0]; // всего записей
echo "<div class='col-lg-4 col-sm-6 portfolio-item'>Всего членов жюри:<b>$total</b> </div>";

?>

     
    </div>
    <!-- /.row -->

    <!-- Features Section -->
    <h2>Работа победителей 2019 года</h2>
        <?php
    
            // осуществляем подключение к базе данных
            $mysqli = mysqli_connect('localhost', 'mysql', 'mysql', 'injener');
            if( mysqli_connect_errno() ) // проверяем корректность подключения
            return 'Ошибка подключения к БД: '.mysqli_connect_error();
            // формируем и выполняем SQL-запрос для определения числа записей
            $sql_res=mysqli_query($mysqli, 'SELECT COUNT(*) FROM win');
            // проверяем корректность выполнения запроса и определяем его результат
            if( !mysqli_errno($mysqli) && $row=mysqli_fetch_row($sql_res) )
            {
                if(!$TOTAL=$row[0] ) // если в таблице нет записей
                    return 'В таблице нет данных'; // возвращаем сообщение
                $PAGES = ceil($TOTAL/10); // вычисляем общее количество страниц
                
                
                
                
                $sql_res = mysqli_query($mysqli,'SELECT id, name,old,tema,text,img FROM win');
                // строка с будущим контентом страницы
                
                while( $row=mysqli_fetch_assoc($sql_res) ) // пока есть записи
                {
                    // выводим каждую запись как строку таблицы
                        $rat.=" <hr><div class='row' style='margin-bottom=10px;'>
      
                      
                        <div class='col-lg-6'> 
                        
            <ul>
          
            <li>".$row['name']."</li>
            <li>".$row['old']."</li>
            <li>".$row['tema']."</li>
            
          </ul>
          <p>".$row['text']."</p>
        </div>
        <hr>
        <div class='col-lg-6'>
        
          <img class='img-fluid rounded' src='".$row['img']."' >
          </div>
          </div>
          
        
            ";
                        }
                // заканчиваем формирование таблицы с контентом
                
                echo $rat; // возвращаем сформированный контент
                }
                // если запрос выполнен некорректно
            
        ?>

              </div>
    </div>
              </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    

  </div>
  <!-- /.container -->

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