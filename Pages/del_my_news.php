<?php
include_once('config/config.php');
    $prd_id = $_GET['id'];    
        $sql_del_my_news ="DELETE FROM `prd_info` WHERE `prd_info`.`prd_id` = $prd_id";
        $query=mysqli_query($conn, $sql_del_my_news);
        header("location: index.php?page_layout=my_news"); 
?>