<footer class="main-footer">
    <div class="content-footer">
        <div class="bottom-menu">
<!--            <ul class="b-menu__list">-->
<!--                <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">Главная</a></li>-->
<!--                <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">Полезная информация</a>-->
<!--                </li>-->
<!--                <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">Последние акции</a></li>-->
<!--                <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">О сервисе</a></li>-->
<!--            </ul>-->
            <?php
            $args = array(
                'theme_location' => 'bottommenu',
                'container' => 'nav',
                'container_class' => 'main-navigation',
                'menu_class' => 'nav-list'
            );
            wp_nav_menu($args);
            ?>
        </div>
        <div class="copyright-wrap">
            <div class="copyright-text">Туристик<a href="#" class="copyright-text__link"> loftschool 2016</a></div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer() ?>
</body>
</html>