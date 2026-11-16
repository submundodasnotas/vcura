<?php
/**
 * The template for displaying all pages
 *
 * @package VCura
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( is_front_page() || is_home() ) {
	include get_template_directory() . '/front-page.php';
	return;
}

get_header();
?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1 class="font-serif text-3xl sm:text-4xl font-bold text-brand-green-dark mb-6"><?php the_title(); ?></h1>
			<div class="prose max-w-none text-brand-text leading-relaxed">
				<?php the_content(); ?>
			</div>
		</article>
		<?php
	endwhile;
	?>
</div>

<?php
get_footer();
