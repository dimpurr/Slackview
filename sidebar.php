<div class="sidebar">

<?php dynamic_sidebar( 'sidebar' ); ?>

<footer class="footer" role="contentinfo">
<p>Theme <a href="http://blog.dimpurr.com/slackview">Slackview</a> by <a href="http://dimpurr.com">Dimpurr</a></p>
<p>Proudly powered by <a href="http://wordpress.org">WordPress</a></p>
//<p><a href="http://www.miitbeian.gov.cn/">此处填写备案号</a></p>
<script src="<?php if ($_SERVER['HTTPS'] != "on") 
	{echo "http://lib.sinaapp.com/js/jquery/2.0/jquery.min.js";}
	else
	{echo "https://lib.sinaapp.com/js/jquery/2.0/jquery.min.js";} ?>">
</script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.sticky.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>
</footer>

</div>
<?php wp_footer(); ?>
