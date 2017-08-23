//Getting value from "ajax.php".
 
function fill(Value) {
 
   //Assigning value to "search" div in "search.php" file.
 
   $('#searchterm').val(Value);
 
   //Hiding "display" div in "search.php" file.
 
   $('#display').hide();
 
}
 
$(document).ready(function() {
 
   //On pressing a key on "Search box" in "search.php" file. This function will be called.
   $("#searchterm").keyup(function() {
 
       //Assigning search box value to javascript variable named as "name".
       var name = $('#searchterm').val();
 
       //Validating, if "name" is empty.
        if (name == "") {
 
           //Assigning empty value to "display" div in "search.php" file.
            $("#display").html("");
}
 
       //If name is not empty.
       else {
 
           //AJAX is called.
           $.ajax({
 
               //AJAX type is "Post".
               type: "POST",
 
               //Data will be sent to "showcust_function.php".
               url: "showcust_function.php",
 
               //Data, that will be sent to "showcust_function.php".
               data: {
 
                   //Assigning value of "name" into "searchterm" variable.
                   searchterm: name
               },
 
               //If result found, this funtion will be called.
               success: function(html) {
 
                   //Assigning result to "display" div in "search.php" file.
                    $("#display").html(html).show();
                }
            });
        }
    });
 });


