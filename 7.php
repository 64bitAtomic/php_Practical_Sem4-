<?php 
function email_validation($str) { 
	return (!preg_match( 
"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $str)) 
		? FALSE : TRUE; 
} 

if(!email_validation("alexzender@eample.com")) { 
	echo "Invalid email address."; 
} 
else { 
	echo "Valid email address."; 
} 

?> 
