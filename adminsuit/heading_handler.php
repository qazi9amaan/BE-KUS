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
                                    <a href="   admin_util.php" class="nav-link">
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
       
        <div class="container mt-4">
           
                <div class="card text-white bg-dark mb-3 text-center">
            
                 
                    <div class="card-body">
                        <h5 class="card-title" >Wal pakeow seth</h5>
                        <hr>
                      <p class="card-text text-justify p-3">
                        We are enhancing our database with kashmiri phrases. If you're good at kashmiri
                        phrases, compliments. Please supports us and contribute here and get connected to us. Share your
                        view, we'll appreciate it!
                        </p>

                     
                            <div class="col-12">
                            
                                <div class="md-form ml-3" style="margin-top: -3px;">
                                    <textarea required id="title" class="md-textarea form-control" rows="2" placeholder = "Heading Title"></textarea>
                                </div>
                                <div class="md-form ml-3" style="margin-top: -3px;">
                                    <textarea required id="description" class="md-textarea form-control" rows="3" placeholder = "Heading Description" ></textarea>
                                  </div>
                            </div>

                            <div class="col-12">
                                    <div class="form-inline text-right pull-right col-xs-6">
                                
                                    <button id = "upload_btn" class="btn btn-outline-amber sm pull-right" >Upload</button>
                                </div> 
                            </div>
                            <div id="result">

                            </div>
                       


                        <p class="card-text mt-3 mb-3 "><small class="text-muted">Shukriya jinab</small></p>
                    </div>
            </div>
        
        </div>
    </section>


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
                data:'getheadings=true',
                success: function (data) {
                    $('#request_result').html(data);

                }
            });

        }

        $(document).ready(function () {
            initialize_components();
            var init_comp = setInterval(initialize_components, 1000000000);
            
            $('#upload_btn').click(function(){
                    
                    jQuery.ajax({
                    url:"admin_functions.php",
                    type:"POST",
                    data: {
                        uploadheadings:true,
                        title :  $('#title').val(),
                        description : $('#description').val(),
                            
                        },
                        success:function(data){  
                            $('#result').html(data);
                            $('#title').val('');
                            $('#description').val('');
                            initialize_components();
                            }  
                    });

});

        });

        // DELETING THE COMPLIMENT
        $(document).on('click', '#remove_heading_btn', function(){  
           var id= $(this).data("heading_id"); 
           $.ajax({  
                     url:"admin_functions.php",  
                     method:"POST",  
                     data:{
                         deleteheading:true,
                         id:id,
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