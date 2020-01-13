<?php get_header();?>

    <div class="title">
        <h2>NEWS一覧</h2>
    </div>

    <main class="row_area">
        <div class="card_area">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class="card_block">
                <!-- リンクの取得 -->
                <a href="<?php the_permalink(); ?>">
                    <div class="card_no_boo">
                        <!-- サムネイルから画像を取得 -->
                        <?php the_post_thumbnail(
                            'medium',
                            [
                                'class' => 'card-img-top',
                                'alt' => 'blog image',
                            ]
                        ); ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <div class="card_box">
                                <p class="text-text"><?php the_time('Y.n.j'); ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; endif; ?>
        </div>

        <nav class="pagenav_wrap">
            <!-- ページネーションのプラグイン -->
            <?php wp_pagenavi(); ?>
        </nav>
        <?php //wp_reset_postdata(); ?>
    </main>

<?php get_footer(); ?>