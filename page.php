<?php
/**
 * @package Ndrade
 * @subpackage Diálogos_Cariocas
 * @since Diálogos Cariocas 0.1
 */

get_header();
?>
			<div id="abas-1" class="menuPrincipalTabContent">
				<div class="conteudoTotal">
					<?php if(is_string(get_field('titulo_pagina'))) { ?>
					<h2><?php the_field('titulo_pagina') ?></h2>
					<?php
					
					}
					while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', 'page' ); ?>
					<?php endwhile; // end of the loop. ?>
					<br class='nobr' />
				</div>
				<!-- #conteudoTotal -->
			</div>
			<!-- #abas-1 -->
<?php
get_footer();