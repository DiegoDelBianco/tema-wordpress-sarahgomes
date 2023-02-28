
<?php get_header(); ?>
<?php //get_template_part("section_slide"); ?>


<?php 
$imgTopo = get_the_post_thumbnail_url( get_the_ID(), 'twentytwenty-fullscreen' );
	?>

<div class="top-single-bkg  topnoimg " style="background-image: url('<?php if($imgTopo){echo $imgTopo;}else header_image(); ?>')">
	<div class="inner-desc">
		<div class="container">
			<h1 class="post-title single-post-title"><?php the_title(); ?></h1> 
		</div>
	</div>
</div>








<div class="container">
	<?php the_content(); ?>
</div>
<?php wp_footer(); ?>
<?php get_footer(); ?>