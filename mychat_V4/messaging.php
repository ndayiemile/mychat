<?php
     $conn = mysqli_connect('localhost','root','','mychat');
     if(!$conn){
         echo "CAN'T CONNECT : We are updating our database please try again later";
         die;
     }
     //initializing the sender
     $sender = mysqli_real_escape_string($conn,$_GET['from']);
     $table_sender = $sender;
     $table_sender .="_message";
              
     //sending the message to the someone else;
     if(isset($_GET['message'])){

          //fetch the form data
          $message = mysqli_real_escape_string($conn,$_GET['message']);
          $reciever = mysqli_real_escape_string($conn,$_GET['reciever']);

          //sending message to the reciever
          $table_reciever = $reciever;
          $table_reciever .="_message";
          $sql_reciver = "INSERT INTO $table_reciever(message,identifier,sender) VALUES ('$message','in','$sender')";
          if(mysqli_query($conn,$sql_reciver)){

               //saving the sent message in the sender message table
               $sql_sender = "INSERT INTO $table_sender(message,identifier,sender) VALUES ('$message','out','me')";
               mysqli_query($conn,$sql_sender);
          }
     }
     //displaying the sent and recieved messages in JSON format
     $query ="SELECT * FROM $table_sender";
     $query_in = mysqli_query($conn,$query);
     $current_messages = mysqli_fetch_all($query_in,MYSQLI_ASSOC);
     echo json_encode($current_messages);
   
?>