<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Подключаем Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
    
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Рыбникова Мария Александровна 191-321</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header id="head">
    
        
          
    </header>
        
		<main>
        <div>
        <h1>Добавление id для сессии</h1>
        <form  style="padding:10px;" name="form_add" method="post" action="">
        <input  style="margin-bottom:10px;" type="text" name="pass" id="pass" placeholder="id">
        
        <input type="submit" name="button"  value="Добавить">
    
    </form>
  
    
        
        <div class="add" style="margin: 0 auto;">
        <h1>Все сессии:</h1>
        <?php
    $mysqli = mysqli_connect('std-mysql', 'std_943', 'mr20022001', 'std_943');
    if( mysqli_connect_errno() ) // если при подключении к серверу произошла ошибка
    {
    // выводим сообщение и принудительно останавливаем РНР-программу
        echo 'Ошибка подключения к БД: '.mysqli_connect_error();
        exit();
    }
    // если были переданы данные для изменения записи в таблице
    if( isset($_POST['button']) && $_POST['button']== 'Изменить запись')
    {
    // формируем и выполняем SQL-запрос на изменение записи с указанным id
            $sql_res=mysqli_query($mysqli, 'UPDATE otvet SET one="'.
            htmlspecialchars($_POST['name']).'",two="'.
            htmlspecialchars($_POST['two']).'",three="'.
            htmlspecialchars($_POST['three']).'",dno="'.
            htmlspecialchars($_POST['dno']).'",fourth="'.
            htmlspecialchars($_POST['fourth']).'",try="'.
            htmlspecialchars($_POST['try']).'",onc="'.
            htmlspecialchars($_POST['onc']).'",twc="'.
            htmlspecialchars($_POST['twc']).'",thrc="'.
            htmlspecialchars($_POST['thrc']).'"
            WHERE id='.$_GET['id']);
         // и выводим сообщение об изменении данных
    }
    $currentROW=array(); // информации о текущей записи пока нет
    // если id текущей записи передано –
    if( isset($_GET['id']) && isset($_GET['p']) ) // (переход по ссылке или отправка формы)
    {
    // выполняем поиск записи по ее id
            $sql_res=mysqli_query($mysqli,
            'SELECT * FROM otvet WHERE id='.$_GET['id'].' LIMIT 0, 1');
        $currentROW=mysqli_fetch_assoc($sql_res); // информация сохраняется
    }
    if( isset($_GET['l']) ) 
    {
        $id = $_GET['id'];
// выполняем поиск записи по ее id
        $sql_res=
        "DELETE FROM otvet WHERE id=$id";
     // информация сохраняется
        mysqli_query($mysqli,$sql_res) or die(mysqli_error($mysqli));
        
}
    if( !$currentROW ) // если информации о текущей записи нет или она некорректна
    {
    // берем первую запись из таблицы и делаем ее текущей
        $sql_res=mysqli_query($mysqli, 'SELECT * FROM otvet LIMIT 0', 1);
        $currentROW=mysqli_fetch_assoc($sql_res);
    }
    // формируем и выполняем запрос для получения требуемых полей всех записей таблицы
    $sql_res=mysqli_query($mysqli, 'SELECT id,one,two,three,dno,fourth,try,onc,twc,thrc FROM otvet');
    if( !mysqli_errno($mysqli) ) // если запрос успешно выполнен
    {
        echo '<div   class="edit" id="edit_links">';
        echo" <table class='table'>
                <thead>
                  <tr>
                    <th scope='col'>id</th>
                    <th scope='col'>Ответ на первый</th>
                    <th scope='col'>Ответ на второй</th>
                    <th scope='col'>Ответ на третий</th>
                    <th scope='col'>Ответ на четвёртый</th>
                    <th scope='col'>Ответ на пятый</th>
                    <th scope='col'>Ответ на пятый</th>
                    <th scope='col'>Ответ на шестой</th>
                    <th scope='col'>Ответ на шестой</th>
                    <th scope='col'>Ответ на шестой</th>
                    <th scope='col'>Удалить</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                ";
        while( $row=mysqli_fetch_assoc($sql_res) ) // перебираем все записи выборки
        {
        // если текущая запись пока не найдена и ее id не передан
        // или передан и совпадает с проверяемой записью
            if( $currentROW['id']==$row['id']) 
        // значит в цикле сейчас текущая запись
                echo '<div>'.$row['one'].'</div>'; // и выводим ее в списке
            else // если проверяемая в цикле запись не текущая
        // формируем ссылку на нее
               
                echo '<tr><td><a  href="?p=edit&id='.$row['id'].'">'.$row['id'].'</a></td>
                <td><a >'.$row['one'].'</a></td>
                <td><a >'.$row['two'].'</a></td>
                <td><a >'.$row['three'].'</a></td>
                <td><a >'.$row['dno'].'</a></td>
                <td><a >'.$row['fourth'].'</a></td>
                <td><a >'.$row['try'].'</a></td>
                <td><a >'.$row['onc'].'</a></td>
                <td><a >'.$row['twc'].'</a></td>
                <td><a >'.$row['thrc'].'</a></td>
               <td> <a href="?l=edit&id='.$row['id'].'">Удалить</a></td></tr>
                </br>';
                
         }
         echo '</div> </tbody>
         </table>';
         
        if( $currentROW ) // если есть текущая запись, т.е. если в таблице есть записи
        {
        // формируем HTML-код формы
            echo '
            <form style="padding:10px;" name="form_add" method="post" action="sessia.php?id='.$currentROW['id'].'" >
            <div class="control-group form-group">
              <div class="controls">
                <label>Ответ на первый вопрос:</label>
                <input class="form-control" type="text" name="name" id="name" value="'.
                $currentROW['one'].'" >
                
              </div>
              <div class="controls">
                <label>Ответ на первый вопрос:</label>
                <input class="form-control" type="text" name="two" id="name" value="'.
                $currentROW['two'].'" >
                
              </div>
              <div class="controls">
                <label>Ответ на первый вопрос:</label>
                <input class="form-control" type="text" name="three" id="name" value="'.
                $currentROW['three'].'" >
                
              </div>
              <div class="controls">
                <label>Ответ на первый вопрос:</label>
                <input class="form-control" type="text" name="dno" id="name" value="'.
                $currentROW['dno'].'" >
                
              </div>
              <div class="controls">
                <label>Ответ на первый вопрос:</label>
                <input class="form-control" type="text" name="fourth" id="name" value="'.
                $currentROW['fourth'].'" >
                
              </div>
              <div class="controls">
                <label>Ответ на первый вопрос:</label>
                <input class="form-control" type="text" name="try" id="name" value="'.
                $currentROW['try'].'" >
                
              </div>
              <div class="controls">
                <label>Ответ на первый вопрос:</label>
                <input class="form-control" type="text" name="onc" id="name" value="'.
                $currentROW['onc'].'" >
                
              </div>
              <div class="controls">
                <label>Ответ на первый вопрос:</label>
                <input class="form-control" type="text" name="twc" id="name" value="'.
                $currentROW['twc'].'" >
                
              </div>
              <div class="controls">
                <label>Ответ на первый вопрос:</label>
                <input class="form-control" type="text" name="thrc" id="name" value="'.
                $currentROW['thrc'].'" >
                
              </div>
            </div>
            
            
            
            <input type="submit" name="button" class="btn btn-primary" value="Изменить запись">
          </form>
        </div>
        
  
      </div>';
        }
             
        }
    else // если запрос не может быть выполнен
         echo 'Ошибка базы данных'; // выводим сообщение об ошибке
    ?>
    
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