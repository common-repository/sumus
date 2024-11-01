<?php
/*
* Plugin Name: autometa's SUMUS
* Description: It reproduces publication excerpts in pages or posts simply via: [sumus].
* Version: 2.2
* Author: JorgeAmVF
* Author URI: https://profiles.wordpress.org/jorgeamvf/
* License: GPL2

autometa's SUMUS is developed by JorgeAmVF in order to improve the quality of Quaestio.org
and it is freely provided with the intent to help other developers to fulfill
their needs.

autometa's SUMUS is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

autometa's SUMUS is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with autometa's SUMUS. If not, see http://www.gnu.org/licenses/old-licenses/gpl-2.0.html.
*/

// [sumus] = publication excerpt
function autometa_publication_excerpt() {
	$am_sumus = '<span id="sumus" class="autometa">' . get_the_excerpt() . '</span>';
	return $am_sumus;
}
add_shortcode( "sumus", "autometa_publication_excerpt" );
?>
