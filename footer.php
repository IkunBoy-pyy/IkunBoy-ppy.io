<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Akina
 */

?>
	</div><!-- #content -->
	<?php 
		if(akina_option('general_disqus_plugin_support')){
			get_template_part('layouts/duoshuo');
		}else{
			comments_template('', true); 
		}
	?>
	</div><!-- #page Pjax container-->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="footertext">
				<p class="foo-logo" style="background-image: url('<?php bloginfo('template_url'); ?>/images/f-logo.png');"></p>
				<p><?php echo akina_option('footer_info', ''); ?></p>
			</div>
			<div class="footer-device">
			<?php 
			$statistics_link = akina_option('site_statistics_link') ? '<a href="'.akina_option('site_statistics_link').'" target="_blank" rel="nofollow">Statistics</a>' : '';
			$site_map_link = akina_option('site_map_link') ? '<a href="'.akina_option('site_map_link').'" target="_blank" rel="nofollow">Sitemap</a>' : '';
			printf(esc_html__( '%1$s &nbsp; %2$s &nbsp; %3$s &nbsp; %4$s', 'akina' ), $site_map_link, '<a href="http://www.akina.pw/themeakina" rel="designer" target="_blank" rel="nofollow">Theme</a>', '<a href="https://wordpress.org/" target="_blank" rel="nofollow">WordPress</a>', $statistics_link); 
			?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<div class="openNav">
		<div class="iconflat">	 
			<div class="icon"></div>
		</div>
		<div class="site-branding">
			<?php if (akina_option('akina_logo')){ ?>
			<div class="site-title"><a href="<?php bloginfo('url');?>" ><img src="<?php echo akina_option('akina_logo'); ?>"></a></div>
			<?php }else{ ?>
			<h1 class="site-title"><a href="<?php bloginfo('url');?>" ><?php bloginfo('name');?></a></h1>
			<?php } ?>
		</div>
	</div><!-- m-nav-bar -->
	</section><!-- #section -->
	<!-- m-nav-center -->
	<div id="mo-nav">
		<div class="m-avatar">
			<?php $ava = akina_option('focus_logo') ? akina_option('focus_logo') : get_template_directory_uri().'/images/avatar.jpg'; ?>
			<img src="<?php echo $ava ?>">
		</div>
		<div class="m-search">
			<form class="m-search-form" method="get" action="<?php echo home_url(); ?>" role="search">
				<input class="m-search-input" type="search" name="s" placeholder="<?php _e('??????...', 'akina') ?>" required>
			</form>
		</div>
		<?php wp_nav_menu( array( 'depth' => 2, 'theme_location' => 'primary', 'container' => false ) ); ?>
	</div><!-- m-nav-center end -->
	<a href="#" class="cd-top"></a>
	<!-- search start -->
	<form class="js-search search-form search-form--modal" method="get" action="<?php echo home_url(); ?>" role="search">
		<div class="search-form__inner">
			<div>
				<p class="micro mb-"><?php _e('???????????????????????? ...', 'akina') ?></p>
				<i class="iconfont">&#xe65c;</i>
				<input class="text-input" type="search" name="s" placeholder="<?php _e('Search', 'akina') ?>" required>
			</div>
		</div>
		<div class="search_close"></div>
	</form>
	<!-- search end -->
<?php wp_footer(); ?>
<?php if(akina_option('site_statistics')){ ?>
<div class="site-statistics">
<script type="text/javascript"><?php echo akina_option('site_statistics'); ?></script>
</div>
<?php } ?>
</body>
</html>