<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package myBlog
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>

<section class="comments">
    <div class="container">
        <div class="your-comment">

            <div class="user">
                <div class="user-pic">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/user1.png" alt="">
                </div>
                <div class="user-name">
                    <h4>user1</h4>
                </div>
            </div><!--user-->

            <div class="comment-form">
                <form action="">
                    <h3>Write your comment</h3>
                    <input type="text">
                    <button class="btn">Submit</button>
                </form>
            </div><!--comment-form-->
        </div><!--your-comment-->
    </div><!--container-->
</section><!--comments-->

<section class="comments-list">
    <div class="container">

        <?php
        if (have_comments()):
            ?>
            <ol>
                <?php
                wp_list_comments(array(
                    'walker' => null,
                    'max_depth' => '',
                    'style' => 'div',
                    'callback' => null,
                    'end-callback' => null,
                    'type' => 'all',
                    'reply_text' => 'Reply',
                    'page' => '',
                    'per_page' => '',
                    'avatar_size' => 32,
                    'reverse_top_level' => null,
                    'format'            => 'html5', // или xhtml, если HTML5 не поддерживается темой
                    'short_ping'        => false,    // С версии 3.6,
                    'echo'              => true,     // true или false
                )); ?>
            </ol>
            <?php
            if (!comments_open() && get_comments_number()):
                ?>

                <p><?php esc_html_e('Comments are closed.', 'myblog'); ?></p>

            <?php
            endif;
            ?>
        <?php
        endif;

        ?>
        <div class="comment-item">
            <div class="triangle"></div>
            <div class="user">
                <div class="user-pic">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/user1.png" alt="">
                </div>
                <div class="user-name">
                    <h4>user1</h4>
                </div>
            </div><!--user-->
            <div class="comment-text">
                <p>Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ipsum
                    neque, nesciunt quae repellendus suscipit tenetur veritatis! Amet quas, tenetur. consectetur
                    adipisicing elit. A alias, aliquam dolore dolorum eius illo illum incidunt iste, laborum minima
                    necessitatibus, perferendis perspiciatis qui saepe sequi tempora ullam unde vitae.</p>
            </div><!--comment-text-->
            <div class="comment-date">
                <p>14/05/19 12:46</p>
            </div><!--comment-date-->
        </div><!--comment-item-->
    </div><!--container-->

</section><!--comments-list-->

