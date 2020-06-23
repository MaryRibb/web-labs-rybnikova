<?php
    $mysqli = mysqli_connect('localhost', 'mysql', 'mysql', 'injener');
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
            $sql_res=mysqli_query($mysqli, 'UPDATE regist SET name="'.
            htmlspecialchars($_POST['name']).'"
            WHERE id='.$_GET['id']);
         // и выводим сообщение об изменении данных
    }
    $currentROW=array(); // информации о текущей записи пока нет
    // если id текущей записи передано –
    if( isset($_GET['id']) && isset($_GET['p']) ) // (переход по ссылке или отправка формы)
    {
    // выполняем поиск записи по ее id
            $sql_res=mysqli_query($mysqli,
            'SELECT * FROM regist WHERE id='.$_GET['id'].' LIMIT 0, 1');
        $currentROW=mysqli_fetch_assoc($sql_res); // информация сохраняется
    }
    if( isset($_GET['l']) ) 
    {
        $id = $_GET['id'];
// выполняем поиск записи по ее id
        $sql_res=
        "DELETE FROM regist WHERE id=$id";
     // информация сохраняется
        mysqli_query($mysqli,$sql_res) or die(mysqli_error($mysqli));
        
}
    if( !$currentROW ) // если информации о текущей записи нет или она некорректна
    {
    // берем первую запись из таблицы и делаем ее текущей
        $sql_res=mysqli_query($mysqli, 'SELECT * FROM regist LIMIT 0', 1);
        $currentROW=mysqli_fetch_assoc($sql_res);
    }
    // формируем и выполняем запрос для получения требуемых полей всех записей таблицы
    $sql_res=mysqli_query($mysqli, 'SELECT id, name FROM regist');
    if( !mysqli_errno($mysqli) ) // если запрос успешно выполнен
    {
        echo '<div   class="edit" id="edit_links">';
        echo" <table class='table'>
                <thead>
                  <tr>
                    <th scope='col'>Имя</th>
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
                echo '<div>'.$row['name'].'</div>'; // и выводим ее в списке
            else // если проверяемая в цикле запись не текущая
        // формируем ссылку на нее
               
                echo '<tr><td><a  href="?p=edit&id='.$row['id'].'">'.$row['name'].'</a></td>
               <td> <a href="?l=edit&id='.$row['id'].'">Удалить</a></td></tr>
                </br>';
                
         }
         echo '</div> </tbody>
         </table>';
         
        if( $currentROW ) // если есть текущая запись, т.е. если в таблице есть записи
        {
        // формируем HTML-код формы
            echo '
            <form style="padding:10px;" name="form_add" method="post" action="contact.php?id='.$currentROW['id'].'" >
            <div class="control-group form-group">
              <div class="controls">
                <label>Имя:</label>
                <input class="form-control" type="text" name="name" id="name" value="'.
                $currentROW['name'].'" >
                
              </div>
            </div>
            
            <div class="control-group form-group">
              <div class="controls">
                <label>E-mail:</label>
                <input class="form-control" type="text" name="email" id="email" value="'.
                $currentROW['email'].'" >
              </div>
            </div>
            
            <div id="success"></div>
            
            <input type="submit" name="button" class="btn btn-primary" value="Изменить запись">
          </form>
        </div>
        
  
      </div>';
        }
             
        }
    else // если запрос не может быть выполнен
         echo 'Ошибка базы данных'; // выводим сообщение об ошибке
    ?>