
    </div>


</main>

<!-- ################ MAIN - End ################ -->

<!-- ################ FOOTER - Start ################ -->

<footer class="container-fluid navbar-inverse bg-inverse">
  <div class="row justify-content-between align-items-baseline">

    <p id="temps"></p>
    <p>Copyright</p>
    <nav class="row">
      <p>Follow us : </p>
      <a href="facebook.fr"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/Facebook.svg" alt="Facebook" height="32px"></a>
      <a href="twitter.fr"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/Twitter.svg" alt="Twitter" height="32px"></a>
      <a href="googleplus.fr"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/Google.svg" alt="Google plus" height="32px"></a>
    </nav>
  </div>
</footer>

<!-- ################ FOOTER - End ################ -->


<!-- ############## JS sources ############## -->
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/plugins.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/main.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-3.2.1.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/tether.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
<!-- ############## JS sources ############## -->

<script>
  // Scripts loaded on page refresh/access. Rest of js in js/main.js
  window.onload = tabChange(3);
  window.onload = tempsP();
</script>
<?php wp_footer(); ?>
</body>

</html>
