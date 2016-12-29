<?php

include("ripcord-master/ripcord.php");
include("odoo-lib.php");
$odoo_client = new odoo_client();
$odoo_client->back_login();
$ride_sharings = $odoo_client->get_ride_sharings();
$info_sources = $odoo_client->get_info_sources();
$vehicle_makes = $odoo_client->get_vehicle_makes();
$vehicle_colors = $odoo_client->get_vehicle_colors();
$years = range(date("Y")-8, date("Y"));

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>This is title</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
         <link href="http://allfont.net/allfont.css?fonts=arial-narrow" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
        <link rel="stylesheet" href="css/slicknav.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="fonts/fonts.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/ui.css"> 
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

        <link rel="stylesheet" href="css/doqar.css">

        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <div id='loader'><img src="spinner.gif"/></div>

        <header class="header_area">
            <div class="container">
                <div class="row">
                    <div class="header">
                        <div class="logo">
                            <img src="img/logo.png" alt="">
                        </div>
                        <div class="open_buttn_area">
                            <div class="open_buttn">
                                <span style="font-size:26px;color:#1d4789 ;cursor:pointer" onclick="openNav()">MENU &#9776;</span>
                            </div>
                        </div>
                        <div class="onley_mobile">
                            <div id="mySidenav" class="sidenav"> 
                                    <div class="black_bg">                                        
                                        <div  class="buttonsss"><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></div>
                                        <div class="profile_iamge">
                                            <p>LOGOUT</p>
                                            <a href=""><img src="img/arr.png"></a>
                                        </div>
                                        <div class="progile_pc">
                                            <img src="img/login.png" alt="">
                                        </div>
                                        <div class="login_text">                                            
                                            <ul>
                                                <li>username</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="blue_bg">
                                        <ul>    
                                            <li><a onclick="closeNav()" href="#how_work">How It Works</a></li>
                                            <li><a onclick="closeNav()" href="#earning">Earnings</a></li>
                                            <li><a onclick="closeNav()" href="#step">3 Steps</a></li>
                                            <li><a onclick="closeNav()" href="#contact">Contact Us</a></li>
                                            <li><a onclick="closeNav()" href="">FAQ</a></li> 
                                        </ul>
                                    </div>
                                    <div class="white_bg">
                                        <ul> 
                                            <li><a onclick="closeNav()" href="">Terms of Use</a></li>  
                                            <li><a onclick="closeNav()" href="">Disclaimer</a></li>  
                                            <li><a onclick="closeNav()" href="">Privacy Policy</a></li>  
                                        </ul>
                                    </div>                                                                        
                            </div>  
                        </div>        
                            
                        </div>  
                        <div class="main_menu">
                            <ul id="nav" class="navs">
                                <li><a href="#how_work">How It Works</a></li>
                                <li><a href="#earning">Earnings</a></li>
                                <li><a href="#step">3 Steps</a></li>
                                <li><a href="#contact">Contact Us</a></li>
                                <li><a href="">FAQ</a></li> 
                            </ul>
                        </div>                                
                        <div class="login_menu">
                            <ul id="nav">
                                <li><a>Sign Up:</a><a id="owerner" data-toggle="modal" data-target="#car_owner_signup" href="">Car Owner</a></li>
                                <li>|<a >Login:</a><a id="adviserss" data-toggle="modal" data-target="#adviser" href="">Advertiser</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>        
            <section class="footer_modal_area">
            <div class="container">
                <div class="row">
                    <div class="footer_modal">
                        <div class="simple_logo">
                            <img src="img/logo.png" alt="">
                        </div>
                        <div class="do_quar_text">
                            <h2>doQar</h2>
                            <img src="img/star.png">
                            <p>You Drive. You Earn</p>
                        </div>
                        <div class="google_mobdal">
                            <a href=""><img src="img/google.png" alt=""></a>
                            <p>Install the App</p>
                        </div>
                        <div class="closle_pop">
                            <p>X</p> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </header> 

        <section class="banner_area">
            <div class="container">
                <div class="row">
                    <div class="banner">
                        <div class="social">
                            <ul>
                                <li><a href=""><img src="img/facebook.png" alt=""></a></li>
                                <li><a href=""><img src="img/youtube.png" alt=""></a></li>
                                <li><a href=""><img src="img/twitter.png" alt=""></a></li>
                                <li><a href=""><img src="img/print.png" alt=""></a></li>
                            </ul>
                        </div>
                        <h2>you drive. you earn.</h2>
                        <img src="img/car.png">
                    </div>
                </div>
            </div>
        </section>

        <section class="popup_area">
            <div class="container">
                <div class="row">

                    <div class="hidden_block car_login">
                        <div class="modal fade" id="car_owner_signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-content"> 
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">close &times;</span>
                                </button> 
                                <div class="signup_form">
                                    <h2>Car Owner Sign up</h2>
                                    <p id="sign_up_error"></p>
                                    <form action="signup.php" method="post" id="sign_up_form">
                                        <div class="page_one">
                                            <div class="single_input_group">
                                                <div class="single_input">
                                                    <input type="text" name="name" placeholder="name">
                                                </div>
                                                <div class="single_input no_margin">
                                                    <div class="single_radio">
                                                        <input type="radio" name="gender" value="m"><h3>Laki-laki</h3>
                                                    </div>
                                                    <div class="single_radio no_margin">
                                                        <input type="radio" name="gender" value="f"><h3>Perempuan</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single_input_group">
                                                <div class="single_input">
                                                    <input class="bg" type="text" name="dob" id="datepicker" placeholder="tanggal lahir"> 
                                                </div>
                                                <div class="single_input no_margin">
                                                    <input type="text" name="mobile" placeholder="handphone">
                                                </div>
                                            </div>
                                            <div class="single_input_group">
                                                <select id="ride_sharing_ids" id="big_image" name="ride_sharing_ids" multiple>
                                                    <?php foreach ($ride_sharings as $key=>$ride ) :?>
                                                        <option value="<?php echo $ride['id']?>"><?php echo $ride['name']?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <div class="select"></div>
                                            </div>
                                            <div class="single_input_group">
                                                <div class="single_input">
                                                    <input type="email" name="email" placeholder="email address">
                                                </div>
                                                <div class="single_input no_margin">
                                                    <input type="email" name="email1" placeholder="email address*"> 
                                                </div>
                                            </div>
                                            <div class="single_input_group">
                                                <select name="info_source_ids" id="info_source_ids" name="info_source_ids" multiple>
                                                    <?php foreach ($info_sources as $key=>$info ) :?>
                                                        <option value="<?php echo $info['id']?>"><?php echo $info['name']?></option>
                                                    <?php endforeach; ?>

                                                </select>
                                                <div class="select"></div>
                                            </div>
                                            <div class="page_number_button">
                                                <div class="page_number">
                                                    <p>Page 1/3</p>
                                                </div>
                                                <div class="next_button">
                                                    <ul>
                                                        <li id="pone" class="next1">next</li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="page_tow" id="dropdown">
                                            <div class="single_input_group">
                                                <div class="single_input">
                                                    <input type="text" name="stkn_name" placeholder="nama di STNK">
                                                    <p>Sesuai dengan STNK</p>
                                                </div>
                                                <div class="single_input no_margin">
                                                    <select id="vehicle_make_id" name="vehicle_make_id" class="step1">
                                                        <?php foreach ($vehicle_makes as $key=>$make ) :?>
                                                            <option value="<?php echo $make['id']?>"><?php echo $make['name']?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <div class="select"></div>
                                                    <p>Merk mobil anda </p>
                                                </div>
                                            </div>
                                            <div class="single_input_group">
                                                <div class="single_input">
                                                    <select id="vehicle_model_id" name="vehicle_model_id" class="step2">
                                                    </select>
                                                    <div class="select"></div> 
                                                    <p>Model mobil anda</p>
                                                </div>
                                                <div class="single_input no_margin">
                                                    <select id="vehicle_year" name="vehicle_year">
                                                        <?php foreach ($years as $key=>$year  ) :?>
                                                            <option value="<?php echo $year?>"><?php echo $year?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <div class="select"></div>
                                                    <p>Tahun pembuatan</p>
                                                </div>
                                            </div>
                                            <div class="single_input_group">
                                                <div class="single_input">
                                                    <select id="vehicle_color_id" nam="vehicle_color_id">
                                                        <?php foreach ($vehicle_colors as $key=>$color  ) :?>
                                                            <option value="<?php echo $color['id']?>"><?php echo $color['name']?></option>
                                                        <?php endforeach; ?>
                                                    </select> 
                                                    <div class="select"></div>
                                                </div>
                                                <div class="single_input no_margin">
                                                    <select id="is_cat_orisinil" name="is_cat_orisinil">
                                                        <option value="">CAT ORISINIL</option>
                                                        <option value="y">YA </option>
                                                        <option value="n">TIDAK</option>
                                                    </select>
                                                    <div class="select"></div> 
                                                    <p>Apakah cat masih orisinil   </p>
                                                </div>
                                            </div>
                                            <div class="single_input_group">
                                                <div class="single_input">
                                                    <select id="is_dempulan" name="is_dempulan">
                                                        <option value="">ADA DEMPULAN</option>
                                                        <option value="y">YA </option>
                                                        <option value="n">TIDAK</option>
                                                    </select>
                                                    <div class="select"></div> 
                                                    <p>Apakah bodi mobil ada dempulan ?</p>
                                                </div>
                                                <div class="single_input no_margin"> 
                                                    <input type="text" name="plate_no" placeholder="nomor plat">
                                                </div>
                                            </div>                                            
                                            <div class="page_number_button">
                                                <div class="page_number">
                                                    <p>Page 2/3</p>
                                                </div>
                                                <div class="next_button">
                                                    <ul>
                                                        <li id="backb" class="next back">Back</li>
                                                        <li id="nextb" class="next next1">next</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="page_three">
                                            <div class="single_input_group">                                                
                                                <h1>rumah</h1>
                                                <div id="small_put" class="single_input">
                                                    <input type="text" name="zip" placeholder="kode pos">
                                                </div>
                                                <div id="big_put" class="single_input no_margin">  
                                                    <input type="text" id="" name="home_landmark" placeholder="ALAMAT">
                                                    <div class="map_button">
                                                        <a id="owerner" data-toggle="modal" data-target="#map" href=""><img src="img/map.png" alt=""></a>
                                                    </div>  
                                                    <p>Almat lengkap rumah (optional)</p>
                                                </div>
                                            </div>  
                                            <div class="single_input_group">
                                                <h1>TEMPAT YANG SERING DIKUNJUNGI</h1>
                                                <div id="small_put" class="single_input"> 
                                                    <input type="text" name="office_zip" placeholder="kode pos">
                                                </div>
                                                <div id="big_put" class="single_input no_margin"> 
                                                    <input type="text" id="" name="office_landmark" placeholder="ALAMAT">
                                                    <div class="map_button">
                                                        <a id="owerner" data-toggle="modal" data-target="#map" href=""><img src="img/map.png" alt=""></a>
                                                    </div>  
                                                   <p>Alamat lengkap</p>
                                                </div>
                                            </div> 

                                            <div class="single_input_group"> 
                                                <div id="" class="single_input"> 
                                                    <input type="password" name="password" placeholder="password"> 
                                                </div>
                                                <div id="" class="single_input no_margin">
                                                    <input type="password" name="password1" placeholder="password">
                                                    <p>Password sekali lagi</p>
                                                </div>
                                            </div> 
                                            <div class="checkbox_area">
                                                <div class="single_checkbox">                                                    
                                                    <input type="checkbox" name="check1" id="check1">
                                                    <p>Saya setuju bahwa hubungan hukum antara saya dan doQar adalah hubungan kerjasama, bukan hubungan ketenagakerjaan.</p>
                                                </div>
                                                <div class="single_checkbox">                                                    
                                                    <input type="checkbox" name="check2" id="check2">
                                                    <p>Saya telah membaca dan menyetujui <a href="">Terms of service Use</a>, <a href="">Terms & Conditions</a>, <a href="">Privacy Policy</a> dan <a href="">Disclaimer</a> DoQar.</p>
                                                </div>
                                            </div>
                                            <div class="page_number_button">
                                                <div class="page_number">
                                                    <p>Page 3/3</p>
                                                </div>
                                                <div class="next_button">
                                                    <ul>
                                                        <li id="backl" class="next1">back</li>
                                                        <li><input type="submit" value="Sign up"></li>
                                                    </ul>
                                                </div>
                                            </div>



                                        </div>


                                    </form>
                                </div>
                              </div>

                          </div>
                        </div>                        
                    </div>
                    <div class="hidden_block car_login">
                        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-content"> 
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">close &times;</span>
                                </button> 
                                <div class="car_werner_login">
                                    <h2>Car Owner Login</h2>

                                    <p id="login_error"></p>

                                    <form action="login.php" method="post" id="login_form">
                                        <input type="email" name="email" placeholder="Email Address">
                                        <input class="no_margin" type="password" name="password" placeholder="Password">
                                        <div class="submit_area common_form">
                                            <div class="robot_area login_radio">
                                                <input type="radio" name="robot"><p>I’m not a robot.</p>
                                            </div>
                                            <div class="robot_area login_sub">
                                                <input type="submit" value="Sign in">
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="login_meusss">
                                            <ul>
                                                <li><p>Not a member yet?</p></li>
                                                <li><a data-toggle="modal" data-target="#car_owner_signup" id="get_pass" href="">Sign Up!</a></li>
                                                <li><a data-toggle="modal" data-target="#password" id="get_pass" href="">Forgot Your Password?</a></li>
                                            </ul>
                                            <h3>or</h3>
                                            <a class="facebookss" href="">Sign In With Facebook</a>
                                            <a href=""> Sign in with Google</a>
                                        </div>

                                    </form>
                                </div>
                              </div>

                          </div>
                        </div>                        
                    </div> 





                    <div class="hidden_blocka car_login">
                        <div class="modal fade" id="adviser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-content"> 
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">close &times;</span>
                                </button> 
                                <div class="car_werner_login adviser_login">
                                    <h2>Advertiser Login</h2>

                                    <p id="ads_login_error"></p>

                                    <p>Please log into your account.</p>
                                    <form action="adlogin.php" method="post" id="ads_login_form">
                                        <input type="email" name="email" placeholder="Email Address">
                                        <input class="no_margin" type="password" name="password" placeholder="Password">
                                        <div class="submit_area common_form">
                                            <div class="robot_area login_radio">
                                                <input type="radio" name="robot"><p>I’m not a robot.</p>
                                            </div>
                                            <div class="robot_area login_sub">
                                                <input type="submit" value="Sign in">
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="login_meusss">
                                            <ul> 
                                                <li><a data-toggle="modal" data-target="#password" id="get_passs" href="">Forgot Your Password?</a></li>
                                            </ul>
                                        </div>

                                    </form>
                                </div>
                              </div>

                          </div>
                        </div>                        
                    </div>
                    <div class="car_login">
                        <div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-content"> 
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">close &times;</span>
                                </button> 
                                <div class="car_werner_login adviser_login forget">
                                    <h2>Forgot Your Password?</h2>
                                    <p id="forgot_password_error"></p>
                                    <form action="adlogin.php" method="post" id="forgot_password_form">
                                        <input type="email" name="email" placeholder="Email Address"> 
                                        <div class="submit_area common_form">
                                            <div class="robot_area login_radio">
                                                <input type="radio" name="robot"><p>I’m not a robot.</p>
                                            </div>
                                            <div class="robot_area login_sub">
                                                <input type="submit" value="Sign in">
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="login_meusss">
                                            <p>We will send the new password to your email.</p>
                                        </div>

                                    </form>
                                </div>
                              </div>

                          </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </section>
        <section class="earn_extra_area">
            <div class="container">
                <div class="row">
                    <div class="earn_exta">
                        <h2>Earn Extra Income While You Drive</h2>
                        <div class="google_text_area">
                            <div class="google_text">
                                <p>© 2016 doQar</p>
                            </div>
                            <div class="google_button">
                                <a href=""><img src="img/google.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="how_work" class="car_owner_area">
            <div class="left_car_owrner">
                <div class="overlay"></div>
                <img src="img/driver.jpg">
                <h2>Car Owner</h2>                 
                <div class="uicon uone">
                    <a data-toggle="modal" data-target="#vedio2" id="get_passs" href=""><img src="img/uicon.png"></a>
                    <h2>Car Owner</h2>
                </div>

                <div class="modal fade" id="vedio1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-content"> 
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">close &times;</span>
                        </button> 
                        <div class="car_werner_login adviser_login forget">
                            <div class="car_owerner_vedio_area">
                                <iframe width="100%" height="480" src="https://www.youtube.com/embed/3T9USqzl1vw" frameborder="0" allowFullScreen=""></iframe>
                                <div class="vedio_content">
                                    <ul>
                                        <li><a href="">Earn millions per month</a></li>
                                        <li class="itow"><a href="">free for all</a></li>
                                        <li class="ithree"><a href="">NO MINIMUM KM REQUIREMENT</a></li>
                                    </ul>
                                    <a href="">Sign Me Up Now</a>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
                </div> 

            </div>
            <div class="left_car_owrner">
                <div class="overlay overlay1"></div>
                <img src="img/driver1.jpg">
                <h2 class="right">Advertiser</h2> 
                <div class="uicon">
                    <a data-toggle="modal" data-target="#vedio2" id="get_passs" href=""><img src="img/uicon.png"></a>
                    <h2>Advertiser</h2>
                </div>
                <div class="modal fade" id="vedio2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-content"> 
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">close &times;</span>
                        </button> 
                        <div class="car_werner_login adviser_login forget">
                            <div class="car_owerner_vedio_area">
                                <iframe width="100%" height="480" src="https://www.youtube.com/embed/3T9USqzl1vw" frameborder="0" allowFullScreen=""></iframe>
                                <div class="vedio_content">
                                    <ul>
                                        <li><a href="">GENERATE MORE IMPRESSIONS</a></li>
                                        <li class="itow"><a href="">SUITS ANY BUDGET</a></li>
                                        <li class="ithree"><a href="">TRACKING & ANALYTICS</a></li>
                                    </ul>
                                    <a href="">I Need more info</a>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>   
            </div>
        </section>
        <section class="check_titless">
            <div class="container">
                <div class="row">
                    <div class="potentital_encom">
                        <h2>Check Out What doQar Can Do For You</h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="earning" class="potential_encome_area">
            <div class="container">
                <div class="row">
                    <div class="potentital_encom">                        
                        <h3>Your potential extra income with doQar</h3> 
                              <div id="calculator"> 
                              <div class="slide_level_area"> 

                            <div class="wrap_level_area">
                                <div class="wrap_text">
                                    <h2>WRAP LEVEL</h2>
                                </div>
                                <div class="wrap_slider topss">
                                    <div id="slider_wrap">
                                        <div id="custom-handle-wrap" class="ui-slider-handle"></div>
                                    </div> 
                                </div> 
                                <div class="wrap_slider">
                                    <div class="slider_wrap_step">
                                        <div class="single_one commonsss">
                                            <p>Simple</p>
                                        </div>
                                        <div class="single_two commonsss">
                                            <p>Partial</p>
                                        </div>
                                        <div class="single_three commonsss">
                                            <p>Full</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="distance_car_area">
                                <div class="distance_text">
                                    <h2>DISTANCE</h2>
                                    <p>KM per day</p>
                                </div>
                                <div class="distance_slide">  
                                    <div id="slider_km">
                                      <div class="calculator-control" id="calculator-commute"></div> 
                                    </div> 
                                </div>
                            </div>

                                     
                            </div> 

                            <div class="car_price_area">
                                <div id="approx"><span>IDR </span><span id="calculator-low"></span> <span>K</span> <span class="dash">-</span> <span id="calculator-high"></span>K*</div>
                                <div class="months">* Monthly Approximation</div> 
                            </div>  

          
                           </div>
                           <!--.content-->

                    </div> 
                </div>
            </div>
        </section>
        <section id="step" class="three_steap_process">
            <div class="container">
                <div class="row">
                    <div class="top_level">                    
                    <div class="signup_process">                    
                        <div class="single_single_up">
                            <img src="img/icon1.png">
                            <h3>Sign Up</h3>
                            <p>Download the <span>App for Android</span> and create an account</p>
                            <img class="google" src="img/google1.png">
                        </div> 
                        <div class="single_single_up">
                            <img src="img/icon2.png">
                            <h3>Qualify</h3>
                            <p>Drive with the App and meet  <span>the minimum qualifications.</span> </p> 
                        </div> 
                        <div class="single_single_up">
                            <img src="img/icon3.png">
                            <h3>Select Campaign</h3>
                            <p>and start your <span>earnings</span> with doQar.</p> 
                        </div> 
                        </div> 
                        <div id="mobile_signuup" class="">                    
                            <div class="single_single_up">
                                <img src="img/icon1.png">
                                <h3>Sign Up</h3>
                                <p>Download the <span>App for Android</span> and create an account</p>
                                <img class="google" src="img/google1.png">
                            </div> 
                            <div class="single_single_up">
                                <img src="img/icon2.png">
                                <h3>Qualify</h3>
                                <p>Drive with the App and meet  <span>the minimum qualifications.</span> </p> 
                            </div> 
                            <div class="single_single_up">
                                <img src="img/icon3.png">
                                <h3>Select Campaign</h3>
                                <p>and start your <span>earnings</span> with doQar.</p> 
                            </div>  
                        </div>
                        <div class="signup_process images">                            
                            <img src="img/carb1.png">
                        </div>
                    </div> 
 
                </div>
            </div>
        </section>
        <section id="contact" class="contact_form_area">
            <div class="container">
                <div class="row">
                    <div class="main_contact_form">
                       <div class="col-md-5 col-xs-12 col-sm-5">
                           <div class="form_title">
                                <h2><span>Need any help? </span>Contact us now!</h2>  
                           </div>
                       </div>  
                       <div class="col-md-7 col-xs-12 col-sm-7">   
                            <div class="contact_form">
                                <form action="#" method="POST">
                                    <input type="radio" name="one" id="car1" onchange="update()"><p>I’m a Car Owner </p>
                                    <input type="radio" name="one" id="car2" onchange="update()" checked><p>I’m an Advertiser</p>
                                    <input type="radio" name="one" id="other" onchange="update()"><p>Others</p>
                                    <script>
                                        function update(){
                                            if(document.getElementById("car1").checked){ 
                                                document.getElementById("form_content").innerHTML = '<div id="common_form" class="common_form"><input type="text" class="hulf" name="name" placeholder="Your Name"><input type="email" class="hulf no_margin" name="email" placeholder="Your Email"><input type="tel" name="cphone" class="hulf" placeholder="Cell Phone"><input type="tel" name="phone" class="hulf no_margin" placeholder="city you live in"><input type="text" name="subject" class="full" placeholder="Subject"><textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea></div>';
                                                    document.getElementById("p2").style.color = "blue"
                                            }
                                            else if(document.getElementById("car2").checked){ 
                                                document.getElementById("form_content").innerHTML = '<div id="common_form" class="common_form"><input type="text" class="hulf" name="name" placeholder="Your Name""><input type="email" class="hulf no_margin" name="email" placeholder="Your Email""><input type="tel" name="phone" class="hulf" placeholder="Phone"><input type="tel" name="cphone" class="hulf no_margin" placeholder="Cell Phone"><input type="text" name="company" class="full" placeholder="Company Name"><input type="text" name="subject" class="full" placeholder="Subject"><textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea></div>';
                                            }
                                            else{
                                                document.getElementById("form_content").innerHTML = '<div id="common_form" class="common_form"><input type="text" class="hulf" name="name" placeholder="Your Name""><input type="email" class="hulf no_margin" name="email" placeholder="Your Email""><input type="tel" name="phone" class="hulf" placeholder="Phone"><input type="tel" name="cphone" class="hulf no_margin" placeholder="Cell Phone"><input type="text" name="company" class="full" placeholder="Company Name"><input type="text" name="subject" class="full" placeholder="Subject"><textarea name="message" id="" cols="30" rows="10" placeholder="Your ss"></textarea></div>';
                                            }
                                        }
                                    </script>
                                    <div id="form_content">
                                        <div id="common_form" class="common_form">
                                            <input type="text" class="hulf" name="name" placeholder="Your Name">
                                            <input type="email" class="hulf no_margin" name="email" placeholder="Your Email">
                                            <input type="tel" name="phone" class="hulf" placeholder="Phone">
                                            <input type="tel" name="cphone" class="hulf" placeholder="Cell Phone">
                                            <input type="text" name="company" class="full" placeholder="Company Name">
                                            <input type="text" name="subject" class="full" placeholder="Subject">
                                            <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="submit_area common_form">
                                        <div class="robot_area">
                                            <input type="radio" name="robot"><p>I’m not a robot.</p>
                                        </div>
                                        <div class="robot_area">
                                            <input type="submit" value="Send Message">
                                        </div>
                                        <div class="mobile_image">
                                            <img src="img/car-bg.png" alt="">
                                        </div>
                                    </div>
                                </form>
                            </div>                 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer_area">
            <div class="container">
                <div class="row">
                    <div class="footer clearfix">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="single_footer">
                                <h2>Contact</h2>
                                <p>Mayapada Tower I, 11/F </p>
                                <p>Jl. Jend. Sudirman Kav. 28, Jakarta </p>
                                <p>Selatan 12920</p>
                                <a href="tel:021 30067848">021 30067848</a>
                                <p>Daily (08.00 - 17.00)</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="single_footer comon_footer">
                                <h2>Car owner</h2>
                                <p>customer.care@doQar.com</p>
                                <ul id="nav">
                                    <li><a href="">• How it Works?</a></li>
                                    <li><a href="">• FAQ</a></li>
                                </ul>
                            </div>
                        </div> 
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="single_footer comon_footer">
                                <h2>Advertiser</h2>
                                <p>advertiser@doQar.com</p>
                                <ul id="nav">
                                    <li><a href="">• Our Partners</a></li>
                                    <li><a href="">• News</a></li>
                                    <li><a href="">• Gallery</a></li>
                                    <li><a href="">• FAQ</a></li>
                                </ul>
                            </div>
                        </div> 
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="single_footer last_footer">
                                <h2>Follow Us</h2> 
                                <ul>
                                    <li><a href=""><img src="img/f.png" alt=""></a></li>
                                    <li><a href=""><img src="img/you.png" alt=""></a></li>
                                    <li><a href=""><img src="img/twitters.png" alt=""></a></li>
                                    <li><a href=""><img src="img/t.png" alt=""></a></li>
                                </ul>
                                <img class="google" src="img/play.png">
                            </div>
                        </div> 
                    </div>
                    <div class="bottom_footer clearfix">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="left_bottom">
                                <h2>WhatsApp Only</h2>
                                <a href="tel:0899 07 36727">0899 07 36727</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="left_bottom">
                               <h3>© 2016 doQar - You Drive. You Earn.</h3> 
                               <ul>
                                   <li><a href="">Terms of Use</a></li>
                                   <li><a href="">Disclaimer</a></li>
                                   <li><a href="">Privacy Policy</a></li>
                               </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>



                    <div class="hidden_block car_login">
                        <div class="modal fade" id="map" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-content"> 
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">close &times;</span>
                                </button> 
                                   <!-- Location: <input type="text" id="us2-address" style="width: 200px"/> -->
                                    <div class="single_input_group"> 
                                        <div id="mar" class="single_input"> 
                                            <input type="text" id="us2-address"/> 

                                             <input type="hidden" id="us2-radius"/>
                                            <input type="hidden" id="us2-lat"/>                                            
                                            <input type="hidden" id="us2-lon"/>
                                        </div> 
                                    </div> 

                                    <div id="us2"></div>
                              </div>

                          </div>
                        </div>                        
                    </div>






    
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/nav.js"></script>
        <script src="js/ui.js"></script>
        <script src="js/ion.rangeSlider.min.js"></script>
        <script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
        <script src="js/locationpicker.jquery.js"></script>
        <script src="js/main.js"></script>
