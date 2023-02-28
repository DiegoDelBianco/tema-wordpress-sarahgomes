
<?php get_header(); ?>
<?php //get_template_part("section_slide"); ?>

<?php 
if(is_singular()){
$imgTopo = get_the_post_thumbnail_url( get_the_ID(), 'twentytwenty-fullscreen' );
	?>
<div class="top-single-bkg  topnoimg top-bk-post " style="background-image: url('<?php if($imgTopo){echo $imgTopo;}else header_image(); ?>')">
	<div class="inner-desc">
		<div class="container">
			<h1 class="post-title single-post-title"><?php the_title(); ?></h1> 
		</div>
	</div>
</div>


<div class="container blog-holder">
	<div class="row">
		<div class="col-lg-12 posts-fillwidth">
			<section id="wrap-content" class="blog-3col-grid">
				<div class="row layout-mansory">
					<div class="col-md-12 col-lg-12 blog-item-mansory">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



									<?php the_content(); ?>
						</article>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>




<?php 
}else{
 ?>

<div class="top-single-bkg  topnoimg " style="background-image: url('<?php header_image(); ?>')">
	<div class="inner-desc">
		<div class="container">
			<h1 class="post-title single-post-title">Blog</h1> 
		</div>
	</div>
</div>

<?php } ?>







<div class="container">

<?php 
/*
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();




?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_singular() ) : ?>
			<?php the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
		<?php else : ?>
			<?php the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php endif; ?>

		<?php //twenty_twenty_one_post_thumbnail(); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content(
			//twenty_twenty_one_continue_reading_text()
		);

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
		//		 translators: %: Page number. 
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);

		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<?php //twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->



<?php




		//get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
	}

	// Previous/next page navigation.
	//twenty_twenty_one_the_posts_navigation();

} else {

	// If no content, include the "No posts found" template.
	//get_template_part( 'template-parts/content/content-none' );

}

*/
?>



</div>







<div class="container blog-holder">
	<div class="row">
		<div class="col-lg-12 posts-fillwidth">
			<section id="wrap-content" class="blog-3col-grid">
				<div class="row layout-mansory">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); if(!is_singular()){?>

					<div class="col-md-6 col-lg-4 blog-item-mansory">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="post-image">
								<?php 
									if ( has_post_thumbnail() ) {
									    the_post_thumbnail();
									}
								 ?>
							</div>

								<?php edit_post_link(); ?>
							<div class="post-holder">

								<h2 class="article-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
								 <ul class="post-meta"></ul>
								 <div class="article-excerpt">
									<?php the_excerpt(); ?>
								 	
								 </div>
								<?php wp_link_pages(); ?>
								<a href="<?php echo esc_url( get_permalink() ); ?>" class="read-more">Leia mais</a>
							</div>
						</article>
						
					</div>



	 
	<?php }else{
?>
	<div class="col-md-12 post-content single-post-content single-article-page clearfix">
		




	</div>










<?php

	} endwhile; ?>
				</div>
			</section>
		</div>
	</div>
</div>
	 
	<?php
	if ( get_next_posts_link() ) {
	next_posts_link();
	}
	?>
	<?php
	if ( get_previous_posts_link() ) {
	previous_posts_link();
	}
	?>
	 
	<?php else: ?>
	 
	<p>No posts found. :(</p>
	 
	<?php endif; ?>
<?php wp_footer(); ?>
<?php get_footer(); ?>