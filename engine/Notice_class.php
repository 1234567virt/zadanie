<?php
 require_once("../engine/connect.php"); 

class Notice extends Connect {
   function NoticePost($Aftor,$Message){//Функция для записи в БД
      $obj=self::connecting();//Наследования от предка метода connecting()->Отвечает за работу с БД 
      $this->Aftor=self::clear($Aftor);//Обработка текста перед записью в БД
      $this->Message=self::clear($Message);//Обработка текста перед записью в БД
      $this->date=date('Y-m-d');//Получения даты
      
      $sql="INSERT INTO  `otziv` (`Aftor`, `text`, `date`) VALUES
      ('$this->Aftor','$this->Message','$this->date')";//Запрос к БД на запись в таблицу
      $obj->query($sql);//Выполнения sql
    }
 
      function NoticeCatalog($value){//Метод извлечени заметок из БД
      $obj=self::connecting();//Наследования от предка метода connecting()->Отвечает за работу с БД 
      $this->value=self::clear($value);//Обработка текста перед работай  в sql
      $sql="SELECT * FROM `otziv`  order by  `id` desc limit $this->value , 5";//Запрос на извлечения данных.Составлен так чтобы последнии заметки были первыми и выводились по 5 для пагинации
       if($obj->query("SELECT COUNT(*) FROM `otziv` limit $this->value , 5 ")->fetchColumn()===0)//Проверка на существования записей
       {
           return false;
       }
      else
      {
         $result=$obj->query($sql)->fetchAll();//Выполнения запроса
         return $result;
      }
   }
    public function delete($id){//удаления записей
     $obj=self::connecting();//Наследования от предка метода connecting()->Отвечает за работу с БД
     $this->id=self::clear($id);//обработка свойства $id перед отправкой в запрос
    $sql="DELETE FROM `otziv` where `id`='$this->id'";//Запрос на удаления
     $obj->query($sql);//Выполнения

  }
}

?>