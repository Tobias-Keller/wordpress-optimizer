<?php
declare(strict_types=1);
/*
 * This class removes wordpress feeds and the feed links from the html head
 */

namespace TK_WORDPRESS_OPTIMIZER;

class TK_WordPress_Feeds
{
    public function __construct()
    {
        add_action('do_feed', [$this, 'disableFeeds'], 1);
        add_action('do_feed_rdf', [$this, 'disableFeeds'], 1);
        add_action('do_feed_rss', [$this, 'disableFeeds'], 1);
        add_action('do_feed_rss2', [$this, 'disableFeeds'], 1);
        add_action('do_feed_atom', [$this, 'disableFeeds'], 1);
        add_action('do_feed_rss2_comments', [$this, 'disableFeeds'], 1);
        add_action('do_feed_atom_comments', [$this, 'removeFeedLinks'], 1);
        add_action('init', [$this, 'removeFeedLinks']);
    }

    public function disableFeeds()
    {
        wp_die('Diese Website stellt keine Feeds zur Verfügung.');
    }

    public function removeFeedLinks()
    {
        remove_action('wp_head', 'feed_links_extra', 3);
        remove_action('wp_head', 'feed_links', 2);
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'index_rel_link');
        remove_action('wp_head', 'parent_post_rel_link', 10, 0);
        remove_action('wp_head', 'start_post_rel_link', 10, 0);
        remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
    }
}
