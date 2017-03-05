<!DOCTYPE html>
<!--suppress HtmlUnknownTarget, HtmlUnknownTarget -->
<html lang="ru-Ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Редактирование</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>
<body>
<div class="container">
    <h1 class="text-center">Страница новостей</h1>
    <form action="" method="post" id="id-form_message">
        <div class="form-group">
            <label for="name">Имя: </label>
            <input type="text" class="form-control" placeholder="Имя" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="name">email </label>
            <input class="form-control" placeholder="Ваш емейл" name="email" type="text" id="email">
        </div>

        <div class="form-group">
            <label for="name">Сообщения </label>
            <textarea class="form-control" placeholder="Текст сообщения" name="message" cols="50" rows="3"
                      id="message"></textarea>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-warning" value="Исправить">
        </div>
    </form>



    </div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
</body>
</html>