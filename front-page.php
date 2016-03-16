
<?php get_header() ?>

<section class="hero" id="hero" style=" background: url(' <?php echo susan_get_thumbnail_url($post) ?> '); background-size: cover">
	<div class="tealBlock">

		<div class="text">
			<p><strong>Hello, I'm Susan <br>
			a Designer + Front-End Developer based in Toronto.
			</strong></p>

			<p>Born in Taipei, raised all over the world, I am a lover of culture, design, and all things internet. With a background in graphic design, UX and web development, I'm passionate about creating beautiful and intuitive digital experiences for the web with writing clean and semantic code.</p>
	
		</div>

	</div>

	<div class="headerText">
		<h1>Meet<br>Susan</h1>
	</div>

</section> <!-- / .Hero Section -->


<!-- Expertise -->
<section class="expertise" id="expertise">
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
<section class="skills" id="skills">
	<div class="wrapper">

		<!-- Header Text -->
		<h2> with all the<br> technical skills </h2>
		
		<div class="skills_item_section">

			<div class="devicon">
				<i class="devicon-html5-plain"></i>
				<p>HTML5</p>
			</div>
			<div class="devicon">
				<i class="devicon-css3-plain"></i>
				<p>CSS3</p>
			</div>				
			<div class="devicon">
				<i class="devicon-javascript-plain"></i>
				<p>JavaScript</p>
			</div>
			<div class="devicon">
				<i class="devicon-jquery-plain"></i>
				<p>jQuery</p>
			</div>
			<div class="devicon">
				<i class="devicon-php-plain"></i>
				<p>PHP</p>
			</div>			
			<div class="devicon">
				<i class="devicon-sass-original"></i>
				<p>Sass</p>
			</div>
			<div class="devicon">
				<i class="devicon-wordpress-plain"></i>
				<p>Wordpress</p>
			</div>
			<div class="devicon">
				<i class="devicon-illustrator-plain"></i>
				<p>Adobe Illustrator</p>
			</div>
			<div class="devicon">
				<i class="devicon-photoshop-plain"></i>
				<p>Adobe Photoshop</p>
			</div>
			<div class="devicon">
				<img class="sketch" src="wp-content/themes/susan-lee/images/tool-sketch.png" alt="">
				<p>Sketch</p>
			</div>	
			<div class="devicon">
				<i class="devicon-git-plain"></i>
				<p>Git</p>
			</div>
			<div class="devicon">
				<i class="devicon-github-plain"></i>
				<p>Github</p>
			</div>
			<div class="devicon">
				<i class="devicon-gulp-plain"></i>
				<p>Gulp</p>
			</div>		
			<div class="devicon">
				<i class="devicon-trello-plain"></i>
				<p>Trello</p>
			</div>		

		</div>



	</div>
</section>

<!-- Portfolio / Work -->
<section class="work" id="work">
	<div class="portfolioBackground"></div>
	<div class="wrapper">
		
		<!-- Header Text -->
		<h2> <?php the_field('portfolio_text') ?> </h2>
		
		<div class="portfolioWrapper">
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
						<p><a href=" <?php the_sub_field('link') ?> " target="blank">View it Live</a></p>
					</div>
					<p> <strong> <?php the_sub_field('portfolio_item_skills') ?> </strong> </p>
				</div>

			</div>

			
		<?php endwhile; // end of repeater loop ?>
		</div>
	</div>

	<div class="profilePic">
		<img src=" <?php the_field('profile_picture') ?> " alt="">
	</div>
</section>



<!-- Contact -->
<section id="contact" class="contact">
	<div class="wrapper clearfix">

		<div class="contactL">
			<h4>Say Hello</h4>
			<div class="contactInfo">
				<p>My name is Susan Lee <br>
				I live in Toronto, Canada</p>
				<p>Email me // <a href="mailto:susan@hellosusan.io">susan@hellosusan.io</a></p>
			</div>
			<div class="social">
				<a href="https://twitter.com/helloSusan_code" target="blank"><i class="fa fa-twitter"></i></a>
				<a href="https://ca.linkedin.com/in/hellosusan" target="blank"><i class="fa fa-linkedin"></i></a>
				<a href="https://www.instagram.com/hellosusan__/" target="blank"><i class="fa fa-instagram"></i> </a>
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

