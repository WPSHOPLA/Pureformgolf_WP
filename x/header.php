<?php

// =============================================================================
// HEADER.PHP
// -----------------------------------------------------------------------------
// The site header. Variable output across different stacks.
//
// Content is output based on which Stack has been selected in the Customizer.
// To view and/or edit the markup of your Stack's index, first go to "views"
// inside the "framework" subdirectory. Once inside, find your Stack's folder
// and look for a file called "wp-header.php," where you'll be able to find the
// appropriate output.
// =============================================================================

?>


<script type="text/javascript">var _kmq = _kmq || [];
var _kmk = _kmk || '1d0171955cdde386dfd531090523892a9e80ea76';
function _kms(u){
  setTimeout(function(){
    var d = document, f = d.getElementsByTagName('script')[0],
    s = d.createElement('script');
    s.type = 'text/javascript'; s.async = true; s.src = u;
    f.parentNode.insertBefore(s, f);
  }, 1);
}
_kms('//i.kissmetrics.com/i.js');
_kms('//scripts.kissmetrics.com/' + _kmk + '.2.js');
</script>

<!-- AVANSER Call Tracking [start] -->
<script type="text/javascript">
	(function() {
		var av = document.createElement('script');
		av.type = 'text/javascript';
		av.id = 'AVANSERjs';
		av.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 
		'adriano-au.avanser.com/aa.js?t=' + (new Date().getTime());
		var h = document.getElementsByTagName('head')[0];
		h.parentNode.appendChild(av);
	})();
</script>
<!-- AVANSER Call Tracking [stop] -->


<?php x_get_view( x_get_stack(), 'wp', 'header' ); ?>