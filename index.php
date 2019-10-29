<?php
// $_POST['zipcode'] holds the value of the submitted form parameter "zipcode"
// Now zipcode holds that value, with any leading or trailing spaces removed
// Complain if the zip code length is not 5 characters long
if(strlen(trim($_POST['zipcode'])) != 5){
    print 'Please enter a zip code that is 5 Characters long';
}
?>