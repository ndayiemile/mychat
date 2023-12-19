<?php include "accounts.php"?>
<?php include "errors.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>db livesearch</title>
    <style>
        form{
            width: fit-content;
            border-radius: 20px;
            padding: 10px;
            border-width: 5px;
            border-style: solid;
            border-color: rgb(18, 218, 208);
        }
        h2{
            text-align: center;
        }
        form .div{
            margin-top: 5px;
            padding: 5px;
            width: 100%;
        }
        form input[type=submit]{
            width:200px;
            background-color:rgb(18, 218, 208);
            color:black;
            border-style: none;
            border-width: 0px;
            padding: 10px;
        }
        form input[type=text],input[type=password]{
            width:400px;
            border-style: solid;
            border-color: rgb(124, 248, 242);
            padding: 5px;
            border-radius: 5px;
            padding-left: 10px;
            border-width: 2px;
            padding: 10px;
            <?php echo $borderColor_login ?>
        }
        form input[type=text]{
            margin-bottom: 5px;
        }
        .checkbox input{
           margin-right:10px;
        }
    </style>
</head>
<body>
    <form action="login.php" method="POST">
        <div class="div">
            <h2>chatapp login</h2>
        </div>
        <div  class="div">
            <input type="text" id="name" name="username"  <?php echo $placeholder_login_username?> required>
        </div>
        <div class="div">
            <input type="password" id="passwordKey"  name="password" placeholder="Password" required>
        </div>
        <div class="div checkbox">
            <input type="checkbox" onclick="stayLoggedInStatus();" value="off" id="stayIn">keep me signed in
        </div>
        <div class="div">
            <input type="submit" value="login" onclick="stayLoggedIn();" name="login">
        </div>
        <p id="demo"></p>
    </form>
    

</body>
   </body>
</html>