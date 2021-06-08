	<footer class="footer">
		<form id="subscriptForm" class="subscriptForm" name="subscriptForm" method="post" action="<?php echo admin_url( 'admin-ajax.php?action=send_mail' ); ?>">
			<label class="email-label" > send me news
				<input id="subscriptEmail" class="subscriptEmail-input" name="subscriptEmail" type="email" placeholder="enter your email">
			</label>
			<button class="submit-button" type="submit"><p class="button-title">get insights</p></button>
		</form>
		<?php dynamic_sidebar('footer-widgets')?>
	</footer>

    <?php wp_footer(  );?>

</body>

</html>