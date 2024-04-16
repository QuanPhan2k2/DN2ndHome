<?php
if (!defined('level')) {
    die('Lỗi');
}  
?>
<?php
session_start();
include_once('config/config.php');
if(isset($_SESSION['email'])){
    $contact_id=$_GET['id'];
    $sql="DELETE FROM contact WHERE contact_id=$contact_id";
    mysqli_query($conn, $sql);
    header('location: index.php?page_layout=contact');
}
else{
    die("Ban khong co quyen");
}
?>

