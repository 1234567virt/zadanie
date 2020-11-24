<?php 
require_once('../engine/connect.php');
function getImages($dir, &$results = array()){//Рекурсивный поиск фотографий по каталогам с условием поиска размер фото 5 МБ
    $files = scandir($dir);//Чтения каталога
    foreach($files as $key => $value){//Перебор каталога
        $path = realpath($dir.'/'.$value);
        if(!is_dir($path)) {
            if(($size=filesize($path)/1048576)>4 && exif_imagetype($path)!=false)   //Условия при котором мы находим нужные данные       
                $results[$value] =$size;//Заполнение ассоциативного массива         
        } else if($value != "." && $value != "..") {//
            getImages($path, $results);
        }
    }
    return $results;
}
?>