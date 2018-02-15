<?php
/* Template Name: Box Page - Escape */
get_header();
?>

<!-- Section 1-->
<div class="section boxpage-escape-template order">
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
<div class="section boxpage-escape-template">
    <div class="row">
        <div class="box-left">
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

<!-- Section 3-->
<div class="section boxpage-escape-template order">
    <div class="row">
        <div class="box-left">
            <img src="<?php the_field('section-3-image');?>">
        </div>
        <div class="box-right">
            <div class="container">
                <h4 class="section-title"><?php the_field('section-3-title');?></h4>
                <?php the_field('section-3');?>
            </div>
        </div>
    </div>
</div>

<!-- Section 4 -->
<div class="boxpage-escape grey lighten-2">
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s9 m9 l12 center">
                    <h4><?php the_field('section-4-title');?></h4>
                    <p class="left-align light"><?php the_field('section-4');?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="boxpage-escape">
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s9 m9 l12 center">
                    <h4><?php the_field('section-5-title');?></h4>
                    <p class="left-align light"><?php the_field('section-5');?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="boxpage-escape grey lighten-2">
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s9 m9 l12 center">
                    <h4><?php the_field('section-6-title');?></h4>
                    <p class="left-align light"><?php the_field('section-6');?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="boxpage-escape">
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s9 m9 l12 center">
                    <h4><?php the_field('section-7-title');?></h4>
                    <p class="left-align light"><?php the_field('section-7');?></p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php get_footer();?>