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
include 'viu.php'
?>



