<?php 
include"includes/connection.php";

if($err==''){  $err =   $_REQUEST['err'];}

if(isset($_REQUEST['login']))
    {

        $email      =   $_REQUEST['email'];
        $password   =   $_REQUEST['password'];
                   
        $string =  "SELECT * FROM `web_user` WHERE `email` = '$email' AND `password` = '$password'  AND `status` = '1' ";
        
        $query_user = $Q($string);
        
        $query_count = $C($query_user);

            if($query_count == 1)
            {
                 $row_user = $F($query_user);
                 
                 $_SESSION['user_id']   =   $row_user['id'];
                
                 echo "<script>window.location='".$site_path."';</script>";
                 exit;             
            }
            else
            {
                header("Location: ?err=1");
                exit;
            }
    }        
   
?>
<!DOCTYPE html>
 <html lang="en">
 <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <title>Kuruthi :: Login</title>
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
<section class="section-content-block section-secondary-bg">

            <div class="container">

                <div class="row">

                    <div class="col-sm-6 wow fadeInLeft">

                        <div class="contact-form-block">
<br><br>
                            <h2 class="contact-title">Login</h2>

                            
             <?php if($err=="1") {?>
                <h6 style="color: #FF0000;"><?php echo "Email and Password not Match";?></h6><?php }?>  

                            <form  enctype="multipart/form-data" name="frm1" id="frm1"  enctype="multipart/form-data" method="post">

                              
                                <div class="form-group">
                                    <input type="email" class="form-control" required id="email" name="email" placeholder="Email" data-msg="Please Write Your Valid Email" />
                                </div>
                               
                                 <div class="form-group">
                                    <input type="password" class="form-control" required id="password" name="password" placeholder="Password"  />
                                </div>

                              <div class="form-group">
                                  <a href="forgot-password.php">Click to Forgot Password!!</a>
                                 </div>
                                <div class="form-group">
                                    <button type="submit" name="login" class="btn btn-theme">Login</button>
                                </div>


                            </form>

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