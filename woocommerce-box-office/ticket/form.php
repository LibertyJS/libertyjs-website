<div class="ljs-ticket-edit__container">
	<form name="edit-ticket" action="" method="post" class="edit-ticket ljs-ticket-edit__container-left">
		<h1 class="product_title entry-title">Edit Ticket</h1>

		<?php $ticket_form->render(); ?>

		<div class="clear"></div>

		<p class="buttons">
			<input type="submit" class="button" value="<?php esc_html_e( 'Update', 'woocommerce-box-office' ); ?>" />

			<?php if ( $print_ticket_enabled ) : ?>
				<a href="<?php echo esc_url( $print_ticket_url ); ?>" target="_blank" class="button">
					<?php esc_html_e( 'Print ticket', 'woocommerce-box-office' ); ?>
				</a>
			<?php endif; ?>
		</p>

		<input type="hidden" name="action" value="update_ticket" />
		<?php wp_nonce_field( 'woocommerce-box-office_update_ticket' ); ?>
	</form>

	<div class="ljs-ticket-edit__container-right">
		<i
			class="fa fa-ticket"
			aria-hidden="true"></i>
		<div class="ljs-template-checkout__headline">
			<h1>TWO DAYS<br> GREAT WORKSHOPS<br> AWESOME SPEAKERS</h1>
		</div>
		<!-- <div class="ljs-template-checkout__speakers">
			<p>Keynote Speakers</p>
			<p>Pam Selle</p>
		</div> -->
		<div class="ljs-footer__divider"></div>
		<div class="ljs-template-checkout__info-location">
			NOVEMBER 1-2 2018 &middot; PHILADELPHIA, USA
		</div>
	</div>

	<?php do_action( 'woocommerce_box_office_after_edit_ticket_form', $ticket_id ); ?>

</div>
