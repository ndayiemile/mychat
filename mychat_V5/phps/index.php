<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../font awesome/css/all.css">
    <title>grid chat</title>
    <style>
        /* width */
        ::-webkit-scrollbar {
        width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
          background: transparent; 
          transition: background-color 4s;
        }
        ::-webkit-scrollbar-track:hover {
          background-color: #f1f1f1; 
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: transparent; 
            transition: background-color 4s;
         
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
          background: #555; 
        }
        *{box-sizing: border-box;}
        body,html{
            padding: 0;
            margin: 0;
        }
        body{
            background-color:rgb(27,28,30) !important;
        }
        #container{
            height: 100%;
            width: 100%;
        }

        #container-head{   
            background-color: rgb(34,34,34);     
            position:fixed;
            top:0;
            width:100%;
            height:70px;
            display: flex;
            justify-content: center;
            border-bottom: 1px solid #444;
            z-index: 1000;          
            display: none;
        }
        #navbar{
            width:50%;
            padding: 10px;
            display: none;
        }
        .navbar-link{
            float:left;
            width:25%;
            font-size:xx-large;
            height:100%;
            display:flex;
            justify-content:center;
            align-items:center;
            background:#444;
            text-decoration:none;
            color:wheat;

        }
        
        #container-body{
            width:100%;
        }
        #middle-section{
            margin-top:100;
            width:40%;
            height:700px;
            margin:0 auto;
        }
        #right-section{
            position:fixed;
            right:0;
            top:70px;
            width:25%;
            height:100%;
        }
        #right-section-body{
            padding:20px 5px;
        }
        #middle-section-header{
            height: 10px;
            width:100%;
            padding-top:115px;
            padding-bottom: 42px;
            position: relative;
        }
        #middle-section-header,#right-section-header{
            float:left;
        }
        #right-section-header{
            height:10%;
            width:100%;
        }
        #middle-section-body,#right-section-body{
            float:left;
            width:100%;
            height:90%;
        }
        #middle-section-body{
            padding:10px 10px;
        }
        #active-friends-container{
            height:80px;
            width:100%;
            margin:10px 0px 0px 0px;
            display:flex;
            align-items:center;
            padding:5px;
            border-radius:5px;
            overflow: hidden;
            scroll-behavior:smooth;
        }
        .active-friend{
            height: 100%;
            width:15%;
            margin: 5px;
            display: inline-block;
    
        }
        .active-friend-image{
            width: 40px;
            height: 50%;
            background-position: center;
            background-size: 40px 40px;
            border-radius: 20%;
        }
        .friend-status-active{
            border-radius: 100%;
            background-color: green;
            width: 10px;
            height:10px;
            position: relative;
            top:30px;
            left: 30px;

        }
        .active-friend-name{
            height:50%;
            width:100%;
            color:white;
            font-size:small; 
  			overflow: hidden;
  			text-overflow: ellipsis; 
        }
        #active-prev,#active-next{
            background-color:rgb(0,0,0,0.5);
            font-size:20px;
            border:none;
            position: absolute;
            border-radius: 5px;
            top:65%;
            color:white;
            transition: background-color 10s, color 10s;
        }
        #active-next{
            right: 0;
        }
        #active-prev{
            left: 0;
        }
        #active-prev:hover,#active-next:hover{
            cursor: pointer;
            background-color:rgb(18, 218, 208);
            color:wheat;
        }
        #left-section{
            position:fixed;
            left:0;
            top: 70px;
            width:25%;
            height:100%;
        }
        #left-section-top{
            float:left;
            width:100%;
            height:50%;
            overflow:auto;
        }
        #middle-section,#right-section,#left-section{
            padding:0px 10px;
        }
        #left-section-bottom-header{
            float:left;
            width:100%;
            height:20%;
            
        }
        #left-section-bottom-body{
            float:left;
            width:100%;
            height:80%;
            overflow:auto;
        }
        #left-section-bottom{
            float:left;
            width:100%;
            height:50%;
        }
        .left-section-item{
            height:50px;
            width:100%;
            margin-top:10px;
            background:#444;
            border-radius:5px;
            display:flex;
            align-items:center;
            color:white;
            font-size:large;
            font-family:sans-serif;
        }
        .left-section-item i{
            color:wheat;
            font-size:xx-large;
            margin-right:10px;
        }
        #left-section-bottom-header,#middle-section-header,#right-section-header{
            display:flex;
            align-items:center;
            justify-content:center;
            color:wheat;
        }
        #middle-section-header,#right-section-header,#left-section-top{
            border-bottom: 1px solid #444;
            
        }
        #left-section-bottom-body,#right-section-body{
            overflow:auto;
            
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="container-head">
            <div id="navbar">
                <a class="navbar-link" href="#"><i class="fas fa-home"></i></a>
                <a class="navbar-link" href="#"><i class="fas fa-video"></i></i></a>
                <a class="navbar-link" href="#"><i class="fab fa-facebook-messenger"></i></a>
                <a class="navbar-link" href="#"><i class="fas fa-bars"></i></a>
            </div>
        </div>
        <div id="container-body">
            <div id="left-section">
                <div id="left-section-top">
                        <div class="left-section-item">
                            <i class="fas fa-user-edit"></i> edit profile
                        </div>
                        <div class="left-section-item">
                        <i class="fas fa-users"></i>friends
                        </div>
                        <div class="left-section-item">
                        <i class="fas fa-save"></i>saved
                        </div>
                        <div class="left-section-item">
                            settings
                        </div>
                        <div class="left-section-item">
                            history
                        </div>
                </div>
                <div id="left-section-bottom">
                    <div id="left-section-bottom-header">
                        notifications
                    </div>
                    <div id="left-section-bottom-body">
                        <div class="left-section-item">
                        <p id="demo"></p>
                        </div>
                        <div class="left-section-item">

                        </div>
                        <div class="left-section-item">

                        </div>
                    </div>
                </div>
            </div>
            <div id="middle-section">
                <div id="middle-section-header">
                <button id="active-prev">❮</button>
                <button id="active-next">❯</button>
                    <div id="active-friends-container">
                        <div class="active-friend">
                            <div class="active-friend-image"  style="background-image:url('resources/Favatar_1.jpg')">
                                <div class="friend-status-active"></div>
                            </div>
                            <div class="active-friend-name">adayishimiye emile</div>
                        </div>
                        <div class="active-friend">
                            <div class="active-friend-image"  style="background-image:url('resources/Favatar_1.jpg')">
                                <div class="friend-status-active"></div>
                            </div>
                            <div class="active-friend-name">bdayishimiye emile</div>
                        </div><div class="active-friend">
                            <div class="active-friend-image"  style="background-image:url('resources/Favatar_1.jpg')">
                                <div class="friend-status-active"></div>
                            </div>
                            <div class="active-friend-name">cdayishimiye emile</div>
                        </div>
                        <div class="active-friend">
                            <div class="active-friend-image"  style="background-image:url('resources/Favatar_1.jpg')">
                                <div class="friend-status-active"></div>
                            </div>
                            <div class="active-friend-name">ddayishimiye emile</div>
                        </div>
                        <div class="active-friend">
                            <div class="active-friend-image"  style="background-image:url('resources/Favatar_1.jpg')">
                                <div class="friend-status-active"></div>
                            </div>
                            <div class="active-friend-name">edayishimiye emile</div>
                        </div>
                        <div class="active-friend">
                            <div class="active-friend-image"  style="background-image:url('resources/Favatar_1.jpg')">
                                <div class="friend-status-active"></div>
                            </div>
                            <div class="active-friend-name">fdayishimiye emile</div>
                        </div>
                        <div class="active-friend">
                            <div class="active-friend-image"  style="background-image:url('resources/Favatar_1.jpg')">
                                <div class="friend-status-active"></div>
                            </div>
                            <div class="active-friend-name">gdayishimiye emile</div>
                        </div><div class="active-friend">
                            <div class="active-friend-image"  style="background-image:url('resources/Favatar_1.jpg')">
                                <div class="friend-status-active"></div>
                            </div>
                            <div class="active-friend-name">hdayishimiye emile</div>
                        </div>
                        <div class="active-friend">
                            <div class="active-friend-image"  style="background-image:url('resources/Favatar_1.jpg')">
                                <div class="friend-status-active"></div>
                            </div>
                            <div class="active-friend-name">jdayishimiye emile</div>
                        </div>
                        <div class="active-friend">
                            <div class="active-friend-image"  style="background-image:url('resources/Favatar_1.jpg')">
                                <div class="friend-status-active"></div>
                            </div>
                            <div class="active-friend-name">ndayishimiye emile</div>
                        </div>
                        <div class="active-friend">
                            <div class="active-friend-image"  style="background-image:url('resources/Favatar_1.jpg')">
                                <div class="friend-status-active"></div>
                            </div>
                            <div class="active-friend-name">ndayishimiye emile</div>
                        </div>
                        
                    </div>
                </div>
                <div id="middle-section-body">
                    <?php include "chat_pad.php"?>
                </div>
            </div>
            <div id="right-section">
                <div id="right-section-header">
                    recent chats
                </div>
                <div id="right-section-body">
                    <?php include "friends.html"?>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("demo").innerHTML = sessionStorage.getItem("user");
        const activeFriends = document.getElementsByClassName("active-friend").length;
        if(activeFriends <= 6){
            document.getElementById("active-prev").style.display = "none";
            document.getElementById("active-next").style.display = "none";
        }
        const activePrevButton = document.getElementById("active-prev");
        const activeNextButton = document.getElementById("active-next");
        activePrevButton.onclick = function (){
            document.getElementById("active-friends-container").scrollLeft -= 200;
        }
        activeNextButton.onclick = function (){
            document.getElementById("active-friends-container").scrollLeft += 200;
        }
       
       </script>
</body>
</html>