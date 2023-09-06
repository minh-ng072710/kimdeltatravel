<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 *
 * @package Entrada
 */
?>
</div>
<footer id="footer">
    <div class="container footer-main">
        <!-- footer links -->
        <div class="row footer-holder">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_widget'))  ?>
        </div>
        <!-- social wrap -->
        <?php
        $count = 0;
        if ('' != get_theme_mod('footer_social_onoff', 'on')) :
            echo '<ul class="social-wrap">';
            for ($i = 0; $i < 10; $i++) {

                if ('' != get_theme_mod('footer_social_icon_' . $i)) {
                    echo '<li><a href="' . get_theme_mod('footer_social_url_' . $i) . '" target="_blank" ><span class="' . get_theme_mod('footer_social_icon_' . $i) . '"></span></a></li>';
                }
            }
            echo '</ul>';
        endif;
        ?>
    </div>
    <?php
    $bottom_footer_class = '';
    $bottom_footer = get_theme_mod('footer_bottom_onoff', 'yes');
    if (empty($bottom_footer)) {
        $bottom_footer_class = 'hide';
    }
    ?>
    <div class="footer-bottom <?php echo esc_attr($bottom_footer_class); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- copyright -->
                    <strong class="copyright"><i class="fa fa-copyright"></i> <span class="copyright_text">
                            <?php echo get_theme_mod("copyright_text", "Copyright 2021 - Entrada - An Adventure Theme - by Waituk"); ?>
                        </span></strong>
                </div>
                <div class="col-lg-6">
                    <ul class="payment-option">
                        <?php
                        $payment_logos = array("payment_logo_first", "payment_logo_second", "payment_logo_third", "payment_logo_fourth", "payment_logo_fifth", "payment_logo_sixth", "payment_logo_seventh", "payment_logo_eighth", "payment_logo_ninth", "payment_logo_tenth");
                        foreach ($payment_logos as $payment_logo) {
                            $payment_logo_var = get_theme_mod($payment_logo);
                            if (!empty($payment_logo_var)) {
                                $position_array = explode("_", $payment_logo);
                                $position = end($position_array);
                                $title = entrada_image_attributes_from_src(get_theme_mod($payment_logo), 'title', false);
                                echo '<li class="' . $position . '"><img src="' . get_theme_mod($payment_logo) . '" alt="' . $title . '"></li>';
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- scroll to top -->
<div class="scroll-holder text-center">
    <a href="javascript:" id="scroll-to-top"><i class="icon-arrow-down"></i></a>
</div>
<div id='fb-root'></div>
<?php wp_footer(); ?>
<?php
if ($_POST['title']) {
    ?>
    <script>
        (function($) {
            $(document).ready(function() {
                jQuery('#input_1_22').val('<?php echo $_POST['title']; ?>');
            });
        })(jQuery);

    </script>
<?php } ?>
    <?php
if ($_POST['ghep-doan']) {
    ?>
    <script>
        (function($) {
            $(document).ready(function() {
                jQuery('#choice_1_21_0').val('<?php echo $_POST['ghep-doan']; ?>');
                jQuery('#label_1_21_0').text('<?php echo $_POST['ghep-doan']; ?>');
            });
        })(jQuery);

    </script>
<?php } ?>
    <?php
if ($_POST['rieng-tu']) {
    ?>
    <script>
        (function($) {
            $(document).ready(function() {
                jQuery('#choice_1_21_1').val('<?php echo $_POST['rieng-tu']; ?>');
                jQuery('#label_1_21_1').text('<?php echo $_POST['rieng-tu']; ?>');
            });
        })(jQuery);

    </script>
<?php } ?>
    <?php
if ($_POST['thongtin']) {
    ?>
    <script>
        (function($) {
            $(document).ready(function() {
                jQuery('#label_1_21_1').text('<?php echo $_POST['thongtin']; ?>');
            });
        })(jQuery);

    </script>
<?php } ?>
     <?php
if ($_POST['thoi-gian']||$_POST['phuong-tien']||$_POST['diem-xuat-phat']||$_POST['diem-den']) {
    ?>
    <script>
        (function($) {
            $(document).ready(function() {
                jQuery('#input_1_23').text('<?php echo $_POST['thoi-gian'].'\n'.$_POST['phuong-tien'].'\n'.$_POST['diem-xuat-phat'].'\n'.$_POST['diem-den'] ?>');
            });
        })(jQuery);

    </script>
<?php } ?>
</body>

</html>