<?php
   
    header('Content-Type:application/json');
    header('Acess-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: DELETE');
        header('Access-Control-Allow-Methods: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization, X-Requested-With');
    
    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data['id'];

    include "config.php";

    $query = "DELETE FROM users WHERE id = {$id}";
    $result = mysqli_query($conn, $query);

    if($result){
        echo json_encode(
            array('message' => ' Record Deleted ', 'status' => true)
        );
    }
    else{
        echo json_encode(
            array('message' => ' Record Not Delete', 'status' => false)
        );
    }

?>