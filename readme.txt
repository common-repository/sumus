=== autometa's SUMUS ===
Contributors: JorgeAmVF
Donate link: https://quaestio.org/
Tags: shortcode, automation, metadata, excerpt
Requires at least: 2.5.0
Tested up to: 4.9.2
Stable Tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

It reproduces publication excerpts in pages or posts simply via: `[sumus]`.
== Description ==

**autometa's SUMUS** is a simple plugin that uses the following shortcode:

* `[sumus]` = to reproduce the publication excerpt.

**autometa's SUMUS** is a standalone component of **[autometa](https://wordpress.org/plugins/autometa/)** shortcodes pack.

== Installation ==

1. Install it from *Dashboard*/*Plugins*/*Add Plugins* or download it to your plugin folder;
2. Activate it from *Dashboard*/*Plugins*/*Installed Plugins*;
3. Write the following shortcode in text fields: `[sumus]`.

== Frequently Asked Questions ==

= Plugin Features =

**[autometa](https://wordpress.org/plugins/autometa/)** reproduces metadata information automatically via shorcodes in general, **autometa's SUMUS** reproduces excerpt-related data in special.

= How To =

Just write the following shortcode inside a text field and between brackets as usual: `[sumus]`.

= CSS Style Selectors =

* `#sumus`    = `[sumus]` ID;
* `.autometa` = **autometa** class.

= PHP Functions Reference =

* [`add_shortcode()`](https://developer.wordpress.org/reference/functions/add_shortcode/)
* [`get_the_excerpt()`](https://developer.wordpress.org/reference/functions/get_the_excerpt/)
