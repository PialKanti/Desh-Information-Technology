<?php
include "dbRegister.php";
$roll=$_POST['roll'];
$reg=$_POST['reg'];
$result=$_POST['result'];
echo $result;


$sql = "SELECT * FROM student_info WHERE roll_no='$roll' and reg_no='$reg'";

$name = mysqli_query($conn,$sql);
if($row=mysqli_fetch_assoc($name)){
    $std_name = $row['student_name'];
    $sql = "UPDATE student_info SET result = '$result' WHERE roll_no='$roll' AND reg_no='$reg'";
    $query= mysqli_query($conn,$sql);
    if($query){
        header("Location:../upload_result.php?upload_result_sucess=yes&std_name=$std_name&std_result=$result");
        die();
    }
    else{
        header("Location:../upload_result.php?upload_result_not_sucess=yes");
        die();
    }
}
else{
    header("Location:../upload_result.php?student_not_found=yes");
    die();
}

mysqli_close($conn);
?>
