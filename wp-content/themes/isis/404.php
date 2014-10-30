<?php 
/**
 * The template for displaying 404 pages (Not Found)
 *
 * Imonthemes 
 */



get_header(); ?>

	<div class="row">
        <div class="large-11">
	
		<div>
			<h1><?php _e( '404', 'isis' ); ?></h1>
            <h2><?php _e( 'Page not found!', 'isis' ); ?></h2>
			<p>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Return home?', 'isis' ); ?></a>
			</p>
		</div>	
		
	</div>
    
    </div>

<?php get_footer(); ?>