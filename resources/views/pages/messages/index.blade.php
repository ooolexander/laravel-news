@extends('index')

@section('content')
<div class="container">
    <hr>
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
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                    <button class="btn btn-danger">
                        <i class="glyphicon-trash glyphicon"></i>
                    </button>
                </div>
            </div>
        </div>

    </div>

</div>
@stop
