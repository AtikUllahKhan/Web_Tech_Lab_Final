<?php
require_once('../Models/alldb.php');
session_start();
if(empty($_SESSION['id']))
{
   header("location:log.php");
}
$res=data();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    .logout{
    display: inline-block;
    transition-duration: 0.4s;  
    font-size: 20px;
    }
    .logout:hover{
     background-color: red;
     color: white;
    }

    body{
     background-color: lightgrey;

         }
  </style>
  <title>Student</title>
</head>
<body>
  <h1 align="center" style="border: 3px solid bisque;
      padding: 20px; background-color: white;" >Student Page</h1>
  <h2 style="text-align: right; margin-right: 20px;color: red;"> welcome <?php echo $_SESSION['id'];?>
</h2>
<br>
<?php 
if(isset($_SESSION['mess'])){
  echo $_SESSION['mess'];
  unset($_SESSION['mess']);
}
?>
    
    <table border="1" align="center"style=" border-color: turquoise;background-color: bisque;box-align: center;overflow: scroll; padding: 5px;margin-top:20px ;">
      <tr>
        <th>BookID</th>
         <th>BookName</th>
          <th>Genre</th>
          <th>Available</th>
      </tr>
<?php while ($r=$res->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $r['bookID']; ?></td>
        <td><?php echo $r['bookName']; ?></td>
        <td><?php echo $r['genre']; ?></td>
        <td><?php echo $r['available']; ?></td>
        
      </tr>
 <?php } ?>
    </table>
   </form> 


  <form method="post" action="../Controllers/logCheckController.php">
    <div class="logout">
    <button name="logout" class="logout">Logout</button>
    </div>
  </form>
   
</body>
</html>