<?php get_header(); ?>
<?php
$ic_active        = function_exists( 'ic_load' ) ? 'active' : 'not active';
$wp_routes_active = function_exists( 'respond' ) ? 'active' : 'not active';
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="centered padded">
				<h2>Here are some images</h2>

				<p>Some will be immediately visible and some will not.</p>

				<p>If <a href="https://github.com/lucatume/wp-intercooler">wp-intercooler</a> and <a
						href="https://github.com/lucatume/wp-routes">wp-routes</a> plugins are active on the site are
					then lazy loading of images should happen.</p>

				<p>intercooler.js is <b><?php echo $ic_active ?></b></p>

				<p>wp-routes is <b><?php echo $wp_routes_active ?></b></p>
			</header>

			<div class="empty-space centered">
				<p>Big empty space, scroll down and see lazy loading happening.</p>
			</div>

			<div class="lazy-img centered" ic-trigger-on="scrolled-into-view"
			     ic-src="/lazy-load-image?url=<?php echo urlencode( 'http://lorempixel.com/800/400/sports/1' ) ?>">
			</div>

			<div class="empty-space centered">
				<p>Another empty space, keep scrolling.</p>
			</div>

			<div class="lazy-img centered" ic-trigger-on="scrolled-into-view"
			     ic-src="/lazy-load-image?url=<?php echo urlencode( 'http://lorempixel.com/800/400/sports/2' ) ?>">
			</div>

			<div class="empty-space centered">
				<p>Yeah. More empty space: two in a row.</p>
			</div>

			<div class="columns two centered">
				<div class="lazy-img" ic-trigger-on="scrolled-into-view"
				     ic-src="/lazy-load-image?url=<?php echo urlencode( 'http://lorempixel.com/800/400/sports/3' ) ?>">
				</div>
				<div class="lazy-img" ic-trigger-on="scrolled-into-view"
				     ic-src="/lazy-load-image?url=<?php echo urlencode( 'http://lorempixel.com/800/400/sports/9' ) ?>">
				</div>
			</div>

			<div class="empty-space centered">
				<p>Last one: three in a row.</p>
			</div>
			<div class="columns three centered">
				<div class="lazy-img" ic-trigger-on="scrolled-into-view"
				     ic-src="/lazy-load-image?url=<?php echo urlencode( 'http://lorempixel.com/800/400/sports/5' ) ?>">
				</div>
				<div class="lazy-img" ic-trigger-on="scrolled-into-view"
				     ic-src="/lazy-load-image?url=<?php echo urlencode( 'http://lorempixel.com/800/400/sports/6' ) ?>">
				</div>
				<div class="lazy-img" ic-trigger-on="scrolled-into-view"
				     ic-src="/lazy-load-image?url=<?php echo urlencode( 'http://lorempixel.com/800/400/sports/7' ) ?>">
				</div>
			</div>

		</main>
		<!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
