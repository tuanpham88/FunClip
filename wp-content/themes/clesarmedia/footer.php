        <footer>
            <div class="footer">
                <div class="footercopyright">
                    <span>
					<?php if( get_theme_mod( 'copyright_textbox' ) == '') { ?>
                        <a href="<?php echo esc_url( __( 'http://www.eightpixeldesign.com/', 'clesarmedia' ) ); ?>" rel="nofollow"><?php printf(__( 'ClesarMedia WordPress Theme by EightPixelDesign', 'clesarmedia' )); ?></a>
                    <?php } else { echo get_theme_mod( 'copyright_textbox' ); } ?>
                    </span>
                </div>
                <div class="section-social">
                        <?php // Sanitization is done to clean user input before saving it to database
                            $rss_clesar = get_theme_mod( 'clesarmedia_rss' , ''  );
                            $facebook_clesar = get_theme_mod( 'clesarmedia_facebook' , ''  );
                            $twitter_clesar = get_theme_mod( 'clesarmedia_twitter' , ''  );
                            $instagram_clesar = get_theme_mod( 'clesarmedia_instagram' , ''  );
                            $behance_clesar = get_theme_mod( 'clesarmedia_behance' , ''  );
                            $youtube_clesar = get_theme_mod( 'clesarmedia_youtube' , ''  );
                            $dribbble_clesar = get_theme_mod( 'clesarmedia_dribbble' , ''  );
                            $pinterest_clesar = get_theme_mod( 'clesarmedia_pinterest' , ''  );
                        ?>
                    <span>
                    <?php if ($rss_clesar !== '') { ?><a href="<?php echo esc_url($rss_clesar); ?>"><i class="fa fa-rss"></i></a><?php } ?>
                    <?php if ($facebook_clesar !== '') { ?><a href="<?php echo esc_url($facebook_clesar); ?>"><i class="fa fa-facebook"></i></a><?php } ?>
                    <?php if ($twitter_clesar !== '') { ?><a href="<?php echo esc_url($twitter_clesar); ?>"><i class="fa fa-twitter"></i></a><?php } ?>
                    <?php if ($pinterest_clesar !== '') { ?><a href="<?php echo esc_url($pinterest_clesar); ?>"><i class="fa fa-pinterest"></i></a><?php } ?>
                    <?php if ($dribbble_clesar !== '') { ?><a href="<?php echo esc_url($dribbble_clesar); ?>"><i class="fa fa-dribbble"></i></a><?php } ?>
                    <?php if ($youtube_clesar !== '') { ?><a href="<?php echo esc_url($youtube_clesar); ?>"><i class="fa fa-youtube"></i></a><?php } ?>
                    <?php if ($behance_clesar !== '') { ?><a href="<?php echo esc_url($behance_clesar); ?>"><i class="fa fa-behance"></i></a><?php } ?>
                    <?php if ($instagram_clesar !== '') { ?><a href="<?php echo esc_url($instagram_clesar); ?>"><i class="fa fa-instagram"></i></a><?php } ?>
                    </span>
                </div>
            </div>
        </footer>
    </div><!-- .container_footer -->
<a href="#" class="scrollToTop"><i class="scrolltotoppicon"></i></a>
<?php wp_footer(); ?>
</body>
</html>