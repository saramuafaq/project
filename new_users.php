

<?php
if(isset($_POST['submit'])){
    

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $status=$_POST['status'];
    $title=$_POST['title'];
    $number=$_POST['number'];
   
    
 require('conn/conn.php');
     
$sql="insert into `users`(`full_name`,`email`,`user_password`,`gender`,`user_status`,`title`,`phone_number`)
VALUES('$name','$email','$password','$gender','$status','$title','$number')";

$result=$conn->query($sql);
    header('Location:list_user.php');
}
?>
<form action="" method="post">
    name:<input type="text" name="name"><br>
    email:<input type="text" name="email"><br>
    password:<input type="text" name="password"><br>
     gender:<input type="text" name="gender"><br>
     status:<input type="number" name="status"><br>
     title:<input type="number" name="title"><br>
     phone_number:<input type="number" name="number"><br>
   
    <input type="submit" value="add" name="submit">
</form>