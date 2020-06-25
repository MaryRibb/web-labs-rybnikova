<?
// Создаётся пустой файл вида sess_819gk3tcdvilccra1t9kjdvsv9
// На машину пользователя прилетает сессионная кука с ID сессии. В данном случае 819gk3tcdvilccra1t9kjdvsv9
session_start();
 
// Инициализация строки с сообщениями об ошибках
$message = 'Начало';
 
// Если запрос отправлен методом POST
if ($_SERVER["REQUEST_METHOD"] == "POST"):
  $pass= ($_POST["pass"]);
  $one = (int)($_POST["one"]);
  $two = (int)$_POST["two"];
  $three = (string)($_POST["three"]);
  $dno = (string)($_POST["dno"]);
  $fourth = (string)$_POST["fourth"];
  $try = (string)$_POST["try"];
  $onc = (string)($_POST["onc"]);
  $twc = (string)$_POST["twc"];
  $thrc = (string)$_POST["thrc"];
 
  // Если поле `name` не заполнено
  if(empty($one)):
      $message = 'Поле `первый вопрос` обязательно к заполнению!';
  // Иначе, если поле `age` не заполнено
  elseif(empty($two)):
    $message = 'Поле `второй вопрос` обязательно к заполнению!';
  elseif(empty($three)):
        $message = 'Поле `третий вопрос` обязательно к заполнению!';
  elseif(empty($dno)):
        $message = 'Поле `третий вопрос` обязательно к заполнению!';
  elseif(empty($fourth)):
        $message = 'Поле `четвёртый вопрос` обязательно к заполнению!';
  elseif(empty($try)):
         $message = 'Поле `четвёртый вопрос` обязательно к заполнению!';
  // Если поля заполнены, записываем в сессию
  else:
      $_SESSION["one"] = $one;
      $_SESSION["two"] = $two;
      $_SESSION["three"] = $three;
      $_SESSION["dno"] = $dno;
      $_SESSION["fourth"] = $fourth;
      $_SESSION["try"] = $try;
      $_SESSION["onc"] = $onc;
      $_SESSION["twc"] = $twc;
      $_SESSION["thrc"] = $thrc;
  endif;
 
// Иначе берём данные из сессии
else:
    $one = $_SESSION["one"] ?? null;
    $two = $_SESSION["two"] ?? null;
    $three = $_SESSION["three"] ?? null;
    $dno = $_SESSION["dno"] ?? null;
    $fourth = $_SESSION["fourth"] ?? null;
    $try = $_SESSION["try"] ?? null;
    $onc = $_SESSION["onc"] ?? null;
    $twc = $_SESSION["twc"] ?? null;
    $thrc = $_SESSION["thrc"] ?? null;
endif;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    
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
              <label>Введите число ,которое делится на 2:</label>
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
                    <input type="radio" name="fourth" value="мужской">одна
                    <div class="radio-control male"></div>
                </label>
                <label>
                    <input type="radio" name="try" value="женский">две
                    <div class="radio-control female"></div>
                </label>
                </div>
            </div>
          </div>

          <div id="success"></div>
          <div class="control-group form-group">
            <div class="controls">
            <p>Какой фрукты красный:</p>
                    <p><input type="checkbox" name="onc" value="IE" /> Яблоко</p>

        <p><input type="checkbox" name="twc" value="Opera" />Банан</p>

        <p><input type="checkbox" name="thrc" value="FF" /> Лимон</p>
            </div>
          </div>
          <!-- For success/fail messages -->
          
          <input type="submit" href="index.php" class="btn btn-primary" value="Добавить ответ">
          <input type="submit" href="delet.php" name="button" class="btn btn-primary" value="Закрыть сессию">
        </form>
      </div>
     



		</main>

	

		<footer>
			
			
		</footer>
    
</body>
</html>