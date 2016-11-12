<?php 
include 'connect.php';
$idmaker=$_GET['idmaker'];
mysqli_query($connect,"insert into log_vote (maker_id) values($idmaker)");
echo "
    <script>
        document.location.href = 'berhasil';
    </script>"
?>

