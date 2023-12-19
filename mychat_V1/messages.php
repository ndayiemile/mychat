<?php
     $conn = mysqli_connect('localhost','root','','mychat');
     if(!$conn){
         echo "CAN'T CONNECT : We are updating our database please try again later";
         die;
     }
     if(isset($_GET['message'])){
        $message = mysqli_real_escape_string($conn,$_GET['message']);
        $table = md5("ndayishimiyeemile96@gmail.com");
        $table .="_message";
        $sql = "INSERT INTO $table(message,identifier,sender) VALUES ('$message','out','me')";
        if(mysqli_query($conn,$sql)){
            $query ="SELECT * FROM $table";
            $query_in = mysqli_query($conn,$query);
            $sent_out_messages = mysqli_fetch_all($query_in,MYSQLI_ASSOC);
            echo json_encode($sent_out_messages);
        }
     }


?>