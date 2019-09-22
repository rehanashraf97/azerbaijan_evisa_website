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
                <div class="logo"><a href="<?base_url('Home')?>"><img src="<?=base_url('assets/images/evisa.png')?>" alt=""></a></div>
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
                            <div class="logo menu_logo"><a href="#"><img src="<?=base_url('assets/images/evisa.png')?>" alt=""></a></div>
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
                  <div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?=base_url('assets/images/baku2.jpeg')?>"></div>
                  <div class="home_content">
                   <div class="home_title">Application</div>
                 </div>
               </div>
             

             <div class="react-home react-checkout">
                <div class="react-input-box">

                

                  <div class="container"><!-- row A-->

                    <form role="form" action="" method="post">
                      <!-- start of step 1 -->
                      
                              <!-- start of step 5 -->
                              <div class="row" id="step-5" >
                                  <div class="container-fluid">
                                    <div class="row">
                                      
                                      <div class="col-sm-12 col-md-12 col-lg-12" style="border:2px solid #31124B ">
                                        <div align="center">
                                      
                                          <div class="mt-4" style="font-weight: 400;font-size: 24px">YOUR APPLICATION IS CONFIRMED</div>
                                          <div class="payment-information">
                                            <p class="reference-number">Reference number : <?=$user_data->ref_code?> </p>
                                          </div>
                                          <p class="mt-4" align="center">Your application form is now ready for submission once we receive payment. To pay, please click the "Make Payment" button and follow the instructions. Please note that if you do not do so within 8 hours, your application will be deleted from the system and you will need to start all over again.</p>
                                      
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