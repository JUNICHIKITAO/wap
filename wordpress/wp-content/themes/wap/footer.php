<div id="footer">
			<div id="footer_warap" class="clearfix">
				<div id="aboutme">
					<img src="<?php echo do_shortcode('[img_path]'); ?>/h1_about.jpg" />
					<p>
						WAP(Windows Appli Preview)はwindowsストアアプリに関するレビューサイトです。<br />
						無料アプリのレビューを中心に、不定期に投稿していきます。
					</p>
					<p>
						「ぜひこのアプリを紹介してほしい！」という開発者様からのお声掛けも随時募集しておりますので、
						お問い合わせフォームよりその旨のメールをお送りください。
					</p>
					<p>
						このサイトについての質問、内容の間違い等もお問い合わせフォームよりご連絡いただけると助かります。
					</p>
				</div>
				<div id="contact">
					<img src="<?php echo do_shortcode('[img_path]'); ?>/h1_contact.jpg" />
					<?php echo do_shortcode('[contact-form-7 id="7" title="コンタクトフォーム 1"]'); ?>
					
				</div><!-- /contact -->
			</div><!-- /footer_warap -->
			<div id="copyright"><small>© <?php bloginfo('name'); ?>2013</small></div>
		</div><!-- /footer -->
		<?php wp_footer(); ?>
	</body>
</html>