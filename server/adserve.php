<?php
/*
*	@package name 	: ARB Web Service App
*	@package file 	: adserve.php
*	@package author : MD. Anisur Rahman Bhuyan
*	@package version : 1.0 Beta
*	@package created : 02-11-2015
*/
// Define header content for javascript
header('Content-type: text/javascript');
?>

<!-- Get your server url in a variable -->
var server_url = "http://techpriyo.net/server/";

<!-- Get some random variable -->
var imgnum = <?php echo rand(1,3); ?>;

<!-- Your ads code will here -->
document.write("Your ads here<br/>");
document.write("<img src=\""+server_url+imgnum+".jpg\" alt=\"image\" />");