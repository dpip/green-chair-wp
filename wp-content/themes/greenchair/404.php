<?php
/**
 * 404 page (Not Found).
 *
 */
get_header(); ?>

<div id="main-content" class="page-404 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-4 col-lg-8 col-md-offset-6 col-md-6 col-sm-offset-4 col-sm-8">
                <h1>Something went wrong</h1>
                <p>The page you're trying to access doesn't appear to exist.  Looking for anything in particular?  Try searching below:</p>
                <form id="search-form" action="<?php echo home_url( '/' ); ?>" method="get" role="form">
                    <input type="text" name="s" id="search" placeholder="Search">
                    <input type="hidden" name="post_type[]" value="news-item" />
                    <input type="hidden" name="post_type[]" value="events" />
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>  
</div><!-- #main-content -->

<?php get_footer(); 