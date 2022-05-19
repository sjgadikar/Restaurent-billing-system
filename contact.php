<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  
  padding: 12px;
 border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box; 
 margin-top: 6px;
  margin-bottom: 16px; 
  resize: vertical;
  
}

input[type=submit] {
  background-color:black;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
   border-radius: 5px; 
  background-color: black;
  color:white;
  padding: 20px;
  width: 100%;
  flex:column;
 display:flex;
  justify-content: center;
   align-items:center;
}
</style>
</head>
<body>

<h2 style="text-align:center;">Contact Us</h2>

<div class="container">
  <form action="/action_page.php">
    <label for="name"> Name</label>
    <input type="text" id="fname" name="name" placeholder="Name...">

    <label for="Address">Address</label>
    <input type="text" id="lname" name="Address" placeholder="Your Address...">

    

    <label for="Feedback">Feedback</label>
    <textarea id="Feedback" name="Feedback" placeholder="Write something..." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
