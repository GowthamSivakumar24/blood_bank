<?php include "includes/connection.php";
$id =  $_REQUEST['id'];
$cat_id = $_REQUEST['cat_id'];

$pages_fet = $F($Q("select * from `web_cms` where `id` = '$id'"));



      
$ddd_fet = $F($Q("SELECT * FROM `web_user` where `id`='$_SESSION[user_id]'"));
    
$user_id = $ddd_fet['id'];

  
if(isset($_POST['request']))
        {

        $name          =   $_REQUEST['name'];
        $email         =   $_REQUEST['email'];
        $blood_group   =   $_REQUEST['blood_group'];
        $status        =   $_REQUEST['status'];
        $phone         =   $_REQUEST['phone'];
        $address       =   $_REQUEST['address'];
       // $date         =   date('Y-m-d  H:i:sa');
      //$subscribe      =   $_REQUEST['subscribe'];

    $check_cms    = $C($Q("SELECT * FROM `web_blood` WHERE `email`='$email'"));
    
   if($check_cms==0)
    {

    $Q("INSERT INTO `web_blood` SET `user_id`='$user_id',`name`='$name',`blood_group`='$blood_group',`phone`='$phone',`email`='$email',`address`='$address'");
      
       
        
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
      <td>You have requested a blood </td>
      

    </tr><tr><td>&nbsp;</td></tr>
   
    </table> 
            
  <table width="750" border="1" cellspacing="1" cellpadding="1" style="border:1px #666666 solid; border-collapse:collapse;">
   
    <tr bordercolor="#FFFFFF">
      <td height="41" style="border:1px #CFCCCF solid; border-collapse:collapse; font-weight:bold;" colspan="2" align="center">Kuruthi Blood Details</td>

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
      <td height="45" style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;"><strong>Your Blood Group</span></strong> </td>
      <td style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;">'.$blood_group.'</td>
    </tr>

   
    <tr>
      <td height="45" style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;"><strong>Your Phone</span></strong> </td>
      <td style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;">'.$phone.'</td>
    </tr>
    
   <tr>
      <td height="45" style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;"><strong>Your Address</span></strong> </td>
      <td style="border:1px #CFCCCF solid; border-collapse:collapse; padding-left:10px;">'.$address.'</td>
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
   else
   {
      echo "<script>window.location='request_blood.php?act=exists'</script>";
      exit;
   }
    
    }
        
        
    ?>


        <!--  HOME SLIDER BLOCK  -->
    
  
 
                              

<section class="section-content-block section-secondary-bg">

            <div class="container">

                <div class="row">

                    <div class="col-sm-6 wow fadeInLeft">

                        <div class="contact-form-block">
<br><br>  
 

                            <h2 class="contact-title">Request Blood Quote</h2>


<?php if( $_SESSION['user_id']==''){?>
   <div class="container">
                                  <p>To Request blood please <a href="<?php echo $site_path;?>login.php" style="color: #ff0000;">Login</a>. By logging in you will also become a donor</p>
                                </div>
                                <?php } else {?>
                                  
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
                                    <textarea class="form-control" rows="5" name="address" id="address" placeholder="Address" data-msg="Please Write Your Message" ></textarea>
                                </div>


                                <div class="form-group">
                                    <button type="submit" name="request" class="btn btn-theme">Request Blood</button>
                                </div>

                            </form>
                          <h5>If u got donor please update in profile <h5>

                                <?php }?>



                           

                        </div> <!-- end .contact-form-block  -->

                    </div> <!--  end col-sm-6  -->

                  
                </div> <!-- end row  -->

            </div> <!--  end .container -->

        </section> 

<br>



</div></div>
       
