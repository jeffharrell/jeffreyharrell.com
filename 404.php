<?php get_header(); ?>

<article class="post error404 no-results not-found">
	<header>
		<h1>Now where'd that go?</h1>
	</header>

	<p>It seems we can't find what you're looking for. Try starting from the <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">beginning</a>.</p>
</article>

<?php get_footer(); ?>