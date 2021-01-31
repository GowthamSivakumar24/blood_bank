<?php include "includes/connection.php";
$id =  $_REQUEST['id'];
$cat_id = $_REQUEST['cat_id'];

$pages_fet = $F($Q("select * from `web_cms` where `id` = '$id'"));

$ddd_fet = $F($Q("SELECT * FROM `web_user` where `id`='$_SESSION[user_id]'"));
    
$user_id = $ddd_fet['id'];

  
if(isset($_POST['sub']))
        {

        $name          =   $_REQUEST['name'];
        $email         =   $_REQUEST['email'];
        $blood_group   =   $_REQUEST['blood_group'];
        $phone         =   $_REQUEST['phone'];
        $address       =   $_REQUEST['address'];
        $msg           =   $_REQUEST['msg'];
       // $date         =   date('Y-m-d  H:i:sa');
      //$subscribe      =   $_REQUEST['subscribe'];

    $check_cms    = $C($Q("SELECT * FROM `web_blood` WHERE `email`='$email'"));
    

    $Q("UPDATE  `web_user` SET `id`='$user_id',`name`='$name',`email`='$email',`address`='$address',`blood_group`='$blood_group',`phone`='$phone',`msg`='$msg' WHERE `id`='$user_id'");
      
        echo "<script>window.location='".$site_path."myaccount.php';</script>";

      exit;

     
      echo "<script>window.location='myaccount.php?act=exists'</script>";
      exit;
  
    
    }
    


  
      
        
    ?>


        <!--  HOME SLIDER BLOCK  -->
    
  <!DOCTYPE html>
 <html lang="en">
 <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <title>Kuruthi :: Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Reddrop Buddies - Blood Donation Campaign & Multi-Concept Activism Template">
        <meta name="author" content="xenioushk">
        <link rel="shortcut icon" href="images/favicon.png" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="css/animate.css" rel="stylesheet" type="text/css" >
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" >
        <link href="css/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="css/styles.css" />

    <body> 

        <div id="preloader">
            <span class="margin-bottom"><img src="images/loader.gif" alt="" /></span>
        </div>

        <!--  HEADER -->
<?php include"includes/header.php";?>
 
                              

<section class="section-content-block section-secondary-bg">

            <div class="container">

                <div class="row">

                    <div class="col-sm-6 wow fadeInLeft">

                        <div class="contact-form-block">
<br><br>  
 

                            <h2 class="contact-title">Profile Information</h2>


<?php if( $_SESSION['user_id']==''){?>
   <div class="container">
                                  <p>To Request blood please <a href="<?php echo $site_path;?>login.php" style="color: #ff0000;">Login</a>. By logging in you will also become a donor</p>
                                </div>
                                <?php } else {?>
                                  
 <form  enctype="multipart/form-data" name="frm1" id="frm1"  enctype="multipart/form-data" method="post">

                                <div class="form-group">
                                    <input type="text" class="form-control" required="" id="name" name="name" placeholder="Name" data-msg="Please Write Your Name" value="<?php echo $ddd_fet['name'];?>">
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" required id="email" name="email" placeholder="Email" data-msg="Please Write Your Valid Email"  value="<?php echo $ddd_fet['email'];?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" required id="phone" name="phone" placeholder="Phone Number" value="<?php echo $ddd_fet['phone'];?>"> 
                                </div>

                                <div class="form-group">
                                    <select name="blood_group" style="width: 555px; height: 34px; font-size: 14px;" required>

                                   <option value="">-SELECT BLOOD GROUP-</option>
                                    <option value="A+" <?php if($ddd_fet['blood_group']=='A+'){ echo "selected"; }?>>A+</option>
                                    <option value="O+"<?php if($ddd_fet['blood_group']=='A+'){ echo "selected"; }?>>O+</option>
                                    <option value="B+"<?php if($ddd_fet['blood_group']=='B+'){ echo "selected"; }?>>B+</option>
                                    <option value="AB+"<?php if($ddd_fet['blood_group']=='AB+'){ echo "selected"; }?>>AB+</option>
                                    <option value="A-"<?php if($ddd_fet['blood_group']=='A-'){ echo "selected"; }?>>A-</option>
                                    <option value="O-"<?php if($ddd_fet['blood_group']=='O-'){ echo "selected"; }?>>O-</option>
                                    <option value="B-"<?php if($ddd_fet['blood_group']=='B-'){ echo "selected"; }?>>B-</option>
                                    <option value="AB-"<?php if($ddd_fet['blood_group']=='AB-'){ echo "selected"; }?>>AB-</option>
                                  </select>
                                </div>
                                
                                  <div class="form-group">
                                    <textarea class="form-control" rows="5" name="address" id="address" placeholder="Address" data-msg="Address"><?php echo $ddd_fet['address'];?></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="msg" id="msg" placeholder="Got donor update" data-msg="Message"><?php echo $ddd_fet['msg'];?></textarea>
                                </div>


                                <div class="form-group">
                                    <button type="submit" name="sub" class="btn btn-theme">Update</button>
                                </div>

                            </form>


                                <?php }?>



                           

                        </div> <!-- end .contact-form-block  -->

                    </div> <!--  end col-sm-6  -->

                  
                </div> <!-- end row  -->

            </div> <!--  end .container -->

        </section> 

<br>



</div></div>
       
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