<!DOCTYPE html>
<html lang="en">
<title><?php echo "Mirror" ;?> || Registration </title>

<!-- ======  headerlink start ==== -->
<?php $this->load->view('front/headerlink')?>
 <!-- ==========  headerlink ends======= -->


<body itemscope>
    <div class="preloader">
        <div class="loader-inner ball-scale-multiple">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div><!-- Preloader -->

  <!--==========================
    Header  start
  ============================-->

  <?php $this->load->view('front/header')?>
  
  <!-- #header   ends -->
      <!--==========================-->
    
   
        
         <section>
            <div class="gap black-layer opc8 overlap144">
                <div class="fixed-bg2" style="background-image: url(assets/images/pg-tp-bg.jpg);"></div>
                <div class="container">
                    <div class="pg-tp-wrp">
                        <h1 itemprop="headline">Registration</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html" title="" itemprop="url">Home</a></li>
                            <li class="breadcrumb-item active">registration</li>
                        </ol>
                    </div><!-- Page Top Wrap -->
                </div>
            </div>
        </section>
        <section>
            <div class="gap">
                <div class="container">
                    <div class="cnt-wrp">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-lg-6 offset-3">
                                <div class="cnt-frm ">
                                    <h4 itemprop="headline">Registration Form</h4>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input  type="text" placeholder="First Name">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input  type="text" placeholder="Last Name">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input  type="email" placeholder="Email Address">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input  type="text" placeholder="Phone Number">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12 pb-4">
                                               <select class="form-control" id="exampleFormControlSelect1">
                                                  <option>Select Gender</option>
                                                  <option >Male</option>
                                                    <option>Female</option>
                                               </select>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12 pb-4">
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                  <option>Select Country</option>
                                                  <option >UAE</option>
                                                    <option>USA</option>
                                                    <option>UK</option>
                                                    <option>Qatar</option>
                                               </select>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input  type="text" placeholder="References ID">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input  type="text" placeholder="Placement ID">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input  type="text" placeholder="Payment ID">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input  type="text" placeholder="Transaction PIN of Payment ID">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input  type="text" placeholder="Username">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input  type="password" placeholder="Password...">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input  type="password" placeholder="Confirm Password...">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input  type="password" placeholder="Transaction Password...">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input  type="password" placeholder="Confirm Transaction Password...">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <button type="submit" class="theme-btn brd-rd5">Submit Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                          
                            
                        </div>
                    </div><!-- Contact Wrap -->
                </div>
            </div>
        </section><!-- 
        <section>
            <div class="gap no-gap">
                <div class="cnt-mp" id="cnt-mp"></div>
            </div>
        </section> -->
        
       <!-- Main Wrapper -->
   <!-- Footer
  ============================-->
    <?php $this->load->view('front/footer')?>
  
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- =====  js start  ===== -->

<?php $this->load->view('front/footerlink')?>


<!-- =====  js ends  ===== -->

</body>
</html>
