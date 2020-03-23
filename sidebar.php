<div class="sidebar">
    <? if ($categories = get_terms(array('taxonomy' => 'post_tag', 'hide_empty' => 0))): ?>
        <div class="sidebar__sidebar-item">
            <div class="sidebar-item__title">Теги</div>
            <div class="sidebar-item__content">
                <ul class="tags-list">
                    <? foreach ($categories as $category): ?>
                        <li class="tags-list__item">
                            <a href="<? echo get_term_link($category->term_id) ?>" class="tags-list__item__link">
                                <? echo $category->name ?>
                            </a>
                        </li>
                    <? endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="events">
            <?
                $args = array(
                    'theme_location' => 'aside',
                );
                wp_nav_menu($args);                
            ?>
            [ecs-list-events thumb='true']
        </div>
    <? endif; ?>

</div>