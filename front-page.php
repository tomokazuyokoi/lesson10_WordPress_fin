<?php get_header(); ?>

    <div class="title">
        <!-- <div class="row_area"> -->
            <ul class="slide_list">
            </ul>
            <ul class="dot">
            </ul>
        <!-- </div> -->
    </div>

    <main>
        <section class="update">
            <div class="row_area">
                <h2>NEWS</h2>

                <div class="card_area">
                    <?php
                    // WPループの設定
                    $args = [
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                    ];
                    $the_query = new WP_Query($args);

                    if( $the_query->have_posts() ): while( $the_query->have_posts() ): $the_query->the_post();
                    ?>
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
                    <?php wp_reset_postdata(); ?>
                </div>

                <button type="button" class="btn btn-outline-secondary btn_archive"><a href="<?php echo esc_url(home_url()); ?>/blogs">一覧を見る</a></button>
            </div>

        </section>

    </main>

    
<?php get_footer(); ?>
