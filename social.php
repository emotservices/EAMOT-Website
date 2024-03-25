<!doctype html>
<html class="no-js" lang="zxx">

<?php include 'includes/head.php';

//start a session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//Check if amc_success session is set if yes show success message

?>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
  <?php include 'includes/header.php'; ?>

  <?php include 'includes/mobile_menu.php'; ?>

   <div class="body-overlay"></div>
   <!-- off canvas area  -->
   <main>

        <?php
                          // session_start();
                       
                     
                           if (isset($_SESSION['amc_success'])) {
                              echo '<div id="successMessage" style="background-color: green; color: white; padding: 10px; padding-bottom: 10px; text-align: center;">Your inquiry has been submitted successfully. Our team will get in touch with you soon.!</div>';
                              echo '
                              <script>
                                 setTimeout(function() {
                                    document.getElementById("successMessage").style.display = "none";
                                 }, 10000);
                              </script>
                              ';

                              unset($_SESSION['amc_success']);
                           }else{
                              //Error Message with red background
                              if (isset($_SESSION['amc_error'])) {
                                 echo '<div id="errorMessage" style="background-color: red; color: white; padding: 10px; padding-bottom: 10px; text-align: center;">There was an error submitting your inquiry. Please try again later.</div>';
                                 echo '
                                 <script>
                                    setTimeout(function() {
                                       document.getElementById("errorMessage").style.display = "none";
                                    }, 10000);
                                 </script>
                                 ';
                                 unset($_SESSION['amc_error']);
                              }
                           }
                             
                             
                           ?>
                           
      <!-- about me hero area start -->
      <div class="tp-about__me theme-bg pt-60" data-background="assets/img/breadcrumb/breadcrumb-bg.png" style="background-image: url(&quot;assets/img/breadcrumb/breadcrumb-bg.png&quot;);">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6 col-xl-5 wow tpfadeUp" style="visibility: visible; animation-name: tpfadeUp;">
                  <div class="about-me-1 mb-30" data-tilt="" data-tilt-perspective="2000" style="will-change: transform; transform: perspective(2000px) rotateX(0deg) rotateY(0deg);">
                     <img width="400" src="assets/img/home/SSRDP1.jpg" alt="">
                  </div>
               </div>
               <div class="col-md-6 wow tpfadeUp" style="visibility: visible; animation-name: tpfadeUp;">
                  <div class="section-title-wraper">
                     <div class="tp-section">
                        <img width="250" src="assets/img/home/stridelogo.png" alt=""> <br>
                        <span class="tp-section__subtitle shadow-none text-redical mb-10 p-0">Enrolment for Batch 1</span>
                        <h2 class="tp-section__title mb-20">Diesel Generator & <br> Mechanical Training Program</h2>
                        <p class="mb-0 pb-40">
                        <b>Diesel Generator Training:</b> Gain comprehensive knowledge of Diesel Generator Sets, including their parts, installation, commissioning, operation, and maintenance. Learn troubleshooting techniques, environmental compliance, and methods for upgradation and modernization.
<br>
<b>Electrical Training:</b> Delve into fundamental electrical concepts, covering power cables, multimeter usage, and identifying phases and neutrals in AC supply. Develop skills in pipe and plate earthing, as well as controlling pin sockets through switches, essential for electrical system operation and safety.


                        </p>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--about me hero  area end -->

      <div class="about-me-about-area pt-150 pb-80">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 wow tpfadeUp" style="visibility: visible; animation-name: tpfadeUp;">
                  <div class="about-me-about-left pr-40">
                     <div class="tp-section">
                        <span class="tp-section__subtitle white-bg mb-25"><i class="before-border"></i> About the Program</span>
                        <p>With India's ambitious targets for renewable energy and the establishment of a sustainable energy infrastructure, Diesel Generator (DG) Set training emerges as a critical component. These programs not only impart essential skills but also foster job opportunities, drive technological innovations, ensure operational quality and safety, and contribute to environmental sustainability. <br>
                           <br>
                           DG Technicians play a crucial role in installing, operating, and maintaining DG Sets, essential for reliable power generation alongside renewable sources.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 wow tpfadeUp" style="visibility: visible; animation-name: tpfadeUp;">
                  <div class="about-me-about-right">
                     <div class="tp-section">
                        <span class="tp-section__subtitle white-bg mb-25"><i class="before-border"></i> Key features of the training program</span>
                        <p class="mb-25">

