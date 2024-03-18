<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Violinist
 */

get_header();
?>
<div class="container">
    <main class="">

        <?php if ( have_posts() ) : ?>
        <header class="row">
            <?php
				the_archive_title( '<h1 class="display-5">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
        </header>

        <div class="row">
            <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				?>
            <div class="col-6">
                <?php get_template_part( 'template-parts/content', get_post_type() );?>
            </div>
            <?php endwhile;

			the_posts_navigation();

			 else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
        </div>




    </main>
</div>


<?php
get_sidebar();
get_footer();
?>