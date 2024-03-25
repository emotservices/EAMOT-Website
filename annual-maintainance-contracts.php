<!doctype html>
<html class="no-js" lang="zxx">

<?php include 'includes/head.php';

//start a session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//Check if amc_success session is set if yes show success message

?>
 <style>
        .cva-section {
            background-color: #f8f9fa; /* Example background color, adjust as needed */
            padding: 2rem 0;
            
        }
        .cva-header {
            margin-bottom: 1rem;
        }
        .cva-card {
            background-color:#024b61;
            color: #ffffff;
            padding: 1rem;
            margin-bottom: 1rem;
            min-height: 300px;
        }
        .cva-card h2 {
            font-size: 4rem;
             color: #ffffff; 
        }
        .cva-card p {
            font-size: 1.25rem;
            color: #fff; 
        }
         .pb-10 {
            list-style-type: none;
            padding-left: 1em;
            font-size: 18px;
         }
         .pb-10::before {
            content: "\2713\0020";
         }
               
    </style>
<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
<?php include 'includes/landing-page-nav.php' ?>

 

   <div class="body-overlay"></div>
   <!-- off canvas area  -->
   <main>
      <!-- breadcrumb area start -->
    <div class="breadcrumb__area theme-bg pt-120 pb-120" style="background-image: url('https://www.dieselpowerholland.com/wp-content/uploads/2022/04/Diesel-Power-Holland_Monteur-1024x497.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list mb-10">
                           <span><a href="index.php">EAMOT</a></span>
                           <span class="dvdr dvdr-line"></span>
                           <span class="tp-bc-acive-menu">Offerings</span> 
                           </div>
                           <h3 class="breadcrumb__title text-white">  Annual Maintainance Contracts</h3>
                           </div>
                           </div>
                           </div>
                           </div>
                           </div>

                           <!-- breadcrumb area end -->

                           <!-- contact page info start  -->
                           <div class="contact-page-area pt-120 pb-90 wow tpfadeUp">
                           <div class="container">

                           <div class="row">
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
                           <h4 class="text-center">With 24 years of experience, we have served clients through AMC, constantly innovating for transparency and efficiency.</h4>
                           <p>&nbsp;</p>
                           <!-- <div class="col-lg-2">
                           <span class="say-hello">For Diesel Generators, UPS, Servo Stabilizers</span>
                           </div> -->
                           <div class="col-lg-10 offset-lg-1">
                           <div class="tp-contact-page-info ">
                           <span class="say-hello">EAMOT's AMC options: For Diesel Generators, Servo Stabilizers and Electricals</span>
                           <hr>
                           <ul class="pb-60 mb-60 tp-border-bottom">
                           <li class="pb-10 mb-10"><a href="#compamc"><strong>Comprehensive AMC:</strong></a> Covers all aspects of maintenance, including preventive maintenance, repairs, and emergency response.</li>
                           <li class="pb-10 mb-10"><a href="#amciot"><strong>AMC with IoT:</strong></a> Comprehensive coverage with real-time equipment monitoring and data insights.</li>

                           </div>

                           <div class="container cva-section">
                           <div class="row">
                           <div class="col-12">
                           <div class="cva-header">
                           <h1 id="compamc" class="text-center">Comprehensive AMC</h1>
                           <p class="text-center">Managing Diesel Generator sets with IoT Monitoring for fail-safe working</p>
                           </div>
                           </div>
                           </div>

                           <div class="container cva-section">

                           <div class="row">
                              <div class="col-md-3 fixed-height">
                                 <div class="cva-card text-white cva-card-style">
                                    <h2>80%</h2>
                                    <p>Of Faults are known from our monitored data for efficient and faster turn around time for AMC.</p>
                                 </div>
                              </div>
                              <div class="col-md-3 fixed-height">
                                 <div class="cva-card text-white">
                                    <h2>90%</h2>
                                    <p>90 Percent Of Engine Failures Can Be Prevented</p>
                                 </div>
                              </div>
                              <div class="col-md-3 fixed-height">
                                 <div class="cva-card text-white" >
                                    <h2>2.5x</h2>
                                    <p>Letting Parts Fail Can Cost You Up To 2.5x More In Repairs</p>
                                 </div>
                              </div>
                              <div class="col-md-3 fixed-height">
                                 <div class="cva-card text-white" >
                                    <h2>50%</h2>
                                    <p>50 Percent Longer Component Life Comprehensive AMCs</p>
                                 </div>
                              </div>
                           </div>
                           <hr>
                           <h3>
                              EAMOT, a leading service provider, offers the following range of services:
                           </h3>
                           <ul class="p-60 mb-60 tp-border-bottom">
                           
                           <li class="pb-10 mb-10">Engine and alternator cleaning</li>
                           <li class="pb-10 mb-10">Inspection and cleaning of air filter elements</li>
                           <li class="pb-10 mb-10">Assessment of V belt condition and tension</li>
                           <li class="pb-10 mb-10">Detection and resolution of any leakages</li>
                           <li class="pb-10 mb-10">'B' checks for both engine and alternator</li>
                           <li class="pb-10 mb-10">Inspection and tightening of nuts and bolts as required</li>
                           <li class="pb-10 mb-10">Examination of engine oil levels and replacement if necessary</li>
                       
                           </ul>
                           <h3>Our services also encompass:</h3>
                           <ul>
                                 
                           <li class="pb-10 mb-10">Refurbishment, installation, and maintenance of DG sets</li>
                           <li class="pb-10 mb-10">Spare parts management to ensure minimum stock levels</li>
                           <li class="pb-10 mb-10">Regular monitoring of key parameters such as temperature, motor current draw, cleaning pressure, and oil temperature</li>
                           <li class="pb-10 mb-10">Development of maintenance schedules covering weekly, monthly, quarterly, and annual tasks</li>
                           <li class="pb-10 mb-10">Strategic planning and execution of annual shutdowns</li>
                           <li class="pb-10 mb-10">Provision of emergency services in the event of breakdowns.</li>
                           </ul>

                         
                          <hr>
                           <div class="cva-header">
                           <h1 id="amciot" class="text-center">AMC with IoT</h1>
                           <p class="text-center"></p>
                           </div>
                           
                          
                           <div class="row justify-content-center">
                           <div class="col-12 text-center">
                           <img src="assets/img/gif/assetmonitoring.gif" alt="Description of Image" class="img-fluid text-center">
                           <ul>
                              <li class="pb-10 mb-10" style="text-align: left;"><b>Integrated IoT Monitoring:</b> Incorporate IoT devices for real-time monitoring of equipment parameters like power factor, load module, voltage, temperature etc. </li>
                              <li class="pb-10 mb-10" style="text-align: left;"><b>Predictive Maintenance:</b> Utilize IoT data analytics to predict potential failures, enabling proactive maintenance and minimizing downtime.</li>
                              <li class="pb-10 mb-10" style="text-align: left;"><b>Automated Alerts:</b> Set up automated alert systems to notify both service providers and clients of any anomalies or impending issues detected by IoT sensors.</li>
                              <li class="pb-10 mb-10" style="text-align: left;"><b>Customized Maintenance Plans:</b> Tailor maintenance schedules and tasks based on equipment usage patterns, optimizing efficiency and longevity.</li>
                              <li class="pb-10 mb-10" style="text-align: left;"><b>Continuous Improvement:</b> Analyze IoT data to identify trends and areas for improvement, refining maintenance strategies and enhancing overall service quality.</li>
                           </ul>
                      
                           </div>
                           </div>

                           </div>
                           </div>


                          
                           </div>

                           <hr>

                           <div class="it-cta-form about-cta-form wow tpfadeUp" style="visibility: visible; animation-name: tpfadeUp;">
                           <div class="col-12">
                           <div class="cva-header">
                           <h1 class="text-center">Contact us for AMC Inquiry or IoT Demo</h1>
                           <p class="text-center"></p>
                           </div>
                           </div>
                        <form action="includes/handler_landing.php" method="POST">
                           <div class="row">
                           <div class="col-lg-6">
                           <div class="input-item">
                           <span><i class="fas fa-user"></i></span>
                           <input name="full_name" type="text" required placeholder="Full name">
                           </div>
                           </div>
                           <div class="col-lg-6">
                           <div class="input-item">
                           <span><i class="fas fa-envelope-open"></i></span>
                           <input  name="email_address" type="email" required placeholder="Email address">
                           </div>
                           </div>
                           <hr>
                           <div class="col-lg-6">
                           <div class="input-item">
                           <span><i class="fas fa-building"></i></span>
                           <input name="company_name" type="text" required placeholder="Company Name">
                           </div>
                           </div>
                           <!-- <div class="col-lg-6">
                           <div class="input-item">
                           <span><i class="fas fa-location"></i></span>
                           <input type="text" placeholder="Address">
                           </div>
                           </div> -->
                            <div class="col-lg-6">
                           <div class="input-item">
                           <span><i class="fas fa-mobile"></i></span>
                           <input type="number" min="0" maxlength="10" required placeholder="Phone Number">
                           </div>
                           </div>
                           <hr>

                           <div class="col-lg-6">
                              <div class="input-item">
                                 <span><i class="fas fa-sort-size-up"></i></span>
                                 <select name="type_of_contract" required>
                                    <option selected value="comprehensive">Comprehensive AMC</option>
                                    <option value="iot">AMC with IoT</option>
                                 </select>
                              </div>
                           </div>

                           <div class="col-lg-6">
                           <div class="input-item">
                           <span><i class="fas fa-sort-size-up"></i></span>

                           <select name="number_generator" class="form-control" id="number_generator" required>
                           <option value="0">Number of Generators</option>
                           <option selected value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>  
                           <option value="7">7</option>
                           <option value="8">8</option>
                           <option value="9">9</option>
                           <option value="10">10</option>
                           </select>
                           </div>
                           </div>

                          

                           <div class="col-12">
                           <div class="input-item-textarea">
                           <span><i class="fas fa-pen"></i></span>
                           <textarea name="query" placeholder="Particular Query"></textarea>
                           </div>
                           <button type="submit" class="it-cta-form-submit border-0">Submit
                           for Callback</button>
                           </div>

                           </div>
                        </form>
                           </div>

                           </div>



                           </div>
                           </div>
                           </div>
                           </div>
                           </div>
                           </div>
                           </div>
                           <!-- contact page info end  -->


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

                           <script src="assets/js/isotope-  pkgd.js"></script>
                           <script src="assets/js/imagesloaded-pkgd.js"></script>
                           <script src="assets/js/ajax-form.js"></script>
                           <script src="assets/js/headline.js"></script>
                           <script src="assets/js/tilt.jquery.min.js"></script>
                           <script src="assets/js/main.js"></script>
                           </body>

                           </html>
