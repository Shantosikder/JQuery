<?php


 $db = new mysqli("localhost", "root", "", "pwad50_php_crud");
 
 extract($_POST);
 $sql = "INSERT INTO student VALUES(NULL,'$name','$email','$phone','$gender','$round_id')";
$db->query($sql);

       if($db->affected_rows>0){
        echo "Successfully saved.";
   }
   ?>
