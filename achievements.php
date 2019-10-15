<?php get_header(); ?>

<?php
/*
Template Name: 固定ページの新規テンプレート１
*/
?>
<?php
if(have_posts()): while(have_posts()): the_post();?>

<?php the_content(); ?>

<?php endwhile; endif; ?>