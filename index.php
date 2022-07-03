<?php
    get_header();
    $options = get_option( 'my_framework' );
?>

      <section id="intro" class="section about-me" data-section="section1">
        <div class="container">
        <div class="top-header">
        	<img src="<?php echo $options['header_image']['url'];?>" alt="<?php echo $options['header_image']['alt'];?>" />
        </div>
          <div class="section-heading">
          
            <h2>
                <?php
                    echo $options['header_intro_title'];
                ?>
            </h2>
            <div class="line-dec"></div>
            <span>
                <?php
                    echo $options['header_intro_description'];
                ?>
            </span>
          </div>
          <div class="right-image-post">
            <div class="row">
 
              <div class="col-md-8">
                <div class="left-text">
                  <h4>
                    <?php
                        echo $options['intro_title'];
                    ?>
                  </h4>
                  <p>
                    <?php
                        echo $options['intro_description'];
                    ?>
                  </p>
                  <div class="white-button">
                    <a href="<?php echo $options['intro_button_url']; ?>">
                        <?php
                            echo $options['intro_button'];
                        ?>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="right-image">
                  <img src="<?php echo $options['intro_image']['url'];?>" alt="<?php echo $options['intro_image']['alt'];?>" />
                </div>
              </div>
              
            </div>
          </div>
          <div class="left-image-post">
            <div class="row">
            
              <div class="col-md-4">
                <div class="left-image">
                  <img src="<?php echo $options['intro_another_image']['url'];?>" alt="<?php echo $options['intro_another_image']['alt'];?>" />
                </div>
              </div>
              
              <div class="col-md-8">
                <div class="right-text">
                  <h4>
                    <?php
                        echo $options['intro_another_title'];
                    ?>
                  </h4>
                  <p>
                    <?php
                        echo $options['intro_another_description'];
                    ?>
                  </p>
                  <div class="white-button">
                    <a href="<?php echo $options['intro_another_button_url']; ?>">
                    <?php
                        echo $options['intro_another_button'];
                    ?>
                    </a>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>

      <section id="features" class="section my-services" data-section="section2">
        <div class="container">
          <div class="section-heading">
            <h2>
                <?php
                    echo $options['features_section_title'];
                ?>
            </h2>
            <div class="line-dec"></div>
            <span>
                <?php
                    echo $options['features_section_description'];
                ?>
            </span>
          </div>
          <div class="row">
            <?php
                $features  = new WP_Query( array(
                    'post_type'     => 'features',
                    'post_per_page' => 4,
                    'order'         => 'ASC'
                ) );
                while( $features->have_posts() ):
                    $features->the_post();
                ?>
                    <div class="col-md-6">
                        <div class="service-item">
                            <!-- <i class="<?php echo get_post_meta( $post->ID, 'icon_class', true ) ?>"></i> -->
                            <div class="features_image">
                            <?php
                                the_post_thumbnail( 'large' );
                            ?>
                            </div>
                            <h4>
                                <?php
                                    the_title();
                                ?>
                            </h4>
                            <p>
                                <?php
                                    echo wp_trim_words( get_the_content(), 20 )
                                ?>
                            </p>
                            <a href="<?php echo get_permalink(); ?>">See More</a>
                        </div>
                    </div>
                <?php
                endwhile;
            ?>
            
          </div>
        </div>
      </section>

      <section id="gallery" class="section my-work" data-section="section3">
        <div class="container">
          <div class="section-heading">
            <h2>
              <?php
                echo $options['gallery_title'];
              ?>
            </h2>
            <div class="line-dec"></div>
            <span>
                <?php
                    echo $options['gallery_description'];
                ?>
            </span>
          </div>
          <div class="row">
            <div class="isotope-wrapper">
              <form class="isotope-toolbar">
                <label>
                    <input type="radio" data-type="*" checked="" name="isotope-filter" />
                  <span>all</span>
                </label>
                <?php
                    $terms = get_terms( 'gellary_taxonomy' ); 
                    foreach( $terms as $term ):
                ?>
                    <label>
                        <input type="radio" data-type="<?php echo $term->slug; ?>" name="isotope-filter" />
                        <span>
                            <?php
                                echo $term->name;
                            ?>
                        </span>
                    </label>
                <?php
                    endforeach;
                ?>
              </form>
              <div class="isotope-box">
                <?php
                    $gallery = new WP_Query( array(
                        'post_type'     => 'gellary',
                        'post_per_page' => 6,
                        'order'         => 'ASC',
                    ) );
                    while( $gallery->have_posts() ):
                        $gallery->the_post();

                        $termSlug = '';
                        $termsArray = get_the_terms( $post->ID, 'gellary_taxonomy' );
                        foreach( $termsArray as $terms ){
                            $termSlug = $terms->slug;
                        }
                ?>
                    <div class="isotope-item" data-type="<?php echo $termSlug; ?>">
                    <figure class="snip1321">
                        <img src="<?php the_post_thumbnail_url();?>" />
                        <figcaption>
                        <a href="<?php the_post_thumbnail_url();?>"
                            data-lightbox="image-1"
                            data-title="Caption"><i class="fa fa-search"></i></a>
                        <h4>
                            <?php
                                the_title();
                            ?>
                        </h4>
                        <span>
                            <?php
                                the_content();
                            ?>
                        </span>
                        </figcaption>
                    </figure>
                    </div>
                <?php
                    endwhile;
                ?>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php
        get_template_part( '/template-parts/contact' );
      ?>
    </div>
    <?php
        get_footer();
    ?>