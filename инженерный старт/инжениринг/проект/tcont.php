<div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Регистрация</h3>
        <form style="padding:10px;" name="form_add" method="post" >
          <div class="control-group form-group">
            <div class="controls">
              <label>Имя:</label>
              <input class="form-control" style="margin-bottom:10px;" type="text" name="name" id="name" placeholder="Имя">
              
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Тип конкурса:</label>
              <input class="form-control" style="margin-bottom:10px;" type="text" name="type" id="name" placeholder="тип">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>E-mail:</label>
              <input class="form-control" style="margin-bottom:10px;" type="text" name="email" id="email" placeholder="Email" >
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Текст:</label>
              <textarea class="form-control" name="message" placeholder="Краткий комментарий" ></textarea>
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          
          <input type="submit" name="button" class="btn btn-primary" value="Добавить запись">
        </form>
      </div>
      

    </div>
    <?php
        $name = $_POST['name'];
        $type = $_POST['type'];
        $email = $_POST['email'];
        
        
    $namee = (string)$_POST['name'];
    $emaill = (string)$_POST['email'];
    $dataa = (int)$_POST['data'];
    $mysqli = mysqli_connect('localhost', 'mysql', 'mysql', 'injener');
    if( mysqli_connect_errno() ) // проверяем корректность подключения
                 echo 'Ошибка подключения к БД: '.mysqli_connect_error(); 
    // если были переданы данные для добавления в БД
    if( isset($_POST['button']) && $_POST['button']== 'Добавить запись')
      {
         
             
    // формируем и выполняем SQL-запрос для добавления записи
         $pre_id=mysqli_query($mysqli, 'SELECT * FROM regist');
         $id=mysqli_num_rows($pre_id)+1;
         $sql_res=mysqli_query($mysqli,'INSERT INTO regist (name, type, email,message) VALUES ("'.
         (string)($_POST['name']).'", "'.
         (string)($_POST['type']).'", "'.
         (string)($_POST['email']).'", "'.
         (string)($_POST['message']).
         '")');
    // если при выполнении запроса произошла ошибка – выводим сообщение
         if( mysqli_errno($mysqli) )
            echo '<div class="error">Запись не добавлена</div>';
         else // если все прошло нормально – выводим сообщение
             echo '<div class="ok">Запись добавлена</div>';
      }
      
    ?> 