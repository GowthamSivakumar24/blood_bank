<?php include "includes/connection.php";
$id =  $_REQUEST['id'];
$cat_id = $_REQUEST['cat_id'];

$pages_fet = $F($Q("select * from `web_cms` where `id` = '$id'"));

  
if(isset($_POST['sub']))
        {
        $name           =   $_REQUEST['name'];
        $password       =   $_REQUEST['password'];
        $email          =   $_REQUEST['email'];
        $blood_group   =   $_REQUEST['blood_group'];
        $status        =   $_REQUEST['status'];
        $phone         =   $_REQUEST['phone'];
       // $date         =   date('Y-m-d  H:i:sa');
    //$subscribe      =   $_REQUEST['subscribe'];

    $check_cms    = $C($Q("SELECT * FROM `web_user` WHERE `email`='$email'"));
    
   // if($check_cms==0)
   // {

    $Q("INSERT INTO `web_user` SET `name`='$name',`blood_group`='$blood_group',`phone`='$phone',`email`='$email',`password`='$password',`status`='0',`date`='$date'");
      
       
        
        $to          =  $set['site_email'];
        $from        =  $email; 
        $pro_img     =  $site_path.$image_path;
        $subject     =  $set['site_title']." Details";


         
        
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
      

    </tr><tr><td>&nbsp;</td></tr>
    <tr>
    
    <td>Please <a href=http://localhost/blood/activate.php?email='.$email.'><b style=color:#303E47; font-size:16px; text-decoration-line: underline;>&nbsp;Activate&nbsp;</b>&nbsp;</a>your account here before continuing. We will not able to approve your ad until you activate your account.</td>
    </tr><tr><td>&nbsp;</td></tr>
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
      <td height="45" style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;"><strong>Your Password</span></strong> </td>
      <td style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;">'.$password.'</td>
    </tr>

     <tr>
      <td height="45" style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;"><strong>Your Blood Group</span></strong> </td>
      <td style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;">'.$blood_group.'</td>
    </tr>

   
    <tr>
      <td height="45" style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;"><strong>Your Phone</span></strong> </td>
      <td style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;">'.$phone.'</td>
    </tr>
    
  
    
  </table>
  
  
  
  ';


echo $messages;
exit;

            @mail($to,$subject,$messages,"From: $from\nContent-Type: text/html; charset=iso-8859-1");
            @mail($from,$subject,$messages,"From: $to\nContent-Type: text/html; charset=iso-8859-1");
            
             echo "<script>window.location='".$site_path."thankyou.php';</script>";

      exit;

      }
   // else
 //   {
    //  echo "<script>window.location='register.php?act=exists'</script>";
   //   exit;
  //  }
    
    //}
        
        
    ?>
<!DOCTYPE html>
 <html lang="en">
 <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <title>Kuruthi :: Register</title>
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
    
  

     



<section class="section-content-block section-secondary-bg">

            <div class="container">

                <div class="row">

                    <div class="col-sm-6 wow fadeInLeft">

                        <div class="contact-form-block">
<br><br>
                            <h2 class="contact-title">Create An Account FREE</h2>

                            <form  enctype="multipart/form-data" name="frm1" id="frm1"  enctype="multipart/form-data" method="post">

                                <div class="form-group">
                                    <input type="text" class="form-control" required="" id="name" name="name" placeholder="Name" data-msg="Please Write Your Name" />
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" required id="email" name="email" placeholder="Email" data-msg="Please Write Your Valid Email" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" required id="phone" name="phone" placeholder="Phone Number"  />
                                </div>
                                 <div class="form-group">
                                    <input type="password" class="form-control" required id="password" name="password" placeholder="Password"  />
                                </div>

                               <div class="form-group">
                                    <select name="blood_group" style="width: 555px; height: 34px; font-size: 14px;" required>

                                   <option value="">-SELECT BLOOD GROUP-</option>
                                    <option value="A+">A+</option>
                                    <option value="O+">O+</option>
                                    <option value="B+">B+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="A-">A-</option>
                                    <option value="O-">O-</option>
                                    <option value="B-">B-</option>
                                    <option value="AB-">AB-</option>
                                  </select>
                                </div>


                                <div class="form-group">
                                    <button type="submit" name="sub" class="btn btn-theme">Register</button>
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