<?php
    $conn = mysqli_connect('localhost','root','','mychat');
    if(!$conn){
        echo "CAN'T CONNECT : We are updating our database please try again later";
        die;
    }
    //imitialisation
    $name="";
    $email="";
    $password="";

    /* account sinup */
        if(isset($_POST['sinup'])){

        //get form data
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password_1']);
    
        //register user in database
        $password = md5($password);
        $sql = "INSERT INTO accounts(userName,email,password) VALUES ('$name','$email','$password')";
        if(mysqli_query($conn,$sql)){

            //CREATE THE TABLE IN DATABASE
            $messageTbl=$name;
            $messageTbl .="_message";
            // sql to create table
            $sql = "CREATE TABLE $messageTbl (
            id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
             message VARCHAR(100) NOT NULL,
             identifier VARCHAR(5) NOT NULL,
             sender VARCHAR(1000) NOT NULL
             )";

            if(mysqli_query($conn,$sql)){
                $welcome = "INSERT INTO $messageTbl(message,identifier,sender) VALUES ('"."Hello ".$name." your welcome to mychat."."','in','app')";
                mysqli_query($conn,$welcome);

            }else{
                echo "The user with the same email already exists";
            }
        }
    }
    


    /* account sign in */
        if(isset($_POST['login'])){
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $password = mysqli_real_escape_string($conn,$_POST['password']);

            $password = md5($password);
            $sql = "SELECT * FROM accounts WHERE email='$email' AND password='$password'";
            $check = mysqli_query($conn,$sql);
            if(mysqli_num_rows($check) == 1){
                echo "well logged in";
            }else{
                echo "that account do not exists";
            }
        }

?>