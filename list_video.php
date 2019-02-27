<?php
require('conn/conn.php');

$sql="select * from `audios`";
$result=$conn->query($sql);
 ?>
  <table border="1" style="color:black"><!__peshi whileaka tr yakam drust dakam cuz try yakam sabta la hamu tableak chunka agar datayaka 100 recordish bi har yak headeri haya loya sbta balam tr y dwam lanaw while a agar headeraka lanaw whileaka bnusm hamu jar hedarerm lo print dakat ka pewest nakat__>
         <tr>
             <th>VIDEO_ID</th>
             <th>VIDEO_TITLE</th>
             <th>VIDEO_DESCRIPTION</th>
             <th>LINK</th>
             <th>DURATION</th>
             <th>UPLOADED_DATE</th>
             <th>VIDEO_STATUS</th>
             <th>INSTRUCTOR_NAME</th>
             <th>LESSON_NAME</th>
             <th>LESSON_ID</th>
             <th>UPLOADED_BY</th>
             <th>USER_ID</th>
             <th colspan="2"><a href="new_video.php">New</a></th>
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
         <td><?php echo $row['video_id']; ?></td>
         <td><?php echo $row['video_title']; ?></td>
         <td><?php echo $row['video_description']; ?></td>
         <td><?php echo $row['link']; ?></td>
         <td><?php echo $row['duration']; ?></td>
         <td><?php echo $row['uploaded_date']; ?></td>
         <td><?php echo $row['video_status']; ?></td>
         <td><?php echo $row['instructor_name']; ?></td>
         <td><?php echo $row['lesson_name']; ?></td>
         <td><?php echo $row['lesson_id']; ?></td>
         <td><?php echo $row['uploaded_by']; ?></td>
         <td><?php echo $row['user_id']; ?></td>
         <td><a href="video_delete.php?video_id=<?php echo $row['video_id']; ?>">DLELET</a></td>
         <td><a href="video_edit.php?video_id=<?php echo $row['video_id']; ?>">EDIT</a></td>
     </tr>
<?php
    }
?>
      
       </table>
<?php }?>