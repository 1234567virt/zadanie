<?php 
//Вывод коментов в каталог
require_once '../engine/init.php';
$comment=new Notice();//Создание объекта  сам класс описан в файле engine\Notice_class?>

<table border='1'>
    <tr>
        <td>Дата</td>
        <td>Автор</td>
        <td>Заметка</td>
        <td>Удалить</td>
    </tr>
    <?php
$massiv=$comment->NoticeCatalog($_POST['limit']);//Функция извлечения записей описан в файле engine\Notice_class
foreach($massiv as $key=>$val){//Перебор записей
  ?>
    <tr>
        <td><?=$val['date']; ?></td>
        <td><?=$val['Aftor'];?></td>
        <td> <?=$val['text'];?></td>
        <td><a href='/controller/postNotice.php?id=<?=$val['id']?>'>
                <!--Что бы неиспользовать форму воспользовался таким решение - передача id записи через обычную сылку -->
                <input type='button' id='inputDel' value='Удалить'>
            </a>
        </td>
    </tr>
    <?php
  }
 ?>
</table>
<?php
 if(count($massiv)!=5){
   echo '<style>#limcoment{pointer-events: none;}<style>';
 }

 ?>