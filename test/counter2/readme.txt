********************************************************************
	SPYKA WEBMASTER - HTTP://WWW.SPYKA.NET
	FREE WEB TEMPLATES AND RESOURCES FOR WEBMASTERS
********************************************************************

This is a free script by spyka webmaster (http://www.spyka.net)

THIS IS FREE SOFTWARE AND LICENCED UNDER THE GNU GENERAL PUBLIC LICENSE VERSION 2



1. Installation
-----------------------------------------
If you wish for the counter to count only unique hits, open hits.php and change the value of $unique to 1 as commented.

Upload hits.php to the root of your website.

The script will attempt to automatically create the hits.txt file, but if that fails then simply upload the one supplied.

To add to your website place the following code at the top of your pages:

<?php
include('hits.php');
?>

IMPORTANT: This MUST be placed at the very top of the page, as in example.php, before any output.

To display the amount of hits simply use <?=$hits?> anywhere else in the rest of the page, e.g.

<p>This page has had <?=$hits?> hits!</p>

See example.php for an example.


2. Help and support
-----------------------------------------
You can get help, support for this script plus other web design and development tips from our webmaster forums: http://community.spyka.co.uk/forumdisplay.php?f=9


3. Other information
-----------------------------------------
Please contact us if you need more information about this script - spyka.net/contact
