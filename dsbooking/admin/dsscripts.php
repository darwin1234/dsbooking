<?php

class DSCRIPTS{
	function dscript(){
		?>
		<script type="text/javascript">
			var pluginsbaseUrl = "<?php echo pluginsurl; ?>";
		</script>
		<?php 
		//wp_enqueue_script( 'dslist', pluginsurl . '/admin/js/lists.js' );
		//wp_enqueue_script( 'dsevents', pluginsurl . '/admin/js/events.js' );	
	}
	
}	