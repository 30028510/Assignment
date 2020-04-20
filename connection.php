

<?php
   // Create Database credential variables
   $user = "a3002851_a30028510";
   $password = "Toiohomai1234";
   $db = "a3002851_location";
   
   // Create php db connection object
   $connection = new mysqli('localhost', $user, $password, $db) or die(mysqli_error($connection));
   
   // Get all data from the table and save in a variable for use on our page application
   //$result = $connection->query("select * from up_table") or die($connection->error);
      if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 3;
        $offset = ($pageno-1) * $no_of_records_per_page;
     $total_pages_sql = "SELECT COUNT(*) FROM up_table ORDER BY Sno DESC";
        $result = mysqli_query($connection,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM up_table LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($connection,$sql);
   
   // Check if form has been filled out by checking POST value, then insert form contents into database.
   if(isset($_POST['submit']))
   {  $id= $_GET['id']; 
   $single_record = $connection->query("select * from up_table where Sno=$id") or die($connection->error); } //echo $id;
   
   if(isset($_POST['insert']))
   {     
     $item_name = $_POST['item_name'];
     $object_class = $_POST['object_class'];
     $image_up = $_POST['image_up'];	  
     $procedure = $_POST['procedure'];
     $discription = $_POST['discription'];
     $references = $_POST['references'];
   
     $connection->query("insert into up_table(Item_Name,Object_Class,Image,Procedures,Description,Reference) values('$item_name','$object_class','$image_up','$procedure','$discription','$references')")
       or die($connection->error);
       ?>
       <div class="alert alert-success">
  <strong>Success!</strong> Record is successfully Add in Database<br>Click on this <a href="https://30028510.2020.labnet.nz/assignment">here</a> for check your record
</div>
       <?php     //  header("Location: index.php");
   } 
   else { //echo "No";
   }	
   
   
   if(isset($_POST['search']))
   {     $search_record = $_POST['search_type'];
         $search_match_record = $connection->query("select * from up_table where Item_Name LIKE '$search_record%' ORDER BY Sno DESC") or die($connection->error); 
         
     }   else { //echo "No";
     }
   ?>
