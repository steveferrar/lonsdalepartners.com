<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Blank_Theme
 */

get_header(); ?>
	
    <div class="content page">
    
		<?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>
        
            <section>
            
                <aside>
                </aside>
                
                <article>
        
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
        
                </article>
            
            </section>
            
            <?php endwhile; // end of the loop. ?>
            
        <?php else : ?>
        
            <section>
                
                <article class="no-image">
            
                    <h1>Sorry...</h1>
                    <p>There are no articles to display at the moment. Please check back later.</p>
        
                </article>
            
            </section>
    
        <?php endif; ?>
        
        <div class="clearfix"></div>

    </div><!-- .content -->
            
    <div class="clearfix"></div>
    
<?php get_footer(); ?>