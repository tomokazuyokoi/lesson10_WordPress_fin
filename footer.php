<footer>
        <div class="footer_inner">
            <figure class="go_top" id="pageTop">
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/logo-footer.png" alt="トップへ">
            </figure>
        </div>
        <figure class="sns">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/common/img/twitter_icon.png" alt="twitter icon"></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/common/img/fb_icon.png" alt="facebook icon"></a>
        </figure>
        <small>&copy;copyright RCU DESIGN Inc. All Right Reserved</small>
    </footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/spMenu.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/pageTop.js"></script>

<?php
if( is_front_page() )
{
    echo '<script src="' . get_template_directory_uri() . '/js/top.js"></script>';
}
?>
<?php wp_footer(); ?>
</body>
</html>