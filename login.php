<?php
        session_start();
        if(isset($_POST['username'], $_POST['password'])){
            require 'database.php';

            $pass = hash('sha256', $_POST['password']);
            $usr = $_POST['username'];

            $query = dbConnect()->prepare("SELECT username, password FROM users WHERE username=:username AND password=:password");
            $query->bindParam(':username', $usr);
            $query->bindParam(':password', $pass);
            $query->execute();

            $row = $query->fetch();

            if($usr=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the username')</script>"; 
        header("Location: index.php"); 
        exit();//this use if first is not work then other will not show  
    }  
  
    if($pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
        header("Location: index.php"); 
        exit();  
    }

            if($row['password'] == $pass){
              $_SESSION['username'] = $row['username'];
              header("Location: Project/index.html");
            }
            else {
              echo"<script>alert('Wrong User-Id or PAssword')</script>";
              //echo "Wrong Userid or password";
            }
        }
?>