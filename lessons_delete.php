<?php
require('conn/conn.php');
$less_id=$_GET['less_id'];
$sql="delete from `lessons` where `lesson_id`='$less_id'";
$result=$conn->query($sql);
 header('location:list_lesson.php');
?>