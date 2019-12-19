<?php
session_start();
include("database.php");//make connection here  

if(isset($_POST['username'], $_POST['password']))  
{   
    $usr=$_POST['username'];//here getting result from the post array after submitting the form.  
    $pass=hash('sha256', $_POST['password']);//same   
    $check = dbConnect()->prepare("SELECT * FROM users");

    $check->bindParam(':username', $usr);
    $check->bindParam(':password', $pass);
    $check->execute();


//javascript use for input checking
    if($usr=='')  
    {    
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

//Check, if user exists:

    $check = dbConnect()->prepare("SELECT * FROM users");

    $check->bindParam(':username', $usr);
    $check->bindParam(':password', $pass);

    $check->execute();

    $row = $check->fetch();
    if ($row['username'] == $usr) {
      echo "User already exists";
    }

    //Register:
      $query = dbConnect()->prepare("INSERT INTO `users`(`username`, `password`) VALUES ('$usr', '$pass')");
      $query->execute();
      $_SESSION['username'] = $usr;
      header("Location: Project/index.html"); 
}

?>