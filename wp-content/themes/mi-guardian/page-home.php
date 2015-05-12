<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
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
	<section class="heroVid"></section>
	<section class="introPanel">
		<div class="row">
			<div class="small-12 columns">
				<h2 class="thinkTitle">Think</h2>
				<?php the_content(); ?>
			</div>
		</div>
	</section>
	<section class="signUp">
		<div class="row">
			<div class="small-12 columns">
				<h4>Sign up for all the latest news and offers</h4>
				<form id="" method="">
					<fieldset class="">
						<label for="name">Name</label>
						<input class="name" type="text" placeholder="Name">
						
						<label for="email">Email Address</label>
						<input class="email" type="text" placeholder="Email Address">
						
						<input  type="submit" value="Send" class="submit">
					</fieldset>
				</form>
			</div>
		</div>
	</section>
	<section class="threeThink">
		<div class="row">
			<div class="small-12 medium-4 columns">
				<p><span class="dark">THINK...</span><br>
					Who is the<br>
					only service<br>
					monitored by<br>
					a team of<br>
					specialist gps
				</p>
			</div>
			<div class="small-12 medium-4 columns">
				<p><span class="dark">THINK...</span><br>
					HOW GREAT IT<br>
					WOULD BE TO<br>
					KNOW YOU HAVE<br>
					24HR SUPPORT<br>
					365 DAYS A YEAR
				</p>
			</div>
			<div class="small-12 medium-4 columns">
				<p><span class="dark">THINK...</span><br>
					WHICH AWARD<br>
					WINNING TELECARE<br>
					SERVICE IS ALSO<br>
					THE CHEAPEST
				</p>
			</div>
		</div>
		<div class="roundel">
			<p>Want to have a think about it?</p>
			<p class="large">Free 8 week trial</p>
		</div>
	</section>
	<section class="fourThink">
		<div class="row">
			<div class="small-12 medium-3 columns">
				<p>Portable Alarm</p>
			</div>
			<div class="small-12 medium-3 columns">
				<p>Home system installation</p>
			</div>
			<div class="small-12 medium-3 columns">
				<p>24 hour call centre</p>
			</div>
			<div class="small-12 medium-3 columns">
				<p>GP-led monitoring team</p>
			</div>
		</div>
	</section>
	
	<?php endwhile; 
	
	endif; ?>

<?php get_footer();