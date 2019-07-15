<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package myBlog
 */
get_header();
?>
    <section class="post-item">

<?php
while (have_posts()) :


    the_post();
    ?>

    <div class="post-picture">
        <?php the_post_thumbnail('full'); ?>

    </div><!--post-picture-->

          <!--        <div class="post-sidebar">-->
          <!---->
          <!--            <div class="post-sidebar-item">-->
          <!--                <h2>-->
          <!--                    Recommendation for you-->
          <!--                </h2>-->
          <!--                <ul>-->
          <!--                    <li><span><i class="fas fa-angle-right"></i></span><a href="#">How to do work faster</a></li>-->
          <!--                    <li><span><i class="fas fa-angle-right"></i></span><a href="#">Work with WordPress</a></li>-->
          <!--                    <li><span><i class="fas fa-angle-right"></i></span><a href="#">How to create cool registration form</a></li>-->
          <!--                    <li><span><i class="fas fa-angle-right"></i></span><a href="#">Introduction to Laravel</a></li>-->
          <!--                </ul>-->
          <!--            </div><--post-sidebar-item--->
          <!---->
          <!---->
          <!--            <div class="post-sidebar-item">-->
          <!--                <h2>-->
          <!--                    Top 3 posts-->
          <!--                </h2>-->
          <!--                <ul>-->
          <!--                    <li><span><i class="fas fa-angle-right"></i></span><a href="#">How to do work faster</a></li>-->
          <!--                    <li><span><i class="fas fa-angle-right"></i></span><a href="#">Work with WordPress</a></li>-->
          <!--                    <li><span><i class="fas fa-angle-right"></i></span><a href="#">How to create cool registration form</a></li>-->
          <!--                </ul>-->
          <!--            </div><--post-sidebar-item--->
          <!--        </div><--post-sidebar--->


    </section>
    <section class="post-main">
        <div class="container">
            <div class="post-main-title">
                <h3><?php the_title(); ?></h3>
            </div><!--post-main-title-->
            <div class="post-main-p">
                <?php the_content(); ?>

            </div><!--post-main-p-->

        </div><!--container-->
    </section><!--post-main-->

    <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
    ?>
<?php

endwhile; // End of the loop.
?>
<?php
get_footer();
