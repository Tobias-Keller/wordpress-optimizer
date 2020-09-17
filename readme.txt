=== WordPress Optimizer ===
Tags: wordpress, performance, security
Requires at least: 5.5.0
Tested up to: 5.2
Requires PHP: 7.0
Stable tag: 1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Removes some basic WordPress Stuff that is in lot of cases not needed

== Description ==
WordPress creates a lot of Stuff to fitting everyone.  
This Plugin removes some things that is in lots of cases not needed.

Things that are disabled if the plugin is activated:
- WordPress User Rest API (leaked wordpress user with editing rights)
- kinds of RSS Feeds
- WP Head
    - Generator Meta
    - RSS Feed Links
    - WP Emojis
- Disables xmlrpc

Also the Plugins defines some kind of settings:
- sets post revisions to 10
- sets empty trash to 15
- sets auto save interval to 120
- disables the file editor
- set chmod file to 0644
- sets chmod dir to 0755
- disables the "confirm weak password" checkbox
- sets memory limit to 128M
- sets max memory for backend to 128M

all defined settings from this plugin can be overwritten by defining in the wp-config.php

== Changelog ==

= 1.2 =
* added readme
* removed dev dependencies