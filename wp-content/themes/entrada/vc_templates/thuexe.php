<?php
add_action('vc_before_init', 'tintuc_shortcode_integrateWithVC');

function tintuc_shortcode_integrateWithVC() {
    vc_map(array(
        "name" => __("Thuê xe", "123website"),
        "base" => "tintuc_shortcode",
        "class" => "",
        "category" => __("123Website"),
        "params" => array(
            vc_map_add_css_animation(),
            array(
                'type' => 'css_editor',
                'heading' => __('CSS box', 'js_composer'),
                'param_name' => 'css',
                'group' => __('Design Options', 'js_composer'),
            ),
        )
    ));
}

add_shortcode('tintuc_shortcode', 'tintuc_shortcode_page_func');

function tintuc_shortcode_page_func($atts) { // New function parameter $content is added!
    extract(shortcode_atts(array(
        'css' => '',
        'css_animation' => '',
                    ), $atts));
    ob_start();


    $loops = new WP_Query(array(
        'post_type' => 'thue_xe',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => -1));
    ?>
    <div class="tintuc-session">
       
            <?php
            $a = 0;
            while ($loops->have_posts()) : $loops->the_post();
                global $post;
                ?> <div class="row">
                <div class="col-md-3 col-sm-4">
                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>

                </div>
                <div class="col-md-9 col-sm-8">
                    <h3 class="title-thuexe"> 
                        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                        
                          </h3>
                        <div class="content-tintuc">
                            <?php echo the_excerpt(); ?>
                        </div>

                        <div class="readmore"><i class="fa fa-arrow-right" aria-hidden="true"></i><a title="<?php the_title(); ?> "href="<?php the_permalink() ?>">Xem thêm</a>
                        </div>
                  
                </div>


  </div>
                <?php
            endwhile;
            wp_reset_query();
            ?>
      

    </div>   
    <?php
    return ob_get_clean();
}
