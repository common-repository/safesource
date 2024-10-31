<?php
/*
Plugin Name: SafeSource
Plugin URI: http://www.ace4space.com/safesource
Description: Prevent Content and Source theft. Removes 'Right Mouse Click' Option. Removes 'Image Save' Options. Removes ability to highlight text anywhere on page.
Version: 1.1
Author: ACE4SPACE
Author URI: http://www.ace4space.com
License: GPLv2
*/

/*  Copyright 2012  MATT LAKE  (email : matt@ace4space.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

		function SafeSource() { ?>
		<!-- SafeSource script by Matt Lake ACE4SPACE.com -->

		<!-- Disables IE Image Toolbar -->
        <meta http-equiv="imagetoolbar" content="no">

		<!-- Disables Right Mouse Button -->
		<script>
		document.oncontextmenu=new Function("return false")
		</script>

		<!-- Detects if page is trapped inside someone else's frame, and automatically breaks out of it!  -->
		<script>
		if (window!= top)
			top.location.href=location.href
		</script>

		<!-- Prevent Internet Explorer's Default Image Dragging Action -->
		<script type="text/javascript">
			document.ondragstart = function(){return false;};
        </script>

		<!-- Disables the default callout in most browsers shown when you touch and hold a touch target. -->
		<style type="text/css">
			* { -webkit-touch-callout: none; }
		</style>

		<!-- Allows selection of Textbox or Input boxes despite selection restrictions -->
		<script type="text/javascript">
			document.onselectstart=function(){
				if (event.srcElement.type != "text" && event.srcElement.type != "textarea" && event.srcElement.type != "password") {
					return false;}
				else {
					return true;}};
					if (window.sidebar) {
						document.onmousedown=function(e){
						var obj=e.target;
					if (obj.tagName.toUpperCase() == "INPUT" || obj.tagName.toUpperCase() == "TEXTAREA" || obj.tagName.toUpperCase() == "PASSWORD") {
						return true;	}
					else {
						return false;	}};
				}
        </script>

        <!-- End SafeSource script by Matt Lake ACE4SPACE.com -->
		<?php } add_action('wp_head',   'SafeSource'); ?>