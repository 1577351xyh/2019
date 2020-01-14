<?php

class Daxiawp_Plugin_Theme {
	
	/**
	 * Hooks
	 */
	function __construct() {
//		add_action( 'admin_menu', array( $this, 'menu_page' ), 999 );
	}
	
	/**
	 * Add menu page
	 */

	
	/**
	 * Show menu content
	 */
	function menu_content() {
?>

<style type="text/css">
	ul.theme{width:980px;}
	ul.theme li{width:300px; float:left; border:1px solid #ccc; padding:5px; margin-right:10px; margin-bottom:15px;}
</style>

<script type="text/javascript" src="http://cbjs.baidu.com/js/m.js"></script>
<?php 
	$codes=array(
		'454435',
		'454451',
		'454453',
		'454454',
		'454455',
		'454457',
		'454459',
		'454461',
		'454462'
	);
?>


<?php		
	}
}

new Daxiawp_Plugin_Theme;