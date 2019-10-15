<?php

?>
<section class="section bg-bluelectricdark py-5">
    <div class="container">
        <div class="row variable-gutters">
            <div class="col">
                <div class="section-title mb-5">
                    <h3><?php _e("Schede didattiche", "design_scuole_italia"); ?></h3>
                </div>

                        <div class="owl-carousel carousel-theme carousel-double">
                            <?php
                            $args = array('post_type' => 'scheda_didattica',
                                'posts_per_page' => 9,
                            );
                            $posts = get_posts($args);
                            foreach ($posts as $post){ ?>
                                <div class="item">
                                    <?php get_template_part("template-parts/didattica/card"); ?>
                                </div>
                            <?php } ?>
                        </div><!-- /carousel-single -->
            </div><!-- /col -->
        </div><!-- /row -->

    </div><!-- /container -->
    <div class="pb-5 text-center mt-4">
        <a class="text-underline" href="<?php echo get_post_type_archive_link("scheda_didattica") ?>"><strong><?php _e("Vedi tutte le schede didattiche", "design_scuole_italia"); ?></strong></a>
    </div>
</section><!-- /section --><?php
