<?php
/**
* @version   $Id$
* @package   Jumi
* @copyright (C) 2008 - 2010 Martin Hajek, 2011 Edvard Ananyan
* @license   GNU/GPL v3 http://www.gnu.org/licenses/gpl.html
*/

defined('_JEXEC') or die('Restricted access');

require_once (JPATH_SITE.'/components/com_content/helpers/route.php');

class modJumiHelper {
    function getCodeWritten(&$params) { //returns code written or ""
        return trim($params->get( 'code_written' ));
    }

    function getStorageSource(&$params) { //returns filepathname or a record id or ""
        $storage=trim($params->get('source_code_storage'));
        if($storage!="") {
            if($id = substr(strchr($storage,"*"),1)) { //if record id return it
                return (int)$id;
            }
            else { // else return filepathname
                return $params->def('default_absolute_path',JPATH_ROOT).'/'.$storage;
            }
        }
        else {
            return "";
        }
    }

    function getCodeStored($source) { //returns code stored in the database or null.
        $database = &JFactory::getDBO();
        //$user      = &JFactory::getUser();
        //$database->setQuery("select custom_script from #__jumi where id = '{$source}' and access <= {$user->gid} and published = 1");
        $database->setQuery("select custom_script from #__jumi where id = $source");
        return $database->loadResult();
    }
}