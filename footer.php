	<footer class="footer">
		<div class="interactive-block">
		<form id="subscriptForm" class="subscriptForm" name="subscriptForm" method="post" action="<?php echo admin_url( 'admin-ajax.php?action=send_mail' ); ?>">
			<label class="email-label" > send me news
				<input id="subscriptEmail" class="subscriptEmail-input" name="subscriptEmail" type="email" placeholder="enter your email">
			</label>
			<button class="submit-button" type="submit"><p class="button-title">get insights</p></button>
		</form>
		<?php dynamic_sidebar('footer-widgets')?>
		</div>

		<div class="useless-info-block">
			<?php the_custom_logo() ?>
			<ul class="info">
				<li class="info-item">@2021 Q.Studio by Ilusha</li>
				<li class="info-item">All rights reserved</li>
				<li class="info-item">privacy</li>
				<li class="info-item">contact</li>
			</ul>
		</div>
	</footer>

    <?php wp_footer(  );?>

</body>

</html>