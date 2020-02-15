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
}
