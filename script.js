$(document).ready(function(){
    // Toggle chatbot
    $(".chatbot-toggler").click(function(){
        $("body").toggleClass("show-chatbot");
    });

    // Handle sending messages
    $("#send-btn").click(function(){
        var message = $(".chat-input textarea").val();
        if(message.trim() !== ''){
            sendMessage(message);
        }
    });

    // Send message function
    function sendMessage(message){
        $(".chatbox").append('<li class="chat outgoing"><span class="material-symbols-outlined">smart_toy</span><p>' + message + '</p></li>');
        $(".chatbox").scrollTop($(".chatbox")[0].scrollHeight);

        // AJAX request to process the message
        $.ajax({
            url: 'process.php',
            type: 'POST',
            data: { message: message },
            success: function(response){
                if(response.trim() !== ''){
                    $(".chatbox").append('<li class="chat incoming"><span class="material-symbols-outlined">smart_toy</span><p>' + response + '</p></li>');
                } else {
                    $(".chatbox").append('<li class="chat incoming"><span class="material-symbols-outlined">smart_toy</span><p>Sorry, I couldn\'t understand you.</p></li>');
                }
                $(".chatbox").scrollTop($(".chatbox")[0].scrollHeight);
            },
            error: function(){
                $(".chatbox").append('<li class="chat incoming"><span class="material-symbols-outlined">smart_toy</span><p>Sorry, an error occurred.</p></li>');
                $(".chatbox").scrollTop($(".chatbox")[0].scrollHeight);
            }
        });

        // Clear the input field
        $(".chat-input textarea").val('');
    }
});
