<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
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
        
        <input type="submit" name="button"  value="Добавить id">
    <?php
        $pass = $_POST['pass'];
        if($pass ==''){
            echo'Введите данные';
            exit();
     }
    
    $mysqli = mysqli_connect('localhost', 'mysql', 'mysql', 'php');
    if( mysqli_connect_errno() ) // проверяем корректность подключения
                 echo 'Ошибка подключения к БД: '.mysqli_connect_error(); 
    // если были переданы данные для добавления в БД
    if( isset($_POST['button']) && $_POST['button']== 'Добавить id')
      {
         
             
    // формируем и выполняем SQL-запрос для добавления записи
         $pre_id=mysqli_query($mysqli, 'SELECT * FROM sessia');
         $id=mysqli_num_rows($pre_id)+1;
         $sql_res=mysqli_query($mysqli,'INSERT INTO sessia (pass) VALUES (  "'.
         ($_POST['pass']).
         '")');
    // если при выполнении запроса произошла ошибка – выводим сообщение
         if( mysqli_errno($mysqli) )
            echo '<div class="error">Запись не добавлена</div>';
         else // если все прошло нормально – выводим сообщение
             echo '<div class="ok">Запись добавлена</div>';
      }
      
    ?> 
    </form>
        
        <div class="add" style="margin: 0 auto;">
        <h1>Все сессии:</h1>
    
</div>



		</main>

	

		<footer>
			
			
		</footer>
    
</body>
</html>