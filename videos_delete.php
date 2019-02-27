<?php
require('conn/conn.php');
$video_id=$_GET['video_id'];
$sql="delete from `videos` where `video_id`='$video_id'";
$result=$conn->query($sql);
 header('location:list_video.php');
?>