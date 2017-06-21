<?php get_header(); ?>
      <section class="row col-12 col-lg-9">
        <?php get_template_part( 'content', get_post_format() ); ?>
      </section>
    <?php get_sidebar(); ?>
<?php get_footer(); ?>
