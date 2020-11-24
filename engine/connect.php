<?php 
class Connect{
    const HOST = 'localhost';
    const  NAME = 'php1level5';
    const  USER ='serj';
     const PASS='22121987';
    const  DRIVER='mysql';
    public function connecting () {//Метод для соединения  БД
        return new PDO(self::DRIVER . ':host='. self::HOST . ';dbname=' . self::NAME, self::USER, self::PASS);
    }
    function clear($val){//Функция для обработки текста перед работай с текстом
        $value=trim($val);//удаляем пробел в начале текста
        $value=htmlspecialchars(strip_tags($value));//Преобразует специальные символы в HTML-сущности
        
        return $value;
    }

}
?>