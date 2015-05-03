<?php
/**
 * Template Name: Front Page Template
 *
 * @package Ndrade
 * @subpackage Diálogos_Cariocas
 * @since Diálogos Cariocas 0.1
 */

get_header(); ?>
			<div id="abas-1" class="menuPrincipalTabContent">
				<div class="conteudoEsq">
					<img src="<?php the_field('imagem_principal') ?>" 
						 class="alignnone size-full wp-image-185" alt="imagem_principal"  
						 width="575" height="370">
					<h1><?php the_field('titulo_principal') ?></h1>
					<div>
						<?php echo wpautop(get_field('texto_principal')) ?>
					</div>
					<div class='home-contact-area'>
						<p><a href='<?php the_field('link_contato') ?>'><?php the_field('texto_link_contato') ?></a></p>
						<?php echo wpautop(get_field('texto_contato')) ?>
					</div>
				</div>
				<div class="conteudoDir">
					<h2><?php the_field('titulo_secundario') ?></h2>
					<img src="<?php the_Field('imagem_secundaria') ?>" 
						 alt=""width="338" height="216">
					
					<h3>alguns projetos</h3>
					<p>
						Conheça alguns projetos do INSTITUTO DIÁLOGOS CARIOCAS.<br>
						<a href="/projetos/apoio-ao-movimento-social/">Clique aqui</a>
					</p>
					
					<h3>fundadores</h3>
<?php
if( have_rows('fundadores') )
{
	while ( have_rows('fundadores') )
	{
		the_row(); ?>
					<p class='fundador'>
						<span class='fundador-nome'><?php the_sub_field('nome') ?></span>, <?php the_sub_field('descricao') ?>
					</p>
<?php		
	}
}
?>
				</div>
				<br class="nobr" />
			</div>
			<!-- #abas-1 -->
<?php
get_footer();