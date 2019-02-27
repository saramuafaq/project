<?php
require('conn/conn.php');
$sub_id=$_GET['sub_id'];
$sql="delete from `subjects` where `subject_id`='$sub_id'";
$result=$conn->query($sql);
 header('location:list_subject.php');
?>