<?php include 'connection.php'; ?>
<?php 

    $id=$_GET['ids'];
    $delsql = "DELETE from applicant WHERE id=$id";
    if(mysqli_query($conn, $delsql)){
        header('Location: admin_dash.php');
    }
?>