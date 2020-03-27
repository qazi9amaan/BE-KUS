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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">

</head>

<body class="dark">
    <header>
        <div id="navbar-full">
            <div id="navbar">
                <nav class="navbar navbar-expand-lg  navbar-dark navbar-ct-black ">
                    <div class="container">
                        <a class="navbar-brand check" href="../index.html"
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
                                    <a href="adminsuit/admin_util.php" class="nav-link">
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

        <div  class="container mt-4">
            <div id = "componentresult" class="card-deck">
                
            </div>
            <br>
            <div class="card-deck">
                <div class="card bg-dark">
                    <div class="card-body text-center">
                        <h1 class="display-2 p-3">+</h1>
                        <h5 class="card-title">ADD COMPLIMENT</h5>
                    </div>
                    <a href="new_compliment.php" class="stretched-link"></a>
                </div>
                <div class="card bg-dark">
                    <div class="card-body text-center">
                        <h1 class="display-2 p-3">+</h1>
                        <h5 class="card-title">CREATE ADMIN</h5>
                    </div>
                    <a href="create_admin.php" class="stretched-link"></a>
                </div>
                <div class="card bg-dark">
                    <div class="card-body text-center">
                        <h1 class="display-2 p-3">+</h1>
                        <h5 class="card-title">HEADINGS</h5>
                    </div>
                    <a href="heading_handler.php" class="stretched-link"></a>
                </div>
            </div>

            

        </div>
    </section>







    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js">
    </script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script src="../js/main.js"></script>

<script>
    
    function initialise_components()
    {
            jQuery.ajax({
                url: "admin_functions.php",
                type: "GET",
                data:'getalldata=true',
                success: function (data) {
                    $('#componentresult').html(data);
                   
                }
            });

    }

    $(document).ready(function () {
        initialise_components();
        var init_comp =  setInterval(initialise_components,3000);
       
    });

</script>

</body>


</html>