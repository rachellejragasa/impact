<?php
/* Template Name: Box Page */
get_header();
?>

<!-- Section 1-->
<div class="section box order">
    <div class="row">
        <div class="box-left">
            <img src="<?php the_field('section-1-image');?>">
        </div>
        <div class="box-right">
            <div class="container">
                <h4 class="section-title"><?php the_field('section-1-title');?></h4>
                <?php the_field('section-1');?>
            </div>
        </div>
    </div>
</div>


<!-- Section 2-->
<div class="section box">
    <div class="row">
        <div class="box-right">
            <div class="container">
                <h4 class="section-title"><?php the_field('section-2-title');?></h4>
                <?php the_field('section-2');?>
            </div>
        </div>
        <div class="box-right">
            <img src="<?php the_field('section-2-image');?>">
        </div>
    </div>
</div>

<?php get_footer();?>