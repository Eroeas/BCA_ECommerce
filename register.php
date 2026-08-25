<?php
    require_once "header.php";
    require_once "connection.php";

    if(!empty($_POST)){
      $name = $_POST['fullname'];
      $email = $_POST['email'];
      $password =  md5($_POST['password']);
      $gender = $_POST['gender'];

     

      $sql = "INSERT INTO users(name,email,password,gender)
              VALUES('$name','$email','$password','$gender')";
              $result = mysqli_query($conn,$sql);
              if($result){
                $_SESSION['success']="Account Created";
                header("Location:register.php");
              }
              else{
                $_SESSION['error']="Account Not Created";
                header("Location:register.php");
              }
    }
?>

<h1> Register</h1>

<form action="register.php" method="POST">
  
    Name:  <input type="text" id="fullname" name="fullname" required><br><br>
  
  
    Email:  <input type="email" id="email" name="email" required><br><br>
  
  
    Password:  <input type="password" id="password" name="password" required><br><br>
  
  
  Gender: <select name = "gender" require>
          <option value = "">===Select Gender===</option>
          <option value = "male">Male</option>
          <option value = "female">Female</option>  
          <option value = "pther">Others</option>
</select><br><br>
  <button type="submit" name="register">Register</button>
</form>
<?php
    require_once "footer.php";
?>