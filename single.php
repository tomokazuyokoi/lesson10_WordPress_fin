<?php get_header();?>

    <div class="title">
        <h2><?php the_title(); ?></h2>
    </div>

    <main class="row_area">
        <figure class="main_image">
            <?php
            if(has_post_thumbnail()):
                the_post_thumbnail('full');
            else:
            ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/single/blog_img01.jpg" alt="メイン画像">
            <?php endif;?>
        </figure>
        <h3>全体な完成度とコメント</h3>
        <?php
        if(have_posts()): while(have_posts()): the_post();
            the_content();
        endwhile; endif;
        ?>
    </main>

<?php get_footer(); ?>
