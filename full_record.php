

<?php include 'header.php'; ?>
<?php //print_r($single_record); ?>
<?php while($row = $single_record->fetch_assoc()): ?>
<!-- Grid -->
<div class="w3-row">
   <!-- Blog entries -->
   <div class="w3-col 12">
      <!-- Blog entry -->
      <div class="w3-card-4 w3-margin w3-white">
         <!--img src="/w3images/woods.jpg" alt="Nature" style="width:100%"-->
         <div class="w3-container">
            <?php $item_name= $row['Item_Name']; 
               $object_class= $row['Object_Class']; 
               $procedures= $row['Procedures'];
               $image= $row['Image'];
               $description= $row['Description'];
               $reference= $row['Reference'];?>
            <?php if (!empty($item_name)) { ?>
            <h3><b style="color: #D43F3A; ">Item #:</b>  <?php echo $item_name; ?></h3>
            <?php } ?>
            <?php if (!empty($object_class)) { ?>
            <h5><b style="color: #D43F3A; ">Object Class:</b> <span class="w3-opacity"><?php echo $object_class; ?></span></h5>
            <?php } ?>
            <?php if (!empty($procedures)) { ?>
            <h5><b style="color: #D43F3A; ">Procedures:</b> </h5>
            <p><?php echo str_replace('\n', '<br><br>', $procedures); ?></p>
            <?php } ?>
            <?php if (!empty($image)) { ?>
            <img src="../images/<?php echo $image; ?>" />
            <?php } ?>
            <?php if (!empty($description)) { ?>
            <h5><b style="color: #D43F3A; ">Description: </b></h5>
            <p><?php echo $description = str_replace('\n', '<br><br>', $description);  ?></p>
            <?php } ?>
            <?php if (!empty($reference)) { ?>
            <h5><b style="color: #D43F3A; ">Reference:</b> </h5>
            <p><?php echo str_replace('\n', '<br><br>', $reference);  ?></p>
            <?php } ?>
         </div>
      </div>
      <hr>
      <!-- END GRID -->
   </div>
   <br>
   <!-- END w3-content -->
</div>
<?php endwhile; ?>
<p>&nbsp;</p>
<?php include 'footer.php'; ?>

