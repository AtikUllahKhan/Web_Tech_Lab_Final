<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
    <style>
        body{
            background: beige;
            text-align: center;
        }
        .log{
            font-size: 30px;
        }
        .l1{
    display: inline-block;
    transition-duration: 0.4s;  
    font-size: 30px;
    border: 3px solid white;
    color:black;
    }
    .l1:hover{
     background-color: DodgerBlue;
     color: white;
    }
    </style>
</head>
<body>

    <h1 style="text-align: center;">Login Page</h1>

    <div class="log">
    <form method="post" action="../Controllers/logCheckController.php">
    Id  : <input type="text" name="id" style="height: 30px;width: 50%;border: 3px solid red;"><br><br>
   	Pass : <input type="text" name="pass"style="height: 30px;width: 50%;border: 3px solid red;"><br>
   		 <?php
   		 if(isset($_SESSION['Error']))
   		 {
              echo $_SESSION['Error'];
   		    unset($_SESSION['Error']);
   		 }

   		  
   		 ?>
         </div>
         <br>
         <div class="l1">
    	<button name="btn" class="l1">Login</button>
        </div>
   </form>
</body>
</html>