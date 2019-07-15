<?php get_header(); ?>
    <section class="main">
        <div class="container">
            <div class="main-categories">
                <?php
                $categories = get_categories(array(
                    'hide_empty' => 0,
                ));
                ?>
                <ul class="ul-flex">
                    <?php
                    if ($categories) {
                        $count = count($categories); // count how many categories exist(using for mark (1) )

                        // url for category All, it should be http://site-name/blog
                        $urlForAll = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
                        if(preg_match('~page/\d~',$urlForAll)){
                            $urlForAll = preg_replace('~/page/\d~',"",$urlForAll);
                        }
                        foreach ($categories as $cat) {
                            $count--;

                            if(preg_match("~$cat->slug~","{$_GET['c']}")){
                                $class = "active";
                            }else{
                                $class = '';
                            }
                            // if category is ALL then setting to it it's "private" link
                            if (preg_match("~all~i", $cat->name)) {
                               ?>

                                <li class="<?php echo (isset($_GET['c'])) ?  '' : 'active'; ?>">
                                    <a href="<?=$urlForAll?>"><?=$cat->name?></a>
                                </li>

                                <?php
                                if ($count) { // mark (1) - display slash (/) except last one
                                    echo "<li>/</li>";
                                }
                                continue;
                            }
                            echo "<li class='$class'><a href=".$urlForAll."?c=" . $cat->slug . ">$cat->name</a></li>";


                            if ($count) { // mark (1) - display slash (/) except last one
                                echo "<li>/</li>";
                            }
                        }

                    }
                    ?>
                </ul>
            </div><!--main-categories-->

            <div class="blog-posts">
                <?php
                if ($_GET['c']) {
                    $category_name = $_GET['c'];
                } else {
                    $category_name = "";
                }
                $currentPage = get_query_var('paged');

                $query = new WP_Query(array(
                    'category_name' => $category_name,
                    'paged' => $currentPage
                ));

                if ($query->have_posts()):
                    while ($query->have_posts()):
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
                    wp_reset_postdata();
                else:
                    echo "<h2>For this category there are no posts yet</h2>";
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

        </div><!--container-->
    </section><!--main-->

<?php get_footer(); ?>