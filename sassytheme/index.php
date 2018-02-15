<?php get_header();?>

<!-- ABOUT US -->
<div class="home-page">
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s9 m9 l12 center">
                <h4>About Us</h4>
                <p class="left-align light"><?php the_field('about-us-section'); ?></p>
            </div>
        </div>
    </div>
</div>
</div>

<!-- LATEST NEWS -->
<div class="home-page grey lighten-2">
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s9 m9 l12 center">
                <h4>Latest News</h4>
                <p class="left-align light"><?php the_field('latest-news-section'); ?></p>
            </div>
        </div>
    </div>
</div>
</div>

<!-- MEDIA -->
<div class="home-page">
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s9 m9 l12 center">
                <h4>Media</h4>
                <p class="left-align light"><?php the_field('media-section'); ?></p>
            </div>
        </div>
    </div>
</div>
</div>

<!-- VIDEO -->
<div class="home-page grey lighten-2">
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s9 m9 l12 center">
                <h4>Video</h4>
                <p class="left-align light"><?php the_field('video-section'); ?></p>
            </div>
        </div>
    </div>
</div>
</div>

<?php get_footer();?>