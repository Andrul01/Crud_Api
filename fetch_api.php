<?php
   
    header('Content-Type:application/json');
    header('Acess-Control-Allow-Origin: *');
    
    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data['id'];

    include "config.php";

    // select single user
    $sql = "SELECT * FROM users WHERE id = {$id}";
    
    $result  = mysqli_query($conn, $sql) or die("Query Failed");

    if(mysqli_num_rows($result) > 0){

        $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($output);

    }
    else{ 
        echo json_encode(array('message' => 'No Record Found.', 'status' => false));
    }
?>