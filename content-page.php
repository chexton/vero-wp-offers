<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<h2><?php 
				echo get_post_meta($id, 'subtitle', true) 
			?></h2>
		</header>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->

		<?php if(get_query_var('name') == 'thanks') { ?>
			<?php if($_GET['id'] == null) { ?>
				<p>Uh oh! It looks like something went wrong. <a href="javascript:history.go(-1)">Go back</a>.
			<?php } else { ?>
      	<p><a href="http://offers.getvero.com/downloads/<?php echo $_GET['id']?>.pdf">Download now</a></p>
    	<?php } ?>
    <?php } ?>

		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
