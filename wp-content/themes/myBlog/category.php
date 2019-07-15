<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package myBlog
 */

get_header();
?>
<?php
the_archive_title('<h1 class="page-title">', '</h1>');
the_archive_description('<div class="archive-description">', '</div>');
?>
    <div class="page-category">
        <div class="container">
            <div class="blog-posts">

                <?php

                // taking url for knowing category name
                $str = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
                $re = '~/category/([a-zA-Z-]+)~';
                // finding category name in url
                preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);
                $category_name = $matches[0][1];
                $currentPage = get_query_var('paged');

                $query = new WP_Query(array(
                    'category_name' => $category_name,
                    'paged' => $currentPage
                ));

                if ($query->have_posts()) : ?>

                    <?php
                    /* Start the Loop */
                    while ($query->have_posts()) :
                        $query->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>" class="post">
                            <div class="thumbnail">
                                <?= get_the_post_thumbnail(get_the_ID(), 'full') ?>
                            </div><!--thumbnail-->
                            <div class="post-title">
                                <?php the_title(); ?>
                            </div><!--post-title-->
                        </a><!--post-->
                    <?php
                    endwhile;
                else :
                    get_template_part('template-parts/content', 'none');
                endif;
                ?>
            </div> <!--blog-posts-->
            <div class="pagination">
                <?php
                echo paginate_links(array(
                    'total' => $query->max_num_pages,
                    'prev_text' => "<",
                    'next_text' => ">",

                ));
                ?>
            </div><!--pagination-->
        </div>
    </div>


<?php
get_footer();
