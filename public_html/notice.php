<!DOCTYPE html>
<html lang="ru">
<?php require_once('../engine/init.php');?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Заметки</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!--Загрузка jquery -->
    <script src="js/past.js"></script>
    <!--Скрипт для открытия модального окна при нажатии кнопки Добавить-->
    <style>
    #limcoment {
        border: 0px;
    }

    #limcoment:hover {
        border: 0px;
    }
    </style>
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/loader.css">
    <link rel="stylesheet" href="./css/header.css">
    <script type="text/javascript">
    //Удаление, вывод и добавление будет происходить по ajax
    /////////////////////////////////////

    $("document").ready(function() {
        var lim = 0;
        $('#info').load("/templates/comment.php", {
            limit: lim
        }); //Загрузка заметок привязан к id info 
        $('#limcoment').click(function() {
            lim = lim + 5;
            $('#info').load("/templates/comment.php", {
                limit: lim
            }); //Загрузка коментов по 5 при щелчке
        })
        $("#send").click(function() {
            var dannie = $("form").serialize();
            $('#send').prop('disabled', true);
            $.ajax({
                url: '/controller/postNotice.php', //Обработчик postNotice.php
                type: 'POST', //Метод POST
                data: dannie,
                beforeSend: function() {
                    $("#loader-identity").fadeIn(400); //Создает эффект
                },
                timeout: (900),
                success: function(data) {
                    $('#info').load("/templates/comment.php", {
                        limit: lim
                    }); //Загрузка заметок привязан к id info

                },
                complete: function() {
                    document.forms[0].reset();
                    $('#send').prop('disabled', false);
                    $("#loader-identity").fadeOut(500);
                }
            });
        });
    }); //объект ajax 
    </script>
    <style>
    #templatemo_body {
        background: url(img/templatemo_body.jpg) repeat;
    }

    #templatemo_menubar {
        background: url(img/templatemo_menubar.png) no-repeat;
    }
    </style>
    <meta charset="UTF-8">
</head>

<body id='templatemo_body'>
 <?php require_once('../templates/header.php');//Подключения шапки  ?>
    <center>
        <h1>Задание 1</h1>
    </center>
    <div id='form'>
        <!--Контейнер скрытой формы для добавления заметок-->
        <?php require_once "../templates/form.php";//Подключения файла формы заметок  ?>
    </div>
    <input type='button' id='past' onclick="openbox('form');" value="Добавить">
    <!--Открытия модального окна добавить заметку-->
    <div id="loader-identity"></div><!-- блок который отвечает за красоту -->
    <h2 style="margin:1% 35% 1% 40%">Заметки</h2>
    <div id="info"></div><!-- Подключения по ajax заметок -->
    <div id='limcoment'><u><b>Еще заметки</b></u><!-- Пагинация--->
    </div>
    </div>
    </div>
</body>

</html>