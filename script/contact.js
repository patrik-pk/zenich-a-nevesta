
$(document).ready(function() {
    // Form On Submit
    $(".contact_form").submit(function (e) {
        e.preventDefault();

        const form_message = $(".form_message")

        // If submited and no message => create one
        if (form_message.children().length === 0) {
            const fail_message = `Omlouváme se, ale tato funkce bohužel nefunguje, jelikož
            Netlify nepodporuje PHP, na kterém je funkce postavena.`
            const fail_p = `<p id="contact_fail">${fail_message}</p>`

            // remove the message after timeout
            setTimeout(function () {
                $("#contact_fail").remove()
            }, 15000)

            form_message.append(fail_p);
        }
    });
});