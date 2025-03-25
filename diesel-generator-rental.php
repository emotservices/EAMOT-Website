
<!doctype html>
<html class="no-js" lang="zxx">

<?php include_once("includes/head.php");?>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
  <!-- header area start -->
    <?php include_once("includes/header.php");?>
    <!-- header area end -->

    <?php include_once("includes/mobile_menu.php");?>

  
   <div class="body-overlay"></div>
   <!-- off canvas area  -->
   <main style="margin-left: 50px; margin-right: 50px;">
      <!-- breadcrumb area start -->
      <div class="breadcrumb__area theme-bg pt-120 pb-120" data-background="assets/img/breadcrumb/breadcrumb-bg.png">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content p-relative z-index-1">
                     <div class="breadcrumb__list mb-10">
                        <span><a href="index.html">Home</a></span>
                        <span class="dvdr dvdr-line"></span>
                        <span class="tp-bc-acive-menu">Terms</span>
                     </div>
                     <h3 class="breadcrumb__title">Diesel Generator Rental</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb area end -->
   <div class="container my-5">
    <h1 class="text-center mb-5">Why Rent DG Sets?</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">
            <div class="feature-box h-100">
                <div class="icon mb-3">📉</div>
                <h5>Outsourced Risk Management</h5>
                <p>Ensure safe equipment provision on-site without the burden of ownership.</p>
            </div>
        </div>

        <div class="col">
            <div class="feature-box h-100">
                <div class="icon mb-3">💰</div>
                <h5>Reduced Initial Capital Outlay</h5>
                <p>Preserve capital for core business investments instead of purchasing costly DG sets.</p>
            </div>
        </div>

        <div class="col">
            <div class="feature-box h-100">
                <div class="icon mb-3">🔧</div>
                <h5>Comprehensive Maintenance Coverage</h5>
                <p>Includes scheduled maintenance checks, repairs, and provision of spares and consumables for minor repairs.</p>
            </div>
        </div>

        <div class="col">
            <div class="feature-box h-100">
                <div class="icon mb-3">📈</div>
                <h5>Financial Flexibility</h5>
                <p>Avoid depreciation and financial risk; lease payments are manageable line-item expenses on your P&L statement.</p>
            </div>
        </div>

        <div class="col">
            <div class="feature-box h-100">
                <div class="icon mb-3">📋</div>
                <h5>Regulatory Compliance</h5>
                <p>Easily adapt to changing regulations by upgrading to newer models as per evolving norms.</p>
            </div>
        </div>

        <div class="col">
            <div class="feature-box h-100">
                <div class="icon mb-3">⚡</div>
                <h5>Operational Efficiency</h5>
                <p>Optimize operational efficiency with access to modern, fuel-efficient DG sets that are maintained to high standards, ensuring reliable power supply at all times.</p>
            </div>
        </div>

    </div>
   </div>
   <hr>
   
            <<div class="it-cta-form about-cta-form wow tpfadeUp" style="visibility: visible; animation-name: tpfadeUp;">
                        <div class="col-8 offset-2">
                           <div class="cva-header">
                           <h1 class="text-center">Contact us for DG Rental Quote</h1>
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
                                    <option selected value="dg_rental">DG Rental</option>
                                    <option value="iot">DG Rental with IoT</option>
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
                           <textarea name="query" placeholder="Rating Required"></textarea>
                           </div>
                        <button type="submit" class="it-cta-form-submit border-0 btn-sm">Submit for Callback</button>
                           </div>

                           </div>
                </form>
<hr>
   <div class="container my-5">
    <h1 class="text-center mb-5">Comparing DG Set Rental vs Purchase</h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Aspect</th>
                    <th scope="col">DG Rental</th>
                    <th scope="col">DG Purchase</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Upfront Capital Savings</td>
                    <td>Renting eliminates the need for significant upfront capital, preserving your financial resources for other critical investments. You can allocate funds more flexibly across your operations.</td>
                    <td>Purchasing a DG set requires a substantial initial investment, tying up capital that could be used for business expansion or other strategic initiatives.</td>
                </tr>
                <tr>
                    <td>Forecasting Budgeting</td>
                    <td>With renting, you benefit from predictable monthly expenses, making budgeting and financial planning more straightforward. There are no unexpected repair or maintenance costs as these are typically covered by the rental agreement.</td>
                    <td>Ownership entails ongoing expenses such as maintenance, repairs, and potential upgrades, which can fluctuate and be challenging to predict accurately.</td>
                </tr>
                <tr>
                    <td>Technological Upgrades</td>
                    <td>Renting allows access to the latest DG set models and technologies without the financial burden of purchasing new equipment outright. You can easily upgrade to more efficient models as your needs evolve.</td>
                    <td>Purchasing may limit your ability to upgrade without significant additional investment, potentially leaving you with outdated technology over time.</td>
                </tr>
                <tr>
                    <td>Scalability</td>
                    <td>Renting offers flexibility to scale your power capacity up or down based on seasonal or project-specific needs, ensuring you always have the right amount of power without overcommitting financially.</td>
                    <td>Ownership limits flexibility; adjusting capacity often requires purchasing additional equipment or disposing of surplus units, which can be costly and time-consuming.</td>
                </tr>
                <tr>
                    <td>Asset Management</td>
                    <td>Renting relieves you of the burden of asset management, including storage, insurance, and disposal. At the end of the rental period, simply return the equipment.</td>
                    <td>Ownership requires ongoing management of the asset lifecycle, including storage, insurance, and eventual disposal or resale, adding administrative complexity and cost.</td>
                </tr>
                <tr>
                    <td>Tax Benefits</td>
                    <td>Rental costs are typically deductible as operational expenses, providing potential tax advantages that can improve your overall financial position.</td>
                    <td>Ownership may offer depreciation benefits, but these can be complex to manage and may not offset the initial capital outlay effectively in the short term.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<hr>


