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
          <li class="nav-item active">
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

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Наши конкурсы
      
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Главная</a>
      </li>
      <li class="breadcrumb-item active">Конкурсы</li>
    </ol>

    <!-- Intro Content -->
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid rounded mb-4" src="img/kk.jpg" >
      </div>
      <div class="col-lg-6">
        <h2>Информация о конкурсе.</h2>
        <p>ПОБЕДИТЕЛИ конкурсов - Лауреаты Гран-при получают: бесплатные поездки на offline-конкурсы Организатора в РФ, СНГ и ЕС (солисты), внушительные денежные гранты на поездки на конкурсы (коллективы).</p>
        <p>ЭКСПЕРТНЫЙ СОВЕТ: жюри конкурсов состоит из российских педагогов и артистов, а также ведущих преподавателей и деятелей искусств из Франции, Италии, Чехии, Беларуси, Австрии и других стран.</p>
        <p>СТОИМОСТЬ УЧАСТИЯ В ПРОЕКТЕ варьируется от 1000 до 1500 рублей за подачу 1 заявки и зависит от номинации. Платеж осуществляется посредством банковской карты на официальном сайте my-artcode.com после заполнения формы заявки.</p>
      </div>
    </div>
    <!-- /.row -->

    <!-- Team Members -->
    <h2>Подробности</h2>

    <div class="row">
    <?php
    
    // осуществляем подключение к базе данных
    $mysqli = mysqli_connect('localhost', 'mysql', 'mysql', 'injener');
    if( mysqli_connect_errno() ) // проверяем корректность подключения
    return 'Ошибка подключения к БД: '.mysqli_connect_error();
    // формируем и выполняем SQL-запрос для определения числа записей
    $sql_res=mysqli_query($mysqli, 'SELECT COUNT(*) FROM konkyrs');
    // проверяем корректность выполнения запроса и определяем его результат
    if( !mysqli_errno($mysqli) && $row=mysqli_fetch_row($sql_res) )
    {
         if(!$TOTAL=$row[0] ) // если в таблице нет записей
             return 'В таблице нет данных'; // возвращаем сообщение
         $PAGES = ceil($TOTAL/10); // вычисляем общее количество страниц
         
         
         
        
         $sql_res = mysqli_query($mysqli,'SELECT id, img,glavn,text FROM konkyrs');
          // строка с будущим контентом страницы
        
         while( $row=mysqli_fetch_assoc($sql_res) ) // пока есть записи
         {
            // выводим каждую запись как строку таблицы
                $ret.="
    <div class='col-lg-4 mb-4'>
      <div class='card h-100 text-center'>
       
          <img class='card-img-top' src='".$row['img']."' >
        
      
      <div class='card-body'>
        <h4 class='card-title'>".$row['glavn']."</h4>
        <p class='card-text'>".$row['text']."</p>
        </div>
      </div>
    </div>";
                }
         // заканчиваем формирование таблицы с контентом
         if( $PAGES>1 ) // если страниц больше одной – добавляем пагинацию
            {
            $ret.='<div id="pages">Выберите страницу:'; // блок пагинации
            for($i=0; $i<$PAGES; $i++) // цикл для всех страниц пагинации
                if( $i != $page ) // если не текущая страница
                $ret.='<a href="?pg='.$i.'">'.($i+1).'</a>';
                else // если текущая страница
                     $ret.='<span>'.($i+1).'</span>';
            $ret.='</div>';
             }
         echo $ret; // возвращаем сформированный контент
          }
           // если запрос выполнен некорректно
     
?>
    </div>
        </div>
    <!-- /.row -->

    <!-- Our Customers -->
    
    <!-- /.row -->

  
  <h1 style="text-align: center;">Стоимость участия</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">№</th>
        <th scope="col">Название</th>
        <th scope="col">Стоимость</th>
        
      </tr>
      </thead>
    <tbody>
    <?php
    
    // осуществляем подключение к базе данных
    $mysqli = mysqli_connect('localhost', 'mysql', 'mysql', 'injener');
    if( mysqli_connect_errno() ) // проверяем корректность подключения
    return 'Ошибка подключения к БД: '.mysqli_connect_error();
    // формируем и выполняем SQL-запрос для определения числа записей
    $sql_res=mysqli_query($mysqli, 'SELECT COUNT(*) FROM price');
    // проверяем корректность выполнения запроса и определяем его результат
    if( !mysqli_errno($mysqli) && $row=mysqli_fetch_row($sql_res) )
    {
         if(!$TOTAL=$row[0] ) // если в таблице нет записей
             return 'В таблице нет данных'; // возвращаем сообщение
         $PAGES = ceil($TOTAL/10); // вычисляем общее количество страниц
         
         
         
        
         $sql_res = mysqli_query($mysqli,'SELECT id, nomer,name,price FROM price');
          // строка с будущим контентом страницы
        
         while( $row=mysqli_fetch_assoc($sql_res) ) // пока есть записи
         {
            // выводим каждую запись как строку таблицы
        $met.="
        <tr>
         <th scope='row'>".$row['nomer']."</th>
        <td>".$row['name']."</td>
        <td>".$row['price']."</td></tr>
       ";
                }
         // заканчиваем формирование таблицы с контентом
        
         echo $met; // возвращаем сформированный контент
          }
           // если запрос выполнен некорректно
     
?>
   
    
      
    </tbody>
  </table>
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