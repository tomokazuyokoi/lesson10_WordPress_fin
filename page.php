<?php get_header(); ?>

<?php
if( have_posts() ): while( have_posts() ): the_post();

        // 固定ページに書いた内容を出力
        the_content();

endwhile; endif;
?>

<?php get_footer(); ?>
