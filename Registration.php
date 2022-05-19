<?php
require("../db/connection.php")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>User Registration form</title>

<style>
.input-div{
width: 30%;
height: 100px;
align-items: center;
flex-direction: none; 
 color:white;
 /* justify-content: center; */
 justify-content: space-between;


}

  .btn{
        border:2px solid white;
        color:black;
        background:white;
    }
    </style>


</head>
<body style=" background-color:black;">
<div class="Registration-form ">
        <h2 style="text-align:center; color:white">User Registration</h2>
        <form method="POST">
        
           
            
</div>
<div>


<div>
    <div class="input-div">
        
        <label for="Name">Name :</label>
        <input type="text" placeholder="Name" />
    </div>
    <div class="input-div">
        <label for="Email">Email :</label>
        <input type="text" placeholder="Email" />
    </div>

    <div class="input-div">
        <label for=" Password"> Password :</label>
        <input type="text" placeholder="Password " />
    </div>

    <div class="input-div">
        <label for="Confirm Password">Confirm Password :</label>
        <input type="text" placeholder="Confirm Password " />
    </div>

    <button class="btn btn-light"><a href="home.php">Back</a></button>
    <button class="btn btn -light"><a href="bill.php ">Submit</a></button>
 
<?php
if(isset($_POST['Registration'])){
 window.alert($_POST["User Name"]);
 $_POST["User registration "] = "User";
    //each "click";
    // $_query="SELECT * FROM `admin_lohin` WHERE 'Admin Name'='$_POST[shubham]' And 'Password'='$_POST[12345678]'";
    $query="SELECT * FROM `registration` WHERE `username`='$user_id' And `password`='$password'";mysqli_query($con,$query);
// if(mysqli_num_rows(1))

} 


?>

</body>
</html>












