<!--footer section start-->
<footer class="footer-1 ptb-60 dark-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-4 mb-4 mb-md-4 mb-sm-4 mb-lg-0">
        <?php dynamic_sidebar('ft_lf') ?>
      </div>
      <div class="col-md-12 col-lg-8">
        <div class="row mt-0 ls_ph_rw">
          <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
            <h6 class="font-weight-normal">Resources</h6>
            <ul class="footer_styl">
              <?php wp_nav_menu(['theme_location' => 'footer_1','container' => false,'items_wrap' => '%3$s','menu_id' => ' ','menu_class' => 'footer_styl',]) ?>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
            <h6 class="font-weight-normal">Products</h6>
            <ul class="footer_styl">
              <?php wp_nav_menu(['theme_location' => 'footer_2','container' => false,'items_wrap' => '%3$s','menu_id' => ' ','menu_class' => ' ',]) ?>
            </ul>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6">
            <h6 class="font-weight-normal">Support</h6>
			  <p>support@superbangla.com.bd</p>
			  <p>+8801838751184(Whatsapp only)</p>
			  <p>+8801974615661(Live call)</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end of container-->
</footer>

<!--footer bottom copyright start-->
<div class="footer-bottom py-3 gray-light-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-7">
        <div class="copyright-wrap small-text">
          <p class="mb-0">&copy; Super Bangla IT (2014-2022), All rights reserved</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-5">
        <div class="terms-policy-wrap text-lg-right text-md-right text-left">
          <ul class="list-inline">
<!--             <li class="list-inline-item"><a class="small-text" href="terms-condition.html">Terms & Condition</a></li> -->
<!--             <li class="list-inline-item"><a class="small-text" href="privacy-policy.html">Privacy Policy</a></li> -->
			  <img src="http://superbangla.com.bd/wp-content/uploads/2022/03/Payment.png" />
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--footer bottom copyright end-->
<!--footer section end-->
<!--scroll bottom to top button start-->
<div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
  <span class="fas fa-hand-point-up"></span>
</div>
<!--scroll bottom to top button end-->
<?php wp_footer() ?>
</body>

</html>