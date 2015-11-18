<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<section class="heroVid">
		<div class="row">
			<div class="small-12 columns">
				<?php the_field('video_text'); ?>
				<a href="<?php the_field('video_link'); ?>" class="playBtn fancybox-media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/homepage/playVideo.png" class="" alt="">
				Play Video</a>
			</div>
		</div>
	</section>
	<section class="introPanel">
		<div class="row">
			<div class="small-12 columns">
				<div class="thinkText">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="signUp">
		<div class="row">
			<div class="small-12 columns">
				<!-- Begin MailChimp Signup Form -->
				<div id="mc_embed_signup">
				<form action="//wearevast.us5.list-manage.com/subscribe/post?u=16dec5b34f91bdc514cd89088&amp;id=36e7aedb99" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">
					<h4>Sign up for all the latest news and offers</h4>
				<div class="indicates-required"><span class="asterisk">*</span> indicates a required field</div>
				<div class="mc-field-group inputWrap">
					<label for="mce-NAME">Name  <span class="asterisk">*</span></label>
					<input type="text" value="" name="NAME" class="required input" id="mce-NAME" placeholder="Name">
				</div>
				
				<div class="mc-field-group inputWrap">
					<label for="mce-EMAIL">Email  <span class="asterisk">*</span></label>
					<input type="email" value="" name="EMAIL" class="required email input" id="mce-EMAIL" placeholder="Email">
				</div>
				
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;"><input type="text" name="b_16dec5b34f91bdc514cd89088_36e7aedb99" tabindex="-1" value=""></div>
				    <input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="button submitBtn">
				  </div>
				</form>
				</div>
				
				<!--End mc_embed_signup-->
			</div>
		</div>
	</section>
	<section class="thinkBlock">
		<div class="row">
			<div class="small-12 medium-4 columns">
				<div class="thinkContent">
					<?php the_field('think_block_01'); ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/icons/specialist-gps.png" class="threeIcon" alt="">
				</div>
			</div>
			<div class="small-12 medium-4 columns">
				<div class="thinkContent">
					<?php the_field('think_block_02'); ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/icons/24hour-support.png" class="threeIcon" alt="">
				</div>
			</div>
			<div class="small-12 medium-4 columns">
				<div class="thinkContent">
					<?php the_field('think_block_03'); ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/icons/award-winning.png" class="threeIcon" alt="">
				</div>
			</div>
		</div>
		<div class="roundel">
			<p>Want to have a <br>think about it?</p>
			<p class="large">Free<br>8 week<br>trial</p>
		</div>
	</section>
	<section class="dealBlock">
		<div class="dealInner">
			<div class="row">
				<div class="small-12 columns">
					<?php the_field('deal_introduction'); ?>
				</div>
			</div>
			<div class="row">
				<div class="small-6 medium-3 columns">
					<div class="dealIcon">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/icons/portable-alarm.png" class="" alt="">
					</div>
					<p><?php the_field('deal_block_01'); ?></p>
				</div>
				<div class="small-6 medium-3 columns">
					<div class="dealIcon">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/icons/home-installation.png" class="" alt="">
					</div>
					<p><?php the_field('deal_block_02'); ?></p>
				</div>
				<div class="small-6 medium-3 columns">
					<div class="dealIcon">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/icons/call-centre.png" class="" alt="">
					</div>
					<p><?php the_field('deal_block_03'); ?></p>
				</div>
				<div class="small-6 medium-3 columns">
					<div class="dealIcon">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/icons/gp-monitoring.png" class="" alt="">
					</div>
					<p><?php the_field('deal_block_04'); ?></p>
				</div>
			</div>
		</div>
	</section>
	
	<?php endwhile; 
	
	endif; ?>

<?php get_footer();