<li>&#10003; 50% practical and 50% theoretical learning program trained by experts</li>
<li>&#10003; Hands-on experience in DG Set installation and maintainance.</li>
<li>&#10003; Master the art of mechanical troubleshooting and repair</li>
<li>&#10003; Food and accommodation facility is available</li>
<!-- <li>&#10003; NSDC Certification (Government of India)</li> -->
<li>&#10003; EAMOT Certification</li>
<li>&#10003; Eligibility: 10th Pass and above</li>
<li>&#10003; Course duration: 2 Months</li>
                        </p>
                     </div>
                     <div class="about-me-about-cta-wraper mb-30">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="about-me-about-cta">
                                 <span>Know More about the Program</span>
                                 <span><a href="mailto:info@emotservices.com">info@emotservices.com</a></span>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="about-me-about-cta">
                                 <span>Phone: <a href="tel:+7975481415">+79754 81415</a></span>
                               
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="about-me-about-download">
                        <a href="#enform" class="tp-white-border-btn">
                          Fill out Interest Form
                           <span class="">
                              <i class="fas fa-file-alt"></i>
                              <i class="fas fa-file-alt"></i>
                           </span>
                        </a>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="tp-app-price-area fix pt-120 pb-90">
         <div class="container">
            <div class="row gx-5">
                <h2 class="tp-section__title mb-20 text-center">Program Curriculum</h2>
                <hr>
               <div class="col-xl-4 col-lg-6">
                  <div class="tp-price-box catskill-white-bg mb-30 p-relative wow tpfadeRight" style="visibility: visible; animation-name: tpfadeRight;">
                     <div class="tp-price-box__info mb-35">
                     
                        <h4 class="tp-price-box__info-title text-mirage">Diesel Generator Training	</h4>
                      
                     </div>
                    
                     <div class="tp-price-fea-list app-list">
                        <ul>
                        <li><i class="fal fa-check"></i><b>Understanding Diesel Generator Sets</b></li>
                        <li><i class="fal fa-check"></i><b>Parts of Diesel Generator Sets</b></li>
                        <li><i class="fal fa-check"></i><b>DG Set Installation and Commissioning</b></li>
                        <li><i class="fal fa-check"></i><b>Operation of Diesel Generator sets</b></li>
                        <li><i class="fal fa-check"></i><b>Maintenance and Troubleshooting</b></li>
                        <li><i class="fal fa-check"></i><b>Environmental and Regulatory Compliance</b></li>
                        <li><i class="fal fa-check"></i><b>Upgradation and Modernization</b></li>
                        </ul>
                     </div>
                    
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6">
                  <div class="tp-price-box active white-bg app-box-shadow mb-30 p-relative wow tpfadeIn" style="visibility: visible; animation-name: tpfadeIn;">
                     <div class="tp-price-box__info mb-35">
                    
                        <h4 class="tp-price-box__info-title text-mirage">Electrical Training</h4>
                     
                     </div>
                   
                     <div class="tp-price-fea-list app-list">
                        <ul>
                           <li><i class="fal fa-check"></i><b>Understanding Basic Concepts</b></li>
                           <li><i class="fal fa-check"></i><b>Power Cables, Laying and Saddling</b></li>
                           <li><i class="fal fa-check"></i><b>Study of Multimeter</b></li>
                           <li><i class="fal fa-check"></i><b>Identify the phase and neutral in AC supply.</b></li>
                           <li><i class="fal fa-check"></i><b>Prepare a pipe earth and Plate Earthing</b></li>
                           <li><i class="fal fa-check"></i><b>3 Pin socket control by switch</b></li>
                        </ul>
                     </div>
                    
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6">
                  <div class="tp-price-box catskill-white-bg mb-30 p-relative wow tpfadeLeft" style="visibility: visible; animation-name: tpfadeLeft;">
                     <div class="tp-price-box__info mb-35">
                       
                        <h4 class="tp-price-box__info-title text-mirage">Other Essential Skills</h4>
                     
                     </div>
                    
                     <div class="tp-price-fea-list app-list">
                        <ul>
                           <li><i class="fal fa-check"></i><b>Installation and maintenance of DG Sets</b></li>
                           <li><i class="fal fa-check"></i><b>Design software proficiency (For Engineers)</b></li>
                           <li><i class="fal fa-check"></i><b>Youth Leadership Training Program</b></li>
                           <li><i class="fal fa-check"></i><b>Entrepreneurial Training</b></li>
                           <li><i class="fal fa-check"></i><b>Yoga & Meditation</b></li>
                        </ul>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="about-page-about pt-120 pb-90">
         <div class="container">
            <div class="row align-items-md-center">
               <div class="col-xl-6 wow tpfadeUp" style="visibility: visible; animation-name: tpfadeUp;">
                  <div class="about-page-about-img mb-30">
                     <img src="assets/img/home/EAMOTSocial.jpg" alt="">
                  </div>
               </div>
               <div class="col-xl-6 wow tpfadeUp" style="visibility: visible; animation-name: tpfadeUp;">
                  <div class="about-page-ab">
                     <div class="section-title-wraper">
                        <div class="tp-section">
                        
                           <p>
                              Meet Manish Kapoor, an entrepreneur with a passion for sustainability and community empowerment.<br>
