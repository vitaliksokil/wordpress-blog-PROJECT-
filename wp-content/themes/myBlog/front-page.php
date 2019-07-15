<?php
get_header();
?>
        <section class="welcome">
            <div class="container">
                <div class="welcome-wrap">

                    <div class="logo">
                        <h1>
                            Welcome to the
                            <br>
                            <span>Vitalii Sokil</span>
                            <br>
                            blog!
                        </h1>
                    </div> <!--.logo-->

                    <div class="networks">
                        <h2>
                            Find me online
                        </h2>
                        <ul class="ul-flex">
                            <li><a href="https://vk.com"><img
                                            src="<?= get_template_directory_uri() ?>/assets/img/iconfinder_11_939748.svg"
                                            alt=""></a></li>
                            <li><a href="https://facebook.com"><img
                                            src="<?= get_template_directory_uri() ?>/assets/img/iconfinder_square-facebook_317727.svg"
                                            alt=""></a></li>
                            <li><a href="https://twitter.com"><img
                                            src="<?= get_template_directory_uri() ?>/assets/img/iconfinder_f-twitter_256_282459.svg"
                                            alt=""></a></li>
                            <li><a href="https://instagram.com"><img
                                            src="<?= get_template_directory_uri() ?>/assets/img/iconfinder_25_social_2609558.svg"
                                            alt=""></a></li>
                            <li><a href="https://web.telegram.org"><img
                                            src="<?= get_template_directory_uri() ?>/assets/img/iconfinder_telegram_386727.svg"
                                            alt=""></a></li>
                            <li><a href="https://youtu.be"><img
                                            src="<?= get_template_directory_uri() ?>/assets/img/iconfinder_youtube_317714.svg"
                                            alt=""></a></li>
                        </ul>
                    </div>

                </div><!--welcome-wrap-->
            </div><!--container-->
        </section>
        <section>

        </section>
        <section class="intro">
            <div class="container">
                <div class="intro-wrap">
                    <div class="logo">
                        <h1>
                            code<span>4</span>fun
                        </h1>
                    </div> <!--.logo-->
                    <?php if (have_posts()): while (have_posts()): the_post(); ?>

                    <div class="intro-text">


                        <?php
                        $content = get_the_content();
                        removeTags($content);

                        echo "<p>" . $content . "</p>";
                        ?>

                    </div>
                    <?php endwhile; endif; ?>
                </div>
            </div><!--container-->
        </section><!--intro-->
<?php
get_footer();