<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<!--
<div class="row">
		<div class="small-12 columns" role="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
				<header class="article-header">
					<h2>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h2>
				</header>
				<section class="entry-content">
					<?php if ( has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							<?php the_post_thumbnail(); ?>
						</a>
					<?php endif; ?>
				</section>
			</article>
		</div>
	</div>
-->
	<section class="heroVid">
		<div class="row">
			<div class="small-12 columns">
				<p class="meet">MEET<br>
				GEOFF...</p>
				<p class="learn">Learn how he and his family acheived peace of mind with their telecare service from just £3.50 a week.</p>
				<a href="">Play Video</a>
			</div>
		</div>
	</section>
	<section class="introPanel">
		<div class="row">
			<div class="small-12 columns">
				<div class="thinkText">
					<h2 class="thinkTitle">Think!</h2>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="signUp">
		<div class="row">
			<div class="small-12 columns">
				<h4>Sign up for all the latest news and offers</h4>
				<form id="signupForm" method="">
					<fieldset class="">
						
						<div class="inputWrap">
							<label for="name">Name</label>
							<input class="name input" type="text" placeholder="Name">
						</div>
						
						<div class="inputWrap">
							<label for="email">Email Address</label>
							<input class="email input" type="text" placeholder="Email Address">
						</div>
						
						<input  type="submit" value="Send" class="submitBtn">
					</fieldset>
				</form>
			</div>
		</div>
	</section>
	<section class="threeThink">
		<div class="row">
			<div class="small-12 medium-4 columns">
				<div class="thinkContent">
					<p><span class="dark">THINK...</span><br>
						Who is the<br>
						only service<br>
						monitored by<br>
						a team of<br>
						specialist gps
					</p>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/icons/specialist-gps.svg" class="threeIcon" alt="">
				</div>
			</div>
			<div class="small-12 medium-4 columns">
				<div class="thinkContent">
					<p><span class="dark">THINK...</span><br>
						How great it<br>
						would be to<br>
						know you have<br>
						24hr support<br>
						365 days a year
					</p>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/icons/24hour-support.svg" class="threeIcon" alt="">
				</div>
			</div>
			<div class="small-12 medium-4 columns">
				<div class="thinkContent">
					<p><span class="dark">THINK...</span><br>
						Which award<br>
						winning telecare<br>
						service is also<br>
						the cheapest
					</p>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/icons/award-winning.svg" class="threeIcon" alt="">
				</div>
			</div>
		</div>
		<div class="roundel">
			<p>Want to have a think about it?</p>
			<p class="large">Free 8 week trial</p>
		</div>
	</section>
	<section class="fourThink">
		<div class="row">
			<div class="small-12 columns">
				<h5>FROM ONLY 50P A DAY.<br>IT REALLY IS A DEAL WORTH THINKING ABOUT</h5>
			</div>
		</div>
		<div class="row">
			<div class="small-6 medium-3 columns">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/homepage/portable-alarm.png" class="" alt="">
				<p>Portable Alarm</p>
			</div>
			<div class="small-6 medium-3 columns">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/homepage/home-installation.png" class="" alt="">
				<p>Home system installation</p>
			</div>
			<div class="small-6 medium-3 columns">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/homepage/call-centre.png" class="" alt="">
				<p>24 hour call centre</p>
			</div>
			<div class="small-6 medium-3 columns">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/homepage/gp-monitoring.png" class="" alt="">
				<p>GP-led monitoring team</p>
			</div>
		</div>
	</section>
	
	<?php endwhile; 
	
	endif; ?>

<?php get_footer();