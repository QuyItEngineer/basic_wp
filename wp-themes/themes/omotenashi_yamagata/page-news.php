<?php 
/*
Template Name: Page news
Template Post Type: post, page
*/
get_header();

while ( have_posts() ) : the_post(); 
?>
<div class="banner-main">
	<img src="<?php asset("images/common/main.png");?>" alt="MAIN">
</div>
<section class="site-content">
    <h1>hello</h1>
			<?php get_sidebar();?>
</section>
<?php  endwhile;  get_footer(); ?>