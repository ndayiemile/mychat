document.getElementById("send-message").addEventListener('submit',loadmessages);
function loadmessages(e){
    e.preventDefault();
    var xhr = new XMLHttpRequest();
    var sent_message = document.getElementById("typedMessage").value;
    xhr.open('GET','messages.php?message='+sent_message,true);
    xhr.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){
            var jsonMessages =JSON.parse(this.responseText);
            var chatText ="";
            for(var i in jsonMessages){
                if(jsonMessages[i].identifier =="in"){
                    chatText +='<div id="message-in">'+
                                '<img class="chat-img" src="resources/user_avatar.jpg" alt="user avatar">'+ 
                                '<div class="message-text">'+jsonMessages[i].message+'</div>'+
                                '</div>';
                }
                else{
                    chatText +='<div id="message-out">'+
                                '<img class="chat-img" src="resources/Favatar_1.jpg" alt="user avatar">'+ 
                                '<div class="message-text">'+jsonMessages[i].message+'</div>'+
                                '</div>';
                }
            }
            document.getElementById("chat-messages").innerHTML = chatText; 
        }
    }
    xhr.send();
}