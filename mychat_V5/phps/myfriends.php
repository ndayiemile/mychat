<?php
    $conn = mysqli_connect('localhost','root','','mychat');
    if(!$conn){
        echo "CAN'T CONNECT : We are updating our database please try again later";
        die;
    }
    $me_friends = $_GET['me'];
    $me_friends.="_friends";
    
    //getting friends from the data base
    $sql3 = "SELECT * FROM $me_friends";
    $sql3_in = mysqli_query($conn,$sql3);
    $sql3_data = mysqli_fetch_all($sql3_in,MYSQLI_ASSOC);
    $sql3_json = json_encode($sql3_data);
    echo $sql3_json;
?>