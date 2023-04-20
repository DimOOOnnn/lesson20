<!-- ДЗ:
Допустим, вы создаете веб-сайт для организации мероприятий, и вам нужно создать страницу для регистрации участников. Вы можете использовать функцию $_POST в PHP для обработки формы регистрации, которая будет содержать поля:

Входные данные:
1. Имя
2. Фамилия
3. Электронная почта
4. Чекбокс согласия с обработкой формы

Что требуется:
1. Создать форму (без добавления стилей)
2. В action="register.php" добавить файл для обработки $_POST
3. Валидировать поля, как на клиенте (средствами HTML), так и при помощи PHP -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dz-20</title>
</head>
<body>
<form class="form" action="register.php" method="post">
  <p>
     <label for="firstname">Имя</label>
     <input type="text" name="firstname" placeholder="firstname" id="firstname">
  </p>
  
  <p>
     <label for="secondname">Фамилия</label>
     <input type="text" name="secondname" placeholder="secondname" id="secondname">
  </p>
 
  <p>
     <label for="email">Почта</label>
     <input type="email" name="email" placeholder="email" id="email">
  </p>

  <p>
    Согласие на обработку данных
    <label for="checkbox">
      <input type="checkbox" name="checkbox" id="checbox">Да
    </label>
  </p>

  <button type="submit" name="submit">Отправить</button>

</form>  
</body>
</html>