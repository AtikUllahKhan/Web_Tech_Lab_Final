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
    body{
      background-color: blanchedalmond;
    }
   .insert{
    display: inline-block;
    transition-duration: 0.4s;  
    font-size: 30px;
        }
    .insert:hover{
     background-color: orangered;
     color: white;
    }
    .logout{
    display: inline-block;
    transition-duration: 0.4s;  
    font-size: 20px;
        }
    .logout:hover{
     background-color: red;
     color: white;
    }
    </style>
   <title>Add Book</title>
</head>
<body>
    <h1 align="center" style="border: 3px solid black;
      padding: 20px; background-color: white;" >ADD BOOK </h1>
    <br>

    <form method="post" action="../Controllers/logCheckController.php">
    <div class="logout"> 
    <button name="logout" class="logout">Logout</button>
    </div>


  <form method="post" action="../Controllers/homeController.php">
    <table border="1" align="center"style=" border-color: turquoise;background-color: thistle;box-align: center;overflow: scroll; padding: 5px;margin-top: 30px;font-size: 30px;">
        <tr>
            <td>BookID:</td>
            <td><input type="text" name="bookID" style="height: 40px;
  width: 100%;border: 3px solid red;"></td>
        </tr>
        <tr>
            <td>BookName:</td>
            <td><input type="text" name="bookName" style="height: 40px;
  width: 100%;border: 3px solid red;"></td>
        </tr>
        <tr>
            <td>Genre:</td>
            <td><input type="text" name="genre" style="height: 40px;
  width: 100%;border: 3px solid red;"></td>
        </tr>
        <tr>
            <td>Available:</td>
            <td><input type="text" name="available" style="height: 40px;
  width: 100%;border: 3px solid red;"></td>
        </tr>
        
        <tr>
            <td colspan="2" align="center">
              <div class="insert">
                <button type="submit" name="insert" class="insert">Insert</button>
              </div>
            </td>
        </tr>
    </table>
   </form>
 
    

 
  </form>
   
</body>
</html>