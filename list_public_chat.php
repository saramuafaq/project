<?php
require('conn/conn.php');

$sql="select * from `public_chats`";
$result=$conn->query($sql);
 ?>
  <table border="1" style="color:black"><!__peshi whileaka tr yakam drust dakam cuz try yakam sabta la hamu tableak chunka agar datayaka 100 recordish bi har yak headeri haya loya sbta balam tr y dwam lanaw while a agar headeraka lanaw whileaka bnusm hamu jar hedarerm lo print dakat ka pewest nakat__>
         <tr>
             <th>PUBLIC_CHAT_ID</th>
             <th>PUBLIC_CHAT_NAME</th>
             <th>CHAT_TEXT</th>
             <th>UPLOADED_DATE</th>
             <th>SUBJECT_ID</th>
             <th>USER_NAME</th>
             <th>USER_ID</th>
             <th colspan="2"><a href="new_public_chat.php">New</a></th>
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
         <td><?php echo $row['public_chat_id']; ?></td>
         <td><?php echo $row['public_chat_name']; ?></td>
         <td><?php echo $row['chat_text']; ?></td>
         <td><?php echo $row['uploaded_date']; ?></td>
         <td><?php echo $row['subject_id']; ?></td>
         <td><?php echo $row['user_name']; ?></td>
         <td><?php echo $row['user_id']; ?></td>
         <td><a href="public_chat_delete.php?public_chat_id=<?php echo $row['public_chat_id']; ?>">DLELET</a></td>
         <td><a href="public_chat_edit.php?public_chat_id=<?php echo $row['public_chat_id']; ?>">EDIT</a></td>
     </tr>
<?php
    }
?>
      
       </table>
<?php }?>