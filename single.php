<? get_header();
the_post(); ?>
    <!-- header_end-->
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">
                <div class="article-title title-page">
                    <? the_title() ?>
                </div>
                <div class="article-image">
                    <? the_post_thumbnail() ?>
                </div>
                <div class="article-info">
                    <div class="post-date">
                        <? the_time('d.m.Y') ?>
                    </div>
                </div>
                <div class="article-text">
                    <? the_content() ?>
                </div>
                <div class="article-pagination">
                    <? if ($prev = get_previous_post()): ?>
                        <div class="article-pagination__block pagination-prev-left">
                            <a href="<? echo get_permalink($prev->ID) ?>" class="article-pagination__link">
                                <i class="icon icon-angle-double-left"></i>
                                Предыдущая статья
                            </a>
                            <div class="wrap-pagination-preview pagination-prev-left">
                                <div class="preview-article__img">
                                    <? echo get_the_post_thumbnail($prev->ID, array(160, 108)) ?>
                                </div>
                                <div class="preview-article__content">
                                    <div class="preview-article__info">
                                        <a href="#" class="post-date">
                                            <? echo get_the_time('d.m.Y', $prev->ID) ?>
                                        </a>
                                    </div>
                                    <div class="preview-article__text">
                                        <? echo get_the_title($prev->ID) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? endif; ?>

                    <? if ($next = get_next_post()): ?>
                        <div class="article-pagination__block pagination-prev-right">
                            <a href="<? echo get_permalink($next->ID) ?>" class="article-pagination__link">
                                Сдедующая статья
                                <i class="icon icon-angle-double-right"></i>
                            </a>
                            <div class="wrap-pagination-preview pagination-prev-right">
                                <div class="preview-article__img">
                                    <? echo get_the_post_thumbnail($next->ID, array(160, 108)) ?>
                                </div>
                                <div class="preview-article__content">
                                    <div class="preview-article__info">
                                        <a href="#" class="post-date">
                                            <? echo get_the_time('d.m.Y', $next->ID) ?>
                                        </a>
                                    </div>
                                    <div class="preview-article__text">
                                        <? echo get_the_title($next->ID) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? endif; ?>
                </div>
            </div>
            <!-- sidebar-->
            <? get_sidebar() ?>
        </div>
    </div>
<? get_footer() ?>