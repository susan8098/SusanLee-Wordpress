
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
		<?php if( have_posts() ) while( have_posts() ) : the_post(); ?>
			
			<!-- Header Text -->
			<h2> <?php the_field('expertise_text'); ?> </h2>
			
			<!-- Expertise Icon/Text Items Repeater Loop -->
			<?php while( has_sub_field('expertise_items') ): ?>
			  <!-- Our sub fields go here -->
			  <div class="expertise_item">
			  	<div class="expertise_icon">
			  		<img src=" <?php the_sub_field('expertise_icon') ?> " alt="">
			  	</div>
			  	<p class="expertise_caption"> <?php the_sub_field('expertise_caption') ?> </p>
			  </div>
			<?php endwhile; // end of repeater loop  ?>

		<?php endwhile; //end the loop ?> 
	</div>
</section>

<section class="skills">
	<div class="wrapper">
		
		<?php if( have_posts() ) while( have_posts() ) : the_post(); ?>

			<!-- Header Text -->
			<h2> <?php the_field('skills_text') ?> </h2>

			<!-- Skills Icon/Text Items Repeater Loop -->
			<?php while( has_sub_field('skills_items') ) : ?>

				<div class="skill_item">
					<div class="skill_icon">
						<img src=" <?php the_sub_field('skill_icon') ?> " alt="">
					</div>
					<p class="skill_caption"> <?php the_sub_field('skill_caption') ?> </p>
				</div>
				
			<?php endwhile; // end of repeater loop ?>

		<?php endwhile; // end loop ?>

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