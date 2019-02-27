<?php
require('conn/conn.php');

$sql="select * from `users`";
$result=$conn->query($sql);
 ?>
  <table border="1" style="color:black"><!__peshi whileaka tr yakam drust dakam cuz try yakam sabta la hamu tableak chunka agar datayaka 100 recordish bi har yak headeri haya loya sbta balam tr y dwam lanaw while a agar headeraka lanaw whileaka bnusm hamu jar hedarerm lo print dakat ka pewest nakat__>
         <tr>
             <th>USER_ID</th>
             <th>FULL_NAME</th>
             <th>EMAIL</th>
             <th>USER_PASSWORD</th>
             <th>GENDER</th>
             <th>USER_STATUS</th>
             <th>TITLE</th>
             <th>PHONE_NUMBER</th>
             <th colspan="2"><a href="new_users.php">New</a></th>
         </tr>
 
<?php
if($result->num_rows>0)//la num_rows pet dale outputy aw queryay tu chand rowa u gawratr la 0 yani datay tedaya pet ble ok
{
    //echo"ok";
   
    while($row=$result->fetch_assoc())//fetch_assoc eshi awaya datay query result dakata array u retrieve data
    {
        //echo "id=".$row['st_id']."/name=".$row['st_name']."<br>";//kama fild btawe peshan bda awa aw e3aza bakar bina $row['fildaka']
        ?>
     <tr>
         <td><?php echo $row['user_id']; ?></td>
         <td><?php echo $row['full_name']; ?></td>
         <td><?php echo $row['email']; ?></td>
         <td><?php echo $row['user_password']; ?></td>
         <td><?php echo $row['gender']; ?></td>
         <td><?php echo $row['user_status']; ?></td>
         <td><?php echo $row['title']; ?></td>
         <td><?php echo $row['phone_number']; ?></td>
         <td><a href="users_delete.php?user_id=<?php echo $row['user_id']; ?>">DLELET</a></td>
         <td><a href="user_edit.php?user_id=<?php echo $row['user_id']; ?>">EDIT</a></td>
     </tr>
<?php
    }
?>
      
       </table>
<?php }?>