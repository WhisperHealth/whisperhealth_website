<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>WhispaHealth</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
   <!-- style css -->
   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   <!-- Responsive-->
   <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
   <!-- fevicon -->
   <link rel="icon" href="{{ asset('assets/images/fevicon.png') }}" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="{{ asset('assets/images/loading.gif') }}" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="head_top">
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo" style="background-color: #e1e1dd;border-radius: 10px; width: 100px;">
                              <a href="/"><img src="{{ asset('assets/images/logo_only.png')}}" alt="#" width=""/></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                           data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                           aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="#about">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#contact">Contact us</a>
                              </li>
                           </ul>
                           <!-- <div class="sign_btn"><a href="#">Sign in</a></div> -->
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
         <!-- end header -->
         <!-- banner -->
         <section class="banner_main">
            <div class="container-fluid">
               <div class="banner_bg">
                  <div class="row d_flex">
                     <div class="col-xl-6 col-lg-6 col-md-12 padding_right1">
                        <div class="text_box_color">
                           <div class="text-bg">
                              <h1>WhispaHealth<br><br></h1>
                              <strong>Convenient Access to all your</strong>
                              <span>Sexual Health Information.</span>
                              <!-- <a href="#"><img src="images/googlePlay.png" alt="#"/></a> -->
                              <img src="{{ asset('assets/images/googlePlay.png')}}" alt="#" width="30%"/>

                           </div>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-12 padding_right1">
                        <div class="text-img">
                           <figure><img src="{{ asset('assets/images/top_img.png')}}" alt="#" /></figure>
                        </div>
                     </div>
                  </div>
               </div>
         </section>
      </div>
   </header>
   <!-- end banner -->
   <!-- feature -->
   <div id="feature" class="feature">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>What is it <strong class="pink"> About </strong></h2>
                  <span>Your journey to confidential and supportive sexual health consultations begins here. Anonymity is our priority, ensuring a safe space for your questions.
                     Let's engage in empowering conversations that lead to better health and well-being. Your privacy is paramount, and our expert team is here to guide you through your health concerns. Start your journey with us today!</span>
               </div>
            </div>
         </div>
         <!-- <div class="row">
            <div class="col-md-8 offset-md-2 ">
               <div class="feature_box ">
                  <figure><img src="images/feature_img.png" alt="#" /></figure>
                  <a class="read_more" href="#">Read more</a>
               </div>
            </div>
         </div> -->
      </div>
   </div>
   <!-- feature -->
   <!-- amezing -->
   <div id="" class="amezing">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="amezing_box">
                  <div class="titlepage">
                     <h2>How it works<strong class="pink"> <br> application and features </strong></h2>
                  </div>
                  <div class="can">
                     <span>01</span>
                     <h4>Anonymous consultations</h4>
                  </div>
                  <div class="can">
                     <span>02</span>
                     <h4>Reduce the increase rate of STI/STDs</h4>
                  </div>
                  <div class="can">
                     <span>03</span>
                     <h4>Support to marginalized groups
                     </h4>
                  </div>
                  <div class="can">
                     <span>04</span>
                     <h4>Reduce stigma
                     </h4>
                  </div>
                  <p>Whisper aims to create a secure and confidential platform where individuals can freely discuss their sexual health concerns without fear of judgment or stigma. The service is dedicated to providing accurate information and reliable diagnoses for sexually transmitted infections (STIs) and sexually transmitted diseases (STDs). By ensuring privacy and confidentiality, Whisper seeks to empower people to take charge of their sexual health, promote awareness, and encourage timely medical intervention. The ultimate goal is to foster a healthier society by reducing the spread of STIs/STDs through education, early detection, and appropriate treatment. </p>
                  <!-- <a class="read_more" href="#">Read more</a> -->
               </div>
            </div>
            <div class="col-md-4">
               <div class="amezing_box">
                  <figure><img src="{{ asset('assets/images/can.png')}}"></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end amezing -->
   <!-- customer -->
   <div class="customer">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>who can use <strong class="pink"> WhispaHealth </strong></h2>
                  <span> Studies also show that healthcare workers help to facilitate a culture of stigmas among coworkers and patients. According to a national survey, only 16.6% of women and 6.1% of men who participated in the survey had been tested in the last 12 months (Cufe et al., 2016). Low rates of STI testing contribute to the spread of chlamydia, gonorrhea, HIV, and syphilis.(The Impact of Social Stigmas on Sexual Health Seeking Behavior: A Review of Literature )
                  </span>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div id="myCarousel" class="carousel slide customer_Carousel " data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="carousel-caption ">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="test_box">
                                       <p>Whisper is dedicated to providing a safe, inclusive, and non-judgmental space for LGBTQ+ individuals to seek sexual health information and services. Recognizing the unique challenges faced by LGBTQ+ communities, Whisper offers tailored resources that address specific health concerns and barriers. The platform ensures confidentiality and respect, helping to build trust and encourage open dialogue. By offering specialized support and accurate diagnoses, Whisper aims to improve the overall well-being of LGBTQ+ individuals, promoting equality and access to essential healthcare services. </p>
                                       <div class="customar_box">
                                          <div class="veni">
                                             <i><img src="{{ asset('assets/images/one.jpg')}}" alt="#" width="10%" style="border-radius: 20px;"/></i>
                                             <h4> Marginalized Groups (LGBTQ+) </h4>
                                          </div>
                                          <i class="padd_rightt0"><img src="{{ asset('assets/images/cost.png')}}" alt="#" /></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="test_box">
                                       <p>Whisper understands the sensitivity and complexity of addressing sexual health in conservative societies where cultural and religious norms may discourage open discussion of such topics. The platform offers discreet and confidential services that respect these values while providing necessary sexual health education and diagnoses. Whisper's approach is culturally sensitive, aiming to bridge the gap between tradition and modern healthcare. By fostering a discreet environment, Whisper helps individuals in conservative societies seek help and make informed decisions about their sexual health without fear of stigma or retribution.</p>
                                       <div class="customar_box">
                                          <div class="veni">
                                             <!-- <i><img src="images/costomar.png" alt="#" /></i> -->
                                             <i><img src="{{ asset('assets/images/three.jpg')}}" alt="#" width="10%" style="border-radius: 20px;"/></i>

                                             <h4> Individuals in Conservative Societies </h4>
                                          </div>
                                          <i class="padd_rightt0"><img src="{{ asset('assets/images/cost.png')}}" alt="#" /></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="test_box">
                                       <p>Whisper caters to young adults aged 18-40, a group often navigating complex and evolving sexual relationships. This demographic is at a critical stage for sexual health education and awareness. Whisper provides accessible, relatable, and accurate information to help young adults make informed choices about their sexual health. The platform offers confidential consultations and reliable diagnoses for STIs/STDs, promoting early detection and treatment. By addressing the specific needs and concerns of young adults, Whisper empowers this group to take control of their sexual health, reduce risks, and enhance their overall well-being. </p>
                                       <div class="customar_box">
                                          <div class="veni">
                                             <i><img src="{{ asset('assets/images/two.jpg')}}" alt="#" width="10%" style="border-radius: 20px;"/></i>

                                             <h4> Young Adults (18-40) </h4>
                                          </div>
                                          <i class="padd_rightt0"><img src="{{ asset('assets/images/cost.png')}}" alt="#" /></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="test_box">
                                       <p>Whisper is committed to ensuring that people with disabilities have equal access to sexual health services and information. Recognizing the diverse needs of this community, Whisper provides resources and support tailored to individuals with physical, intellectual, and sensory disabilities. The platform prioritizes accessibility, offering easy-to-navigate interfaces and assistance as needed. Whisper's confidential services ensure that people with disabilities can seek help without facing additional barriers or discrimination. By offering inclusive and comprehensive care, Whisper aims to promote sexual health and well-being for people with disabilities, fostering a more equitable healthcare environment.</p>
                                       <div class="customar_box">
                                          <div class="veni">
                                             <i><img src="{{ asset('assets/images/costomar.png')}}" alt="#" /></i>
                                             <h4> People with Disabilities </h4>
                                          </div>
                                          <i class="padd_rightt0"><img src="{{ asset('assets/images/cost.png')}}" alt="#" /></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end customer -->
   <!-- request -->
   <div class="request" id="contact">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Request a <strong class="pink"> call back</strong></h2>
                  <span> Need assistance or have questions about your sexual health? Our dedicated team is here to help. Reach out using the avenue below to request a confidential callback from one of our experienced healthcare professionals. We prioritize your privacy and are committed to providing you with the support and information you need. </span>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <ul class="social_infomision">
                  <li><a href="#"><img src="{{ asset('assets/images/call.png')}}" alt="#" /><br>(+233) 1234567890</a></li>
               </ul>
            </div>
            <div class="col-md-6">
               <ul class="social_infomision">
                  <li><a href="#"><img src="{{ asset('assets/images/email.png')}}" alt="#" />support@whisperhealthgh.com</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <!-- end request -->
   <!--  footer -->
   <footer>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="cont">
                     <h3>WhispaHealth</h3>
                     <span> At Whisper, we believe that everyone deserves access to confidential, reliable, and compassionate sexual health services. Together, we can build a healthier, more informed community. </span>
                     <ul class="social_icon">
                        <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p>© 2024 All Rights Reserved.</a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
   <script src="{{ asset('assets/js/popper.min.js')}}"></script>
   <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{ asset('assets/js/jquery-3.0.0.min.js')}}"></script>
   <script src="{{ asset('assets/js/plugin.js')}}"></script>
   <!-- sidebar -->
   <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
   <script src="{{ asset('assets/js/custom.js')}}"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>