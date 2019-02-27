<?php
require('conn/conn.php');

$sql="select * from `books`";
$result=$conn->query($sql);
 ?>
  <table border="1" style="color:black"><!__peshi whileaka tr yakam drust dakam cuz try yakam sabta la hamu tableak chunka agar datayaka 100 recordish bi har yak headeri haya loya sbta balam tr y dwam lanaw while a agar headeraka lanaw whileaka bnusm hamu jar hedarerm lo print dakat ka pewest nakat__>
         <tr>
             <th>BOOK_ID</th>
             <th>BOOK_NAME</th>
             <th>PAGES</th>
             <th>CHAPTER_NUMBER</th>
             <th>AUTHOR</th>
             <th>UPLOADED_DATE</th>
             <th>AUDIO_STATUS</th>
             <th>BOOK_COVER</th>
             <th>LINK</th>
             <th>SUBJECT_NAME</th>
             <th>SUBJECT_ID</th>
             <th>UPLOADED_BY</th>
             <th>USER_ID</th>
             <th colspan="2"><a href="new_book.php">New</a></th>
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
         <td><?php echo $row['book_id']; ?></td>
         <td><?php echo $row['book_name']; ?></td>
         <td><?php echo $row['pages']; ?></td>
         <td><?php echo $row['chapter_number']; ?></td>
         <td><?php echo $row['Author']; ?></td>
         <td><?php echo $row['uploaded_date']; ?></td>
         <td><?php echo $row['audio_status']; ?></td>
         <td><?php echo $row['book_cover']; ?></td>
         <td><?php echo $row['link']; ?></td>
         <td><?php echo $row['subject_name']; ?></td>
         <td><?php echo $row['subject_id']; ?></td>
         <td><?php echo $row['uploaded_by']; ?></td>
         <td><?php echo $row['user_id']; ?></td>
         <td><a href="book_delete.php?book_id=<?php echo $row['book_id']; ?>">DLELET</a></td>
         <td><a href="book_edit.php?book_id=<?php echo $row['book_id']; ?>">EDIT</a></td>
     </tr>
<?php
    }
?>
      
       </table>
<?php }?>