<?php
require('conn/conn.php');

$sql="select * from `lessons`";
$result=$conn->query($sql);
 ?>
  <table border="1" style="color:black"><!__peshi whileaka tr yakam drust dakam cuz try yakam sabta la hamu tableak chunka agar datayaka 100 recordish bi har yak headeri haya loya sbta balam tr y dwam lanaw while a agar headeraka lanaw whileaka bnusm hamu jar hedarerm lo print dakat ka pewest nakat__>
         <tr>
             <th>L_ID</th>
             <th>L_NAME</th>
             <th>SUBJ_ID</th>
             <th>SUBJ_NAME</th>
             <th colspan="2"><a href="new_lesson.php">New</a></th>
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
         <td><?php echo $row['lesson_id']; ?></td>
          <td><?php echo $row['lesson_name']; ?></td>
          <td><?php echo $row['subject_id']; ?></td>
          <td><?php echo $row['subject_name']; ?></td>
         <td><a href="lesson_delete.php?less_id=<?php echo $row['lesson_id']; ?>">DLELET</a></td>
          <td><a href="lesson_edit.php?less_id=<?php echo $row['lesson_id']; ?>">EDIT</a></td>
     </tr>
<?php
    }
?>
      
       </table>
<?php }?>