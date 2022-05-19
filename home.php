<?php
// require("connection.php")
require("../db/connection.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>Home</title>
    <style>
        .header{
            display:flex;
            align-items:right;
            justify-content:right;
        }
        .welcome-page{
            background-image:url("../assets/images/food/tt.jpg");
            background-repeat:no-repeat;
            background-position:center;
            background-size:cover;
        }
        .home-heading{
            color:white;
            background-color:rgba(0,0,0,0.4);
            padding:20px
        }
        .btn{
            background-color:white;
            border:none;
            box-shadow:0px 4px 12px 2px rgba(0,0,0,0.4);
        }
        .navbar a{
            color:white;
            background-color:rgba(0,0,0,0.4);
            border-radius:10px;
            text-decoration:none;
        }
    </style>
</head>

<body class="welcome-page">
    <!-- <div class="logo">
        <img src="./images/food/logo.png">
    </div> -->

<div class="container">
    <div class="header">   
        <div class ="navbar">
            <a href="home.php">Home</a>
            <a href="menu.html">Menu</a>
            <a href="AboutUs.html">About</a>
            <a href="contact.php">Contact</a> 
            <a href="bill.html">bill</a> 
        </div>
</div>
</div>

<div class="content">
    <h1 class="home-heading"> Welcome To Taj Restaurant</h1>
    
    <button class="btn"><a href="Admin login.php">Admin Login</a></button>
<button class="btn"><a href="Registration.php">New User Registration</a></button>

<?php
if(isset($_POST['Signin'])){
// window.alert($_POST["AdminName"]);
 $_POST["AdminName"] = "sruti";
    //each "click";
//     $_query="SELECT * FROM `admin_lohin` WHERE 'Admin Name'='$_POST[AdminName]' And 'Password'='$_POST[AdminPassword]'";
// mysqli_query($con,$query);
// if(mysqli_num_rows(1))


}


?>

</body>
</html>

