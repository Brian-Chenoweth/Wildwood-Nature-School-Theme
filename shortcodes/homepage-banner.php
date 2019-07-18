<div id="homepage-banner-wrap" class="full-width">

    <div id="homepage-banner">
       <h1>At Wildwood Nature School, we believe that children learn best through play.</h1>
         <?php if( have_posts() ) {
                while( have_posts() ) {
                the_post();
                  the_content();  } } ?>
        <a href="" class="btn secondary">Get in touch with us</a>
    </div>

</div>