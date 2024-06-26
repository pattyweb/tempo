<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootstrap
 */

?>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <?php dynamic_sidebar('footer-contact'); ?>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <?php dynamic_sidebar('footer-links-1'); ?>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <?php dynamic_sidebar('footer-links-2'); ?>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <?php dynamic_sidebar('footer-newsletter'); ?>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">
    <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          <?php dynamic_sidebar('footer-copyright'); ?>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/tempo-free-onepage-tempo/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <?php dynamic_sidebar('footer-social-links'); ?>
      </div>
    </div>
</footer><!-- End Footer -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>

</html>

<?php wp_footer(); ?>

</body>
</html>
