<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Vote - Maker@PestaSains</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="index">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i> </button> <a class="navbar-brand page-scroll" href="#page-top">Maker@PestaSains</a> </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li> <a class="page-scroll" href="#vote">VOTE</a> </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading">Halo!</div>
                <div class="intro-lead-in">Kami butuh suaramu untuk menentukan stand terbaik</div><a href="#vote" class="page-scroll btn btn-xl">Tentukan Pilihan</a> </div>
        </div>
    </header>
    <!-- Services Section -->
    <section id="vote">
        <style>
            .brightness {
                background-color: white;
                display: inline-block;
            }
            
            .brightness img:hover {
                opacity: .5;
            }
        </style>
        <div class="container">
            <div class="brightness">
                <div class="row text-center">
                    <h2 class="section-heading">Stand mana yang menurutmu paling menarik?</h2>
                    <h3 class="section-subheading text-muted">Tentukan pilihanmu di sini!</h3> </div>
                <div class="row text-center">
                    <div class="col-md-3">
                        <a href="#"  data-toggle="modal" data-target="#mod1"><img height="200px" src="stat.png"></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"  data-toggle="modal" data-target="#mod2"><img height="200px" src="gfm.png"></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"  data-toggle="modal" data-target="#mod3"><img height="200px" src="bio.png"></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" data-toggle="modal" data-target="#mod4"><img height="200px" src="kimia.png"></a>
                    </div>
                </div>
                <br>
                <br>
                <div class="row text-center">
                    <div class="col-md-3">
                        <a href="#"  data-toggle="modal" data-target="#mod5"> <img height="200px" src="mate.png"> </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"  data-toggle="modal" data-target="#mod6"> <img height="200px" src="ilkom.png"></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"  data-toggle="modal" data-target="#mod7"><img height="200px" src="fisika.png"> </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"  data-toggle="modal" data-target="#mod8"><img height="200px" src="biokim.png"> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!--Modal-->
    <style>
        .center {
            margin-top: 50px;
        }
        
        .modal-header {
            padding-bottom: 5px;
        }
        
        .modal-footer {
            padding: 0;
        }
        
        .modal-footer .btn-group button {
            height: 40px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border: none;
            border-right: 1px solid #ddd;
        }
        
        .modal-footer .btn-group:last-child > button {
            border-right: 0;
        }
    </style>
    <?php
$dep = array("","Statistika","Geofisika dan Meteorologi", "Biologi","Kimia","Matematika","Ilmu Komputer","Fisika","Biokimia");

$i=1;
while($i<9){?>
        <!-- line modal -->
        <div class="modal fade" id="mod<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h3 class="modal-title" id="lineModalLabel">Sudah Yakin dengan 
            Pilihanmu?</h3> </div>
                    <div class="modal-body">
                        <div class="intro-lead-in">Kamu yakin menurutmu Stand <b><?php echo $dep[$i];?></b> adalah yang terbaik?</div>
                        <br>
                        <br>
                        <br>
                        <div class="modal-footer">
                            <div class="btn-group btng-group-right" role="group"> <a class="btn btn-primary" href="vote.php?idmaker=<?php echo $i;?>">Ya, Saya Yakin</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $i=$i+1;} ?>
            <!-- jQuery -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
            <!-- Plugin JavaScript -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
            <!-- Contact Form JavaScript -->
            <script src="js/jqBootstrapValidation.js"></script>
            <script src="js/contact_me.js"></script>
            <!-- Theme JavaScript -->
            <script src="js/agency.min.js"></script>
</body>

</html>