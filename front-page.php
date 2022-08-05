<?php
    get_header();
?>


      <section class="nombreneon">
        <article class="img" id="uno"></article>
        <article class="img" id="dos"></article>
        <article class="img" id="tres"></article>
      </section>
      <section>
        <article>
          <h1><?php the_title();?></h1>
          <div class="row bg-primary">

              <?php
              if( have_posts() ){
                while( have_posts() ){
                  the_post();
                  the_content();
                }
              }
            ?>

          </div>

        </article>
      </section>



<?php
    get_footer();
?>
