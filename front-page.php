
<?php get_header() ?>

<section class="hero">
	
	<div class="triangleL full"></div>
	<div class="triangleR"></div>

	<div class="headerText">
		<h1>Meet<br>Susan</h1>
	</div>

</section> <!-- / .Hero Section -->

<section class="about">
	<div class="wrapper clearfix">
		
		<div class="profileImg">
			<img src=" <?php echo susan_get_thumbnail_url($post) ?> " alt="">
		</div>
		
		<div class="bioText">	
			<?php // Start the loop ?>
			<?php if(have_posts()) while(have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div>	
</section>

<section class="expertise">
	<div class="wrapper">
		<h2>I make<br>visual stories<br> on the web</h2>
	</div>
</section>


<!-- <div class="main">
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> 
</div> --> <!-- /.main -->

<?php get_footer(); ?>