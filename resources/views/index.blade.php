<!DOCTYPE html>
<!--suppress HtmlUnknownTarget, HtmlUnknownTarget -->
<html lang="ru-Ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main</title>

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
            <input type="submit" class="btn btn-primary" value="Добавить">
        </div>
    </form>

    <div class="text-right"><b>Всего сообщений</b> <i class="badge">0</i></div>
    <br/>
    <div class="message">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span>Карлсон</span>
                    <span class="pull-right label label-info">
                    17:15 /03.07.2015
                </span>
                </h3>
            </div>

            <div class="panel-body">
                Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является
                стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник
                создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem
                Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.
                Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х
                годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых
                используется Lorem Ipsum.
                <hr>
                <div class="pull-right">
                    <a class="btn btn-info" href="#">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>
                    <button class="btn btn-danger">
                        <i class="glyphicon-trash glyphicon"></i>
                    </button>
                </div>
            </div>
        </div>

    </div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
</body>
</html>