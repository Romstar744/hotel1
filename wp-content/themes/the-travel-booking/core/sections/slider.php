<?php if ( get_theme_mod('the_travel_booking_blog_box_enable') ) : ?>

<?php $args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('the_travel_booking_blog_slide_category'),
  'posts_per_page' => get_theme_mod('the_travel_booking_blog_slide_number'),
); ?>

<div class="slider">
  <div class="owl-carousel">
    <?php $the_travel_booking_arr_posts = new WP_Query( $args );
    if ( $the_travel_booking_arr_posts->have_posts() ) :
      while ( $the_travel_booking_arr_posts->have_posts() ) :
        $the_travel_booking_arr_posts->the_post();
        ?>
        <div class="blog_inner_box">
          <?php
            if ( has_post_thumbnail() ) :
              the_post_thumbnail();
            endif;
          ?>
          <div class="blog_box pt-3 pt-md-0">
            <?php if ( get_theme_mod('the_travel_booking_slide_title_enable_disable', true) == true ) : ?>
              <h3 class="my-3"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h3>
            <?php endif; ?>
            <?php if ( get_theme_mod('the_travel_booking_slide_text_enable_disable', true) == true ) : ?>
              <p><?php echo wp_trim_words( get_the_content(), get_theme_mod('the_travel_booking_excerpt_number',20) ); ?></p>
            <?php endif; ?>
          </div>
        </div>
      <?php
    endwhile;
    wp_reset_postdata();
    endif; ?>
  </div>
</div>

<?php endif; ?>