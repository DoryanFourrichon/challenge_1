<?php
if (!function_exists('dd')) {
    function dd($data)
    {
        ini_set("highlight.comment", "#969896; font-style: italic");
        ini_set("highlight.default", "#FFFFFF");
        ini_set("highlight.html", "#D16568");
        ini_set("highlight.keyword", "#7FA3BC; font-weight: bold");
        ini_set("highlight.string", "#F2C47E");
        $output = highlight_string("<?php\n\n" . var_export($data, true), true);
        echo "<div style=\"background-color: #1C1E21; padding: 1rem\">{$output}</div>";
        die();
    }
}

// Section
$configuration = pip_layout_configuration();
$css_vars      = acf_maybe_get( $configuration, 'css_vars' );

// Fields
$slider_images = get_sub_field( 'slider_image' );
// dd($slider_images);

// Configuration
$advanced_mode   = get_sub_field( 'advanced_mode' );
$container_width = get_sub_field( 'container_width' );

// Content width
$content_width = pip_get_responsive_class( $container_width, $advanced_mode );
?>
<section <?php echo acf_maybe_get( $configuration, 'section_id' ); ?>
    class="<?php echo acf_maybe_get( $configuration, 'section_class' ); ?>"
    style="<?php echo apply_filters( 'pip/layout/section_style', '', $configuration ); ?>"
    <?php echo apply_filters( 'pip/layout/section_attributes', '', $configuration ); ?>>

    <?php // To add dynamic markup at the beginning of this layout
    do_action( 'pip/layout/section_start', $configuration ); ?>

    <div class="container">
        <div class="mx-auto <?php echo $content_width; ?>">


            <?php
            if ( $slider_images ) :
                echo '<div class="splide">';
                    echo '<div class="splide__track">';
                        echo '<ul class="splide__list">';
                        foreach ($slider_images as $slider_image) {
                            // dd($slider_image);
                            $image = $slider_image['image']['url'];
                            // dd($image);
                            echo '<li class="splide__slide">'; ?>
                            <img src="<?php echo $image ?>">
                                
                        <?php echo '</li>';
                        }
                        echo '</ul></div></div>';

                

             endif; ?>

        </div>
    </div>

    <?php // To add dynamic markup at the end of this layout
    do_action( 'pip/layout/section_end', $configuration ); ?>

</section>
<?php
