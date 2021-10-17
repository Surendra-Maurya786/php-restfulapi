<?php 
include('connection.php');

header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');

// header('Access-Control-Request-Headers: Access-Control-Request-Headers,Content-Type,Access-Control-Allow-Methods,
// Authorization,X-Requested-With');

$data = json_decode(file_get_contents("php://input"),true);

$student_name = $data['fname'];
$student_lname = $data['lname'];
$student_contact = $data['contact'];
$student_address = $data['address'];
$student_email = $data['email'];
$student_password = $data['password'];

$sql = "INSERT INTO `emp` (`fname`, `lname`, `contact`, `address`, `email`, `password`)
VALUES ('$student_name', '$student_lname', '$student_contact', '$student_address', '$student_email', '$student_password');";

if(mysqli_query($conn,$sql)){    

    echo json_encode(array('message'=>"Inserted Successfully",'status'=>True));

}else{


    echo json_encode(array('message'=>"No record Found",'status'=>false));


}










?>