<?php
include_once('function.php');
if(isset($_GET['del'])){
    $userid = $_GET['del'];
    $seletedata = new DB_con();
    $sql = $seletedata->delete($userid);

if($sql){
    echo "<script> alert('Delete Successfully!');</script>";
    echo "<script> window.location.href='index.php'</script>";
} 
}
?>