<div class="container my-5">
    <h1 class="text-center mb-4">Key Differentiators</h1>
    <p class="text-center mb-5">At EAMOT, we have partnered with Cummins, the leading brand in the DG set market in India, to offer the extensive features listed below:</p>
   <hr>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="d-flex align-items-start">
                <div class="icon">1</div>
                <div>
                    <h5>Reliability</h5>
                    <p>Cummins engines are known for their reliability and durability, ensuring consistent power supply.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="d-flex align-items-start">
                <div class="icon">2</div>
                <div>
                    <h5>Performance</h5>
                    <p>High performance and efficient fuel consumption, which translates to lower operational costs.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="d-flex align-items-start">
                <div class="icon">3</div>
                <div>
                    <h5>Technology</h5>
                    <p>Advanced technology and innovation in engine design, improving efficiency and reducing emissions.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="d-flex align-items-start">
                <div class="icon">4</div>
                <div>
                    <h5>Global Support</h5>
                    <p>Extensive global support network for maintenance and spare parts, ensuring minimal downtime.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="d-flex align-items-start">
                <div class="icon">5</div>
                <div>
                    <h5>Warranty</h5>
                    <p>Comprehensive warranty and support services, providing peace of mind to users.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="d-flex align-items-start">
                <div class="icon">6</div>
                <div>
                    <h5>Versatility</h5>
                    <p>Wide range of power ratings and configurations to meet diverse needs and applications.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="d-flex align-items-start">
                <div class="icon">7</div>
                <div>
                    <h5>Compliance</h5>
                    <p>Adherence to international emission standards, contributing to environmental sustainability.</p>
                </div>
            </div>
        </div>
    </div>

   <hr>
    <h2 class="text-center mt-5 mb-4">All complaints and service requests will be tracked through our EAMOT Service platform</h2>

    <div class="row mb-5">
        <div class="col-12 mb-4">
            <div class="dashboard-placeholder">
                <img src="assets/img/rental/etm.jpg" alt="Dashboard Image">
            </div>
        </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="feature-box">
                <h5>Centralized System</h5>
                <p>Organizes and tracks all customer inquiries and support tickets in one place.</p>
            </div>
        </div>

        <div class="col">
            <div class="feature-box">
                <h5>Automation</h5>
                <p>Automates repetitive tasks such as ticket creation, routing, status updates, etc.</p>
            </div>
        </div>

        <div class="col">
            <div class="feature-box">
                <h5>Tracking and Monitoring</h5>
                <p>Provides real-time updates on ticket status, progress, and resolution.</p>
            </div>
        </div>

        <div class="col">
            <div class="feature-box">
                <h5>Knowledge Base Integration</h5>
                <p>Allows access to a database of solutions and FAQs for faster issue resolution.</p>
            </div>
        </div>

        <div class="col">
            <div class="feature-box">
                <h5>Communication</h5>
                <p>Facilitates interaction between support agents and customers through email, chat, and phone.</p>
            </div>
        </div>

        <div class="col">
            <div class="feature-box">
                <h5>Reporting and Analytics</h5>
                <p>Generates reports and analytics to monitor performance and identify trends.</p>
            </div>
        </div>

        <div class="col">
            <div class="feature-box">
                <h5>SLA Management</h5>
                <p>Ensures tickets are resolved within agreed-upon time frames.</p>
            </div>
        </div>

        <div class="col">
            <div class="feature-box">
                <h5>Customer Satisfaction</h5>
                <p>Enhances overall satisfaction by providing timely and efficient support.</p>
            </div>
        </div>
    </div>
</div>
      <!-- tp shop page  -->
    
      <!-- tp shop page  -->
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