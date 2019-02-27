<?php
require('conn/conn.php');
$aud_id=$_GET['aud_id'];
$sql="delete from `audios` where `audio_id`='$aud_id'";
$result=$conn->query($sql);
 header('location:list_audios.php');
?>