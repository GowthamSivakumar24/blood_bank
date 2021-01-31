<?php include "includes/connection.php";
$status = 1;
$dbase_insert = "UPDATE `web_blood` SET `status`='1'";
$dbase_inserted = $Q($dbase_insert);

 ?>
<!DOCTYPE html>
 <html lang="en">
 <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <title>Kuruthi :: Donate</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Reddrop Buddies - Blood Donation Campaign & Multi-Concept Activism Template">
        <meta name="author" content="xenioushk">
        <link rel="shortcut icon" href="<?php echo $site_path;?>images/favicon.png" />
        <link rel="stylesheet" href="<?php echo $site_path;?>css/bootstrap.min.css" />
        <link href="<?php echo $site_path;?>css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="<?php echo $site_path;?>css/animate.css" rel="stylesheet" type="text/css" >
        <link href="<?php echo $site_path;?>css/owl.carousel.css" rel="stylesheet" type="text/css" >
        <link href="<?php echo $site_path;?>css/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="<?php echo $site_path;?>css/styles.css" />

    <body> 

      <!--  <div id="preloader">
            <span class="margin-bottom"><img src="<?php echo $site_path;?>images/loader.gif" alt="" /></span>
        </div>-->

        <!--  HEADER -->
<?php include"includes/header.php";?>
       <!-- end main-header  -->

        <!--  HOME SLIDER BLOCK  -->
    
  

     

  <div class="container" style="background-color: #f7f7f7; border-radius: 5px 5px 5px 5px;">
  <br>
    <h1 style="color:#313E47;">Blood Donate Sucessfully</h1>
    <div class="clearfix"></div>
  <p style="color: #78d125; font-weight: 550; font-size: 18px;"><br>Our Blood Donation Administrator Contact you Shortly.</p><br>
  <p style="color: #000; font-weight: 500; font-size: 16px;" ><a href="<?php echo $site_path;?>">Back to Home</a></p><br><br>
  
</div>
       

        <!-- START FOOTER  -->
<?php include"includes/footer.php";?>
       

        <!-- END FOOTER  -->

        <!-- Back To Top Button  -->

        <a id="backTop">Back To Top</a>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.backTop.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/waypoints-sticky.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/venobox.min.js"></script>
        <script src="js/custom-scripts.js"></script>
    </body>

</html>