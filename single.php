<?php
    get_header();
?>

      <section class="bg-primary">
        <article>
          <h1><?php the_title();?></h1>
          <div class="row bg-primary">

              <?php
              if( have_posts() ){
                while( have_posts() ){
                  the_post();
                  get_template_part('template-parts/content','article');
                }
              }
            ?>
          </div>

        </article>
      </section>



<?php
    get_footer();
?>
