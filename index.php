<?php
// Format pricing with $%.2f
$price = 5;
$tax = 0.075;
printf('The dish costs $%.2f', $price * (1 + $tax));
echo '<br />';

// Zero padding with printf()
$zip = '6520';
$month = 2;
$day = 6;
$year  =  2019;
printf("ZIP is %05d and the date is %02d/%02d/%d", $zip, $month, $day, $year);
?>