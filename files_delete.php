<?php
require('conn/conn.php');
$file_id=$_GET['file_id'];
$sql="delete from `files` where `file_id`='$file_id'";
$result=$conn->query($sql);
 header('location:list_files.php');
?>