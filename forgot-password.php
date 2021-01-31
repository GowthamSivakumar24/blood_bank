<?php 
include"includes/connection.php";
   

   if(isset($_REQUEST['forgot']))
    {
        $email  =   $_REQUEST['email'];
    
         $check_exist = $Q("SELECT * FROM `web_user` WHERE `email` = '$email'");
        
        $check_exist_count = $C($check_exist);
        
        if($check_exist_count>0)
        {
            $row = $F($check_exist);
            
            $sub = "Kuruthi Forgot Password Details";
            $messages = '
   <table width="1005" border="0" cellspacing="1" cellpadding="1">
   
   
    <tr>
      <td>Greetings from Kuruthi!!!</td>

    </tr>
    <tr><td>&nbsp;</td></tr>
    <tr>
      <td>Thank you so much for your interest with Kuruthi .</td>
      

    </tr><tr><td>&nbsp;</td></tr>
   
    </table> 
            
  <table width="750" border="1" cellspacing="1" cellpadding="1" style="border:1px #666666 solid; border-collapse:collapse;">
   
    <tr bordercolor="#FFFFFF">
      <td height="41" style="border:1px #CFCCCF solid; border-collapse:collapse; font-weight:bold;" colspan="2" align="center">Kuruthi Forgot Password Details</td>

    </tr>
   
  
    
    <tr>
      <td height="45" style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;"><strong> Your Email </strong> </td>
      <td style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;">'.$email.'</td>
    </tr>
    
     <tr>
      <td height="45" style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;"><strong>Your Password</span></strong> </td>
      <td style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;">'.$row['password'].'</td>
    </tr>

   
  
    
  </table>
  
  
  
  ';
            
            @mail($email,$sub,$messages,"From: $from\nContent-Type: text/html; charset=iso-8859-1"); 
            //forgot mail
            echo $email."<br/>";
            echo $sub;
            echo $messages;
            echo $from;
            exit;
            
            $sent =1;
        }
        else
        {
            $error =1;
        }
        
    }
?>
<!DOCTYPE html>
 <html lang="en">
 <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <title>Kuruthi :: Forgot Password</title>
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
                            <h2 class="contact-title">Forgot Password</h2>

                            
             <?php if($error=="1") {?>
                <h6 style="color: #FF0000;"><?php echo "Forgot Password Sent Successfully";?></h6><?php }?>  

                            <form  enctype="multipart/form-data" name="frm1" id="frm1"  enctype="multipart/form-data" method="post">

                              
                                <div class="form-group">
                                    <input type="email" class="form-control" required id="email" name="email" placeholder="Email" data-msg="Please Write Your Valid Email" />
                                </div>
                               
                               
                                <div class="form-group">
                                    <button type="submit" name="forgot" class="btn btn-theme">Forgot Password</button>
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