As the visionary founder and CEO of EAMOT, he has steered his career towards pioneering innovative solutions that tackle contemporary environmental challenges 
<br>
Originally trained as an electrical engineer, his passion, powerful ideas, and commitment to social responsibility, led him to create EAMOT. Supported by a dedicated team and a network of channel partners, EAMOT offers a comprehensive suite of solutions tailored to meet the evolving needs of clients amidst a rapidly changing landscape.
<br>

Beyond its core offerings, EAMOT has expanded its horizons to encompass training, resource provision, and mentorship for aspiring youth, thereby nurturing the next generation of sustainable business leaders and facilitating job opportunities. 
<b>Joining EAMOT's Stride Workshop offers a chance to learn from experienced professionals about DG set installation and maintenance, giving participants valuable skills and insights.
</b>
                           </p>
                        </div>
                     </div>
                   
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="it-cta-area law-cta-area about-me-cta-area pt-120 pb-85 black-bg" data-background="assets/img/about/about-me-contact-bg.png" style="background-image: url(&quot;assets/img/about/about-me-contact-bg.png&quot;);">
         <div class="container" id="enform">
            <div class="row align-items-center">
               <div class="col-xl-6 wow tpfadeUp" style="visibility: visible; animation-name: tpfadeUp;">
                  <div class="mb-30">
                     <div class="it-cta__title">
                        <div class="section-title-wraper">
                           <div class="tp-section">
                              <div class="pb-40"><img src="assets/img/icons/red-what-icon.png" alt=""></div>
                              <h2 class="tp-section__title text-white text-capitalize mb-25 wow tpfadeUp" style="visibility: visible; animation-name: tpfadeUp;">Have any Questions about the Program or need Help in Enrolling?</h2>
                              <p class="pr-45 wow tpfadeUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: tpfadeUp;">
                            Enroll in our comprehensive DG Set Training program to gain expertise in installation, maintenance, and design software proficiency. Enhance your leadership skills, entrepreneurial mindset, and well-being through our tailored youth leadership and yoga & meditation components.
                            </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 wow tpfadeUp" style="visibility: visible; animation-name: tpfadeUp;">
                  <div class="it-cta-form about-cta-form">
                     <form action="includes/handler_social.php" method="POST">
                        <div class="row">
                           
                           <div class="col-lg-12">
                              <div class="input-item">
                                 <span><i class="fas fa-user"></i></span>
                                 <input type="text" name="full_name" placeholder="Full name" required>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="input-item">
                                 <span><i class="fab fa-whatsapp"></i></span>
                                 <input type="text" name="number" placeholder="WhatsApp number" required>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="input-item">
                                 <span><i class="fas fa-envelope-open"></i></span>
                                 <input type="email" name="email" placeholder="Email address" required>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="input-item form-control">
                                 <span><i class="fas fa-globe"></i></span>
                                 <select name="language" id="language" required>
                                    <option disabled selected>Please select the preferred language</option>
                                    <option value="English">English</option>
                                    <option value="Hindi">Hindi</option>
                                    <option value="Kannada">Kannada</option>
                                    <option value="Marathi">Marathi</option>
                                    <option value="Tamil">Tamil</option>
                                    <option value="Telugu">Telugu</option>
                                    <option value="Malayalam">Malayalam</option>
                                    <option value="Punjabi">Punjabi</option>
                                 </select>
                              </div>
                           </div>
                          
                           <div class="col-lg-6">
                              <div class="input-item">
                                 <span><i class="fas fa-map-marker-alt"></i></span>
                                 <input type="text" name="city" placeholder="City or Village name" required>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="input-item-textarea">
                                 <span><i class="fas fa-pen"></i></span>
                                 <textarea name="message" placeholder="Message" required></textarea>
                              </div>
                              <button type="submit" class="it-cta-form-submit border-0">Submit Request</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </main>
  <?php include 'includes/footer.php'; ?>


   <script src="assets/js/jquery.js"></script>
   <script src="assets/js/waypoints.js"></script>
   <script src="assets/js/modernizr.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/meanmenu.js"></script>
   <script src="assets/js/swiper-bundle.js"></script>
   <script src="assets/js/slick.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/counterup.js"></script>
   <script src="assets/js/wow.js"></script>
   <script src="assets/js/nice-select.js"></script>
  
   <script src="assets/js/isotope-pkgd.js"></script>
   <script src="assets/js/imagesloaded-pkgd.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/headline.js"></script>
   <script src="assets/js/tilt.jquery.min.js"></script>
   <script src="assets/js/main.js"></script>
</body>

</html>