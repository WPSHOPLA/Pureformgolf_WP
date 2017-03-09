<?php

// =============================================================================
// FOOTER.PHP
// -----------------------------------------------------------------------------
// The site footer. Consists of the top footer area for widgets and the bottom
// footer area for secondary information. Includes wp_footer() hook as well.
//
// Content is output based on which Stack has been selected in the Customizer.
// To view and/or edit the markup of your Stack's index, first go to "views"
// inside the "framework" subdirectory. Once inside, find your Stack's folder
// and look for a file called "wp-footer.php," where you'll be able to find the
// appropriate output.
// =============================================================================

?>

<script>
jQuery(document).ready(function() {
	_kmq.push(['trackSubmit', 'gform_1', 'Sign Up Form Submitted']);
	jQuery("#gform_1").on("submit", function() {
		var email = jQuery("#email").val();
		 _kmq.push(['identify', email]);
		
	});
});
</script>

<?php x_get_view( x_get_stack(), 'wp', 'footer' ); ?>