<?php
/* Template Name: Custom Page */
get_header();
?>

<div class="custom-page">
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s9 m9 l12 center">
                    <h4><?php the_field('section-1-title');?></h4>
                    <p class="left-align light"><?php the_field('section-1');?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="custom-page grey lighten-2">
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s9 m9 l12 center">
                    <h4><?php the_field('section-2-title');?></h4>
                    <p class="left-align light"><?php the_field('section-2');?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if (is_page(10) || is_page(12)) {?>
    <div class="custom-page">
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s9 m9 l12 center">
                        <h4><?php the_field('section-3-title');?></h4>
                        <p class="left-align light"><?php the_field('section-3');?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php get_footer();?>