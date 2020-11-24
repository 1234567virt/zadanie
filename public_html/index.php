<!DOCTYPE html>
<html lang="ru">
<?php
require_once ('../engine/init.php');
$title="Задания 3";
?>

<head>
    <style>
    #templatemo_body {
        background: url(img/templatemo_body.jpg) repeat;
    }

    #templatemo_menubar {
        background: url(img/templatemo_menubar.png) no-repeat;
    }
    </style>
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
    </script>
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/header.css">
    <!--Подключает файл с javascript  -->
    <script src="js/message.js"></script>
</head>

<body id='templatemo_body'>
    <?php require_once('../templates/header.php');//Подключения шапки  ?>
    <center>
        <h1><?=$title?></h1>
    </center>


    <!--Контейнер  для ввода данных-->
    <div style="margin-top:2%;margin-left:19%">
        <label>Текст:<textarea placeholder='Текст' rows="7" id='Message' cols="40" required></textarea></label>
        <!--Элемент отвечает за отработку функции отправки данных и отображения в блоке с id messageBlock-->
        <input type='button' id='past' onclick="openMessage('messageBlock','Message');" value="Добавить">
        <!-- функция openMessage() отвечает за все.Находиться в js/message,js  -->
    </div>
    <!--Контейнер скрытый для вывода данных-->
    <div id='messageBlock' style='display:none'></div>
</body>

</html>