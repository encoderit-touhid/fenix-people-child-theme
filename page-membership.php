<?php
/* Template Name: subscription-customize */

get_header();
?>

<div class="subscription_page" id="site-content">
    <header class="entry-header has-text-align-center header-footer-group">
        <div class="entry-header-inner section-inner medium">
            <h1 class="entry-title">Subscription</h1>
        </div>
    </header>

    <div class="post-inner thin">
        <?php the_content()?>
    </div>
</div>

<?php
get_footer();