<?php
/* The sticky header displayed at the top of the site.
 * Actually lives in the footer, but CSS brings it to the top.
 */
?>
	<aside class="super-header" role="banner">
		<div class="wrapper">
			<div class="lynda-logo wpdiy-item">
				<a href="http://lynda.com" title="Visit lynda.com" class="element-invisible">lynda.com</a>
			</div><!-- .lynda-logo -->
			<div class="super-heading wpdiy-item">

				<?php 
				echo get_theme_mod('wpdiy_title_textbox', 'WordPress DIY');
				?>
				
			</div>
			<nav class="menu wpdiy-item" aria-label="Main menu">
				<a class="info-trigger" href="#">
                    <i class="icon-info"></i>
                    <span class="visuallyhidden">
                    	Get more info about this site and the WordPress and Genesis DIY lynda.com course series.
                	</span>
				</a>
			</nav><!-- super-menu -->
		</div><!-- .wrapper -->
		<aside class="super-footer">
			<div class="disclaimer">
				<h3>Disclaimer</h3>
				<p>
					<?php 
					$wpdiy_disclaimer = 'is a fictitious brand created by lynda.com solely for the purpose of training. All products and people associated with the brand and this site are also fictitious. Any resemblance to real brands, products, or people is purely coincidental.';
					echo get_theme_mod('wpdiy_company_textbox', 'ACME');
					echo ' ' . get_theme_mod('wpdiy_disclaimer_textbox', $wpdiy_disclaimer );
					?>
				</p>
			</div><!-- .disclaimer -->
			<div class="WPDIY-info">
				<h3>About the WordPress &plus; Genesis DIY series</h3>
				<p>WordPress DIY is a collaborative lynda.com course series by authors Carrie Dils and Morten Rand-Hendriksen. This site is a live demo of the final site for one of the courses.</p>
				<div class="WPDIY-more">
					<a href="<?php echo get_theme_mod('wpdiy_url_textbox', 'http://wpdiy.net'); ?>">Learn More&hellip;</a>
				</div>
			</div><!-- .WPDIY-info -->
		</aside>
	</aside><!-- .super-header -->


