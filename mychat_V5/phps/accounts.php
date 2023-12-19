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
    $errors = array();

    /* account sinup */
        if(isset($_POST['sinup'])){
          //get form data
          $name = mysqli_real_escape_string($conn,$_POST['name']);
          $email = mysqli_real_escape_string($conn,$_POST['email']);
          $password = mysqli_real_escape_string($conn,$_POST['password_1']);
            
          //CREATE THE messages TABLE IN DATABASE
          $messageTbl=$name;
          $messageTbl .="_messages";
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
             
              //register user in database
              $password = md5($password);
              $sql = "INSERT INTO accounts(userName,email,password) VALUES ('$name','$email','$password')";
              mysqli_query($conn,$sql);

              //CREATE THE friends TABLE IN DATABASE
                $friendTbl=$name;
                $friendTbl .="_friends";
                // sql to create table
                $sql2 = "CREATE TABLE $friendTbl (
                id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                friends VARCHAR(100) NOT NULL,
                active_status int(1) NOT NULL
                 )";
                mysqli_query($conn,$sql2);

                //CREATE THE friend_requests TABLE IN DATABASE
                $friendrqstTbl=$name;
                $friendrqstTbl .="_friend_requests";
                // sql to create table
                $sql2 = "CREATE TABLE $friendrqstTbl (
                id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                friendRequests VARCHAR(100) NOT NULL
                 )";
                mysqli_query($conn,$sql2);
    
              header("location:index.php");
           }else{
                array_push($errors,"The user name alredy exists");
            }
        }
    


    /* account sign in */
        if(isset($_POST['login'])){
            $username = mysqli_real_escape_string($conn,$_POST['username']);
            $password = mysqli_real_escape_string($conn,$_POST['password']);

            $password = md5($password);
            $sql = "SELECT * FROM accounts WHERE userName='$username' AND password='$password'";
            $check = mysqli_query($conn,$sql);
            if(mysqli_num_rows($check) == 1){
                header("location:index.php");
            }else{
                array_push($errors,"password and username don't much");
            }
        }
        
?>
<script>
function stayLoggedInStatus(){
 //get stay logged in state value
 var Logged = document.getElementById("stayIn").value;
 if(Logged == "off"){
 document.getElementById("stayIn").value = "on";
    }
if(Logged == "on"){
     document.getElementById("stayIn").value = "off";
    }    
}
//function for managing temporal  or long term login     
function stayLoggedIn(){
 var currentName = document.getElementById("name").value;
 var currentPassord = document.getElementById("passwordKey").value;

 //temporal storage for user login data
 sessionStorage.setItem("MychatAppMyName",currentName);
 sessionStorage.setItem("MychatAppMyKey",currentPassord);

 //get stay logged in state value
 var Logged = document.getElementById("stayIn").value;
 if(Logged == "on"){
     var stayLogged = document.getElementById("stayIn").value;
     localStorage.setItem("MychatAppMyName",currentName);
     localStorage.setItem("MychatAppMyKey",currentPassord);
     }
if(Logged == "off"){
     localStorage.removeItem("MychatAppMyName");
     localStorage.removeItem("MychatAppMyKey");
     }
    }     
</script>