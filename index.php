<?php include "includes/connection.php";

$pages_fet = $F($Q("select * from `web_cms` where `status` = '1'")); 

 
    ?>
<!DOCTYPE html>
 <html lang="en">
 <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <title>Kuruthi :: Home</title>
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
       <!-- end main-header  -->

        <!--  HOME SLIDER BLOCK  -->
        
        <div class="slider-wrap">
            <div id="slider_1" class="owl-carousel" data-nav="true" data-dots="false" data-autoplay="true" data-autoplaytimeout="17000">

                <div class="slider_item_container" data-bg_img="images/home_1_slider_1.jpg" data-bg_color="#555555" data-bg_opacity="0.0">
                    <div class="item">
                        <div class="slider-content">
                            <div class="container text-left">
                                <div class="row">
                                    <div class="slider-bg">                                    
                                        <div class="col-sm-12 wow zoomInUp" data-wow-duration="1s">  
                                            
                                                <h3>Donate blood,save life !</h3>
                                                <h2>
                                                    YOUR BLOOD  
                                                    <br>
                                                    CAN BRING SMILE  
                                                    <br />
                                                    IN OTHER PERSON FACE
                                                </h2>
                                              <!--  <a href="#" class="btn btn-theme margin-top-24">Donate Now</a>-->
                                                
                                            </div>                                      
                                    </div> <!-- end .col-sm-12  -->
                                </div> <!-- end .row  -->
                            </div><!-- end .container -->
                        </div> <!--  end .slider-content -->
                    </div> <!-- end .item  -->
                </div> <!-- end .slider_item_container  -->

                <div class="slider_item_container" data-bg_img="images/home_1_slider_1.jpg" data-bg_color="#555555" data-bg_opacity="0.0" >
                    <div class="item">
                        <div class="slider-content">
                            <div class="container text-left">
                                <div class="row">
                                    <div class="slider-bg" data-animation-in="zoomInUp" data-animation-out="zoomInDown">                                    
                                        <div class="col-sm-12 wow fadeInDown" data-wow-duration="1s">
                                            
                                            <h3>Donate blood,save life !</h3>
                                                <h2>
                                                    DONATE BLOOD
                                                    <br>
                                                    AND INSPIRES OTHERS.
                                                </h2>
                                                <!--<a href="#" class="btn btn-theme margin-top-24">Donate Now</a> -->
                                        </div>                                            
                                    </div> <!-- end .col-sm-12  -->
                                </div> <!-- end .row  -->
                            </div><!-- end .container -->
                        </div> <!--  end .slider-content -->
                    </div> <!-- end .item  -->
                </div> <!-- end .slider_item_container  -->

            </div> <!-- end .slider_1  -->
        </div> <!-- end .slider-wrap.  -->
        
        <!--  FEATURED ABOUT US SECTION-->

        <section class="section-content-block">
 
            <div class="container">
                
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        
                        <div class="about-us-container theme-custom-box-shadow">

                            <div class="row section-heading-wrapper margin-bottom-11">

                                <div class="col-lg-12 col-md-12 col-sm-12 text-left no-img-separator">
                                    <h2><strong>Types of Donation</strong></h2>
                                    <span class="heading-separator heading-separator-horizontal"></span>
                                </div> <!-- end .col-sm-10  --> 

                            </div>

                            <div class="about-details"> 

                                <p>The four different blood groups are A, B, AB and O, and each type is either Rh-positive or Rh-negative. O negative blood can be given to anybody if necessary, but it is always preferable to match the exact blood group to prevent dangerous reactions.<p>


                                <p>Healthy adults that meet donation eligibility criteria are able to donate blood and the procedure is safe and relatively painless.
