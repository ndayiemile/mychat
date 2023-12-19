<!--developeed by ndayishimiyeemile@gamil.com-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat</title>
    <style>
        *{box-sizing: border-box;}
        body{
            background-color: rgba(27, 26, 26,0.7);
        }
        #chatDiv{
            display: flex;
            flex-direction: column;
            background-color: rgb(49, 49, 49);
            word-wrap: break-word;
            width:100%;
            border-radius: 0.25rem;
            margin: 0 auto;
            margin-top: 10px;
            margin-bottom: 10px;
            
        }
        #chatHead{
            padding: 0.75rem 1.25rem;
            border-radius: 0.25rem 0.25rem 0rem 0rem;
            background-color: rgb(17, 17, 17);
        }
        #message{
            border-radius: 0.25rem;
        }
        .app-name{
            color: wheat;
            margin: 0;
            float: left;
            font-size:1rem;
            font-weight:lighter;
        }
        #chatHead > #tools{
            float: right;
            margin-right: -0.625rem;
        }
        .btn{
            display: inline-block;
            font-weight: 400;
            text-align: center;
            border-radius: 0.25rem;
            user-select: none;
            transition: color 0.15s ease-in-out;
        }
        .btn-tool{
            background-color: transparent;
            color:#adb5bd;
            font-size: 0.875rem;
            margin:-0.75rem 0;
            padding: .25rem .5rem;
        }
        .fa-minus:before{
            content: "\f068";
        }
        #message-body{
            overflow: auto;
            padding: 0;
        }
        #chat-messages{
            max-height: 250px;
            height: inherit;
            padding: 10px;
            overflow: auto;
            
        }
        #message-in{
            margin-bottom: 15px;
            margin-right: 1.5rem !important;
            clear: both;
        }
        #message-out{
            margin-bottom: 15px;
            margin-left: 1.5rem !important;
            clear: both;
        }
        .chat-img{
            height: 40px;
            width: 40px;
            border-radius: 50%;
            border-style: none;
        }
        #message-out .chat-img{
            float: right;
        }
        #message-out{
            float: right;
        }
        #message-in .chat-img{
            float: left;
        }
        #message-out .chat-img{
            float: right;
        }
        #message-out .message-text,#message-in .message-text{
            border-radius: 0.3rem;
            background-color: #d2d6de;
            border: 1px solid #d2d6de;
            color: #444;
            padding: 6px 10px;
            font-weight: 300;
            font-size: 1.1rem;
            font-family: cursive;
        }
        #message-out .message-text{
            margin: 0px 50px 0px 0px;
        }
        #message-in .message-text{
            margin: 10px 0px  0px 50px;
        }
        #message-in .message-text{
            background-color: rgb(22, 126, 196);
            border-color: rgb(22, 126, 196);
            color: wheat;
        }
        #message{
            padding: 10px 20px;
            background-color: #444;
        }
        #message-text-container{
            width: 100%;
            display: flex;
            flex-wrap:wrap;            
        }
        #message-text-container div:nth-of-type(1){
            flex-grow: 7;
            display: flex;
            justify-items: center;
        }
        #message-text-container div:nth-of-type(2){
            flex-grow: 1;
            display: flex;
            justify-items: center;
        }
       #typedMessage,#submit-message{
           flex:1;
       }
       #typedMessage{
           font-size:large;
           font-family: cursive;
           background-color: #d2d6de;
           border-radius: 5px 0px 0px 5px;
           outline: none;
           padding-top: 10px;
           padding-left: 15px;
           color: #444;
       }
       #submit-message{
            background-color: rgb(22, 126, 196);
           border-radius: 0px 5px 5px 0px;
           border-style: none;
           border: none;
           color:white;
       }
       #submit-message:hover{
           background-color: rgb(42, 93, 187);
           cursor: pointer;
       }

       @media screen and (min-width:200px) {
        #typedMessage{
           font-size:small;
           padding-top: 5px;
           padding-left: 10px;
           color: #444;
       }
       #message-out .message-text,#message-in .message-text{
             font-size: .9rem;
        }
       }
       @media screen and (max-width:432px) {
        #typedMessage{
             border-radius: 5px 5px 0px 0px;
            }
        #submit-message{
           border-radius: 0px 0px 5px 5px;
           padding: 10px;
           }
        }

       @media screen and (min-width:452px) {
        #typedMessage{
           font-size:small;
            }
            #message-out .message-text,#message-in .message-text{
             font-size: .9rem;
        }
       }

       @media screen and (min-width:700px) {
        #typedMessage{
           font-size:small;
            }
            #message-out .message-text,#message-in .message-text{
             font-size: 1rem;
        }
       }

       @media screen and (min-width:900px) {
        #typedMessage{
           font-size:.8rem;
            }
            #message-out .message-text,#message-in .message-text{
             font-size: 1.02rem;
        }
       }
    </style>
</head>
<body>
    <div id="chatDiv">
        <div id="chatHead">
            <p class="app-name">messages</p>
            <div id="tools">
                <button type="button" class="btn btn-tool">
                    <i class="fas fa-minus"></i>
                </button>
            </div> 
        </div>
        <div id="message-body">
            <div id="chat-messages">

                <!--received message div-->
                <div id="message-in">
                    <img class="chat-img" src="resources/user_avatar.jpg" alt="user avatar">
                    <div class="message-text">Chart with everone from everywhere for free</div>
                    <p id="demo"></p>
                </div>

                <!--sent message div-->
                <div id="message-out">
                    <img class="chat-img" src="resources/Favatar_1.jpg" alt="user avatar">
                    <div class="message-text">It is easy just hover on this section to see recent messages</div>
                </div>
                <div id="message-out">
                    <img class="chat-img" src="resources/Favatar_1.jpg" alt="user avatar">
                    <div class="message-text">My name is ndayishimiye and I will be charting with Emile</div>
                </div>
            </div>
        </div>
        <div id="message">

            <!--form for sending message-->
            <form id="send-message">
                <div id="message-text-container">
                    <div id="text">
                        <textarea type="text" name="typedMessage" id="typedMessage" rows="3" placeholder="Type the message..." required></textarea>                    </div>
                        <input type="hidden" value="ndayishimiye" id="receiver-name">
                        <div id="message-submit">
                        <input type="submit" value="SEND" id="submit-message">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="test"></div>
    <!--sending and recieving messages with ajax-->
    <script src="messageHandler.js"></script>
    <script>
    document.getElementById("demo").innerHTML = 
     localStorage.getItem("MychatAppMyKey")+" and " +
     localStorage.getItem("MychatAppMyName")+" and " +
     sessionStorage.getItem("MychatAppMyKey")+" and "+
     sessionStorage.getItem("MychatAppMyName");
 </script>
</body>
</html>