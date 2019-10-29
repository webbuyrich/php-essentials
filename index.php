<?php
$price = 3.95;
$tax_rate = 0.08;
$tax_amount = $price * $tax_rate;
$total_cost = $price + $tax_amount;

$username = 'james';
$domain = '@example.com';
$email_address = $username . $domain;

print 'The tax is ' . $tax_amount;
print "<br />"; //this prints a line break
print 'The total cost is ' . $total_cost;
print "<br />"; // this prints a line break
echo $email_address;

//Example 2.18 Combined assignment and addition
// Add 3 the regular way
$price = $price + 3;
echo '<br /> price + 3 = ' . $price;

// 3 with the combined operator
$price += 3;
echo '<br /> price + 6 = ' . $price; 

// Example 2.19 Combined assignment and concatenation
// Concatenate $domain to the end of $username the regular way
$username = $username . $domain;
echo '<br /> ' . $username;
// Concatenate with combined operator
$username2 = 'richard';
$username2 .= $domain;
echo '<br /> ' . $username2;
?>