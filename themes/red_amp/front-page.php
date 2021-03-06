<?php

/**
 * The template for displaying archive pages.
 * Template Name: Front Page
 * @package RED_Starter_Theme
 */

get_header(); ?>


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php $banner_bg = esc_url(get_the_post_thumbnail_url()); ?>
        <div class="hero-banner">
            <div class='hero-banner-div' style="
            background: url(<?php echo $banner_bg; ?>);
            background-size: 100%;
            background-position: bottom;
            background-repeat: no-repeat;
            width: 100%;
            height: 800px;
            ">

            </div>
            <div class="front-page-content-container">
                <div class="button-arrow-container">
                    <button class="button-arrow" data-scrollto="#goto">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div id="goto" class="front-page-values">
                    <div>
                        <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/Community.png' ?>" alt="values-community">
                    </div>
                    <div>
                        <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/Collaboration.png' ?>" alt="values-collaboration">
                    </div>
                    <div>
                        <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/Mission_Driven.png' ?>" alt="values-mission-driven">
                    </div>
                </div>
                <div class="hr-line">
                    <hr>
                </div>
                <?php
                        esc_html(the_content()); // the content loads the gutenberg content, template tags 
                        ?>
                <a href="<?php echo esc_url(get_the_permalink(189)); ?>" class="button-book front-page-button-book book-tour-popup"> Book a Tour</a>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<!-- loop over workspaces here  -->
<?php
$args = array(
    'post_type' => 'workspace',
);

$the_query = new WP_Query($args);
?>
<div class="front-page-workspace">

    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a class="front-page-each-workspace" href="<?php echo esc_url(get_the_permalink()); ?>">
                <div>
                    <div class="front-page-workspace-thumbnail"><?php esc_html(the_post_thumbnail()); ?></div>
                    <div class="front-page-workspace-title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </a>
        <?php endwhile;
        else : ?> <p>Please add a workspace</p>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</div>
<!-- end of workspace loop -->

<!-- view workspace button -->
<div class="front-page-workspace-button" style="
text-align: center;">
    <button class="button-book" onclick="window.location.href ='<?php echo esc_url(get_home_url()); ?>/workspace';">
        View Workspaces
    </button>
</div>
<div class="front-page-amp-community-division-line-top">

</div>
<div class="front-page-amp-community">
    <div>
        <h2>
            The Amp Community
        </h2>
    </div>
    <div>
        <p>
            Our name, The Amp, is inspired by our location in the old BC Electric Building.
            An Ampere is a unit of electric current named after a French mathematician.
            ‘Ampeer’ is the name we give to the many teams and individuals who
            make The Amp their home for work in the heart of Vancouver.
        </p>
    </div>
    <div class="front-page-amp-community-logos">
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/Member_Logo01.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/Member_Logo02.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/Member_Logo03.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/Member_Logo04.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/Member_Logo05.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/Member_Logo06.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/Member_Logo07.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/Member_Logo08.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/Member_Logo09.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/Member_Logo10.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/Member_Logo11.png' ?>" alt="">
        </div>
        <div>
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/Member_Logo12.png' ?>" alt="">
        </div>
    </div>

</div>
<div class="front-page-button-arrow">
    <button class="button-arrow-amp-community"><i class="fas fa-chevron-down"></i></button>
</div>
<div class="front-page-amp-community-division-line">

</div>

<!-- A loop for custom field testimonial -->
<!-- TESTIMONIALS CAROUSEL  -->

<div class='item-active front-page-carousel'>
    <div class='row main-carousel'>
        <?php
        $fields = CFS()->get('testimonial');
        $i = 0;

        foreach ($fields as $field) : {
                ?>

                <?php
                        $image = $field['picture'];
                        $text = $field['testimonial_text'];
                        $name = $field['name'];
                        $company = $field['company_name'];
                        $array[$i] = array(
                            $image,
                            $text,
                            $name,
                            $company,
                        );
                        ?>
                <div class="carousel-cell">
                    <div class="carousel-content">
                        <div class="carousel-content-individual carousel-image">
                            <img src="<?php echo $image; ?>" alt="">
                        </div>
                        <div class="carousel-content-individual carousel-text">
                            <?php echo $text; ?>
                        </div>
                        <div class="carousel-content-individual carousel-name">
                            <?php echo $name; ?>
                        </div>
                        <div class="carousel-content-individual carousel-company">
                            <?php echo $company; ?>
                        </div>

                    </div> <!-- carousel-cell-content -->
                <?php $i++;
                    } ?>
                </div><!-- .carousel-cell-container -->

            <?php endforeach; ?>
    </div><!-- .row main-carousel -->
</div><!-- .item-active -->


<!-- TODO Begin of carousel testimonial mobile -->
<div class='item-active front-page-carousel-mobile'>

    <div class='row main-carousel'>
        <?php
        $fields = CFS()->get('testimonial');
        $i = 0;

        foreach ($fields as $field) : {
                ?>
                <?php
                        $image = $field['picture'];
                        $text = $field['testimonial_text'];
                        $name = $field['name'];
                        $company = $field['company_name'];
                        $array[$i] = array(
                            $image,
                            $text,
                            $name,
                            $company,
                        );
                        ?>
                <div class="carousel-cell">
                    <div class="carousel-content">
                        <div class="carousel-content-individual carousel-image">
                            <img src="<?php echo $image; ?>" alt="">
                        </div>
                        <div class="carousel-content-individual carousel-text">
                            <?php echo esc_html($text); ?>
                        </div>
                        <div class="carousel-content-individual carousel-name">
                            <?php echo esc_html($name); ?>
                        </div>
                        <div class="carousel-content-individual carousel-company">
                            <?php echo esc_html($company); ?>
                        </div>

                    </div> <!-- carousel-cell-content -->
                <?php $i++;
                    } ?>
                </div><!-- .carousel-cell-container -->

            <?php endforeach; ?>
    </div><!-- .row main-carousel -->

</div>
<!-- end of carousel testimonial mobile -->

<div class="front-page-workspace-button bottom-book-button-front-page" style="
text-align: center;">
    <a href="<?php echo esc_url(get_the_permalink(189)); ?>" class="button-book book-tour-popup"> Book a Tour</a>
</div>
<div class="mobile-back-to-top" data-scrollto="#back-to-top-beggining">
    <a href="#">Back to top</a>
</div>

<?php get_footer();
 