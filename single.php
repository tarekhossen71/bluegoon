<?php
    get_header();
?>

      

      <section id="features" class="section my-services" data-section="section2">
        <div class="container">
          <div class="section-heading">
          <div class="row">
            <div class="col-md-12">
                <h1 class="close">
                  <a href="<?php echo home_url(); ?>">&times;</a>
                </h1>
                <i class="<?php echo get_post_meta( $post->ID, 'icon_class', true ) ?>"></i>
                
                <h4>
                    <?php
                        the_title();
                    ?>
                </h4>
                <p>
                    <?php
                        the_content();
                    ?>
                </p>
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php
        get_footer();
    ?>