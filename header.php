

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
      <header class="w3-container w3-center w3-padding-32 header">
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
               <ul class="nav navbar-nav header-right">
                  <li class="active"><a href="<?php echo $server_url; ?>/assignment">Home</a></li>
                  <li><a href="<?php echo $server_url; ?>/assignment/insert-form.php">Create Record</a></li>
                   <li></li>
               </ul>
  
               <form name="search" class="search-form" method="post" action="<?php echo $server_url; ?>/assignment/search.php">
                         <input type="text" name="search_type" Placeholder="Enter Subject Name" style="width: 18%;  box-sizing: border-box;  border: 2px solid #ccc;  border-radius: 4px;  font-size: 16px;  background-color: white;  background-position: 10px 10px;   background-repeat: no-repeat;  padding: 2px 0px 9px 5px">  
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

<style>
/* Style the header with a grey background and some padding */
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

/* Style the header links */
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the active/current link*/
.header a.active {
  background-color: dodgerblue;
  color: white;
}

/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}

</style>