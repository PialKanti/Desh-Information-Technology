<?php
include "dbRegister.php";
$branch=$_POST['branch'];
$branch_code=$_POST['branch_code'];
$std_name=$_POST['std_name'];
$fa_name=$_POST['fa_name'];
$mom_name=$_POST['mom_name'];
$course=$_POST['course'];
$session=$_POST['session'];
$education=$_POST['education'];
$birth_date=$_POST['birth_date'];
$email=$_POST['email'];
$board=$_POST['board'];
$roll=$_POST['roll'];
$reg=$_POST['reg'];

$sql = "INSERT INTO student_info(branch_name,branch_code,student_name,father_name,mother_name,course,session,Education,birth_date,email,board,roll_no,reg_no) VALUES ('$branch','$branch_code','$std_name','$fa_name','$mom_name','$course','$session','$education','$birth_date','$email','$board','$roll','$reg') ";

$result = mysqli_query($conn,$sql);
if($result){
    header("Location:../registration.php?registration_sucess=yes");
    die();
}
else{
    header("Location:../registration.php?registration_not_sucess=yes");
    die();
}

mysqli_close($conn);
?>
