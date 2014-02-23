<nav id="topbar" class="full" role="navigation">
	<?php div_starter_main_nav(); ?>

	<?php /* MUST SET SIDEBAR IN SIDEBARS.PHP */ ?>
	<?php if ( is_active_sidebar( 'nav-social-icons' ) ) : ?>
		<div id="nav-social-icons-container" class="right">
			<?php dynamic_sidebar( 'nav-social-icons' ); ?>
		</div>
	<?php else : ?>
	<?php endif; ?>

</nav>