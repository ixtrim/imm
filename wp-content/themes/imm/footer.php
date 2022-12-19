		<footer id="footer">
			<?php

        if ( get_field('newsletter_module', 'options') ) {
          get_template_part( 'template-parts/footer/newsletter' );
        }
				
				get_template_part( 'template-parts/footer/top' );
				get_template_part( 'template-parts/footer/copyright' );
			
			?>
		</footer>

		<div id="preloader"></div>
		<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
			<i class="bi bi-arrow-up-short"></i>
		</a>

		<?php

			wp_footer();

		?>
	</body>
</html>