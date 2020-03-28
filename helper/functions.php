
<?php

include('../connection.php');
session_start();

$msg = '';



// FUNCTIONS
function present_in_db($channel,$conn){
    
  $sql = "SELECT * FROM admins WHERE username = '$channel'";
     $result = mysqli_query($conn, $sql);
       if (mysqli_num_rows($result) == 0) { 
         return false;
        }else{
            $msg = "Already taken";
            header('Location:../admin.php?m='.$msg);
          return true;
        }     

}
function create_account($channelname,$auth,$conn){
  $sql = "INSERT INTO admins (username,password)
    VALUES ('$channelname', '$auth')";

    if (mysqli_query($conn, $sql)) {
      return true;
    } else {
        return false;
      //   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}



// ADMIN FUNCTIONS
if(isset($_GET['logout']))
{
    session_destroy();
    header("location:../index.html");
}
if(isset($_POST['getadminlogined']))
{
        
    if(empty($_POST['username']) || empty($_POST['password']))
    {
            header("location:../404.html");
    }
    else
    {	    $username = $_POST['username'];
            $password = $_POST['password'];
            $query="select * from admins where username= '$username' and password='$password'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['admin']=$_POST['username'];
                $_SESSION['status']='active';
                header('Location:../adminsuit/admin_util.php');
                
                
            }
            else
            {
                $msg =  mysqli_error($conn) ;
                header('Location:../admin.php?m='.$msg);
            }
    }

}
if(isset($_POST['registerausernow']))
{
        
    if(empty($_POST['username']) || empty($_POST['password']))
    {
      $msg =  "Provide details!";
    }
    else
    {	    $username = $_POST['username'];
            $password = $_POST['password'];

            if(present_in_db($username,$password))
            {
                $msg = "Sorry this username has been already taken";
                header('Location:../admin.php?m='.$msg);
                
            }
            else{
         if(create_account($username,$password,$conn))
         {
            $msg = "Successfully created";
            header('Location:../adminsuit/admin_util.php?m='.$msg);
         }
         else
         {
            $msg = "Some error has been encountered!";
            header('Location:../admin.php?m='.$msg);
         }
        }
    }
    
}


// REQUEST HANDLER
if(isset($_POST['getnewrequest'])){
	       if(!empty($_POST['username']) && !empty($_POST['compliment']))
	       {    
               $user=$_POST['username'];
               $comp=$_POST['compliment'];
               $instagram_id=$_POST['instagramid'];
                $sql = "INSERT INTO requests (user, compliment, instagramid) VALUES ('$user', '$comp','$instagram_id')";
                
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





// VIEW COMPLEMENTS HANDLER
function  getcomplimenentfor($conn,$user)
{
  $sql = "select value from compliments order by rand() limit 4 ";
  if($result = mysqli_query($conn, $sql)){
      if(mysqli_num_rows($result) > 0){                
          while($row = mysqli_fetch_array($result)){
            echo ' '.$row['value'];
          }
        }
      }
}



// HOLDER
if(isset($_GET['getcomplement']))
{
  $user = $_GET['user'];
  if(empty($user))
  {
    header('Location:index.html');
  }else{
    getcomplimenentfor($conn,$user);
  }
}



?>



 <!-- 
                    <div style="height:460px; border-radius: 20px;" class="mx-3 shadow bg-white">
                        <h1 style = " font-weight : 500; color:rgb(34, 119, 96)" class="display1">
                               
                     </h1>
                    </div> -->

                        <!-- 
                    <p class = "shadow  bg-white rounded p-3 text-center text-justify"  style = "color:rgb(34, 119, 96);">     at handlePromise (/home/qaziamaan/.vscode/extensions/knisterpeter.vscode-github-0.30.3/node_modules/execa/index.js:114:26)
                     </p> -->