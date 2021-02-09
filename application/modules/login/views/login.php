<!DOCTYPE html>
<html lang="en">
<title><?php echo "Mirror" ;?> || Login </title>

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
                        <h1 itemprop="headline">Login</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html" title="" itemprop="url">Home</a></li>
                            <li class="breadcrumb-item active">Login</li>
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
                                <div class="cnt-frm">
                                    <h4 itemprop="headline">Login</h4>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input  type="email" placeholder="Email Address">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input  type="password" placeholder="Password...">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <button type="submit" class="theme-btn brd-rd5">Submit Now</button>
                                            </div>
                                            
                                            <div class="col-md-12 col-sm-12 col-lg-12 offset-3 mt-5">
                                                <p class="register"> Don't Have an Account ...? <a href="registration" class="btn btn-info">Register Here..</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Contact Wrap -->
                </div>
            </div>
        </section>
        <section>
            <div class="gap no-gap">
                <div class="cnt-mp" id="cnt-mp"></div>
            </div>
        </section>
        
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
