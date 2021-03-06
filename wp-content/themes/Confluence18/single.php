<?php
/**
 * The Template for displaying all single posts post type.
 *
 * @package larson
 */

get_header('two');

$customImg = get_post_meta($post->ID, '_brendan_posts_custom-photo', true);
$customImg2 = get_post_meta($post->ID, '_brendan_posts_custom-photo2', true);
$customImg3 = get_post_meta($post->ID, '_brendan_posts_custom-photo3', true);

?>

    <!-- ============ CONTENT START ============ -->
    <section id="rooms-content2">
    <article>
    <div class="fullwidthbanner-container" style="width:100%; height:50%;">
        <div class="row">
            <div class="col-xs-12" style="width: 100%; height:500px; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
                <?php
                $postThumbID = get_post_thumbnail_id( get_the_ID() );
                $image_attributes = wp_get_attachment_image_src( $postThumbID, 'full' );
                if ( $image_attributes ) : ?>
                    <img class="img-responsive" src="<?php echo $image_attributes[0]; ?>" width="100%" style="margin-top:-200px;	" />
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container" style="padding-top:60px;">
    <div class="row">
<?php while ( have_posts() ) : the_post(); ?>
    <div class="col-sm-12 text-center">
        <h1><?php echo the_title(); ?></h1>
        <hr>
    </div>
    </div>
    <div class="row">
        <div class="col-md-7"><?php print the_content(); ?></div>
        <div class="col-md-5">
    <img class="img-responsive" src="<?= $customImg; ?>" width="100%" style="" />
    <img class="img-responsive" src="<?= $customImg2; ?>" width="100%" style="" />
    <img class="img-responsive" src="<?= $customImg3; ?>" width="100%" style="" />

        </div>
    </div> <!-- End Container -->
    </div>
    </article>
    </section>
<?php endwhile; ?>
    <!-- ============ CONTENT END ============ -->

<?php get_footer(); ?>