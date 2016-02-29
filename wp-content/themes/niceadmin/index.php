<?php
  // Require login for site
  get_currentuserinfo();
  global $user_ID;
  if ($user_ID == '') {
  	header('Location: /wp-login.php'); exit();
  }
?>

<?php get_header(); ?>

<?php //get_sidebar()?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
<?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer()?>