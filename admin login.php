<?php
require("../db/connection.php")
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="./style/login.css" rel="stylesheet" crossorigin="anonymous">
  <title>Admin</title>
  <style>
      .form-label{
        color:white;
      }
     
  </style>
</head>
<body style="background-color:black">
  

<form action="" method="POST">
<div style="background-color:red" class=""></div>
  <div class="d-flex justify-content-center align-items-center flex-column" id="login-form-div">
    <div class="d-flex justify-content-center align-items-center flex-column" >
      <h1 style="color:white; padding: 10px;">Admin Panel</h1>
    </div>
    
    <div class="mb-3 col-sm-6">
      <label for="exampleFormControlInput1" class="form-label">User id</label>
      <input type="text" name="user_id" class="form-control" id="exampleFormControlInput1" placeholder="enter username">
    </div>
    <div class="mb-3 col-sm-6">
      <label for="exampleFormControlInput1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="enter password">
    </div>
    <div class="mb-3 col-sm-6">
       
      <input type="submit" name="submit" value="submit" class="btn btn-primary"> 
      <!-- <button onclick="myFunction()">Submit</button> -->
    </div>
  </div>
</form>


<?php
if(isset($_POST['submit'])){
  $user_id = $_POST['user_id'];
  $password = $_POST['password'];
  $query="SELECT * FROM `admin_table` WHERE `username`='$user_id' And `password`='$password'";
  $sql = "SELECT * FROM `admin_table` WHERE `username`='$user_id' AND `password`='$password'";
  $result = mysqli_query($con, $sql);
  if(mysqli_num_rows($result)==1){
    echo '<script type ="text/JavaScript">';  
    echo 'alert("login successfull !")';  
    echo '</script>';
  }else{
    echo '<script type ="text/JavaScript">';  
    echo 'alert("invalid cradentials !")';  
    echo '</script>';
  }
}
?>


</body>
</html>