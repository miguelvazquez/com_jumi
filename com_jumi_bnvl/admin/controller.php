<?php
/**
 * @license GNU/GPL
 *
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

jimport( 'joomla.application.component.controller' );

/**
 * jumi Controller
 *
 * @package Joomla
 * @subpackage com_jumi
 */

if(JV == 'j2') {
	//j2 stuff here///////////////////////////////////////////////////////////////////////////////////////////////////////
	class JumiController extends JController {
		function display()
		{
			 
			addSub( 'Application Manager', 'showapplications');
		
			//Set the default view, just in case
			$view = JRequest::getCmd('view');
			if(empty($view)) {
				JRequest::setVar('view', 'showApplications');
			};
		
			parent::display();
		}// function
	};
}
else {
	//j3 stuff here///////////////////////////////////////////////////////////////////////////////////////////////////////
	class JumiController extends JControllerLegacy{
		function display()
		{
			 
			addSub( 'Application Manager', 'showapplications');
		
			//Set the default view, just in case
			$view = JRequest::getCmd('view');
			if(empty($view)) {
				JRequest::setVar('view', 'showApplications');
			};
		
			parent::display();
		}// function
	};
}
?>