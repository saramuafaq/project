<?php
require('conn/conn.php');
$news_id=$_GET['news_id'];
$sql="delete from `newses` where `news_id`='$news_id'";
$result=$conn->query($sql);
 header('location:list_newses.php');
?>