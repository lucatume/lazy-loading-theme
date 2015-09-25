<?php get_header(); ?>
<style>
	.centered {
		  width: 95%;
		  margin: 2rem auto;
		  background: #f0c9b9;
		color: darkslategray;
		padding:1rem;
	}
	.lazy-img{
		padding: 1rem;
	}
	.lazy-img > img{
		width: 100%;
	}
	.empty-space {
	  height: 100rem;
	}
	.empty-space > p{
		position: relative;
		top: 50%;
		transform: translateY(-50%);
		text-align: center;
		font-size: 300%;
	}
</style>
<?php
	$ic_active = function_exists( 'ic_load' ) ? 'active' : 'not active';
	$wp_routes_active = function_exists('respond') ? 'active' : 'not active';
	?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="centered padded">
				<h2>Here are some images</h2>
				<p>Some will be immediately visible and some will not.</p>
				<p>If <a href="http://intercoolerjs.org/">intercooler.js</a> and <a href="https://github.com/lucatume/wp-routes"></a> are active then lazy loading of images should happen.</p>

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
				<p>Yeah. More empty space, go on.</p>
			</div>

			<div class="lazy-img centered" ic-trigger-on="scrolled-into-view"
			      ic-src="/lazy-load-image?url=<?php echo urlencode( 'http://lorempixel.com/800/400/sports/3' ) ?>">
			</div>

			<div class="empty-space centered">
				<p>Last one. Last scrolling effort.</p>
			</div>

			<div class="lazy-img centered" ic-trigger-on="scrolled-into-view"
			      ic-src="/lazy-load-image?url=<?php echo urlencode( 'http://lorempixel.com/800/400/sports/4' ) ?>">
			</div>

		</main>
		<!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
