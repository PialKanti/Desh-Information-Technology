<?php
session_start();
include "dbRegister.php";
$Username=$_POST['userName'];
$Password=$_POST['passWord'];
$sql="SELECT * FROM admin_login";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
	if($Username==$row['username'] && $Password==$row['password']){
		    header("Location:../registration.php");
            $_SESSION['UserName'] = $Username;
            die();

	}
    else{
        header("Location:../registration.php?login_error=yes");
    }
}
?>
