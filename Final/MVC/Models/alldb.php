<?php
require_once('db.php');
  
function sauth($id,$pass)
{
	$conn=con();
	$sql="select * from student where sId='$id' and sPass='$pass'";
	$res=mysqli_query($conn,$sql);
	return $res;
}
function lauth($id,$pass)
{
	$conn=con();
	$sq2="select * from librarian where LId='$id' and LPass='$pass'";
	$res=mysqli_query($conn,$sq2);
	return $res;
}

function data()
{
	$conn=con();
	$sql1="select * from library";
	$res1=mysqli_query($conn,$sql1);
	return $res1;
}
function data1()
{
	$conn=con();
	$sql1="select * from library";
	$res1=mysqli_query($conn,$sql1);
	return $res1;
}
function add($bookID,$bookName,$genre,$available)
{
	$conn=con();
	$sql3="INSERT INTO `library` (bookID,bookName,genre,available) VALUES ('$bookID','$bookName', '$genre', '$available')";
	$res=mysqli_query($conn,$sql3);
	return $res;
}


?>