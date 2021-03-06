<?php
/*
Plugin Name: Advanced Custom Fields: External Media Field
Description: Add YouTube, Vimeo, Soundcloud or external images as embedded assets via ACF.
Version: 0.0.1
Author: Moritz Jacobs
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


class acf_field_external_media_plugin
{

	private $plugin_slug = "acf-external-media";
	
	/*
	*  Construct
	*
	*  @description:
	*  @since: 3.6
	*  @created: 1/04/13
	*/

	function __construct()
	{
		// version 4+
		add_action('acf/register_fields', array($this, 'register_fields'));
	}


	/*
	*  register_fields
	*
	*  @description:
	*  @since: 3.6
	*  @created: 1/04/13
	*/

	function register_fields()
	{
		include_once('external-media.php');
	}

}

new acf_field_external_media_plugin();

?>
