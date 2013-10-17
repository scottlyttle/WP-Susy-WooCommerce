       </div><!-- role="main" -->

    </div> <!-- #page_wrap -->

    <footer id="main_footer">

            <nav id="footer_navigation" role="navigation">

                <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
                <small>&copy; <?php echo get_bloginfo('home'); ?></small>

            </nav>

    </footer>

    <?php wp_footer(); ?>

    <!--<script>
	    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	    g.src='//www.google-analytics.com/ga.js';
	    s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>-->

</body>
</html>