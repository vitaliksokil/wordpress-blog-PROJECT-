<?php get_header(); ?>
       <section class="search-section">
        <h1 class="content-heading">
            <?php printf( esc_html__( 'Search Results for: %s', 'myblog' ), '<span>' . get_search_query() . '</span>' );
            ?>
        </h1>

        <?php
        $currentPage = get_query_var('paged');

        $query = new WP_Query(array(
            'category_name' => '',
            'paged' => $currentPage,
            's' => $_GET['s'],
        ));


        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post(); ?>
                <h3 class="search-title">

                    <a href="<?php the_permalink(); ?>">
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail'); ?>

                        <h2><?php the_title(); ?></h2>

                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                    </a>
                </h3>
            <?php
            endwhile;
        else: ?>
            <p>
                <?php echo __('Sorry, no results found', 'whitesquare'); ?>
            </p>
        <?php endif;
        ?>


           <div class="pagination">
               <?php
               echo paginate_links(array(
                   'total' => $query->max_num_pages,
                   'prev_text' => "<",
                   'next_text' => ">",

               ));
               ?>
           </div><!--pagination-->


    </section>
<?php get_footer(); ?>