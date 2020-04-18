

<?php include 'header.php'; ?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" method="post" action="#">
   <fieldset>
      <!-- Form Name -->
      <div class="form-group">
         <label class="col-md-4 control-label">
            <h3><b>Create New Item</b></h3>
         </label>
      </div>
      <!-- Text input-->
      <div class="form-group">
         <label class="col-md-2 control-label">Item Name: </label>  
         <div class="col-md-4">
            <input id="item_name" name="item_name" placeholder="Please Enter Item Name" class="form-control input-md" type="text" required >
         </div>
         <label class="col-md-1 control-label" for="object_class">Object Class: </label>  
         <div class="col-md-4">
            <input id="object_class" name="object_class" placeholder="Please Enter Object Class" class="form-control input-md" type="text"required>
         </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
         <label class="col-md-2 control-label" for="filebutton">Image: </label>
         <div class="col-md-9">
            <input id="filebutton" name="image_up" placeholder="image_name.(gif, jpg, png)" class="form-control" type="text">
            </p><b>Note: Just add image in "images" folder than just add the image name with extention in this feild.</b></p>
         </div>
      </div>
      <!-- Textarea -->
      <div class="form-group">
         <label class="col-md-2 control-label" for="procedure">Procedure: </label>
         <div class="col-md-9">                     
            <textarea class="form-control" id="procedure" name="procedure" rows="3"></textarea>
         </div>
      </div>
      <!-- Textarea -->
      <div class="form-group">
         <label class="col-md-2 control-label" for="discription">Description: </label>
         <div class="col-md-9">                     
            <textarea class="form-control" id="discription" name="discription" rows="3" required></textarea>
         </div>
      </div>
      <!-- Textarea -->
      <div class="form-group">
         <label class="col-md-2 control-label" for="references">References: </label>
         <div class="col-md-9">                     
            <textarea class="form-control" id="references" name="references"  rows="3"></textarea>
         </div>
      </div>
      <!-- Button -->
      <div class="form-group">
         <label class="col-md-2 control-label" for="singlebutton"></label>
         <div class="col-md-9">
            <input type="submit" name="insert" class="btn btn-danger navbar-btn" style="width: 100%;" value="Insert">   
         </div>
      </div>
   </fieldset>
</form>
<?php include 'footer.php'; ?>

