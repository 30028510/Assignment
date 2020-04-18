

<!DOCTYPE html>
<html>
   <title>Assignment</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <body class="w3-light-grey">
      <?php include 'connection.php';  ?>
      <div class="w3-content" style="max-width:1400px">
      <!-- Header -->
      <header class="w3-container w3-center w3-padding-32">
         <nav class="navbar navbar-inverse" style="background-color: #d43f3a;border-color: #d43f3a;">
            <div class="container-fluid">
               <div class="navbar-header">
                  <?php   $server_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
                     //
                      $page = basename($_SERVER['PHP_SELF']);  if($page=='index.php')  { ?>
                       <link rel="stylesheet" href="style/style.css">
                           <a class="navbar-brand" href="<?php echo $server_url; ?>/assignment">
                              <img src="images/logo-up.png" alt="LOGO"/>
                           </a><?php  } else { ?>
                       <link rel="stylesheet" href="<?php echo $server_url; ?>/assignment/style/style.css">
                          <a class="navbar-brand" href="<?php echo $server_url; ?>/assignment">
                              <img src="<?php echo $server_url; ?>/assignment/images/logo-up.png" alt="LOGO"/>
                          </a><?php  }  ?>
               </div>
               <ul class="nav navbar-nav">
                  <li class="active"><a href="<?php echo $server_url; ?>/assignment">Home</a></li>
                  <li><a href="<?php echo $server_url; ?>/assignment/insert-form.php">Create Record</a></li>
                   <li></li>
               </ul>
  
               <form name="search" method="post" action="<?php echo $server_url; ?>/assignment/search.php">
                         <input type="text" name="search_type" Placeholder="Enter Item Name" style="width: 18%;  box-sizing: border-box;  border: 2px solid #ccc;  border-radius: 4px;  font-size: 16px;  background-color: white;  background-position: 10px 10px;   background-repeat: no-repeat;  padding: 2px 0px 9px 5px">  
                         <input type="submit" class="btn btn-danger navbar-btn" name="search" value="Search" style="margin-left:-5.4%;margin-top: 0.8%; ">

                       </form>
            </div>
         </nav>
      </header>
<style>::placeholder {
  color: #D43F3A;
  font-weight: 700;
  margin-top: 5%;
} </style>
