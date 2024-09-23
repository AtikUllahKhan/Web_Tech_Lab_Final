<?php
require_once('../Models/alldb.php');

session_start();
if(isset($_POST['btn']))
{
	$id=$_POST['id'];
	$pass=$_POST['pass'];
	if(empty($id || $pass))
	{
	$_SESSION['Error']="Enter Id & Pass";
	header('location: ../Views/log.php');
	}

	$status= sauth($id,$pass);
	$status1= lauth($id,$pass);
    if(mysqli_num_rows($status)==1)
    {
    	header('location: ../Views/student.php');
    	$_SESSION['id']=$id;
    }
    elseif(mysqli_num_rows($status1)==1)
    {
    	header('location: ../Views/librarian.php');
    	$_SESSION['id']=$id;
    }
    else
    {
    	$_SESSION['Error']="Invalid User";
	    header('location: ../Views/log.php');
    }

}

if(isset($_POST['logout']))
{
	unset($_SESSION['id']);
	header('location: ../Views/log.php');
}





?>