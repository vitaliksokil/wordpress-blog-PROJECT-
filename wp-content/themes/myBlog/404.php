<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package myBlog
 */

get_header();
?>

    <section class="error-404 not-found">
        <div class="container">
            <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'myblog'); ?></h1>


            <div class="page-content">
                <div class="page-search">
                <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'myblog'); ?></p>

                <?php
                get_search_form();?>
</div>
                <?php
                the_widget('WP_Widget_Recent_Posts');
                ?>

                <div class="widget widget_categories">
                    <h2 class="widget-title"><?php esc_html_e('Most Used Categories', 'myblog'); ?></h2>
                    <ul>
                        <?php
                        wp_list_categories(array(
                            'orderby' => 'count',
                            'order' => 'DESC',
                            'show_count' => 1,
                            'title_li' => '',
                            'number' => 10,
                        ));
                        ?>
                    </ul>
                </div><!-- .widget -->

                <?php
                /* translators: %1$s: smiley */
                $myblog_archive_content = '<p>' . sprintf(esc_html__('Try looking in the monthly archives. %1$s', 'myblog'), convert_smilies(':)')) . '</p>';
                the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$myblog_archive_content");

                the_widget('WP_Widget_Tag_Cloud');
                ?>

            </div><!-- .page-content -->
        </div>
    </section><!-- .error-404 -->

<?php
get_footer();
