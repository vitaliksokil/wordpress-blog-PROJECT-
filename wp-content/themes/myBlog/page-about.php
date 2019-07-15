<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package myBlog
 */

get_header();
?>
<?php
while (have_posts()) :


    the_post(); ?>
    <section class="about">
    <div class="container">
    <div class="about-title">
        <?php echo wp_get_attachment_image(172, 'full'); ?>
        <h2><?php the_title(); ?></h2>

    </div>
    <div class="about-text">

    <?php
    $content = get_the_content();
    removeTags($content);
    ?>
    <p><?php echo $content; ?></p>
<?php

endwhile; // End of the loop.
?>
    </div>
    <div class="about-title right">
        <?php echo wp_get_attachment_image(171, 'full'); ?>

        <h2>Hobby</h2>
    </div>
    <div class="about-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi aperiam architecto assumenda
            culpa cum cumque cupiditate deleniti deserunt distinctio dolor dolorem eos est, eveniet excepturi
            explicabo fugit impedit itaque iusto laborum laudantium minima minus non odit officia officiis
            perspiciatis porro quaerat quis quod reprehenderit sed sequi similique tempora velit veniam,
            voluptas. Dolorem exercitationem magni minus soluta. Aliquam assumenda atque blanditiis cumque
            delectus dolorum ducimus eos fugiat, laudantium nesciunt nostrum numquam odio odit pariatur quidem
            recusandae rem rerum similique, veniam vitae. Assumenda corporis delectus eveniet impedit iste
            laboriosam minima minus, necessitatibus nisi obcaecati quidem quisquam quo repudiandae sit soluta,
            sunt temporibus veniam. Accusantium animi aperiam debitis dicta in inventore, laboriosam, nemo non
            officia officiis quia quidem ratione sit? Ad, alias aliquam architecto beatae dignissimos dolore
            ducimus error eum fugiat modi natus necessitatibus nostrum odit quaerat quas repellendus tempore
            voluptates voluptatibus. Aliquam animi aspernatur atque corporis hic molestias nobis officiis sed
            suscipit. A ab ad, atque beatae consequuntur debitis ea eaque expedita facere illum ipsa labore
            laboriosam minima modi perspiciatis quam quidem ratione recusandae repellat sed sequi, sint
            suscipit. Accusantium animi, at atque aut autem commodi cumque dolor dolores eaque eos excepturi
            facilis iste natus odio optio praesentium repellat tempora vel.</p>
    </div>
    </div>
    </section>
<?php
get_footer();
