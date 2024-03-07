<?php
$u=$_POST['username'];
$c=$_POST['clane'];
$s=$_POST['sensai'];
$n=$_POST['nickname'];
$m=$_POST['mobileno'];
$con=mysqli_connect("localhost","root","","obitols");
$sql="insert into register(username,clane,sensai,nickname,mobileno) values('$u','$c','$s','$n','$m')";
$r=mysqli_query($con,$sql);
if($r)
{   echo "<script>alert('SUCCESSFULLY REGISTERED');
    window.location.href='index.html';</script>";
    
}
?>