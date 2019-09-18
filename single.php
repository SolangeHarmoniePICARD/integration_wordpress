<?php get_header(); ?>

<div class="container">
  <div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="col-12 col-md-4 text-center my-5">
      <div class="rounded-circle bg-dark-grey bg-icons d-inline-block">
      <?php the_post_thumbnail(); ?>
      </div>
      <p class="mt-4 txt-title-grey"><?php the_title(); ?></p>
      <p class="text-center txt-interval-grey"><?php the_content(); ?></p>
    </div>
  <?php endwhile; else : ?>
  <p>Sorry, no posts were found!</p>
  <?php endif; ?>

  </div>
</div>
<?php get_footer(); ?>
