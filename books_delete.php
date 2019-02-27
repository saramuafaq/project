<?php
require('conn/conn.php');
$book_id=$_GET['book_id'];
$sql="delete from `books` where `book_id`='$book_id'";
$result=$conn->query($sql);
 header('location:list_books.php');
?>