<?php
include("config.php");

if(isset($_POST["registrationButton"])){

$studentId = $_POST['studentId'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
// $password = $_POST['password'];

$query = "INSERT INTO `student_info`(`studentId`, `fname`, `mname`, `lname`, `birthday`, `address`) VALUES ('$studentId','$fname','$mname','$lname','$birthday','$address')";
$query_run = mysqli_query($con,$query);

if($query_run){
    header("index.php");
    echo"registration Success";


}else{
    echo "Error!";
}
}
    $update_query = "SELECT `studentId`, `fname`, `mname`, `lname`, `birthday`, `address` FROM `student_info` WHERE `id` = '$id' LIMIT 1 ";
    $update_result = mysqli_query($con, $update_query);

    if(mysqli_num_rows($update_result) == 1){
            $_SESSION['status'] = "Welcome!";
            $_SESSION['status_code'] = "success";
            header("Location: index.php");
            exit();
    }else{
        $_SESSION['status'] = "Invalid Username/Password";
        $_SESSION['status_code'] = "error";
        header("Location: login.php");
        exit();
    }