During a regular donation, you will give around 470 ml of whole blood. This is about eight per cent of the average adult’s blood volume. The body replaces this volume within 24 to 48 hours, and replenishes red blood cells in 10 to 12 weeks..</p>


                                <!-- <ul class="custom-bullet-list">
                                    <li>Specialist blood donors and clinical supervision.</li>
                                    <li>Increasing communication with our members.</li>
                                    <li>High quality assessment, diagnosis and treatment.</li>
                                    <li>Examine critically to ensure alignment.</li>
                                    <li>The extra care of a multi-disciplinary team.</li>
                                </ul> -->

                            </div> <!--  end .about-details -->  

                        </div>

                    </div> <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->  

                  

                </div> <!--  end .row  -->
            </div>

        </section> <!--  end .section-about-us -->
        
        <!-- SECTION TESTIMONIAL   -->

        <section class="section-content-block section-custom-bg" data-bg_img='images/testimony_feat_bg.jpg' data-bg_size='cover' data-bg_position='top center' data-bg_opacity="0">
            
            <div class="container margin-top-80">
                <div class="row section-heading-wrapper-alt">

                    <div class="col-md-12 col-sm-12 text-center no-img-separator">
                        
                        <span class="heading-separator heading-separator-horizontal"></span>

                    </div> <!-- end .col-sm-10  --> 

                </div>
            </div>

            <div class="container theme-custom-box-shadow  section-pure-white-bg margin-top-48 margin-bottom-48 wow fadeInUp">
                
                <div class="row">

                    <div class="col-lg-6 col-md-12 col-sm-12">
                        
                        <div class="testimonial-container owl-carousel text-left" data-items  ="1">

                            <div class="col-md-12 col-sm-12">

                                <div class="testimony-layout-1">
                                    <h3 class="people-quote">Donor Opinion</h3>
                                    <p class="testimony-text">
                                        I proudly donate blood on a regular basis because it gives others something they desperately need to survive. Just knowing I can make a difference in someone else's life makes me feel great!      
                                    </p>
                                    
                                    <img src="images/user_1.jpg" alt="" />
                                    <h6>Sidharth</h6>
                                    <span>Java developer, Isha</span>

                                </div> <!-- end .testimony-layout-1  -->

                            </div> <!--  end col-md-10  -->

                            <div class="col-md-12 col-sm-12">

                                <div class="testimony-layout-1">
                                    <h3 class="people-quote">Donor Opinion</h3>
                                    <p class="testimony-text">
                                        I have been a donor since high school. Although I have not been a donor every year, I always want to give to the human race. I love to help others! Moreover it gives a real peace in my mind.   
                                    </p>

                                    <img src="images/user_2.jpg" alt="" />
                                    <h6>Thiyagu</h6>
                                    <span>Data Analyst, Zoho</span>

                                </div> <!-- end .testimony-layout-1  -->

                            </div> <!--  end col-md-10  -->

                            <div class="col-md-12 col-sm-12">

                                <div class="testimony-layout-1">
                                    <h3 class="people-quote">Recipient Opinion</h3>
                                    <p class="testimony-text">
                                        I wish I could tell you my donor how grateful I am for your selfless act.You gave me new life. We may be coworkers or schoolmates or just two in the same community.I'm very grateful to you.  
                                    </p>

                                    <img src="images/user_3.jpg" alt="" />
                                    <h6>Partha</h6>
                                    <span>RPA, Vuram</span>

                                </div> <!-- end .testimony-layout-1  -->

                            </div> <!--  end col-md-10  --> 

                        </div>  <!--  end .row  -->   
                    </div>
                
                    <div class="col-lg-6 hidden-md hidden-xs hidden-sm no-padding">
                        <figure>
                            <img src="images/testimony_feat_img.jpg" alt="" class="db"/>
                        </figure>
                    </div>
                    
                </div>

                

            </div> <!-- end .container  -->

        </section>
        
        <!--  SECTION CAMPAIGNS   -->

        <section class="section-content-block section-pure-white-bg" >

            <div class="container">
                
                
                <div class="row">
                    
                    <div class="col-sm-12 col-md-5">

                        <div class="row section-heading-wrapper">

                            <div class="col-md-12 col-sm-12 text-left no-img-separator">
                                <h2>CAMPAIGNS</h2>
                                <span class="heading-separator heading-separator-horizontal"></span>
                                <h4 class="margin-top-24">
                                    
                                    <small>All over the world we have arranged total sixty thousands donation campaign 
                                        and visit thousands of other venues on various occasions. </small>
                                </h4>
                                <!-- <a class="btn btn-theme margin-top-32" href="#">Load All Campaigns</a> -->
                            </div> <!-- end .col-sm-12  -->  

                        </div> <!-- end .row  -->

                    </div>

                    <div class="col-sm-12 col-md-7">
                        
                        <div class="row wow fadeInRight">

                            <div class="event-carousel owl-carousel"  data-nav="false" data-dots="true" data-items="1">

                                <div class="col-md-6 col-sm-12">
                                    <div class="event-layout-1 theme-custom-box-shadow clearfix"> 
                                        <figure class="event-img">
                                            <a href="#">
                                                <img src="images/event_1.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="event-info"> 
                                            <a class="event-date" href="#"><i class="fa fa-calendar-o"></i> 31 APRIL, 2020</a>
                                            <h4>
                                                <a href="#">Opening Donation Day</a>
                                            </h4>
                                            <div class="event-exceprt">Rotract club has organised an blood donation campaign</div>
                                            <div class="event-time">
                                                <a href="#"><i class="fa fa-clock-o"></i> 10.00 - 3.00</a>
                                                <a href="#"> <i class="fa fa-map-marker"></i> Coimbatore, India</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="event-layout-1 theme-custom-box-shadow clearfix"> 
                                        <figure class="event-img">
                                            <a href="#">
                                                <img src="images/event_3.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="event-info"> 
                                            <a class="event-date" href="#"><i class="fa fa-calendar-o"></i> 11 May, 2020</a>
                                            <h4>
                                                <a href="#">Free body Check up</a>
                                            </h4>
                                            <div class="event-exceprt">KMCH has organised an free body check up</div>
                                            <div class="event-time">
                                                <a href="#"><i class="fa fa-clock-o"></i> 10.00 - 3.00</a>
                                                <a href="#"> <i class="fa fa-map-marker"></i> KMCH, Coimbatore</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                

                                
            </div> <!--  end .container  --> 

        </section> 
        
        
       

        <!--  SECTION APPOINTMENT   -->

        <section class="section-content-block section-secondary-bg">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12 col-md-12"> 
                        
                        <div class="row section-heading-wrapper">

                            <div class="col-md-12 col-sm-12 text-left no-img-separator">
                                <br>
                                <h4>Good To Know</h4>
                                <span class="heading-separator heading-separator-horizontal"></span>
                                <h2>Helpful Information
                                </h2>

                            </div> <!-- end .col-sm-10  --> 

                        </div>

                        <div class="about-details"> 

                            <ul class="custom-bullet-list">
                                <li>Maintain a healthy iron level by eating iron rich foods.</li>
                                <li>Drink an extra 16 oz. of water prior to your donation.</li>
                                <li>Avoid alcohol consumption before your blood donation.</li>
                                <li>Remember to bring the donor card or national ID/Passport.</li>
                                <li>Finally, Try to get a good night sound sleep after donation.</li>
                            </ul>

                        </div> <!--  end .about-details -->  
               
                    </div> <!--  end col-lg-6  -->


                   <!--  end .col-lg-6 -->

                </div> <!--  end .row  -->
                
                <div class="row wow fadeIn">

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-center">

                            <i class="fa fa-heartbeat icon"></i>
                            <span class="counter">2578</span>                            
                            <h4 class="text-capitalize">Success Smile</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-center">

                            <i class="fa fa-stethoscope icon"></i>
                            <span class="counter">3235</span>                            
                            <h4 class="text-capitalize">Happy Donors</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-center">

                            <i class="fa fa-users icon"></i>
                            <span class="counter">3568</span>                             
                            <h4 class="text-capitalize">Happy Recipient</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-center">

                            <i class="fa fa-building icon"></i>
                            <span class="counter">1364</span>                            
                            <h4 class="text-capitalize">Total Awards</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->


                </div> <!-- end row  -->

            </div> <!--  end .container -->

        </section>  <!--  end .appointment-section  -->
        
        <!-- SECTION TEAM   -->

        <section class="section-content-block section-custom-bg" data-bg_img='images/team_feat_bg.jpg' data-bg_size='cover' data-bg_position='top center' data-bg_opacity="0">
            
            <div class="container margin-top-80">
                <div class="row section-heading-wrapper-alt">

                    <div class="col-md-12 col-sm-12 text-center no-img-separator">
                        <h4>OUR VOLUNTEERS</h4>
                        <span class="heading-separator heading-separator-horizontal"></span>
                        <h2 class="extra-large">The volunteers who give their time and talents help to fulfill our mission.</h2>

                    </div> <!-- end .col-sm-10  --> 

                </div>
            </div>

          

        </section>

        <!--  SECTION GALLERY  -->

        <section class="section-content-block section-pure-white-bg">

            <div class="container">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center no-img-separator">
                        <h2>CAMPAIGN GALLERY</h2>
                        <span class="heading-separator"></span>
                        <h4>our prestigious voluntary work on campaigns by the team</h4>
                    </div> <!-- end .col-sm-10  -->                      


                </div> <!-- end .row  -->

            </div> <!--  end .container -->

            <div class="container wow fadeInUp">

                <div class="row no-padding-gallery">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_1.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_1.jpg" alt="gallery image" />

                            </figure> <!-- end .gallery-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_2.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_2.jpg" alt="gallery image" />

                            </figure> <!-- end .gallery-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_3.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_3.jpg" alt="gallery image" />

                            </figure> <!-- end .gallery-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->

                </div> <!-- end .row  -->

                <div class="row no-padding-gallery">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_4.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_4.jpg" alt="gallery image" />

                            </figure> <!-- end .gallery-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_5.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_5.jpg" alt="gallery image" />

                            </figure> <!-- end .gallery-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_6.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_6.jpg" alt="gallery image" />

                            </figure> <!-- end .gallery-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->

                </div> <!-- end .row  -->

            </div><!-- end .container-fluid  -->

        </section> <!-- end .section-content-block  -->

        <!-- HIGHLIGHT CTA  -->  
        
        <section class="padding-bottom-100 padding-top-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="cta-section-1 section-secondary-bg text-center theme-custom-box-shadow">
                            <h2 class="text-capitalize">Become A Part Of Great Work Today</h2>
                           
                            <a class="btn btn-theme margin-top-24 wow bounceIn" href="#">JOIN WITH US</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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