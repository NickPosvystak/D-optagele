<?php get_header(); ?>

<div id="content">
  <div class="container">
    <div class="row">
      <?php if(get_theme_mod('professional_video_vlogger_search_sidebar_layout', 'Right Sidebar') == 'Right Sidebar'){ ?>
      <div class="col-lg-8 col-md-8 mt-5">

        <?php echo '<h1>' . esc_html__('You searched: ', 'professional-video-vlogger') . get_search_query() . '</h1>'; ?>

        <div class="row">
          <?php
            if ( have_posts() ) :

              while ( have_posts() ) :

                the_post();
                get_template_part( 'template-parts/content' );

              endwhile;

            else:

              esc_html_e( 'Sorry, no post found on this archive.', 'professional-video-vlogger' );

            endif;

            get_template_part( 'template-parts/pagination' );
          ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <?php get_sidebar(); ?>
      </div>
      <?php } elseif(get_theme_mod('professional_video_vlogger_search_sidebar_layout', 'Right Sidebar') == 'Left Sidebar'){ ?>
      <div class="col-lg-4 col-md-4">
        <?php get_sidebar(); ?>
      </div>
      <div class="col-lg-8 col-md-8 mt-5">

        <?php echo '<h1>' . esc_html__('You searched: ', 'professional-video-vlogger') . get_search_query() . '</h1>'; ?>

        <div class="row">
          <?php
            if ( have_posts() ) :

              while ( have_posts() ) :

                the_post();
                get_template_part( 'template-parts/content' );

              endwhile;

            else:

              esc_html_e( 'Sorry, no post found on this archive.', 'professional-video-vlogger' );

            endif;

            get_template_part( 'template-parts/pagination' );
          ?>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>