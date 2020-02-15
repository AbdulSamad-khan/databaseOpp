<?php
include 'includes/autoLoad.inc.php';
if(isset($_POST['submit'])){
// print_r($_POST);
// exit();
  $testObj = new Test();
  $testObj->setUsers($_POST['name'],$_POST['age'],$_POST['gender']);
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HomePage</title>
  </head>
  <body>
   <form action="" method="POST">
     <input type="text" name="name" placeholder="enter name"> <br>
     <input type="text" name="gender" placeholder="enter gender"> <br>
     <input type="text" name="age" placeholder="enter age"> <br>
     <input type="submit" name="submit" value="submit">
   </form>
  </body>
</html>
