<?php

$where_form_is="http://".$_SERVER['SERVER_NAME'].strrev(strstr(strrev($_SERVER['PHP_SELF']),"/"));

session_start();
if( ($_SESSION['security_code']==$_POST['security_code']) && (!empty($_POST['security_code'])) ) { 
mail("kasumalgarh@gmail.com","phpFormGenerator - Form submission","Form data:

First name: " . $_POST['field_1'] . " 
Last name: " . $_POST['field_2'] . " 
Email address: " . $_POST['field_3'] . " 
Your Message: " . $_POST['field_4'] . " 


 www.kasumalgarh.com
");

include("confirm.html");
}
else {
echo "Invalid Captcha String.";
}

?>