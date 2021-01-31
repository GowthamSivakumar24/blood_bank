<?php include "includes/connection.php";
$id =  $_REQUEST['id'];
$cat_id = $_REQUEST['cat_id'];

$pages_fet = $F($Q("select * from `web_cms` where `id` = '$id'"));

  
if(isset($_POST['sub']))
        {
        $name           =   $_REQUEST['name'];
        $last_name      =   $_REQUEST['last_name'];
        $email          =   $_REQUEST['email'];
        $message        =   $_REQUEST['message'];
        $message        =   str_replace("'/", "'",$message);
        $message        =   str_replace("\'", "'",$message);
        $message        =   str_replace('"/', '"',$message);
        $message        =   str_replace('\"', '"',$message);
        $message        =   nl2br($message);
        $phone          =   $_REQUEST['phone'];
        
        
        $filename = $_FILES['file']["name"];
        $tmp_name = $_FILES['file']["tmp_name"];
    
        if($filename != '')
        {
        $img_name = uniqid().$filename;
        $image_path = "profile/".$img_name;
        @move_uploaded_file($tmp_name,$image_path);
        }
        
        $to          =  $set['site_email'];
        $from        =  $email;
        $subject     =  $set['site_title']." Career Details";
        
        $messages = '
   <table width="1005" border="0" cellspacing="1" cellpadding="1">
   
    <tr>
      <td>Dear, '.$name.'</td>

    </tr>
    <tr><td>&nbsp;</td></tr>
    <tr>
      <td>Greetings from Kuruthi!!!</td>

    </tr>
    <tr><td>&nbsp;</td></tr>
    <tr>
      <td>Thank you so much for your interest with Kuruthi our Concern person will contact you shortly.</td>

    </tr>
    <tr><td>&nbsp;</td></tr>
    </table> 
            
  <table width="750" border="1" cellspacing="1" cellpadding="1" style="border:1px #666666 solid; border-collapse:collapse;">
   
    <tr bordercolor="#FFFFFF">
      <td height="41" style="border:1px #CFCCCF solid; border-collapse:collapse; font-weight:bold;" colspan="2" align="center">Kuruthi Enquiry Details</td>

    </tr>
   
    <tr>
      <td height="45" style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;"><strong>First Name</strong> </td>
      <td style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;">'.$name.'</td>
    </tr>
    
    <tr>
      <td height="45" style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;"><strong> Your Email </strong> </td>
      <td style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;">'.$email.'</td>
    </tr>
    
   
    <tr>
      <td height="45" style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;"><strong>Your Phone</span></strong> </td>
      <td style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;">'.$phone.'</td>
    </tr>
    
  
    
    
     <tr>
      <td height="45" style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;"><strong>Your Message</span></strong> </td>
      <td style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;">'.$message.'</td>
    </tr>
  </table>
  
  
  
  ';
echo $messages;
exit;

            @mail($to,$subject,$messages,"From: $from\nContent-Type: text/html; charset=iso-8859-1");
            @mail($from,$subject,$messages,"From: $to\nContent-Type: text/html; charset=iso-8859-1");
            
         //echo "<script>window.location='".$site_path."thankyou.php';</script>";
        
        }
        
        
        
    ?>
<!DOCTYPE html>
 <html lang="en">
 <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <title>Kuruthi :: <?php echo $pages_fet['menu'];?></title>
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
        
      <?php if($pages_fet['id']=='5') { ?>
    <section class="page-header" data-stellar-background-ratio="1.2">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">


                        <h3>
                            Contact Us
                        </h3>

                        <p class="page-breadcrumb">
                            <a href="#">Home</a> / Contact
                        </p>


                    </div>

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section> <!-- end .page-header  -->

        <section class="section-content-block">

            <div class="container">

                <div class="row">

                    <div class ="col-md-12">
                        <br>
                        <h2 class="contact-title">Contact us</h2>                           
                    </div>               

                    <div class="col-md-3">

                        <ul class="contact-info">
                            <li>
                                <span class="icon-container"><i class="fa fa-home"></i></span>
                                <address>2020 KCT,Coimbatore,India</address>
                            </li>
                        </ul>                        

                    </div>

                    <div class="col-md-3">

                        <ul class="contact-info">

                            <li>
                                <span class="icon-container"><i class="fa fa-phone"></i></span>
                                <address><a href="#">+91-8754-828-186</a></address>
                            </li>

                        </ul>                        

                    </div>

                    <div class="col-md-3">
                        <ul class="contact-info">
                            <li>
                                <span class="icon-container"><i class="fa fa-envelope"></i></span>
                                <address><a href="mailto:">query@kuruthi.com</a></address>
                            </li>
                        </ul>                        

                    </div>

                    <div class="col-md-3">

                        <ul class="contact-info">
                            <li>
                                <span class="icon-container"><i class="fa fa-globe"></i></span>
                                <address><a href="#">www.kuruthi.com</a></address>
                            </li>
                        </ul>                        

                    </div>                    

                </div> 

            </div>

        </section>



<section class="section-content-block section-secondary-bg">

            <div class="container">

                <div class="row">

                    <div class="col-sm-6 wow fadeInLeft">

                        <div class="contact-form-block">

                            <h2 class="contact-title">Say hello to us</h2>

                            <form  enctype="multipart/form-data" name="frm1" id="frm1"  enctype="multipart/form-data" method="post">

                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" data-msg="Please Write Your Name" />
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" data-msg="Please Write Your Valid Email" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number"  />
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="message" id="email_message" placeholder="Message" data-msg="Please Write Your Message" ></textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" name="sub" class="btn btn-theme">Send Now</button>
                                </div>

                            </form>

                        </div> <!-- end .contact-form-block  -->

                    </div> <!--  end col-sm-6  -->

                    <div class="col-sm-6 wow fadeInRight">

                        <h2 class="contact-title">Our Location</h2>


                        <div class="section-google-map-block wow fadeInUp">

                            <div id="map_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.4772828440664!2d76.98747851480347!3d11.077762092117524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8f81b7514a15f%3A0x155e29f8d14154fc!2sKumaraguru%20College%20of%20Technology!5e0!3m2!1sen!2sin!4v1585911259711!5m2!1sen!2sin" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>

                        </div> <!-- end .section-content-block  -->                            

                    </div> <!--  end col-sm-6  -->                    

                </div> <!-- end row  -->

            </div> <!--  end .container -->

        </section> 

<br>


       
<?php  } elseif($pages_fet['id']=='3') { ?>

    <?php include"request_blood.php";?>

<?php } else {?>

        <div class="container">

                <div class="row">

                    <div class="col-md-12">
                        <br>
                        <h2 class="contact-title"><?php echo $pages_fet['title'];?></h2>  
                        <p><?php echo $pages_fet['content'];?></p>                         
                    </div> 
    
            
        
</div>
</div>
         <?php }?>

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