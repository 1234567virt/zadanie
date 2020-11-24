<!DOCTYPE html>
<html lang="ru">
<?php
require_once ('../engine/init.php');
$title="Задания 2";
  $dir='/home/serj/Загрузки';
  $results = getImages($dir);//Функция рекурсивно проходиться по каталогам и ищет файлы больше 5 мб.Находиться в engine/funcs.php
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
    <script type="text/javascript" src="js/jquery.min.js"></script>

    </script>
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/header.css">
</head>

<body id='templatemo_body'>
    <?php  require_once('../templates/header.php');?>
    <center>
        <h1><?=$title?></h1>
    </center>
    <table border='1' style="margin:auto;">
        <tr>
            <td>Название</td>
            <td>Размер</td>
        </tr>
        <?php foreach($results  as $name=>$size){//Перебор записей?>
        <tr>
            <td><?=$name; ?></td>
            <td><?=$size;?></td>

        </tr>
        <?php
         }
        ?>
    </table>
</body>

</html>