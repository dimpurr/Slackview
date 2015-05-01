<div class="sidebar">

<?php dynamic_sidebar( 'sidebar' ); ?>

<footer class="footer" role="contentinfo">
<p>Theme <a href="http://blog.dimpurr.com/slackview">Slackview</a> by <a href="http://dimpurr.com">Dimpurr</a></p>
<p>Poundly powered by <a href="http://wordpress.org">WordPress</a></p>

<?php wp_footer(); ?>

<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.sticky.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>
</footer>

</div>