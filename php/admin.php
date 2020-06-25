<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Рыбникова Мария Александровна 191-321</title>
</head>
<body>
    <header id="head">
    
        
          
    </header>
        
		<main>
        <div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Регистрация</h3>
        <form style="padding:10px;" name="form_add" method="post" >
          <div class="control-group form-group">
            <div class="controls">
              <label>Введите число ,которое делится на 2:</label>
              <input class="form-control" style="margin-bottom:10px;" type="text" name="name" id="name" placeholder="число">
              
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Сколько будет 2*2=:</label>
              <input class="form-control" style="margin-bottom:10px;" type="text" name="type" id="name" placeholder="число">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Как зовут Пушкина:</label>
              <input class="form-control" style="margin-bottom:10px;" type="text" name="email" id="email" placeholder="имя" >
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
                <div class="radio">
                <span>Сколько рук у человека:</span>
                <label>
                    <input type="radio" name="sex" value="мужской">одна
                    <div class="radio-control male"></div>
                </label>
                <label>
                    <input type="radio" name="sex" value="женский">две
                    <div class="radio-control female"></div>
                </label>
                </div>
            </div>
          </div>

          <div id="success"></div>
          <div class="control-group form-group">
            <div class="controls">
            <p>Какой фрукты красный:</p>
                    <p><input type="checkbox" name="browser" value="IE" /> Яблоко</p>

        <p><input type="checkbox" name="browser" value="Opera" />Банан</p>

        <p><input type="checkbox" name="browser" value="FF" /> Лимон</p>
            </div>
          </div>
          <!-- For success/fail messages -->
          
          <input type="submit" name="button" class="btn btn-primary" value="Добавить запись">
        </form>
      </div>
     



		</main>

	

		<footer>
			
			
		</footer>
    
</body>
</html>