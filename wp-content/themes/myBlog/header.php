<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrap">
    <header>
        <div class="container">
            <div class="header-wrap">
                <?php
                $custom_logo__url = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
                if ($custom_logo__url):
                    ?>
                    <div class="logo">
                        <img src="<?= $custom_logo__url[0] ?>" alt="code4fun">
                    </div> <!--.logo-->
                <?php
                else:?>
                    <div class="logo">
                        <h1>
                            <a href="/">code<span>4</span>fun</a>
                        </h1>
                    </div> <!--.logo-->
                <?php
                endif;
                ?>
                <nav>
                    <ul class="ul-flex">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'headerMenu',
                            'menu_id' => 'header-menu',
                            'menu_class' => 'ul-flex'
                        ));
                        get_search_form();
                        if (!is_user_logged_in()) :
                            wp_nav_menu(array(
                                'theme_location' => 'loginMenu',
                                'menu_id' => 'login-menu',
                                'menu_class' => 'ul-flex'

                            ));
                        else :

                            $currentUser = wp_get_current_user();

                            $menu_name = 'userMenu';
                            $locations = get_nav_menu_locations();
                            if ($locations && isset($locations[$menu_name])) {
                                $menu = wp_get_nav_menu_object($locations[$menu_name]); // получаем объект меню                            $userMenuItems = wp_nav_menu_items($userMenu);
                                $menu_items = wp_get_nav_menu_items($menu); // получаем элементы меню
                            }
                            $userLoginClass = '';
                            $userURL = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
                            if(preg_match('~user~i',$userURL) || preg_match('~account~i',$userURL)){
                                $userLoginClass = 'current-menu-item';
                            }
                            echo "<li class='$userLoginClass'><a href=" . $menu_items[0]->url .">" . $currentUser->user_login . "</a></li>";

                            echo "<div class='avatar'>" . get_avatar($currentUser->ID) . "</div>";

                            echo "
                            <div class='logout-wrap' id='logout-wrap'>
                                <a href='/logout' id='logout'>
                                     <i class='fas fa-door-closed'> </i >
                                </a >
                                <a href = '/logout' id = 'logoutHover' class='opacity-zero' >
                                     <i class='fas fa-door-open'></i>
                                </a>
                            </div>";
                        endif;
                        ?>
                    </ul>
                </nav>
            </div> <!--header-wrap-->
        </div> <!-- .container -->
    </header>


