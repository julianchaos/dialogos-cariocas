<?php
/**
 * @package Ndrade
 * @subpackage Diálogos_Cariocas
 * @since Diálogos Cariocas 0.1
 */
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
		<title><?php wp_title('|', true, 'right'); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class="global">
			<div class="topo">
				<div class="logo">
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<img src="<?php bloginfo('template_directory'); ?>/images/logo.gif" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" width="250" height="153" />
					</a>
				</div>
				<div class="slogan"><img src="<?php bloginfo('template_directory'); ?>/images/slogan.gif" width="386" height="38" /></div>
				<!-- #cabeçalho -->

				<?php get_template_part('header', 'menu') ?>
			</div>
			<!-- #topo -->