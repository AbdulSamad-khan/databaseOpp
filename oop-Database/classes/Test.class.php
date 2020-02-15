<?php

class Test extends Dbh{
 public function getUsers(){
   $sql = "SELECT * FROM student;";
   $stmt = $this->connection()->query($sql);
   while($row = $stmt->fetch()){
     echo $row['name'];
   }
 }
 public function setUsers($name,$age,$gender){
   $sql = "INSERT INTO student(name,age,gender) VALUES ('$name','$age','$gender');";
   $stmt = $this->connection()->query($sql);
 }

 public function prepareUsers($name,$age){
   //using prepare statements ..
   $sql = "SELECT * FROM student WHERE name = ? AND age = ?;";
   $stmt = $this->connection()->prepare($sql);
   $stmt->execute([$name,$age]);
   $name = $stmt->fetchAll();
   foreach ($name as $key => $value) {
    echo $value['gender'];
   }
 }

}
