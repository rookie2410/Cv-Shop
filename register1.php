<!--
<!DOCTYPE html>

<html >
<head>
  <meta charset="UTF-8">
  <title>Daily UI 001 Sign Up Form</title>
  
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>

  <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="signupSection">
  <div class="info">
    <h2>Sign Up</h2>
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p>The Future Is Here</p>
  </div>
  <form action="registration.php" method="POST" class="signupForm" name="signupform">
    <h2>Sign Up</h2>
    <ul class="noBullet">
      <li>
        <label for="username"></label>
        <input type="text" class="inputFields" id="username" name="username" placeholder="Username" value="" oninput="return userNameValidation(this.value)" required/>
      </li>
      <li>
        <label for="password"></label>
        <input type="password" class="inputFields" id="password" name="password" placeholder="Password" value="" oninput="return passwordValidation(this.value)" required/>
      </li>
      <li>
        <label for="email"></label>
        <input type="email" class="inputFields" id="email" name="email" placeholder="Email" value="" required/>
      </li>
      <li id="center-btn">
        <input type="submit" id="join-btn" name="join" alt="Join" value="Join">
        <input type="button" id="join-btn" name="join" alt="Join" value="Already registered" onclick="window.location='login.php';">
      </li>
    </ul>
  </form>
</div>
  
    <script src="js/index.js"></script>

</body>
</html>
-->
<?php  
  
include("database.php");//make connection here  
if(isset($_POST['username'], $_POST['password']))  
{  
    $usr=$_POST['username'];//here getting result from the post array after submitting the form.  
    $pass=hash('sha256', $_POST['password']);//same  
    
  
    if($usr=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the username')</script>";  
exit();//this use if first is not work then other will not show  
    }  
  
    if($pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
/*   
//insert the user into the database.  
    $insert_user="insert into users (user_name,user_pass) VALUE ('$user_name','$user_pass')";  
    if(mysqli_query($dbConnect,$insert_user))  
    {  
        echo"<script>window.open('/Project/index.html','_self')</script>"; 
        $_SESSION['username'] = $usr;
        header("Location: Project/index.html"); 
    }  
*/
    //Register:
      $query = dbConnect()->prepare("INSERT INTO `users`(`username`, `password`) VALUES ('$usr', '$pass')");
      $query->execute();

      $_SESSION['username'] = $usr;
      header("Location: Project/index.html"); 
  
}  
  
?>  