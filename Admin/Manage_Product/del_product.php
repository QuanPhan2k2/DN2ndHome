
<?php
session_start();
include_once('config/config.php');
if(isset($_SESSION['email'])){
    $id_prd=$_GET['id'];
    $sql="DELETE FROM prd_info WHERE prd_id='$id_prd'";
    mysqli_query($conn, $sql);
    header('location: index.php?page_layout=product');
    echo $sql;
}
else{
    die("Ban khong co quyen");
}
?>

