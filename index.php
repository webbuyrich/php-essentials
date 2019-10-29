<?php
if($_POST['email'] == 'johndoe@gmail.com'){
    print 'Welcome John Doe';
}

// Compare strings case insensitively
if (strcasecmp($_POST['email'], 'johndoe@gmail.com') == 0 ){
    print 'Welcome back John Doe';
}
?>