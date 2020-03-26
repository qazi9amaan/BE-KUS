<?php
    session_start();

   
    if(!isset($_SESSION['status'])){
        header('Location:../index.html');
    }
?>


<html lang="en">



<head>
    <meta charset="UTF-8">
    <title>BE-KUS | CONNECT TO US</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    <link href="../css/ct-navbar.css" rel="stylesheet" />
    <link rel="stylesheet" href="../fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/main.css">

</head>

<body class="dark">
    <header>
        <div id="navbar-full">
            <div id="navbar">
                <nav class="navbar navbar-expand-lg  navbar-dark navbar-ct-black ">
                    <div class="container">
                        <a class="navbar-brand check" href="admin_util.php"
                            style="font-size: 25px;font-weight: 400; ">BE-KUS | ADMIN </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent">
                            <span class="navbar-toggler-icon"></span>
                        </button>


                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav  ml-auto">


                                <?php 

                            if(isset($_SESSION['status'])){
                            ?>
                                <li class="nav-item">
                                    <a href="create_admin.php" class="nav-link">
                                        <i class="pe-7s-users"></i>
                                        <p>Create Admin</p>
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a href="admin_util.php" class="nav-link">
                                        <i class="pe-7s-user"></i>
                                        <p>Account</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="../helper/functions.php?logout=1" class="nav-link">
                                        <i class="pe-7s-power"></i>
                                        <p>Logout</p>
                                    </a>
                                </li>
                                <?php 
                                }
                                else{
                                ?>
                                <li class="nav-item ">
                                    <a href="#" class="nav-link">
                                        <i class="pe-7s-science"></i>
                                        <p>Name</p>
                                    </a>
                                </li>

                                <li class="nav-item ">
                                    <a href="#" class="nav-link">
                                        <i class="pe-7s-loop"></i>
                                        <p>Friends</p>
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a href="login.php" class="nav-link">
                                        <i class="pe-7s-user"></i>
                                        <p>Login</p>
                                    </a>
                                </li>
                                <?php
                                }
                                ?>





                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    </header>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <section>

        <div class="container mt-5">
            <div id = "request_result" class="list-group bg-dark">
            </div>
        </div>
    </section>







    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.4.5/js/ajax-bootstrap-select.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="../js/main.js"></script>

    <script>
        function initialize_components() {
            jQuery.ajax({
                url: "admin_functions.php",
                type: "GET",
                data:'getcompliments=true',
                success: function (data) {
                    $('#request_result').html(data);

                }
            });

        }

        $(document).ready(function () {
            initialize_components();
            var init_comp = setInterval(initialize_components, 1000000000);

        });

        // DELETING THE COMPLIMENT
        $(document).on('click', '#remove_complement_btn', function(){  
           var id= $(this).data("compliment_id"); 
           $.ajax({  
                     url:"admin_functions.php",  
                     method:"POST",  
                     data:{
                         deletecomplement:true,
                         id:id,
                        },  
                     dataType:"text",  
                     success:function(data){  
                        initialize_components();  
                     }  
                });  
      }); 
      
      
       // EDITING THE COMPLIMENT
       $(document).on('click', '#edit_complement_btn', function(){  
           var id= $(this).data("compliment_id"); 
           var value = prompt("New");
           $.ajax({  
                     url:"admin_functions.php",  
                     method:"POST",  
                     data:{
                         editcomplement:true,
                         id:id,
                         value:value,
                        },  
                     dataType:"text",  
                     success:function(data){  
                        initialize_components();  
                     }  
                });  
      }); 
      
      
    </script>

</body>


</html>