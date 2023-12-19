<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grid chat</title>
    <style>
        *{box-sizing: border-box;}
        body,html{
            padding: 0;
            margin: 0;
        }
        #container{
            position: fixed;
            height: 100%;
            width: 100%;
        }
        #container-head{
            float: left;
            width:100%;
            height:10%;
            display: flex;
            justify-content: center;
        }
        #navbar{
            width:50%;
            padding: 10px;
        }
        .navbar-link{
            float:left;
            width:25%;
            height:100%;
            display:flex;
            justify-content:center;
            align-items:center;
            background:#444;
            text-decoration:none;
            color:wheat;

        }
        #container-body{
            padding: 10px;
            float: left;
            width:100%;
            height:90%;
        }
        #middle-section{
            float:left;
            width:48%;
            height:100%;
            margin:0px 1% 0px 1%;
        }
        #right-section{
            float:left;
            width:25%;
            height:100%;
        }
        #right-section-body{
            padding:20px 5px;
        }
        #middle-section-header,#right-section-header{
            float:left;
            width:100%;
            height:10%;
            background-color: rgb(17, 179, 219);
        }
        #middle-section-body,#right-section-body{
            float:left;
            width:100%;
            height:90%;
        }
        #middle-section-body{
            padding:10px 10px;
        }
        #left-section{
            float:left;
            width:25%;
            height:100%;
        }
        #left-section-top{
            float:left;
            width:100%;
            height:50%;
        }
        #left-section-top-header,#left-section-bottom-header{
            float:left;
            width:100%;
            height:20%;
            
        }
        #left-section-top-body,#left-section-bottom-body{
            float:left;
            width:100%;
            height:80%;
        }
        #left-section-bottom{
            float:left;
            width:100%;
            height:50%;
        }
        #left-section-top-header,#left-section-bottom-header,#middle-section-header,#right-section-header{
            display:flex;
            align-items:center;
            justify-content:center;
            color:wheat;
            background:#444;
        }
        #left-section-top-header,#middle-section-header,#right-section-header{
            border-radius:10px 10px 0px 0px;
        }
        #left-section-top-body,#left-section-bottom-body,#middle-section-body,#right-section-body,#container-head{
            background:#222;
        }
        #left-section-top-body,#left-section-bottom-body,#middle-section-body,#right-section-body{
            overflow:auto;
        }
        #left-section,#middle-section,#right-section{
            box-shadow:2px 2px 6px 2px #111;
            border-radius:11px 11px 0px 0px;
        }

    </style>
</head>
<body>
    <div id="container">
        <div id="container-head">
            <div id="navbar">
                <a class="navbar-link" href="#">home</a>
                <a class="navbar-link" href="#">menu</a>
                <a class="navbar-link" href="#">messages</a>
                <a class="navbar-link" href="#">setting</a>
            </div>
        </div>
        <div id="container-body">
            <div id="left-section">
                <div id="left-section-top">
                    <div id="left-section-top-header">
                        profile(n(friends,groups,saved))
                    </div>
                    <div id="left-section-top-body">
                        h
                    </div>
                </div>
                <div id="left-section-bottom">
                    <div id="left-section-bottom-header">
                        groups
                    </div>
                    <div id="left-section-bottom-body">
                        f
                    </div>
                </div>
            </div>
            <div id="middle-section">
                <div id="middle-section-header">
                    current page content
                </div>
                <div id="middle-section-body">
                    <?php include "chatpad_php.html"?>
                </div>
            </div>
            <div id="right-section">
                <div id="right-section-header">
                    Active Friends
                </div>
                <div id="right-section-body">
                    <?php include "friends.html"?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>