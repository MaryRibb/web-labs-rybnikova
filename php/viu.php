<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Подключаем Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
    
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Рыбникова Мария Александровна 191-321</title>
</head>
<body>
    <header id="head">
    
        
          
    </header>
        
		<main>
        <div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Тест</h3>
        <form style="padding:10px;" name="form_add" method="post" >
          <div class="control-group form-group">
            <div class="controls">
              <label>Введите число ног у собаки:</label>
              <input class="form-control" style="margin-bottom:10px;" type="text" name="one" id="name" placeholder="число">
              
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Сколько будет 2*2=:</label>
              <input class="form-control" style="margin-bottom:10px;" type="text" name="two" id="second" placeholder="число">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Как зовут Пушкина:</label>
              <input class="form-control" style="margin-bottom:10px;" type="text" name="three" id="third" placeholder="имя" >
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Кто проживает на дне океана?:</label>
              <input class="form-control" style="margin-bottom:10px;" type="text" name="three" id="dno" placeholder="имя" >
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
                <div class="radio">
                <span>Сколько рук у человека:</span>
                <label>
                    <input type="radio" name="fourth" value="одна">одна
                    <div class="radio-control male"></div>
                </label>
                <label>
                    <input type="radio" name="try" value="две">две
                    <div class="radio-control female"></div>
                </label>
                </div>
            </div>
          </div>

          <div id="success"></div>
          <div class="control-group form-group">
            <div class="controls">
            <p>Какой фрукты красный:</p>
                    <p><input type="checkbox" name="onc" value="Яблоко" /> Яблоко</p>

        <p><input type="checkbox" name="twc" value="Банан" />Банан</p>

        <p><input type="checkbox" name="thrc" value="Лимон" /> Лимон</p>
            </div>
          </div>
          <!-- For success/fail messages -->
          
          <input type="submit" href="index.php" name="button" class="btn btn-primary" value="Добавить ответ">
         
        </form>
      </div>
     



		</main>

	

		<footer>
			
			
		</footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Подключаем плагин Popper (необходим для работы компонента Dropdown и др.) -->
    <script src="js/popper.min.js"></script>
    <!-- Подключаем Bootstrap JS -->    
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>



  <?php
         $one = ($_POST['one']);
         $two = ($_POST['two']);
         $three = ($_POST['three']);
         $dno = ($_POST['dno']);
         $fourth = (string)$_POST['fourth'];
         $try = (string)$_POST['try'];
         $onc = (string)($_POST['onc']);
         $twc = (string)$_POST['twc'];
         $thrc = (string)$_POST['thrc'];
        if($one =='' || $two =='' || $three ==''){
            echo'Введите данные';
            exit();
    }
    
    $mysqli = mysqli_connect('std-mysql', 'std_943', 'mr20022001', 'std_943');
    if( mysqli_connect_errno() ) // проверяем корректность подключения
                 echo 'Ошибка подключения к БД: '.mysqli_connect_error(); 
    // если были переданы данные для добавления в БД
    if( isset($_POST['button']) && $_POST['button']== 'Добавить ответ')
      {
         
             
    // формируем и выполняем SQL-запрос для добавления записи
         $pre_id=mysqli_query($mysqli, 'SELECT * FROM otvet');
         $id=mysqli_num_rows($pre_id)+1;
         $sql_res=mysqli_query($mysqli,'INSERT INTO otvet (one,two,three,dno,fourth,try,onc,twc,thrc) VALUES ("'.
         (string)($_POST['one']).'", "'.
         (string)($_POST['two']).'", "'.
         (string)($_POST['three']).'", "'.
         (string)($_POST['dno']).'", "'.
         (string)($_POST['fourth']).'", "'.
         (string)($_POST['try']).'", "'.
         (string)($_POST['onc']).'", "'.
         (string)($_POST['twc']).'", "'.
         (string)($_POST['thrc']).
         '")');
    // если при выполнении запроса произошла ошибка – выводим сообщение
         if( mysqli_errno($mysqli) )
            echo '<div class="error">Запись не добавлена</div>';
         else // если все прошло нормально – выводим сообщение
             echo '<div class="ok">Запись добавлена</div>';
      } ?>