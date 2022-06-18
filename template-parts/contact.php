<?php
    $options = get_option( 'my_framework' );
?>
<section id="contact" class="section contact-me" data-section="section4">
    <div class="container">
        <div class="section-heading">
        <h2>
            <?php
                echo $options['contact_title'];
            ?>
        </h2>
        <div class="line-dec"></div>
        <span>
            <?php
                echo $options['contact_description'];
            ?>
        </span>
        </div>
        <div class="row">
        <div class="right-content">
            <div class="container">
            <form id="contact" action="" method="post">
                <!-- <div class="row">
                    <div class="col-md-6">
                        <fieldset>
                            [text* your-name id:name class:form-control placeholder "Your Name"]
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset>
                            [email* your-email id:email class:form-control placeholder "Your Email"]
                        </fieldset>
                    </div>
                    <div class="col-md-12">
                        <fieldset>
                            [text* subject id:subject class:form-control placeholder "Subject"]
                        </fieldset>
                    </div>
                    <div class="col-md-12">
                        <fieldset>
                            [textarea* message 6x6 id:message class:form-control placeholder "Your Message"]
                        </fieldset>
                    </div>
                    <div class="col-md-12">
                        <fieldset>
                            <button type="submit" id="form-submit" class="button">Send Message</button>
                        </fieldset>
                    </div>
                </div> -->
                <?php
                    echo do_shortcode( '[contact-form-7 id="122" title="bluegoon"]' );
                ?>
            </form>
            </div>
        </div>
        </div>
    </div>
</section>