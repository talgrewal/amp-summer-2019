<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div>	

				<!-- #content -->
			<footer id="colophon" class="site-footer container" role="contentinfo">
				
				<!-- wrap-whole-footer-except .site-rights -->
				<div class="footer-content">

					<!-- CONTACT -->
					<div class="contact">
						<div class="site-footer-name-address">
							<p class="">The AMP</p>
							<p>425 Carrall Street<br>Vancouver,BC<br>V6B 6E3</p>
						</div> 
					
						<!-- <div class="contact-info">
							<a href="604-343-4590"><span> <img src="<?php echo get_template_directory_uri();?>/images/noun_Phone_1916521.svg" alt="phone-logo"/>604-343-4590</span></a>
							<a href="mailto:info@theamp.space"><span> <img src="<?php echo get_template_directory_uri();?>/images/noun_Email_2805535.svg" alt="email-logo"/>info@theamp.space</span></a>
						</div>  -->
					</div>
				
					<!-- .footer-newsletter-form -->
					<div class="footer-newsletter-form">
					<p>Sign up for our newsletter to learn more about our community!</p>
					
						<form action="/action_page.php">
					
							<input name="firstname" type="email" id="email-address" placeholder="Enter E-mail">
					
							<input type="submit" value="OK">
						</form>
					</div>

					<!-- .social-icon -->	
					<div class="social-icon">
							<span><img src="<?php echo get_template_directory_uri();?>/images/Facebook.svg" alt="logo"/></i></span>
							<span><img src="<?php echo get_template_directory_uri();?>/images/LinkedIn.svg" alt="logo"/></span>
							<span><img src="<?php echo get_template_directory_uri();?>/images/twitter.svg" alt="logo"/></span>
						<div class="site-rights">
							<p>© All rights reserved - The Amp Vancouver 2014</p>	
						</div>
					</div> 

					<!-- .site-rights -->
					<!-- <div class="site-rights">
						<p>© All rights reserved - The Amp Vancouver 2014</p>	
					</div> -->

				</div>
		</footer><!-- #colophon -->
		

		<?php wp_footer(); ?>

	</body>
</html>
