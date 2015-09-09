<?php
// Connect to mySQL
$con = mysqli_connect("localhost", "shoutit");

// Test connection
if(mysqli_connect_errno()) {
	echo 'Failed to connect to mySQL: ',mysqli_connect_error();
}
