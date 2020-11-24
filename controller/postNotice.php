<?php
require_once('../engine/init.php');
$Notice=new Notice();//Создание объекта  сам класс описан в файле engine\Notice_class
if(!empty($_POST['Aftor']) && !empty($_POST['Message']))
{
  
     $Notice->NoticePost($_POST['Aftor'],$_POST['Message']);//обработка и запись в БД в файле engine\Notice_class
}

elseif(isset($_GET['id']) && !empty($_GET['id'])){
 
     $Notice->delete($_GET['id']);//Удаление заметки в файле engine\Notice_class
       header("Location:../public_html/notice.php");//переадресация на Заметки
}
else{
    header("Location:../public_html/index.php");//В случае попытки зайти на контроллер на прямую переадресация на главную
}
?>