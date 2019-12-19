<?php
   function dbConnect(){
     try {
       $conn = new PDO ("mysql:dbname=cvshop;host=localhost", "root", "");
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
     } catch (PDOException $e) {
       echo 'ERROR', $e->getMessage();
     }

   }
?>
