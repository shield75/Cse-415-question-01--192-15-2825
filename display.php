<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Display</title>
  </head>
<style media="screen">
  body{
    background: #7a0404;
  }
  table{
    background-color: white;
  }
  .update{
    background: green;
    color: white;
    width: 47%;
    border-radius: 3px;
    margin-left: 2px;
    margin-right: 2px;
}
    .delete{
      background: red;
      color: white;
      width: 47%;
      border-radius: 3px;
      margin-left: 2px;
      margin-right: 2px;
     }
</style>

  <body>

  </body>
  <script>
    function checkDelete(){
      return confirm('Are you sure want to delete this data!!??');
    }
  </script>
</html>



<?php
include("connection.php");
$qry = "select * from register_list";
$data = mysqli_query($conn, $qry);
$total = mysqli_num_rows($data);


if($total != 0){
  ?>
  <h2 align="center"><mark>RECORDS</mark></h2>
  <table border="3px" cellspacing="7" width = "100%" align = "center">
    <tr>
      <th width = "20%" >Name</th>
      <th width = "20%">Id</th>
      <th width = "20%">Age</th>
      <th width = "20%">Username</th>
      <th width = "20%">Password</th>
    </tr>
    <?php
    while ($result = mysqli_fetch_assoc($data)) {
      echo "<tr>
        <td>".$result['Name']."</td>
        <td>".$result['Id']."</td>
        <td>".$result['Age']."</td>
        <td>".$result['Username']."</td>
        <td>".$result['Password']."</td>
        <td>
      </tr>
      ";
    }
}
else {
  echo "No Data Available";
}
?>
</table>
