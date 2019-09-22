<!DOCTYPE html>
<html lang="en">
<head>
  <title>Apply</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Azerbaijan E-Visa">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/styles/bootstrap4/bootstrap.min.css')?>">
  <link href="<?=base_url('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/styles/offers_styles.css')?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/styles/offers_responsive.css')?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/styles/date_picker.css')?>">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Economica:700,400italic'>
  <link rel="stylesheet" href="<?=base_url('assets/styles/style.css')?>">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
  <script src="<?=base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
  <script type="text/javascript">
  </script>
</head>
<body>
  <div class="super_container">
    <!-- Header -->
    <header class="header">
      <!-- Main Navigation -->
      <nav class="main_nav">
        <div class="container">
          <div class="row">
            <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
              <div class="logo_container">
                <div class="logo"><a href="<?base_url('Home')?>"><img src="assets/images/evisa.png" alt=""></a></div>
              </div>
              <div class="main_nav_container ml-auto">
                <ul class="main_nav_list">
                  <li class="main_nav_item"><a href="<?=base_url('home')?>">home</a></li>
                  <li class="main_nav_item"><a href="<?=base_url('aboutus')?>">about us</a></li>
                                    <!-- <li class="main_nav_item"><a href="offers.html">offers</a></li>
                                      <li class="main_nav_item"><a href="blog.html">news</a></li> -->
                                      <li class="main_nav_item"><a href="<?=base_url('contact')?>">contact</a></li>
                                    </ul>
                                  </div>
                                  <div class="hamburger">
                                    <i class="fa fa-bars trans_200"></i>
                                  </div>
                                </div>
                              </div>
                            </div>  
                          </nav>
                        </header>
                        <div class="menu trans_500">
                          <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="menu_close_container"><div class="menu_close"></div></div>
                            <div class="logo menu_logo"><a href="#"><img src="assets/images/evisa.png" alt=""></a></div>
                            <ul>
                              <li class="menu_item"><a href="<?base_url('Home')?>">Home</a></li>
                              <li class="menu_item"><a href="<?base_url('Aboutus')?>">About us</a></li>
                    <!-- <li class="menu_item"><a href="offers.html">offers</a></li>
                      <li class="menu_item"><a href="blog.html">news</a></li> -->
                      <li class="menu_item"><a href="<?base_url('contact')?>">Contact Us</a></li>
                    </ul>
                  </div>
                </div>
                <!-- Home -->
                <div class="home">
                  <div class="home_background parallax-window" data-parallax="scroll" data-image-src="assets/images/baku2.jpeg"></div>
                  <div class="home_content">
                   <div class="home_title">Application</div>
                 </div>
               </div>
               <div class="react-home react-checkout">
                <div class="react-input-box">
                  <div class="container"><!-- step wizard -->
                    <?php
                      if ($this->session->flashdata('success')) {
                        echo '<script>setInterval(function(){$("#step5").click();}, 10);</script>';
                    ?>
                    <!-- <div id="fade_out" class="alert alert-success"><?=$this->session->flashdata('success')?></div> -->
                    <?php
                      }elseif ($this->session->flashdata('error')){
                    ?>
                    <div id="fade_out" class="alert alert-danger"><?=$this->session->flashdata('error')?></div>
                    <?php
                      }
                    ?>
                    <div class="stepwizard col-md-offset-3 col-sm-offset-1 col-xs-offset-1">
                      <div class="step-row setup-panel" id="wizardControl"  style="pointer-events: none;cursor:not-allowed;">
                        <div class="step " >
                          <a href="#step-1"  id="step1"  class="btn btn-primary btn-default button-no-gradient btn-step" style="cursor:not-allowed;pointer-events: none;" >1</a>
                          <p class="step1_mob">Your Country</p>
                        </div>
                        <div class="step">
                          <a href="#step-2"  id="step2" class="btn btn-default button-no-gradient " style="cursor:not-allowed;pointer-events: none;">2</a>
                          <p>Arival Date</p>
                        </div>
                        <div class="step">
                          <a href="#step-3" id="step3"  class="btn btn-default button-no-gradient" style="cursor:not-allowed;pointer-events: none;">3</a>
                          <p class="step3_mob">Personal Information</p>
                        </div>
                        <div class="step">
                          <a href="#step-4"  id="step4"  class="btn btn-default button-no-gradient" style="cursor:not-allowed;pointer-events: none;" >4</a>
                          <p>Data Control</p>
                        </div>
                        <div class="step">
                          <a href="#step-5"  id="step5"  class="btn btn-default button-no-gradient " style="cursor:not-allowed;pointer-events: none;">5</a>
                          <p>Payment</p>
                        </div>
                      </div>
                    </div>
                  </div><!-- end step wizard -->
                  <div class="container"><!-- row A-->
                    <form role="form" action="<?=base_url('apply/addapplydata')?>"  data-toggle="validator" id="apply-form" method="post" enctype="multipart/form-data">
                      <!-- start of step 1 -->
                      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                      <div class="row setup-content well" id="step-1">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-12 col-md-8 col-lg-8">
                              <div class="row">
                                <div class="col-sm-3">
                                  <label class="float-right">Country:</label>
                                </div>
                                <div class="col-sm-8">
                                  <div class="form-group">
                                  <select class="js-example-basic-single form-control" name="country"  required data-bv-message="Country is required">
                                    <option value="" selected="selected">- select -</option>
                                    <?php
                                    foreach ($countries as $country) {
                                      ?>
                                      <option value="<?=$country->country_code?>"><?=$country->country_name?></option>
                                      <?php
                                    }
                                    ?>
                                  </select>
                                  </div>
                                </div>
                              </div>
                              <div class="row mt-3">
                                <div class="col-sm-3">
                                  <label class="float-right">Travel Document:</label>
                                </div>
                                <div class="col-sm-8">
                                  <div class="form-group">
                                  <select class="js-example-basic-single form-control" name="travel_document" required data-bv-message="Travel document is required">
                                    <option value="101">Ordinary passport</option>
                                    <option value="">Select Travel Document</option>
                                    <option value="102">Diplomatic Passport</option>
                                    <option value="103">Service Passport</option>
                                    <option value="104">For stateless person</option>
                                    <option value="105">Special passport</option>
                                    <option value="106">Official passport</option>
                                  </select>
                                  </div>
                                </div>
                              </div>
                              <div class="row mt-3">
                                <div class="col-sm-3">
                                  <label class="float-right">Purpose of Visit:</label>
                                </div>
                                <div class="col-sm-8">
                                  <div class="form-group">
                                  <select class="js-example-basic-single form-control" name="purpose_visit"  required data-bv-message="Purpose of Visit is required">
                                    <option value="201">Tourism</option>
                                    <option value="">Select Purpose of Visit</option>
                                    <option value="202">Business Trip</option>
                                    <option value="203">Science</option>
                                    <option value="204">Education</option>
                                    <option value="205">Labor</option>
                                    <option value="206">Culture</option>
                                    <option value="207">Sports</option>
                                    <option value="208">Humanitarian</option>
                                    <option value="209">Medical Treatment</option>
                                    <option value="210">Personal Trip</option>
                                    <option value="211">Official Trip</option>
                                  </select>
                                </div>
                                </div>
                              </div>
                              <div class="divider"></div>
                              <div class="row mt-3">
                                <div class="col-sm-3">
                                  <label class="float-right">Type of Visa:</label>
                                </div>
                                <div class="col-sm-8">
                                  <div class="form-group">
                                  <select class="js-example-basic-single form-control" name="visa_type"  required data-bv-message="Purpose of Visit is required" >
                                    <option value="urgent">Urgent Visa</option>
                                    <option value="">Type of Visa</option>
                                    <option value="standard">Standard Visa</option>
                                  </select>
                                </div>
                                </div>
                              </div>
                              <div class="row mt-3">
                                <div class="col-sm-3">
                                  <label class="float-right">Price:</label>
                                </div>
                                <div class="col-sm-8">
                                  <li class="ml-5 mt-2">e-Visa Fee</li>
                                  <li class="ml-5">Service Fee + Taxes</li>
                                </div>
                              </div>
                              <div>
                               <div class="divider"></div>
                               <div class="row">
                                 <div class="col-sm-12">
                                   <p>Have you ever visited the Nagorno-Karabakh and other regions of the Republic of Azerbaijan occupied by the Republic of Armenia since 1991 without an official permission of the Republic of Azerbaijan?</p>
                                 </div>
                               </div>
                               <div class="row">
                                 <div class="col-sm-12">
                                  <div class="form-group">
                                   <div><input type="radio" name="nagro" style="height: 15px; min-width:10%" required="required" checked data-bv-message="Yes or No is required">Yes</div>
                                   <div><input type="radio" name="nagro" style="height: 15px;min-width:10%" required="required">No</div>
                                  </div>
                                 </div>
                               </div>
                               <div class="row">
                                 <div class="col-sm-12">
                                   <div class="mb-3">
                                  <div class="form-group">
                                    <input type="radio" checked name="hiv" style="height: 25px; min-width:10%" required data-bv-message="Confirmation of HIV is required">Confirm that you aren't a carrier of HIV infection and Hepatitis B and C.</div>
                                 </div>
                                 </div>
                               </div>\
                               <div class="row">
                                 <div class="col-sm-12">
                                  <div class="form-group">
                                   <div><input type="radio" checked name="terms" style="height: 25px; min-width:10%" required data-bv-message="Must Accept Terms and Conditions">Confirm that you accept the <a href="#">Terms and Conditions</a>.</div>
                                  </div>
                                 </div>
                               </div>
                               
                              <div class="mt-5">
                                <a href="#" id="application_btn" class="float-right mb-3 ml-4"><span class="btn btn-info">I HAVE AN ONGOING APPLICATION</span></a>
                                <div id="continue_btn">
                                  <button class="btn btn-info nextBtn float-right mb-3" id="checkbtn" >CONTINUE</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4" style="border: 2px solid #292774; padding: 2% 4%">
                            <div align="center">
                              <div class="mt-4" style="font-weight: 400;font-size: 24px">INFORMATION</div>
                              <p class="mt-4" align="center">Please use the scroll-down option list to select the nationality of your passport or travel document. If you have dual nationality, select one option only and be sure to travel using the same document/nationality with which you made this application. An e-Visa will be rendered invalid if not accompanied by the document for which it was requested.</p>
                              <p align="center">If it is discovered that since 1991 you have visited regions of the Republic of Azerbaijan occupied by the Republic of Armenia (including the self-declared entity of Nagorno Karabakh) without formal approval of the Republic of Azerbaijan, you will be refused entry to Azerbaijan whether or not you have been issued with an electronic visa.</p>
                              <p align="center">An e-Visa will be considered invalid if the information provided does not exactly match the information on your passport or travel document.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end of step 1 -->
                    <!-- start of step 2 -->
                    <div class="row setup-content well" id="step-2">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-sm-12 col-md-8 col-lg-8">
                            <div class="section form-group form-contorl" align="center">
                              <label style="font-size: 24px" ><strong>Arival:</strong></label>
                              <input type='text' value="24:28" class='datepicker-here form-control' data-language='en' name="arival_date" required data-bv-message="Arival date is required" />
                            </div>
                            <div>
                              <p style="border: 2px solid #292774; padding: 2% 2%"><i class="fa fa-info-circle mr-3 text-info" style="font-size: 20px"></i>Closest workday is on 08.04.2019 
                              Please note!</p>
                            </div>
                            <div>
                              <p style="border: 2px solid #292774; padding: 2% 2%"><i class="fa fa-info-circle mr-3 text-info" style="font-size: 20px"></i>Your e-Visa can be valid from 12 April 2019 for a total period of 90 days. Your stay cannot exceed 30 days. It is single-entry visa.</p>
                            </div>
                            <div align="center" class="alert alert-danger">
                              <div>Valid for 90 days</div>
                              <div>Max. stay 30 days</div>
                            </div>
                            <div class="mt-5">
                              <div id="continue_btn">
                                <button class="float-right nextBtn mb-3 ml-4"><span onclick="remove3class()" class="btn btn-info">CONTINUE</span></button>
                              </div>
                              <button id="application_btn" class="float-right mb-3 prevBtn"><span class="btn btn-secondary">PREVIOUS</span></button>
                            </div>
                          </div>
                          <div class="col-sm-4" style="border: 2px solid #292774; padding: 2% 4%">
                            <div align="center">
                              <div class="mt-4" style="font-weight: 400;font-size: 24px">INFORMATION</div>
                              <p class="mt-4" align="center">Using the relevant fields, please enter your planned date of entry to Azerbaijan.</p>
                              <p class="text-danger"><strong>Attention!</strong></p>
                              <p align="center">Please note e-Visas allow a single entry for a stay of up to 30 days, and are valid for 90 days from the date of issue.</p>
                            </div>
                          </div>
                        </div>
                      </div> 
                    </div>
                    <!-- end of step 2 -->
                    <!-- start of step 3 -->
                    <div class="row setup-content well" id="step-3">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-sm-12 col-md-8 col-lg-8">
                            <div class="form-group row">
                              <label for="application_lastname" class="col-md-2 col-sm-2 col-xs-2 col-form-label birthday">Surname:</label>
                              <div class="col-sm-10 col-xs-10 box-input birthday">
                                <input type="text" name="surname" id="surname" value="aa" class="form-control uppercase_input" placeholder="Surname" required>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="application_firstname" class="col-md-2 col-sm-2 col-xs-2 control-label birthday" style="margin: 2% 0% 0% 0%;">First Name</label>
                              <div class="col-sm-10 col-xs-10 box-input birthday">
                                <input type="text" name="first_name" id="first_name" value="aa" class="form-control mg-bot uppercase_input" placeholder="First name" required>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="middle_name" class=" col-md-2 col-sm-2 col-xs-2 control-label label-left birthday" style="">Middle Name</label>
                              <div class="col-sm-10 col-xs-10 box-input birthday">
                                <input type="text" name="middle_name" id="middle_name" value="a" class="form-control uppercase_input " placeholder="Middle name" required>
                              </div>
                            </div>
                            <div class="form-group row overflow-hidden">
                              <label for="application_birthday_dd"  class="col-md-2 col-sm-2 col-xs-2 control-label birthday">Date of Birth</label>
                              <div class="col-md-3 col-sm-3 col-xs-3 box-input mr-4">
                                <select name="birth_day" id="birthday" class="form-control mg-bot" style="    height: 43px;" required>
                                  <option value="1">1</option>
                                  <option value="">DD</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                                  <option value="13">13</option>
                                  <option value="14">14</option>
                                  <option value="15">15</option>
                                  <option value="16">16</option>
                                  <option value="17">17</option>
                                  <option value="18">18</option>
                                  <option value="19">19</option>
                                  <option value="20">20</option>
                                  <option value="21">21</option>
                                  <option value="22">22</option>
                                  <option value="23">23</option>
                                  <option value="24">24</option>
                                  <option value="25">25</option>
                                  <option value="26">26</option>
                                  <option value="27">27</option>
                                  <option value="28">28</option>
                                  <option value="29">29</option>
                                  <option value="30">30</option>
                                  <option value="31">31</option></select>
                                  <!-- <i class="fa fa-chevron-down small-icon"></i> -->
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3 box-input mr-4">
                                  <select name="birth_month" id="birthmonth" class="form-control mg-bot" style="    height: 43px;" required>
                                    <option value="1">January</option>
                                    <option value="">MM</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option></select>
                                    <!-- <i class="fa fa-chevron-down small-icon"></i> -->
                                  </div>
                                  <div class="col-md-3 col-sm-3 col-xs-3 box-input mr-4">
                                    <select name="birth_year" id="birthyear" class="form-control" style="    height: 43px;" required>
                                      <option value="2019">2019</option>
                                      <option value="">YY</option>
                                      <option value="2018">2018</option>
                                      <option value="2017">2017</option>
                                      <option value="2016">2016</option>
                                      <option value="2015">2015</option>
                                      <option value="2014">2014</option>
                                      <option value="2013">2013</option>
                                      <option value="2012">2012</option>
                                      <option value="2011">2011</option>
                                      <option value="2010">2010</option>
                                      <option value="2009">2009</option>
                                      <option value="2008">2008</option>
                                      <option value="2007">2007</option>
                                      <option value="2006">2006</option>
                                      <option value="2005">2005</option>
                                      <option value="2004">2004</option>
                                      <option value="2003">2003</option>
                                      <option value="2002">2002</option>
                                      <option value="2001">2001</option>
                                      <option value="2000">2000</option>
                                      <option value="1999">1999</option>
                                      <option value="1998">1998</option>
                                      <option value="1997">1997</option>
                                      <option value="1996">1996</option>
                                      <option value="1995">1995</option>
                                      <option value="1994">1994</option>
                                      <option value="1993">1993</option>
                                      <option value="1992">1992</option>
                                      <option value="1991">1991</option>
                                      <option value="1990">1990</option>
                                      <option value="1989">1989</option>
                                      <option value="1988">1988</option>
                                      <option value="1987">1987</option>
                                      <option value="1986">1986</option>
                                      <option value="1985">1985</option>
                                      <option value="1984">1984</option>
                                      <option value="1983">1983</option>
                                      <option value="1982">1982</option>
                                      <option value="1981">1981</option>
                                      <option value="1980">1980</option>
                                      <option value="1979">1979</option>
                                      <option value="1978">1978</option>
                                      <option value="1977">1977</option>
                                      <option value="1976">1976</option>
                                      <option value="1975">1975</option>
                                      <option value="1974">1974</option>
                                      <option value="1973">1973</option>
                                      <option value="1972">1972</option>
                                      <option value="1971">1971</option>
                                      <option value="1970">1970</option>
                                      <option value="1969">1969</option>
                                      <option value="1968">1968</option>
                                      <option value="1967">1967</option>
                                      <option value="1966">1966</option>
                                      <option value="1965">1965</option>
                                      <option value="1964">1964</option>
                                      <option value="1963">1963</option>
                                      <option value="1962">1962</option>
                                      <option value="1961">1961</option>
                                      <option value="1960">1960</option>
                                      <option value="1959">1959</option>
                                      <option value="1958">1958</option>
                                      <option value="1957">1957</option>
                                      <option value="1956">1956</option>
                                      <option value="1955">1955</option>
                                      <option value="1954">1954</option>
                                      <option value="1953">1953</option>
                                      <option value="1952">1952</option>
                                      <option value="1951">1951</option>
                                      <option value="1950">1950</option>
                                      <option value="1949">1949</option>
                                      <option value="1948">1948</option>
                                      <option value="1947">1947</option>
                                      <option value="1946">1946</option>
                                      <option value="1945">1945</option>
                                      <option value="1944">1944</option>
                                      <option value="1943">1943</option>
                                      <option value="1942">1942</option>
                                      <option value="1941">1941</option>
                                      <option value="1940">1940</option>
                                      <option value="1939">1939</option>
                                      <option value="1938">1938</option>
                                      <option value="1937">1937</option>
                                      <option value="1936">1936</option>
                                      <option value="1935">1935</option>
                                      <option value="1934">1934</option>
                                      <option value="1933">1933</option>
                                      <option value="1932">1932</option>
                                      <option value="1931">1931</option>
                                      <option value="1930">1930</option>
                                      <option value="1929">1929</option>
                                      <option value="1928">1928</option>
                                      <option value="1927">1927</option>
                                      <option value="1926">1926</option>
                                      <option value="1925">1925</option>
                                      <option value="1924">1924</option>
                                      <option value="1923">1923</option>
                                      <option value="1922">1922</option>
                                      <option value="1921">1921</option>
                                      <option value="1920">1920</option>
                                      <option value="1919">1919</option>
                                      <option value="1918">1918</option>
                                      <option value="1917">1917</option>
                                      <option value="1916">1916</option>
                                      <option value="1915">1915</option>
                                      <option value="1914">1914</option>
                                      <option value="1913">1913</option>
                                      <option value="1912">1912</option>
                                      <option value="1911">1911</option>
                                      <option value="1910">1910</option>
                                      <option value="1909">1909</option>
                                      <option value="1908">1908</option>
                                      <option value="1907">1907</option>
                                      <option value="1906">1906</option>
                                      <option value="1905">1905</option>
                                      <option value="1904">1904</option>
                                      <option value="1903">1903</option>
                                      <option value="1902">1902</option>
                                      <option value="1901">1901</option>
                                      <option value="1900">1900</option></select>
                                      <!-- <i class="fa fa-chevron-down small-icon"></i> -->
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="application_birthcountry" class="col-sm-2 col-form-label">Country of Birth</label>
                                    <div class="col-sm-10 box-input">
                                      <select name="birth_country" id="birthcountry" class="chosen-select form-control" data-placeholder="Choose a Country" style="    height: 43px;margin-top: 1%;" required>
                                        <option value="2001">Afghanistan</option>
                                        <option value="">Choose a Country</option>
                                        <option value="2002">Albania</option>
                                        <option value="2003">Algeria</option>
                                        <option value="2004">Andorra</option>
                                        <option value="2005">Angola</option>
                                        <option value="2006">Antigua and Barbuda</option>
                                        <option value="2007">Argentina</option>
                                        <option value="2008">Armenia</option>
                                        <option value="2009">Australia</option>
                                        <option value="2010">Austria</option>
                                        <option value="2011">Azerbaijan</option>
                                        <option value="2012">Bahamas</option>
                                        <option value="2013">Bahrain</option>
                                        <option value="2014">Bangladesh</option>
                                        <option value="2015">Barbados</option>
                                        <option value="2016">Belarus</option>
                                        <option value="2017">Belgium</option>
                                        <option value="2018">Belize</option>
                                        <option value="2019">Benin</option>
                                        <option value="2020">Bhutan</option>
                                        <option value="2021">Bolivia (plurinational state of)</option>
                                        <option value="2022">Bosnia and Herzegovina</option>
                                        <option value="2023">Botswana</option>
                                        <option value="2024">Brazil</option>
                                        <option value="2025">Brunei Darussalam</option>
                                        <option value="2026">Bulgaria</option>
                                        <option value="2027">Burkina Faso</option>
                                        <option value="2028">Burundi</option>
                                        <option value="2029">Cabo Verde</option>
                                        <option value="2030">Cambodia</option>
                                        <option value="2031">Cameroon</option>
                                        <option value="2032">Canada</option>
                                        <option value="2033">Central African Republic</option>
                                        <option value="2034">Chad</option>
                                        <option value="2035">Chile</option>
                                        <option value="2036">China</option>
                                        <option value="2037">Colombia</option>
                                        <option value="2038">Comoros</option>
                                        <option value="2039">Congo Republic</option>
                                        <option value="2040">Costa Rica</option>
                                        <option value="2041">Cote d'Ivoire</option>
                                        <option value="2042">Croatia</option>
                                        <option value="2043">Cuba</option>
                                        <option value="2044">Cyprus</option>
                                        <option value="2045">Czech Republic</option>
                                        <option value="2046">Democratic People's Republic of Korea</option>
                                        <option value="2047">Democratic People's Republic of Korea</option>
                                        <option value="2048">Denmark</option>
                                        <option value="2049">Djibouti</option>
                                        <option value="2050">Dominica</option>
                                        <option value="2051">Dominican Republic</option>
                                        <option value="2052">Ecuador</option>
                                        <option value="2053">Egypt</option>
                                        <option value="2054">El Salvador</option>
                                        <option value="2055">Equatorial Guinea</option>
                                        <option value="2056">Eritrea</option>
                                        <option value="2057">Estonia</option>
                                        <option value="2058">Ethiopia</option>
                                        <option value="2059">Fiji</option>
                                        <option value="2060">Finland</option>
                                        <option value="2061">France</option>
                                        <option value="2062">Gabon</option>
                                        <option value="2063">Gambia (Islamic Republic of the)</option>
                                        <option value="2064">Georgia</option>
                                        <option value="2065">Germany</option>
                                        <option value="2066">Ghana</option>
                                        <option value="2067">Greece</option>
                                        <option value="2068">Grenada</option>
                                        <option value="2069">Guatemala</option>
                                        <option value="2070">Guinea</option>
                                        <option value="2071">Guinea-Bissau</option>
                                        <option value="2072">Guyana</option>
                                        <option value="2073">Haiti</option>
                                        <option value="2074">Holy See (Vatican)</option>
                                        <option value="2075">Honduras</option>
                                        <option value="2076">Hungary</option>
                                        <option value="2077">Iceland</option>
                                        <option value="2078">India</option>
                                        <option value="2079">Indonesia</option>
                                        <option value="2080">Iran (Islamic Republic of)</option>
                                        <option value="2081">Iraq</option>
                                        <option value="2082">Ireland</option>
                                        <option value="2083">Israel</option>
                                        <option value="2084">Italy</option>
                                        <option value="2085">Jamaica</option>
                                        <option value="2086">Japan</option>
                                        <option value="2087">Jordan</option>
                                        <option value="2088">Kazakhstan</option>
                                        <option value="2089">Kenya</option>
                                        <option value="2090">Kiribati</option>
                                        <option value="2091">Kuwait</option>
                                        <option value="2092">Kyrgyzstan</option>
                                        <option value="2093">Lao People's Democratic Republic</option>
                                        <option value="2094">Latvia</option>
                                        <option value="2095">Lebanon</option>
                                        <option value="2096">Lesotho</option>
                                        <option value="2097">Liberia</option>
                                        <option value="2098">Libya</option>
                                        <option value="2099">Liechtenstein</option>
                                        <option value="2100">Lithuania</option>
                                        <option value="2101">Luxembourg</option>
                                        <option value="2102">Macedonia</option>
                                        <option value="2103">Madagascar</option>
                                        <option value="2104">Malawi</option>
                                        <option value="2105">Malaysia</option>
                                        <option value="2106">Maldives</option>
                                        <option value="2107">Mali</option>
                                        <option value="2108">Malta</option>
                                        <option value="2109">Marshall Islands</option>
                                        <option value="2110">Mauritania</option>
                                        <option value="2111">Mauritius</option>
                                        <option value="2112">Mexico</option>
                                        <option value="2113">Micronesia, Federated States of</option>
                                        <option value="2114">Monaco</option>
                                        <option value="2115">Mongolia</option>
                                        <option value="2116">Montenegro</option>
                                        <option value="2117">Morocco</option>
                                        <option value="2118">Mozambique</option>
                                        <option value="2119">Myanmar</option>
                                        <option value="2120">Namibia</option>
                                        <option value="2121">Nauru</option>
                                        <option value="2122">Nepal</option>
                                        <option value="2123">Netherlands</option>
                                        <option value="2124">New Zealand</option>
                                        <option value="2125">Nicaragua</option>
                                        <option value="2126">Niger</option>
                                        <option value="2127">Nigeria</option>
                                        <option value="2128">Norway</option>
                                        <option value="2129">Oman</option>
                                        <option value="2130">Pakistan</option>
                                        <option value="2131">Palau</option>
                                        <option value="2132">Panama</option>
                                        <option value="2133">Papua New Guinea</option>
                                        <option value="2134">Paraguay</option>
                                        <option value="2135">Peru</option>
                                        <option value="2136">Philippines</option>
                                        <option value="2137">Poland</option>
                                        <option value="2138">Portugal</option>
                                        <option value="2139">Puerto Rico</option>
                                        <option value="2140">Qatar</option>
                                        <option value="2141">Republic of Korea</option>
                                        <option value="2142">Republic of Moldova</option>
                                        <option value="2143">Romania</option>
                                        <option value="2144">Russian Federation</option>
                                        <option value="2145">Rwanda</option>
                                        <option value="2146">Saint Kitts and Nevis</option>
                                        <option value="2147">Saint Lucia</option>
                                        <option value="2148">Saint Vincent and the Grenadines</option>
                                        <option value="2149">Samoa</option>
                                        <option value="2150">San Marino</option>
                                        <option value="2151">Sao Tome and Principe</option>
                                        <option value="2152">Saudi Arabia</option>
                                        <option value="2153">Senegal</option>
                                        <option value="2154">Serbia</option>
                                        <option value="2155">Seychelles</option>
                                        <option value="2156">Sierra Leone</option>
                                        <option value="2157">Singapore</option>
                                        <option value="2158">Slovakia</option>
                                        <option value="2159">Slovenia</option>
                                        <option value="2160">Solomon Islands</option>
                                        <option value="2161">Somalia</option>
                                        <option value="2162">South Africa</option>
                                        <option value="2163">South Sudan</option>
                                        <option value="2164">Spain</option>
                                        <option value="2165">Sri Lanka</option>
                                        <option value="2166">State of Palestine</option>
                                        <option value="2167">Sudan</option>
                                        <option value="2168">Suriname</option>
                                        <option value="2169">Swaziland</option>
                                        <option value="2170">Sweden</option>
                                        <option value="2171">Switzerland</option>
                                        <option value="2172">Syria Arab Republic</option>
                                        <option value="2173">Tajikistan</option>
                                        <option value="2174">Thailand</option>
                                        <option value="2175">Timor-Leste</option>
                                        <option value="2176">Togo</option>
                                        <option value="2177">Tonga</option>
                                        <option value="2178">Trinidad and Tobago</option>
                                        <option value="2179">Tunisia</option>
                                        <option value="2180">Turkey</option>
                                        <option value="2181">Turkmenistan</option>
                                        <option value="2182">Tuvalu</option>
                                        <option value="2183">Uganda</option>
                                        <option value="2184">Ukraine</option>
                                        <option value="2185">United Arab Emirates</option>
                                        <option value="2186">United Kingdom of Great Britain and Northern Ireland</option>
                                        <option value="2187">United Republic of Tanzania</option>
                                        <option value="2188">United States of America</option>
                                        <option value="2190">Uruguay</option>
                                        <option value="2191">Uzbekistan</option>
                                        <option value="2192">Vanuatu</option>
                                        <option value="2193">Venezuela, Bolivarian Republic of</option>
                                        <option value="2194">Viet Nam</option>
                                        <option value="2195">Yemen</option>
                                        <option value="2196">Zambia</option>
                                        <option value="2197">Zimbabwe</option>
                                      </select>
                                      <!-- <i class="fa fa-search" aria-hidden="true"></i> -->
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="application_birthplace" value="12" class="col-sm-2 col-form-label">Place of Birth</label>
                                    <div class="col-sm-10 box-input">
                                      <input type="text" name="birth_place" id="birthplace" value="ss" class="form-control uppercase_input" placeholder="Place of birth" style="margin-top: 1%" required>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="application_gender" class="col-sm-2 col-form-label">Gender</label>
                                    <div class="col-sm-10 box-input">
                                      <div class="form-group">
                                      <select name="gender" id="gender" class="form-control" style="    height: 43px" required>
                                        <option value="1">Male</option>
                                        <option value="ss" >Select gender</option>
                                        <option value="2">Female</option></select>
                                        <!-- <i class="fa fa-chevron-down"></i> -->
                                      </div>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="application_occupation" class="col-sm-2 col-form-label">Occupation</label>
                                      <div class="col-sm-10 box-input">
                                        <select name="occupation" id="occupation" class="form-control" style="    height: 43px" required>
                                          <option value="301">Agriculture</option>
                                          <option value="">Select occupation</option>
                                          <option value="302">Artist</option>
                                          <option value="303">Communications</option>
                                          <option value="304">Computer Science</option>
                                          <option value="305">Culinary/Food Services</option>
                                          <option value="306">Driver</option>
                                          <option value="307">Education</option>
                                          <option value="308">Engineering</option>
                                          <option value="309">Finance/Banking</option>
                                          <option value="310">Government</option>
                                          <option value="311">Health care</option>
                                          <option value="312">Law enforcement agencies</option>
                                          <option value="313">Media Representative</option>
                                          <option value="314">Military</option>
                                          <option value="315">Mining</option>
                                          <option value="316">Natural sciences</option>
                                          <option value="317">Nongovernmental organizations</option>
                                          <option value="318">Retired</option>
                                          <option value="319">Physics</option>
                                          <option value="320">Private Sector</option>
                                          <option value="321">Religious Figure</option>
                                          <option value="322">Researcher</option>
                                          <option value="323">Schooler/Student</option>
                                          <option value="324">Social Sciences</option>
                                          <option value="325">Sports</option>
                                          <option value="326">Translator/Interpreter</option>
                                          <option value="327">Unemployed</option>
                                          <option value="328">Other</option></select>
                                          <!-- <i class="fa fa-chevron-down"></i> -->
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="application_address" class="col-sm-2 col-form-label" >Address</label>
                                        <div class="col-sm-10 box-input">
                                          <input type="text" name="address" id="address" value="aa" class="form-control" placeholder="Enter your permanent residence address" required>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="application_telephone" class="col-sm-2 col-form-label">Phone Number</label>
                                        <div class="col-sm-10 box-input">
                                          <input type="text" name="phone_no" id="phone_no" value="aa" class="form-control" placeholder="Phone number" required>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="application_cellphone" class="col-sm-2 col-form-label">Mobile Number</label>
                                        <div class="col-sm-10 box-input">
                                          <input type="text" name="mobile_no" id="mobile_no" value="aa" class="form-control" placeholder="Mobile number" required>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="application_resaddress" class="col-sm-2 col-form-label">Residence Address</label>
                                        <div class="col-sm-10 box-input">
                                          <input type="text" name="residence_address" id="residence" value="aaa" class="form-control" placeholder="Enter full and correct address of your place of stay in the Republic of Azerbaijan." required>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="application_email" class="col-sm-2 col-form-label">E-mail Address</label>
                                        <div class="col-sm-10 box-input">
                                          <input type="email" class="form-control" id="email" value="a@email.com" name="email"
                                          data-bv-identical="true"
                                          data-bv-identical-field="confirmemail"
                                          data-bv-identical-message="The email is not match" />
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="x_application_confemail" class="col-sm-2 col-form-label">E-mail Address Confirmation</label>
                                        <div class="col-sm-10 box-input">
                                          <input type="email" class="form-control" value="a@email.com" name="confirmemail"
                                          data-bv-identical="true"
                                          data-bv-identical-field="email"
                                          data-bv-identical-message="The email is not match" />
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="application_passportnumber" class="col-sm-2 col-form-label">Passport Number</label>
                                        <div class="col-sm-10 box-input">
                                          <input type="text" name="passport_no" id="passport_no" value="111" class="form-control uppercase_input" placeholder="Passport number" required>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="application_passportissued" class="col-sm-2 col-form-label">Passport Issue Date</label>
                                        <div class="col-sm-10 box-input">
                                          <div class="input-group date">
                                            <input type='text' value="12" name="passport_issue"  class='datepicker-here  form-control' id="passport_date" data-language='en' placeholder="Pick Date" required />
                                            <!-- <i class="fa fa-calendar" aria-hidden="true"></i> -->
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="application_passportexpires" class="col-sm-2 col-form-label">Passport Expiry Date</label>
                                        <div class="col-sm-10 box-input">
                                          <div class="input-group date">
                                            <input type='text' value="23" name="passport_expire" id="passport_expiry" class='datepicker-here form-control' data-language='en' placeholder="Pick Date" required />
                                            <!-- <i class="fa fa-calendar" aria-hidden="true"></i> -->
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="x_application_passportscanned" class="col-sm-2 col-form-label">Copy of Passport</label>
                                        <input type="file" name="passport_img" id="passport_img" class="file" required>
                                        <div class="input-group col-sm-10">
                                        </span>
                                      </div>
                                    </div>
                                    <div class="mt-5">
                                      <div id="continue_btn">
                                        <button class="float-right nextBtn mb-3 ml-4"><span class="btn btn-info" onclick="dataSend()">CONTINUE</span></button>
                                      </div>
                                      <button id="application_btn" class="float-right mb-3 prevBtn"><span class="btn btn-secondary">PREVIOUS</span></button>
                                    </div>
                                  </div>
                                  <div class="col-sm-4" style="border: 2px solid #292774; padding: 2% 4%">  
                                   <div align="center">
                                     <div class="mt-4" style="font-weight: 400;font-size: 24px">INFORMATION</div>
                                     <p class="mt-4" align="center">Using the relevant fields, please enter your planned date of entry to Azerbaijan.</p>
                                     <p class="text-danger"><strong>Attention!</strong></p>
                                     <p align="center">Please note e-Visas allow a single entry for a stay of up to 30 days, and are valid for 90 days from the date of issue.</p>
                                   </div>
                                 </div>
                               </div>
                             </div>
                           </div>
                           <!-- end of step 3 -->
                           <!-- start of step 4 -->
                           <div class="row setup-content well" id="step-4">
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-sm-12 col-md-8 col-lg-8">
                                  <div class="form-group row">
                                    <label for="application_occupation" class="col-sm-4 col-form-label">Surname:</label>
                                    <div class="col-sm-8 box-input">
                                     <p id="surname_txt"></p>
                                   </div>
                                 </div>
                                 <div class="form-group row">
                                  <label for="application_occupation" class="col-sm-4 col-form-label">First Name:</label>
                                  <div class="col-sm-8 box-input">
                                   <p id="first_name_txt"></p>
                                 </div>
                               </div>
                               <div class="form-group row">
                                <label for="application_occupation" class="col-sm-4 col-form-label">Middle Name:</label>
                                <div class="col-sm-8 box-input">
                                 <p id="middle_name_txt"></p>
                               </div>
                             </div>
                             <div class="form-group row">
                              <label for="application_occupation" class="col-sm-4 col-form-label">Birth Day:</label>
                              <div class="col-sm-8 box-input">
                               <p id="birthday_txt"></p>
                             </div>
                             <label for="application_occupation" class="col-sm-4 col-form-label">Birth Month:</label>
                              <div class="col-sm-8 box-input">
                               <p id="birthmonth_txt"></p>
                             </div>
                             <label for="application_occupation" class="col-sm-4 col-form-label">Birth Year:</label>
                              <div class="col-sm-8 box-input">
                               <p id="birthyear_txt"></p>
                             </div>
                           </div>
                           <div class="form-group row">
                            <label for="application_birthcountry" class="col-sm-4 col-form-label">Country of Birth:</label>
                            <div class="col-sm-8 box-input">
                              <p id="birthcountry_txt"></p>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="application_birthplace" class="col-sm-4 col-form-label">Place of Birth:</label>
                            <div class="col-sm-8 box-input">
                             <p id="birthplace_txt"></p>
                           </div>
                         </div>
                         <div class="form-group row">
                          <label for="application_gender" class="col-sm-4 col-form-label">Gender:</label>
                          <div class="col-sm-8 box-input">
                           <p id="gender_txt"></p>
                         </div>
                       </div>
                       <div class="form-group row">
                        <label for="application_occupation" class="col-sm-4 col-form-label">Occupation:</label>
                        <div class="col-sm-8 box-input">
                         <p id="occupation_txt"></p>
                       </div>
                     </div>
                     <div class="form-group row">
                      <label for="application_address" class="col-sm-4 col-form-label">Address:</label>
                      <div class="col-sm-8 box-input">
                        <p id="address_txt"></p>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="application_telephone" class="col-sm-4 col-form-label">Phone Number:</label>
                      <div class="col-sm-8 box-input">
                       <p id="phone_no_txt"></p>
                     </div>
                   </div>
                   <div class="form-group row">
                    <label for="application_cellphone" class="col-sm-4 col-form-label">Mobile Number:</label>
                    <div class="col-sm-8 box-input">
                      <p id="mobile_no_txt"></p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="application_resaddress" class="col-sm-4 col-form-label">Residence Address:</label>
                    <div class="col-sm-8 box-input">
                     <p id="residence_txt"></p>
                   </div>
                 </div>
                 <div class="form-group row">
                  <label for="application_email" class="col-sm-4 col-form-label">E-mail Address:</label>
                  <div class="col-sm-8 box-input">
                   <p id="email_txt"></p>
                 </div>
               </div>
              <div class="form-group row">
                <label for="application_passportnumber" class="col-sm-4 col-form-label">Passport Number:</label>
                <div class="col-sm-8 box-input">
                  <p id="passport_no_txt"></p>
                </div>
              </div>
              <div class="form-group row">
                <label for="application_passportissued" class="col-sm-4 col-form-label">Passport Issue Date:</label>
                <div class="col-sm-8 box-input">
                  <div class="input-group date">
                   <p id="passport_datetxt"></p>
                 </div>
               </div>
             </div>
             <div class="form-group row">
              <label for="application_passportexpires" class="col-sm-4 col-form-label">Passport Expiry Date:</label>
              <div class="col-sm-8 box-input">
                <div class="input-group date">
                 <p id="passport_expiry_txt"></p>
               </div>
             </div>
           </div>
           <div class="form-group row">
              <div class="col-sm-12 box-input mt-4">
                <div class="form-group" >
                <input type="radio" name="checkdetails" data-bv-message="Field is required" required style="height: 25px; min-width: 10%;"><span><strong>Confirm if your form fields are all set!</strong></span> 
                </div>
             </div>
           </div>
           <div class="form-group row">
            <div class="input-group col-sm-8">
            </span>
          </div>
        </div>
        <div class="mt-5">
          <div id="continue_btn">
            <!-- <input type="submit" name="aa"> -->
            <button type="submit" class="float-right mb-3 ml-4"><span class="btn btn-info">CONTINUE</span></button>
          </div>
          <button id="application_btn" class="float-right mb-3 prevBtn"><span class="btn btn-secondary">PREVIOUS</span></button>
        </div> 
      </div>
      <div class="col-sm-4" style="border: 2px solid #292774; padding: 2% 4%">
       <div align="center">
         <div class="mt-4" style="font-weight: 400;font-size: 24px">INFORMATION</div>
         <p class="mt-4" align="center">Using the relevant fields, please enter your planned date of entry to Azerbaijan.</p>
         <p class="text-danger"><strong>Attention!</strong></p>
         <p align="center">Please note e-Visas allow a single entry for a stay of up to 30 days, and are valid for 90 days from the date of issue.</p>
       </div>
     </div>
   </div>
 </div>
