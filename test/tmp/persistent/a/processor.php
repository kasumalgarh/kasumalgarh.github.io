<?php

$where_form_is="http://".$_SERVER['SERVER_NAME'].strrev(strstr(strrev($_SERVER['PHP_SELF']),"/"));

mail("kasumalgarh@gmail.com","phpFormGenerator - Form submission","Form data:

Your Full Name: " . $_POST['field_1'] . " 
Your Email: " . $_POST['field_2'] . " 
Your Message: " . $_POST['field_3'] . " 


 powered by phpFormGenerator.
");

include("confirm.html");

?>