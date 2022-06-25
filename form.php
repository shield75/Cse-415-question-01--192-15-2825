<?php
include("connection.php");
error_reporting(0);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width, initial-scale=1">
    <title>Register Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <form class="" action="form.php" method="POST">
      <div class="title">
        Registration Form
      </div>
      <div class="form">
        <div class="input_field">
          <label for="fname">Name</label>
          <input type="text" name="fname" class="input" value="" required>
        </div>
        <div class="input_field">
          <label for="lname">ID</label>
          <input type="text" name="id" class="input" value="" required>
        </div>
        <div class="input_field">
          <label for="lname">AGE</label>
          <input type="text" name="age" class="input" value="" required>
        </div>
        <div class="input_field">
          <label for="lname">USERNAME</label>
          <input type="text" name="username" class="input" value="" required>
        </div>

        <div class="input_field">
          <label for="password">Password</label>
          <input type="password" name="password" class="input" value="" required>
        </div>

        <div class="input_field">
          <input type="submit"  value="Register" name="register" class="btn">
        </div>
      </div>
      </form>
    </div>
  </body>
</html>
<?php
if($_POST["register"]){
  $fname = $_POST['fname'];
  $id = $_POST['id'];
  $age = $_POST['age'];
  $username = $_POST['username'];
  $pass = $_POST['password'];

  $qry = "insert into register_list(Name, Id, Age, Username, Password)
          values('$fname','$id','$age','$username','$password')";
  $data = mysqli_query($conn, $qry);
  if($data){
    echo "Data Insertion Succesfull!!!";
  }
  else{
    echo "Data Insertion Unsuccessfull";
  }
}
 ?>