</div>
<!-- end of step 4 -->
<!-- start of step 5 -->

              <div class="row setup-content well" id="step-5">
                                  <div class="container-fluid">
                                    <div class="row">
                                      
                                      <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div align="center">
                                      
                                          <div class="mt-4" style="font-weight: 400;font-size: 24px">E-MAIL HAS BEEN SENT FOR CONFIRMATION</div>
                                          <p class="mt-4" align="center">The first step of your application is now complete. You should very shortly receive a confirmation message sent to the e-mail address that you registered. Open the e-mail message, click the link and proceed with payment following the instructions given. If no such e-mail arrives in your inbox within five minutes, please check your “spam” folder.</p>
                                      
                                        </div>

                                      </div>
                                    </div>
                                    
                                  </div> 
                                </div>

<!-- end of step 5 -->
</form>
</div><!-- end row A -->
</div><!-- end react-input-box -->
</div><!-- end react-home & react-checkout -->
<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <!-- Footer Column -->
      <div class="col-lg-6 footer_column">
        <div class="footer_col">
          <div class="footer_content footer_about">
            <div class="logo_container footer_logo">
              <div class="logo"><a href="#"><img src="" alt="">Azerbaijan E-Visa's</a></div>
            </div>
            <p class="footer_about_text">This new system is designed to transfer all visa applications to the electronic context. Hereby, visitors need to provide all necessary documents to www.azerbaijanevisas.com.</p>
            <ul class="footer_social_list">
              <li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
              <li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Footer Column -->
      <div class="col-lg-6 footer_column">
        <div class="footer_col">
          <div class="footer_title">contact info</div>
          <div class="footer_content footer_contact">
            <ul class="contact_info_list">
              <li class="contact_info_item d-flex flex-row">
                <div><div class="contact_info_icon"><img src="assets/images/placeholder.svg" alt=""></div></div>
                <div class="contact_info_text">ABC Street 1/0VB</div>
              </li>
              <li class="contact_info_item d-flex flex-row">
                <div><div class="contact_info_icon"><img src="assets/images/phone-call.svg" alt=""></div></div>
                <div class="contact_info_text">2556-808-8613</div>
              </li>
              <li class="contact_info_item d-flex flex-row">
                <div><div class="contact_info_icon"><img src="assets/images/message.svg" alt=""></div></div>
                <div class="contact_info_text"><a href="" target="_top"><span class="__cf_email__" data-cfemail="d5b6babba1b4b6a1b8b095b2b8b4bcb9fbb6bab8">[email&#160;protected]</span></a></div>
              </li>
              <li class="contact_info_item d-flex flex-row">
                <div><div class="contact_info_icon"><img src="assets/images/planet-earth.svg" alt=""></div></div>
                <div class="contact_info_text"><a href="http://azerbaijanevisas.com/">http://azerbaijanevisas.com/</a></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Copyright -->
<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 order-lg-1 order-2  ">
        <div class="copyright_content d-flex flex-row align-items-center">
          <div>
            Copyright &copy;<script data-cfasync="false" src="<?=base_url('assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')?>"></script><script type="0540b62ede0ca89ccc94457c-text/javascript">document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://azerbaijanevisas.com/" target="_blank">ABC Comapany</a>
          </div>
        </div>
      </div>
      <div class="col-lg-9 order-lg-2 order-1">
        <div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
          <div class="footer_nav">
            <ul class="footer_nav_list">
              <li class="footer_nav_item"><a href="<?base_url('Home')?>">home</a></li>
              <li class="footer_nav_item"><a href="<?base_url('Aboutus')?>">about us</a></li>
                            <!-- <li class="footer_nav_item"><a href="offers.html">offers</a></li>
                              <li class="footer_nav_item"><a href="blog.html">news</a></li> -->
                              <li class="footer_nav_item"><a href="<?base_url('contact')?>">contact</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <script src="<?=base_url('assets/styles/bootstrap4/popper.js')?>" type="33ca3087a4c29f88453c4172-text/javascript"></script>
              <script
              src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"
              integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk="
              crossorigin="anonymous"></script>
              <script src="<?=base_url('assets/styles/bootstrap4/bootstrap.min.js')?>" type="33ca3087a4c29f88453c4172-text/javascript"></script>
              <script src="<?=base_url('assets/plugins/Isotope/isotope.pkgd.min.js')?>" type="33ca3087a4c29f88453c4172-text/javascript"></script>
              <script src="<?=base_url('assets/plugins/easing/easing.js')?>" type="33ca3087a4c29f88453c4172-text/javascript"></script>
              <script src="<?=base_url('assets/plugins/parallax-js-master/parallax.min.js')?>" type="33ca3087a4c29f88453c4172-text/javascript"></script>
              <script src="<?=base_url('assets/js/offers_custom.js')?>" type="33ca3087a4c29f88453c4172-text/javascript"></script>
              <script  src="<?=base_url('assets/js/index.js')?>" type="33ca3087a4c29f88453c4172-text/javascript"></script>
              <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
              <script type="text/javascript" src="<?=base_url('assets/js/date_picker.js')?>"></script>
              <script src="<?=base_url('assets/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js')?>" data-cf-settings="33ca3087a4c29f88453c4172-|49" defer=""></script>
              <script type="text/javascript">
               ;(function ($) { $.fn.datepicker.language['en'] = {
                days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                daysMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                months: ['January','February','March','April','May','June', 'July','August','September','October','November','December'],
                monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                today: 'Today',
                clear: 'Clear',
                dateFormat: 'mm/dd/yyyy',
                timeFormat: 'hh:ii aa',
                firstDay: 0
              }; })(jQuery);
            </script>
            <script type="text/javascript">
              function matchCustom(params, data) {
                  // If there are no search terms, return all of the data
                  if ($.trim(params.term) === '') {
                    return data;
                  }
                  // Do not display the item if there is no 'text' property
                  if (typeof data.text === 'undefined') {
                    return null;
                  }
                  // `params.term` should be the term that is used for searching
                  // `data.text` is the text that is displayed for the data object
                  if (data.text.indexOf(params.term) > -1) {
                    var modifiedData = $.extend({}, data, true);
                    modifiedData.text += ' (matched)';
                    // You can return modified objects from here
                    // This includes matching the `children` how you want in nested data sets
                    return modifiedData;
                  }
                  // Return `null` if the term should not be displayed
                  return null;
                  }
  $(".js-example-matcher").select2({
    matcher: matchCustom
  });
  $(".js-example-theme-single").select2({
    theme: "classic"
  });
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
  });
  
  $(document).ready(function() {
    $('#apply-form').bootstrapValidator();
  });

  

  function dataSend(){
     $('#surname_txt').html($('#surname').val());
     $('#first_name_txt').html($('#first_name').val());
     $('#middle_name_txt').html($('#middle_name').val());
     $('#birthday_txt').html($('#birthday').val());
     $('#birthmonth_txt').html($('#birthmonth').val());
     $('#birthyear_txt').html($('#birthyear').val());
     $('#birthcountry_txt').html($('#birthcountry').val());
     $('#birthplace_txt').html($('#birthplace').val());
     $('#gender_txt').html($('#gender').val());
     $('#occupation_txt').html($('#occupation').val());
     $('#address_txt').html($('#address').val());
     $('#phone_no_txt').html($('#phone_no').val());
     $('#mobile_no_txt').html($('#mobile_no').val());
     $('#residence_txt').html($('#residence').val());
     $('#email_txt').html($('#email').val());
     $('#passport_no_txt').html($('#passport_no').val());
     $('#passport_datetxt').html($('#passport_date').val());
     $('#passport_expiry_txt').html($('#passport_expiry').val());
  }

  // $('#apply-form').bootstrapValidator().on('submit', function(e) {
  //   e.preventDefault();
  //   $.ajax({
  //     url:'<?=base_url('apply/addApplydata')?>',
  //     type:'post',
  //     data: $('#apply-form').serialize()+'&<?php echo $this->security->get_csrf_token_name();?>=' + '<?php echo $this->security->get_csrf_hash();?>',
  //     success: function(data) {
  //          console.log('Send');
  //     }
  //   });
  // })

// function addapplydata(){

//   $.ajax({
//       url:'<?=base_url('apply/addApplydata')?>',
//       type:'post',
//       data: new FormData($('#apply-form')),
//       processData:false,
//       contentType:false,
//       cache:false,
//       success: function(data) {
//            console.log('Send');
//       }
//     });
// }


function remove3class(){
  $('#step-3:visible').ready(function() {
    $('#step-3 .form-group').removeClass('has-error');
  $('.help-block').css('display','none');
});
}
function add3class(){
('.help-block').show();
}
$("#fade_out").delay(5000).fadeOut();

</script>
</body>
</html>
<!-- +'&<?php echo $this->security->get_csrf_token_name();?>=' + '<?php echo $this->security->get_csrf_hash();?>' -->