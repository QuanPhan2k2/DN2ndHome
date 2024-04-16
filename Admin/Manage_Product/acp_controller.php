
<?php 

include_once('config/config.php');

    $prd_id=$_GET['id'];
    $sql="UPDATE prd_info SET prd_status='2' WHERE prd_id='$prd_id'";
    $query=mysqli_query($conn, $sql);
    header('location: index.php?page_layout=acp_product');
    
?>