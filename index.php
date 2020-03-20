<?php get_header() ?>
    <!-- header_end-->
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">
                <h1 class="title-page">
                    <? if (is_tag()) {
                        single_term_title();
                    } elseif (is_search()) {
                        echo 'Результаты поиска для "<quote>' . $_GET['s'] . '</quote>"';
                    } else {
                        echo 'Последние новости и акции из мира туризма';
                    }
                    ?>
                </h1>
                <? if (have_posts()) : ?>
                <div class="posts-list">

                    <? while (have_posts()) : the_post() ?>
                        <div class="post-wrap">
                            <div class="post-thumbnail">
                                <? the_post_thumbnail('thumbnail') ?>
                            </div>
                            <div class="post-content">
                                <div class="post-content__post-info">
                                    <div class="post-date">
                                        <? the_time('d.m.Y') ?>
                                    </div>
                                </div>
                                <div class="post-content__post-text">
                                    <div class="post-title">
                                        <? the_title() ?>
                                    </div>
                                    <p>
                                        <? the_excerpt() ?>
                                    </p>
                                </div>
                                <div class="post-content__post-control">
                                    <a href="<? the_permalink() ?>" class="btn-read-post">Читать далее >></a>
                                </div>
                            </div>
                        </div>
                    <? endwhile; ?>
                </div>
                <div class="pagenavi-post-wrap">
                    <?php
                    echo paginate_links(
                        array(
                            'prev_next' => true,
                            'prev_text' => '<i class="icon icon-angle-double-left"></i>',
                            'next_text' => '<i class="icon icon-angle-double-right"></i>',
                        )
                    )
                    ?>
                </div>
            </div>
            <? else: ?>
                <p> Никаких записей не найдено</p>
            <? endif; ?>
            <!-- sidebar-->
            <? get_sidebar() ?>
        </div>
    </div>
<?php get_footer() ?>