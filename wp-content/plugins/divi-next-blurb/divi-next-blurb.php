<?php
/*
Plugin Name: Divi Next Blurb
Plugin URI:  www.divinext.com
Description: Create Next Label Blurb Design
Version:     1.3.7
Author:      Divi Next
Author URI:  www.divinext.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: dnxtblrb-divi-next-blurb
Domain Path: /languages

Divi Next Blurb is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Divi Next Blurb is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Divi Next Blurb. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
 */

if (!function_exists('dnxtblrb_initialize_extension')):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
    function dnxtblrb_initialize_extension() {
        require_once plugin_dir_path(__FILE__) . 'includes/DiviNextBlurb.php';
    }
    add_action('divi_extensions_init', 'dnxtblrb_initialize_extension');

endif;
