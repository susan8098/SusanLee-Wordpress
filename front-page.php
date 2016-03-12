
<?php get_header() ?>

<section class="hero" style=" background: url(' <?php echo susan_get_thumbnail_url($post) ?> '); background-size: cover">
	<div class="tealBlock">

		<div class="text">
			<p><strong>Hello, I am Susan <br>
			I am a Designer + Front-End Developer
			</strong></p>

			<p>I currently reside in Toronto. Originally from Taipei Taiwan.I am super passionate about creating beautiful and functional digital experiences for the web.</p>
		</div>

	</div>

	<div class="headerText">
		<h1>Meet<br>Susan</h1>
	</div>

</section> <!-- / .Hero Section -->

<!-- Bio -->
<!-- <section class="about">
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
</section> -->

<!-- Expertise -->
<section class="expertise">
	<div class="wrapper">	

		<!-- Header Text -->
		<h2> I make <br> visual stories <br> for the web<?php //the_field('expertise_text'); ?> </h2>
		
		<!-- Expertise Icon/Text Items Repeater Loop -->
	</div> <!-- /.wrapper -->

	<div class="expertise_item_section">	
		<div class="wrapper clearfix">		
			<?php while( has_sub_field('expertise_items') ): ?>
			  <!-- Our sub fields go here -->
			  <div class="expertise_item">
			  	<div class="expertise_icon">
			  		<img src=" <?php the_sub_field('expertise_icon') ?> " alt="">
			  	</div>
			  	<div class="divider"></div>
			  	<p class="expertise_caption"> <?php the_sub_field('expertise_caption') ?> </p>
			  </div>
			<?php endwhile; // end of repeater loop  ?>
		</div>
	</div>
</section>

<!-- Skills -->
<section class="skills">
	<div class="wrapper">

		<!-- Header Text -->
		<h2> <?php the_field('skills_text') ?> </h2>
		
		<div class="skills_item_section clearfix">
			<!-- Skills Icon/Text Items Repeater Loop -->
			<?php while( has_sub_field('skills_items') ) : ?>

				<div class="skill_item">
					<div class="skill_icon">
						<img src=" <?php the_sub_field('skill_icon') ?> " alt="">
					</div>
					<p class="skill_caption"> <?php the_sub_field('skill_caption') ?> </p>
				</div>

			<?php endwhile; // end of repeater loop ?>
		</div>



	</div>
</section>

<!-- Portfolio / Work -->
<section class="work">
	<div class="wrapper">
		
		<!-- Header Text -->
		<h2> <?php the_field('portfolio_text') ?> </h2>

		<!-- Portfolio Items Repeater Loop -->
		<?php while( has_sub_field('portfolio_items') ) : ?>
			
			<div class="portfolio_item clearfix">
					
				<!-- Portfolio Image -->
				<div class="portfolio_item_image">
					<img src=" <?php the_sub_field('portfolio_item_image') ?> " alt="">
				</div>

				<!-- Portfolio Info / Description -->
				<div class="portfolioInfo">
					<h3> <?php the_sub_field('portfolio_item_caption') ?> </h3>
					<div class="divider"></div>
					<p> <?php the_sub_field('portfolio_item_description') ?> </p>
					<div class="seeLiveButton">
						<p><a href="#">See it Live</a></p>
					</div>
					<h4> <?php the_sub_field('portfolio_item_skills') ?> </h4>
				</div>

			</div>

			
		<?php endwhile; // end of repeater loop ?>
	
	</div>
</section>

<!-- Contact -->
<section id="contact" class="contact">
	<div class="wrapper clearfix">

		<div class="contactL">
			<h2>Say Hello</h2>
			<div class="contactInfo">
				<p>My name is Susan Lee <br>
				I live in Toronto, Canada</p>
				<p>Email me // <a href="mailto:susan@hellosusan.io">susan@hellosusan.io</a></p>
			</div>
			<div class="social">
				<a href="https://twitter.com/helloSusan_code" target="blank"><i class="fa fa-twitter"></i></a>
				<a href="https://ca.linkedin.com/in/hellosusan" target="blank"><i class="fa fa-linkedin"></i></a>
				<a href="https://www.instagram.com/hellosusan__/" target="blank"><i class="fa fa-instagram"></i></a>
			</div>
		</div>

		<div class="contactR">
			<form method="post" action="http://www.focuspocus.io/magic/susan8098@gmail.com">
			 <ul>
				 <li>
				 	<input type="text" class="myInput" placeholder="Name" name="fristName">
				 </li>
				 <li>
				 	<input type="email" class="myInput" placeholder="Email" name="fristName">
				 </li>
				  <li>
				 	<input type="text" class="myInput" placeholder="Subject" name="Subject">
				 </li>
				 <li><textarea name="message" placeholder="Message" id="" cols="30" rows="15"></textarea></li>
				 <li class="submitButton"><input type="submit" class="submitButton" value="SEND"></li>
			 </ul>
			</form>

		</div>
	</div>
	
</section>


<!-- Footer -->
<?php get_footer(); ?>

<!-- <div class="main">
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> 
</div> --> <!-- /.main -->

