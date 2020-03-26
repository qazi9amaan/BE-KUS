<?php
    
	    include('../connection.php');
		if(isset($_POST['getnewrequest']))
	    {
	       if(!empty($_POST['username']) && !empty($_POST['compliment']))
	       {    
               $user=$_POST['username'];
               $comp=$_POST['compliment'];
                $sql = "INSERT INTO requests (user, compliment) VALUES ('$user', '$comp')";
                
                if (mysqli_query($conn, $sql)) {
                    echo "<p style = 'color:green;'> Thankyou!</p>";
                } else {
                    echo "< p style = 'color:red;'> Error: " . mysqli_error($conn) . "</p>";
                }
            
           }
           else{
            echo "<p style = 'color:red;' > Hayhaii kyasa jinab!</p>";
           }
        }



?>