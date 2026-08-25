<?php
    require_once "header.php";
    require_once "connection.php";

    if(!empty($_POST)){
      
      $email = $_POST['email'];
      $password =  md5($_POST['password']);
      

      


      $sql = "SELECT * FROM users WHERE email='$email' AND  password='$password'";
              $result = mysqli_query($conn,$sql);
              if(mysqli_num_rows($result)>0){
                $_SESSION['success']="Login successful";
                header("Location:index.php");
              }
              else{
                $_SESSION['error']="Invalid credentials";
                header("Location:login.php");
              }
    }
?>

<h1> Log-in</h1>

<form action="" method="POST">
    
    Email:  <input type="email" id="email" name="email" required><br><br>
  
  
    Password:  <input type="password" id="password" name="password" required><br><br>
  
  <button type="submit" name="login">Login</button>
</form>
<?php
    require_once "footer.php";
?>