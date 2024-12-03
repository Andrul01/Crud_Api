<?php
   
    header('Content-Type:application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, PUT');
    header('Access-Control-Allow-Methods: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization, X-Requested-With');

    $data = json_decode(file_get_contents("php://input"), true);

    $id = $data['id'];
    $name = $data['name'];
    $email = $data['email'];
    $password = $data['password'];

    include "config.php";

    $query = "UPDATE users SET name = '{$name}', email = '{$email}', password = '{$password}' WHERE id = {$id} ";
    $result = mysqli_query($conn, $query) or die("Query Failed");

    if($result){
        echo json_encode(
            array('message' => ' Record Updated ', 'status' => true)
        );
    }
    else{
        echo json_encode(
            array('message' => ' Record Not Updated', 'status' => false)
        );
    }

?>