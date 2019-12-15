
$(document).ready(function() {

    /* ADDING AND REMOVING EXTRA COLUMN */
    
    /* Adds column when the Add button is clicked */
    
    function addColumn(add_button) { /* add_button = clicked button */

        var add_btn = $(add_button); /* button Jquery */
        var li = add_btn.parent().parent(); /* Li of button */
        var li_container = add_btn.parent().parent().parent(); /* Container of Li */
        var li_last_child = $(li_container).find("li:last-child");
    
        var create_li = li.clone().insertAfter(li_last_child); /* create a copy of that Li under the Li */
    
        var new_li = $(create_li);
    
        var new_h5 = new_li.find("h5").text(""); /* sets text of h5 to an empty string */
    
        var new_select = new_li.find("select"); /* select css */
        new_select.css({"margin-left" : "30px", "width" : "72%", "height" : "35px"});
    
        var new_button = new_li.find("button"); /* new button(= delete column button) */
        new_button.css("background-image", "url('./img/icons/substract.png')"); /* set bg image of new button to substract */
        new_button.prop("onclick", null).off("click"); /* delete addColumn function from new button */
        new_button.on("click", function() {
            removeColumn(this);
        }); /* add removeColumn function to the new button */
    
        new_input = new_li.find("input");
        new_input.val("-"); /* sets value to "-" so that it doesn't copy the count of the parent */   
    
    
    }
    
    /* Removes column when the Substract button is clicked */
    
    function removeColumn(substract_button) { /* substract_button = clicked button */
    
        var substract_btn = $(substract_button); /* button Jquery */
        var current_li = substract_btn.parent().parent(); /* current Li */
        current_li.remove(); /* remove current Li */
    
    }

    $(".column_btn").on("click", function() {
        addColumn(this);
    });
    
    /* SETTING VALUE OF COUNT INPUT */
       
    var select = $("#select_container > select"); 

    $(".order_container").click(function() { /* updates every time user clicks inside the order_container */
        
        var person_count = $("#person > input");
        select = $("#select_container > select"); /* updates select jquery so that it finds the created ones */
        
        $(select).change(function() {   
            var input = $(this).parent().find("input");

            if ($(this).val() != "none") { /* if option isn't "none" */

                if($(this).children(":selected").attr("class") == "person_based") { /* and the option is based on person count, set the value same sa person count */
                    input.val(person_count.val()); 
                }

                else { /* or set to "1" if the option isn't based on people count */
                    input.val("1"); 
                }
            }

            if ($(this).val() == "none") { /* sets value to "-" when user selects "none" */
                input.val("-");
            }
        });
    });
    
    /* GETTING THE FINAL PRICE */
    
    /* Updates final amount text every time user changes select OR everytime user changes input count,
    functions are 10ms delayed so that the input count has time to update */
    
    var final_amount_jquery = $("#final_amount");

    $("#select_container > select").change(function(){ 

        setTimeout(function() {
            
            final_amount_jquery.text(AddUpEveryThing() + " Kč");

        }, 10);
    });

    $("#select_container > input").change(function(){ 

        setTimeout(function() {
            
            final_amount_jquery.text(AddUpEveryThing() + " Kč");

        }, 10);
    });
    
    
     /* Adds up all the selects */
    
    function AddUpEveryThing(final_amount) {
    
        final_amount = 0;
    
        var select = $("li > #select_container");
    
        select.each(function(option_sum, multiplier, result) { /* for each select multiplies count by sum */
    
            option_sum = $(this).find("select").val();
            parseInt(option_sum);
    
            multiplier = $(this).find("input").val();
            
    
            if (multiplier == "-") {
                result = 0;
            }
    
            else {
                
                parseInt(multiplier);
    
                result = multiplier * option_sum;
            }
            
    
            final_amount += result;
    
        });
    
        final_amount = final_amount.toString();
    
        return final_amount;
    }
    
    
    /* Order Confirmation */
    
    function orderSent() {
        let orderConfirmation = $("#order_confirmation");
    
        orderConfirmation.show();
        orderConfirmation.delay(1000).fadeOut(1000);
    }

    $("#submit_btn").on("click", function() {
        orderSent();
    });

});


