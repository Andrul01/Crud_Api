<?php
   
   header('Content-Type:application/json');
   header('Acess-Control-Allow-Origin: *');
   
   $data = json_decode(file_get_contents("php://input"), true);

   $search = $data['search'];

   include "config.php";

   $sql = "SELECT * FROM users WHERE name LIKE  '%{$search}%' ";

   $result  = mysqli_query($conn, $sql) or die("Query Failed");

   if(mysqli_num_rows($result) > 0){

        $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($output);
    }
    else{
        
        echo json_encode(array('message' => 'No Search Found.', 'status' => false));
   }
?>