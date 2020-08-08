<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer id="site-footer" role="contentinfo" class="header-footer-group">

				<div class="section-inner">

					<div class="footer-credits">

						<p class="footer-copyright">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/date */
								_x( 'Y', 'copyright date format', 'twentytwenty' )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- .footer-copyright -->

						<p class="powered-by-wordpress">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentytwenty' ) ); ?>">
								<?php _e( 'Powered by WordPress', 'twentytwenty' ); ?>
							</a>
						</p><!-- .powered-by-wordpress -->

					</div><!-- .footer-credits -->

					<a class="to-the-top" href="#site-header">
						<span class="to-the-top-long">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'To the top %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-long -->
						<span class="to-the-top-short">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-short -->
					</a><!-- .to-the-top -->

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

<form id="subscribeFormFooter" class="newsletter_form alignright">
						
							
							<span class="form-error valid-user-email"></span>
							<span class="form-error valid-all-form"></span>
                            
                            <label><?php _e("Subscribe to our newsletter", 'ForTraderMaster'); ?>:</label>

                            <input type="text" class="user-email" name="email" placeholder="<?php _e("Your email", 'ForTraderMaster'); ?>">
                            
                            <button type="submit" class= "wlsubmit"><?php _e("Subscribe", 'ForTraderMaster'); ?></button>
							
                        </form>

<style>
.wlerror
{
	border: 1px solid #ff9c9c;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#subscribeFormFooter .wlsubmit").click(function(){
			
			var wlemail = $('#subscribeFormFooter .user-email').val();
			var wldata = 'id=939507&emails='+wlemail+'&confirmation=force'+'&sender_email=tcelgrad@gmail.com';
			if (wlemail == '')
			{
				$('#subscribeFormFooter .user-email').addClass('wlerror');
				return false;
			}
			else
			{
				$('#subscribeFormFooter .user-email').removeClass('wlerror');
				
				$.ajax({
					type: 'POST',
					url: 'wp-content/themes/twentytwenty/wlmail.php',
					data: wldata,
					success: function(data){
						alert('Подписан!');
						$('#subscribeFormFooter .user-email').val('')
						return false;
					}
				});
			}
	return false;

		});	
	});
</script>



	</body>
</html>
