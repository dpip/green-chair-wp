<?php
/**
 * The template for displaying Search Results pages.
 */
 
get_header(); ?>
<div id="main-content" class="py-5 search-results">
    <div class="container">
        <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <h1 class="page-title green"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            </header><!-- .page-header -->   
            <hr />

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); 

                $the_link = get_permalink();
                $the_title = get_the_title();
                $the_date = get_the_date('F j, Y');
                $the_content = ucfirst(wp_trim_words( get_the_content(), 55, '...'). ' <a class="result-link green" href="'.$the_link.'"> Read More &raquo;</a>'); ?>
                <h4 class="result-title mt-4 mb-2"><a href="<?php echo $the_link; ?>" class="gray" /><?php echo $the_title;?></a></h4>
                <p class="result-content mb-5"><?php echo $the_content;?> </p>
                <hr />

            <?php endwhile; ?>
            <div id="search-nav" class="pagination center-block">
                <?php echo paginate_links( $args ); ?>
            </div>
        <?php else : ?>
            <h3 class="results-heading no-bottom">Your search for '<span><?php printf( '%s', get_search_query() ); ?></span>' returned no results.</h3>
            <hr />
            <p>It looks like nothing was found. Maybe try one of the links below or another search?</p>
            <ul class="pages"> <?php wp_list_pages();?> </ul>
        <?php endif; ?>
        
    </div>    
</div><!-- #main-content --> 
<?php get_footer(); ?>