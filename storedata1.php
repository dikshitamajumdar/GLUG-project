<?php
$servername="localhost";
$username="root";
$password="";
$dbname="question_data";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("connection failed".mysqli_connect_error());
}
if(isset($_POST['submit']))
{
$question=$_POST['question'];
for($i=0;$i<count($question);$i++)
{
if($question[$i]!="")
{
$query="INSERT into question_data values ('$question)";
}
}
}
?>