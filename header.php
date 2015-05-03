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
		
		<!--<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" />-->
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
				
				<div id="menuPrincipal">
					<?php //wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'menuPrincipalAbas', 'depth'=>1)); ?>
				
				</div>
				<div class="submenu">
<?php wp_nav_menu(array('menu_id'=>3)) ?>
					<?php require_once 'submenu.pageid.php' ?>
					<?php if($post->post_parent > 0){ wp_page_menu(array('include' => $submenuPageID, 'show_home'=> false));} ?>
				</div>
				<!-- #menu -->
			</div>
			<!-- #topo -->