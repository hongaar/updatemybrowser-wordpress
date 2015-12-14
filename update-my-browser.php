<?php
/**
 * @package Update_My_Browser
 * @version 1.0.0
 */
/*
Plugin Name:    Update my Browser
Plugin URI:     http://wordpress.org/plugins/update-my-browser/
Description:    Include the Update my Browser (https://updatemybrowser.org) widget on your site. This widget detects the current browser version of your visitors, checks if it is up to date and displays a subtle notification bar if it's outdated.
Author:         Joram van den Boezem
Version:        1.0.0
Author URI:     http://joram.vandenboezem.nl/
License:        GPL2
License URI:    https://www.gnu.org/licenses/gpl-2.0.html
*/

defined('ABSPATH') or die('No script kiddies please!');

// The initialization code for umb.js script
function update_my_browser_script()
{
    echo "<script>
(function(u) {
    var s = document.createElement('script'); s.async = true; s.src = u;
    var b = document.getElementsByTagName('script')[0]; b.parentNode.insertBefore(s, b);
})('//updatemybrowser.org/umb.js');
</script>
";
}

add_action('wp_print_footer_scripts', 'update_my_browser_script');
