<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Hasil Vote - Maker@PestaSains</title>
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
<?php include 'connect.php';
    $stat=mysqli_fetch_array(mysqli_query($connect,"select count(id) as jum from log_vote where maker_id=1"));
    $gfm=mysqli_fetch_array(mysqli_query($connect,"select count(id) as jum from log_vote where maker_id=2"));
    $bio=mysqli_fetch_array(mysqli_query($connect,"select count(id) as jum from log_vote where maker_id=3"));
    $kim=mysqli_fetch_array(mysqli_query($connect,"select count(id) as jum from log_vote where maker_id=4"));
    $mat=mysqli_fetch_array(mysqli_query($connect,"select count(id) as jum from log_vote where maker_id=5"));
    $kom=mysqli_fetch_array(mysqli_query($connect,"select count(id) as jum from log_vote where maker_id=6"));
    $fis=mysqli_fetch_array(mysqli_query($connect,"select count(id) as jum from log_vote where maker_id=7"));
    $biokim=mysqli_fetch_array(mysqli_query($connect,"select count(id) as jum from log_vote where maker_id=8"));
    $jumlah=mysqli_fetch_array(mysqli_query($connect,"select count(id) as jum from log_vote"));
    ?>
<body id="page-top" class="index">
        <div class="container">
            <br>
            <br>
            <br>
            <table class="table-striped">
                <thead>
                    <th width="20%">Departemen</th>
                    <th width="20%">Jumlah Vote</th>
                    <th width="20%">Persentase</th>
                </thead>
                <tr>
                    <td>Statistika</td>
                    <td><?php echo $stat['jum'];?></td>
                    <td><?php echo round($stat['jum']/$jumlah['jum']*100);?> %</td>
                </tr>
                 <tr>
                    <td>Geofisika dan Meteorologi</td>
                    <td><?php echo $gfm['jum'];?></td>
                     <td><?php echo round($gfm['jum']/$jumlah['jum']*100);?> %</td>
                </tr>
                 <tr>
                    <td>Biologi</td>
                    <td><?php echo $bio['jum'];?></td>
                     <td><?php echo round($bio['jum']/$jumlah['jum']*100);?> %</td>
                </tr>
                 <tr>
                    <td>Kimia</td>
                    <td><?php echo $kim['jum'];?></td>
                     <td><?php echo round($kim['jum']/$jumlah['jum']*100);?> %</td>
                </tr>
                 <tr>
                    <td>Matematika</td>
                    <td><?php echo $mat['jum'];?></td>
                     <td><?php echo round($mat['jum']/$jumlah['jum']*100);?> %</td>
                </tr>
                 <tr>
                    <td>Ilmu Komputer</td>
                    <td><?php echo $kom['jum'];?></td>
                     <td><?php echo round($kom['jum']/$jumlah['jum']*100);?> %</td>
                </tr>
                 <tr>
                    <td>Fisika</td>
                    <td><?php echo $fis['jum'];?></td>
                     <td><?php echo round($fis['jum']/$jumlah['jum']*100);?> %</td>
                </tr>
                 <tr>
                    <td>Biokimia</td>
                    <td><?php echo $biokim['jum'];?></td>
                     <td><?php echo round( $biokim['jum']/$jumlah['jum']*100);?> %</td>
                </tr>
                
                
            </table>
            
            <h3>Jumlah Voter : <?php echo $jumlah['jum'];?></h3>
            
        </div>
   
</body>

</html>