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
		/**
		 * Typical view method for MVC based architecture
		 *
		 * This function is provide as a default implementation, in most cases
		 * you will need to override it in your own controllers.
		 *
		 * @param   boolean  $cachable   If true, the view output will be cached
		 * @param   array    $urlparams  An array of safe URL parameters and their variable types, for valid values see {@link \JFilterInput::clean()}.
		 *
		 * @return  \JControllerLegacy  A \JControllerLegacy object to support chaining.
		 *
		 * @since   3.0
		 */
		public function display($cachable = false, $urlparams = array()) // 
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