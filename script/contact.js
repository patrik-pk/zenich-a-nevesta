
$(document).ready(function() {
    function messageSent() {
        let messageConfirmation = $("#message_confirmation");
    
        messageConfirmation.show();
        messageConfirmation.delay(1000).fadeOut(1000);
    }

    $("#submit_btn").on("click", function() {
        messageSent();
    });
});
