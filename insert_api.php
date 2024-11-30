<?php
   
    header('Content-Type:application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Methods: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization, X-Requested-With');

    $data = json_decode(file_get_contents("php://input"), true);
    $name = $data['name'];
    $email = $data['email'];
    $password = $data['password'];

    include "config.php";

    $query = "INSERT INTO users(name, email, password) VALUES ('{$name}','{$email}','{$password}')";
    $result = mysqli_query($conn, $query) or die("Query Failed");

    if($result){
        echo json_encode(
            array('message' => ' Record Inserted ', 'status' => true)
        );
    }
    else{
        echo json_encode(
            array('message' => ' Record Not Inserted', 'status' => false)
        );
    }

?>