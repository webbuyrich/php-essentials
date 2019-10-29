<?php
// $_POST['zipcode'] holds the value of the submitted form parameter "zipcode"
$zipcode = trim($_POST['zipcode']);
// Now zipcode holds that value, with any leading or trailing spaces removed
$zip_length = strlen($zipcode);
// Complain if the zip code length is not 5 characters long
if($zip_length != 5){
    print 'Please enter a zip code that is 5 Characters long';
}
?>