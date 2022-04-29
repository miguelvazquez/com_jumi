<?php
/**

* @package   Jumi
* @copyright Copyright (c) 2008 - 2022 Bonaval Multimedia SL. All rights reserved.
* @license   GNU/GPL v3 http://www.gnu.org/licenses/gpl.html
*/

function JumiBuildRoute(&$query) {
    $temp = JFactory::getDBO();
    $db = $temp;
    $segments = array();

    if(isset($query['fileid'])) {
        $db->setQuery('select alias from #__jumi where id = '.$query['fileid']);
        $segments[] = $db->loadResult();
        unset($query['fileid']);
    }

    return $segments;
}

function JumiParseRoute($segments) {
    $temp = JFactory::getDBO();
    $db = $temp;
    $vars = array();

    $db->setQuery('select id from #__jumi where alias = "'.$segments[0].'"');
    $vars['fileid'] = $db->loadResult();

    return $vars;
}