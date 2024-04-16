<?php
include_once('config/config.php');
    $prd_id = $_GET['id'];
        $sql_del_saved_new ="DELETE FROM cart_new WHERE user_id = $user_id AND id_prd = $prd_id";
        $query=mysqli_query($conn, $sql_del_saved_new);
        // echo '<script> alert("Hủy lưu thành công");</script>';
        header("location: index.php?page_layout=save");
?>