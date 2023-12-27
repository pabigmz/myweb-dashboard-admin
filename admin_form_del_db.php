<?php
    include("connect/connect.php");

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM users WHERE user_id = $id";

    $query = mysqli_query($conn, $sql);

    if($query){
        echo "<script> window.location='index_admin.php'</script>";
    }else{
        header('index_admin.php');
    }

?>