<script>
    $('#us2').locationpicker({
        location: {
            latitude: 46.15242437752303,
            longitude: 2.7470703125
        },
        radius: 50,
        inputBinding: {
            latitudeInput: $('#us2-lat'),
            longitudeInput: $('#us2-lon'),
            radiusInput: $('#us2-radius'),
            locationNameInput: $('#us2-address')
        }
    });
</script>
          <script>
             var Wrapify = Wrapify || {};

             (function() {

               Wrapify.Calculator = function($, id) {
                 var self = this;

                 var $el = $(id);
                 var $commuteCtrl = $el.find("#calculator-commute");
                 var $commuteTooltip = $('<div id="tester" class="calculator-control-tooltip calculator-control-tooltip-commute"></div>');
                 var $coverageCtrl = $el.find("#custom-handle-wrap");
                 var $coverageTooltip = $('<div class="calculator-control-tooltip calculator-control-tooltip-coverage"></div>');
                 var $low = $el.find("#calculator-low");
                 var $high = $el.find("#calculator-high");

                 this.commute = 25;
                 this.coverage = 0;

                 this.low = null;
                 this.high = null;

                 function calculate() {
                  var km = $("#calculator-commute").slider("value");
                  var min_days  = 8;
                  var max_days  = 22;
                  var min_avg_price  = 58.33;
                  var max_avg_price  = 91.67;
                  var price_gap = 16.67;
                  var coverageScale = [0.33, 0.75, 1.0];
                  self.low =  (km * (min_avg_price + (price_gap * coverageScale[self.coverage])) * min_days);
                  self.high = (km * (max_avg_price + (price_gap * coverageScale[self.coverage])) * max_days);

                 }

                 function update() {
                   var coverageText = [
                     "Panel",
                     "Partial",
                     "Full"
                   ];

                   calculate();

                   $commuteTooltip.html(self.commute);
                   $coverageTooltip.html(coverageText[self.coverage]);

                   $low.html(Math.round(self.low));
                   $high.html(Math.round(self.high));
                 }

                 $commuteCtrl.slider({
                   min: 0,
                   max: 100,
                   step: 1,
                   value: self.commute,
                   create: function(event, ui) {
                     $(event.target).find('.ui-slider-handle').append($commuteTooltip);
                   },
                   slide: function(event, ui) {
                     self.commute = parseInt(ui.value);
                     update();
                   }
                 });

                 $coverageCtrl.slider({
                   min: 0,
                   max: 2,
                   step: 1,
                   value: self.coverage,
                   create: function(event, ui) {
                     $(event.target).find('.ui-slider-handle').append($coverageTooltip);
                   },
                   slide: function(event, ui) {
                     self.coverage = parseInt(ui.value);
                     update();
                   }
                 });

                 update();
               };

             })();

             jQuery(function() {
               window.calculator = new Wrapify.Calculator(jQuery, "#calculator");
             });
          </script>
          <!-- slide Menu -->
          <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>
        <!-- Jquery Date Picker  -->
         <script>
          $( function() {
            $( "#datepicker" ).datepicker();
          } );
          </script>
        <script src="js/jquery.cascadingdropdown.min.js"></script>
        <script src="js/odoo-client.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.loadingoverlay/latest/loadingoverlay_progress.min.js"></script>
    </body>
</html>
