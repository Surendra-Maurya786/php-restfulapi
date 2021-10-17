<?php 
include('connection.php');

header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');

// header('Access-Control-Request-Headers: Access-Control-Request-Headers,Content-Type,Access-Control-Allow-Methods,
// Authorization,X-Requested-With');

$data = json_decode(file_get_contents("php://input"),true);
$student_id = $data['id'];
$student_name = $data['fname'];
$student_lname = $data['lname'];
$student_contact = $data['contact'];
$student_address = $data['address'];
$student_email = $data['email'];
$student_password = $data['password'];

$sql = "UPDATE `emp` SET `fname`='$student_name', `lname`='$student_lname', `contact`='$student_contact', `address`='$student_address', `email`='$student_email', `password`='$student_password' WHERE id={$student_id}";

if(mysqli_query($conn,$sql)){    

    echo json_encode(array('message'=>"Update Successfully",'status'=>True));

}else{


    echo json_encode(array('message'=>"No Updated",'status'=>false));


}










?>