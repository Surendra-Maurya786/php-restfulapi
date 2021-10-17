<?php 
include('connection.php');

header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');

// header('Access-Control-Request-Headers: Access-Control-Request-Headers,Content-Type,Access-Control-Allow-Methods,
// Authorization,X-Requested-With');

$data = json_decode(file_get_contents("php://input"),true);
$student_id = $data['id'];

$sql = "DELETE FROM `emp`WHERE `id` = {$student_id}";

if(mysqli_query($conn,$sql)){    

    echo json_encode(array('message'=>"Delete Successfully",'status'=>True));

}else{


    echo json_encode(array('message'=>"User Not Deleted",'status'=>false));


}










?>