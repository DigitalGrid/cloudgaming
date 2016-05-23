<!--<footer>
  <div class="row">
    <section class="col-md-3">
      <?php //dynamic_sidebar("footer1") ?>
    </section>
    <section class="col-md-3">
      <?php //dynamic_sidebar("footer2") ?>
    </section>
    <section class="col-md-3">
      <?php //dynamic_sidebar("footer3") ?>
    </section>
    <section class="col-md-3">
      <?php //dynamic_sidebar("footer4") ?>
    </section>
  </div>
  <nav class="footer-nav">
    <?php /*wp_nav_menu(
      array(
        "theme_location" => "footer-menu",
      )
    );*/ ?>
  </nav>
 
  <p>Christofer Jadelius - &copy; <?php //echo date('Y'); ?></p>
</footer>-->

<!-- Footer -->
<footer class="text-center">
  <div class="footer-above">
    <div class="container">
      <div class="row">
        <section class="col-sm-4" id="footer-section-1">
          <?php dynamic_sidebar("footer1") ?>
        </section>
        <section class="col-sm-4" id="footer-section-2">
          <?php dynamic_sidebar("footer2") ?>
        </section>
        <section class="col-sm-4" id="footer-section-3">
          <?php dynamic_sidebar("footer3") ?>
        </section>
        <section class="col-sm-12" id="footer-section-4">
          <?php dynamic_sidebar("footer4") ?>
        </section>
      </div>
    </div>
  </div>
  <div class="footer-below">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          &copy; <?php echo date('Y'); ?> Christofer Jadelius 
        </div>
      </div>
    </div>
  </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>