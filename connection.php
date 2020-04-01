
<?php
	
		 $dbhost = "localhost";
		 $dbuser = "root";
		 $dbpass = "9419002492";
		 $db = "bekus";
		 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
		
?>
