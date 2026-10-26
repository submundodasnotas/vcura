<?php
/**
 * The main template file
 *
 * @package VCura
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1 class="font-serif text-3xl font-bold text-brand-green-dark mb-6"><?php the_title(); ?></h1>
				<div class="prose max-w-none text-brand-text">
					<?php the_content(); ?>
				</div>
			</article>
			<?php
		endwhile;
	else :
		?>
		<p><?php esc_html_e( 'Nenhum conteúdo encontrado.', 'vcura' ); ?></p>
		<?php
	endif;
	?>
</div>

<?php
get_footer();
