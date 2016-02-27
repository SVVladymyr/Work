<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Junior JavaScript Developer</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="css/sticky-footer.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>Техническое задание для вакансии Junior developer </h1>
      </div>
      <p class="lead">Уровень 1 (начальные знания Laravel)</p>
        <ol>
            <li>* реализовать хранение списка сотрудников в базе данных (файл: lavarel.sql, таблицы сделаны с помощью laravel migrations)</li>
            <li>* создать страницу на которой реализовать вывод сотрудников в виде иерархического дерева (с указанием занимаемой должности)(<a href = "/tree">Иерархическое дерево</a>)</li>
            <li>* заполнить базу данных случайно сгенерированными данными (минимум 1000 сотрудников, минимум 5 уровней иерархии)(для наполнения базы данных использовался laravel seeder)</li>
            <li>+ создавать базу с помощью laravel migrations</li>
            <li>+ для наполнения базы данных использовать laravel seeder</li>
            <li>+ использовать twitter bootstrap для базового визуального оформления страницы (используется)</li>
            <li>+ создать страницу на которой реализовать вывод сотрудников в виде списка (grid) с возможностью сортировки по всем полям(<a href = "/grid">Список сотрудников</a>)</li>
            <li>+ на странице списка сотрудников реализовать возможность поиска по любому полю(реализовано)</li>
            <li>+ на странице списка сотрудников сортировка (и поиск если реализован) выполнять без перезагрузки всей страницы (ajax)(реализовано)</li>
        </ol>
           <p> PHP пакеты добавлялись с помощью composer.<p>
    </div>
        <div id="footer">
      <div class="container">
        <p class="text-muted">Vladimir Shevchik
            <script>
                var date = new Date();
                 $(document).ready(function(){
                    $("p.text-muted").text('Vladimir Shevchik ' + date.getFullYear());
                  });
            </script>
         </p>
      </div>
    </div>
  </body>
</html>