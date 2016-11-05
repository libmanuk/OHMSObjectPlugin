<?php

/**
 * OHMS Object Embed plugin.
 * @copyright Copyright 2016 Eric C. Weig 
 */

class OHMSObjectPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = array('public_head');
    protected $_filters = array('insertOHMSObject' => array('Display', 'Item', 'Item Type Metadata', 'OHMS Object'));

    public function hookPublicHead($args)
    {
        queue_css_file('ohmsobject'); 
    }

    public function insertOHMSObject($text, $args)
    {
        $theme = is_admin_theme() ? 'admin' : 'public';
        $format = metadata('item', array('Item Type Metadata', 'Interview Format'));
        
     if ($theme == 'admin') {
            return "<div class=\"ohms-item\"><p><a href=\"" . $text . "\" target=\"_blank\">" . $text . "</a></p></div>";
                } else {
            return "<div class=\"ohms-item-" . $format . "\"><p><iframe src=\"" . $text . "\" width=\"100%\" height=\"100%\" frameborder=\"0\" name=\"viewer\" scrolling=\"no\"></iframe></p></div>";
                }

    }

}
