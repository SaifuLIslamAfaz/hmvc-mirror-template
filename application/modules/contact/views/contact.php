<!DOCTYPE html>
<html lang="en">
<title><?php echo "Mirror" ;?> || Contact Us </title>

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
                        <h1 itemprop="headline">Contact Us</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html" title="" itemprop="url">Home</a></li>
                            <li class="breadcrumb-item active">Contact Us</li>
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
                            <div class="col-md-8 col-sm-12 col-lg-8">
                                <div class="cnt-frm">
                                    <h4 itemprop="headline">Stay With us</h4>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input  type="text" placeholder="Your Name...">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input  type="email" placeholder="Email Address">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input  type="text" placeholder="Add Subject Here...">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <textarea  placeholder="Your Message Goes Here"></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <button type="submit" class="theme-btn brd-rd5">Submit Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-lg-4">
                                <div class="cnt-inf-wrp">
                                    <h4 itemprop="headline">Contact info</h4>
                                    <ul class="cnt-inf-lst">
                                        <li><i class="fas fa-envelope theme-clr"></i> <strong>Email</strong><a href="#" title="" itemprop="url">info@example.com</a><a href="#" title="" itemprop="url">www.example.com</a></li>
                                        <li><i class="fas fa-map-marker-alt theme-clr"></i> <strong>Address</strong><span>791 Commonwealth Dr. Warrendale, PA 15086 United State USA</span></li>
                                        <li><i class="fas fa-phone theme-clr"></i> <strong>Phone</strong><span>0044 987 654 321</span><span>0044 526 652 778</span></li>
                                    </ul>
                                    <div class="scl4">
                                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" title="Linkedin" itemprop="url" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#" title="Instagram" itemprop="url" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </div>
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
