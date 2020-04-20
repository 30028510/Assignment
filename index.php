<?php include 'header.php'; ?>
	<div class="row w3-container">
      <?php

     

        while($row = mysqli_fetch_array($res_data)){
            //here goes the data
			 ?>
<!-- Blog entries -->
<div class="col-sm-4">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  
    <!--img src="/w3images/woods.jpg" alt="Nature" style="width:100%"-->
    <div class="w3-container" style="background-color: #d43f3a; "><i class="icofont-stylish-right"></i>
      <h3><b><span style="color: black;"> </span><?php echo $row['Item_Name']; ?></b></h3>
      
    </div> 

    <div class="w3-container" style="background-color: gainsboro;">
	<h5><b style="color: #D43F3A; font-size: 17px;">Object Class:</b> <span class="w3-opacity"><?php echo $row['Object_Class']; ?></span></h5>
      <h5><b style="color: #D43F3A; font-size: 17px;">Procedures:</b> <span class="w3-opacity" style="font-size: 16px;   text-align: justify;"><?php $Procedures= $row['Procedures']; echo $small = substr($Procedures, 0, 281); ?>...</span></h5>
      <div class="w3-row">
        <div class="w3-col m8 s12">       
		  <form name="submit" method="post" action="https://30028510.2020.labnet.nz/assignment/full_record.php/?id=<?php echo $row['Sno']; ?>">
		     <input type="submit" class="btn btn-danger navbar-btn"name="submit" value="Read More >>">
		  </form>
        </div>
        
      </div>
    </div>
  </div>
 



<!-- END GRID -->
</div>

<!-- END w3-content -->
<?php
        }
        //mysqli_close($conn);
    ?>
	</div>
	<div class="row" style="text-align: center;">
    <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>

</div>

<?php include 'footer.php'; ?>
