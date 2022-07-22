<?php
/**
 * define shorthand directory separator constant
 */
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

global $arrPhysicalPath, $arrVirtualPath;

$arrPhysicalPath 	= array();
$arrVirtualPath 	= array();


if (!defined('BASE_DIR')) {
    define('BASE_DIR', dirname(__FILE__) . DS);
}
/**
 * Define basic folders paths
 */
$arrPhysicalPath['Base']			= dirname(__FILE__) . DS;
//$arrVirtualPath['Base']			    = dirname(__FILE__). '/';
$arrVirtualPath['Base']			    = 'http://'.$_SERVER['HTTP_HOST'];
//$arrVirtualPath['Base']			    = '';

$arrPhysicalPath['DBAccess'] 	    = $arrPhysicalPath['Base']. 'db_access' . DS;

$arrPhysicalPath['Libs'] 		    = $arrPhysicalPath['Base']. 'libs' . DS;
$arrVirtualPath['Libs'] 			= $arrVirtualPath['Base']. 'libs' . '/';

$arrPhysicalPath['UploadBase'] 	    = $arrPhysicalPath['Base']. 'upload' . DS;
$arrVirtualPath['UploadBase'] 	    = $arrVirtualPath['Base']. '/upload' . '/';


/**
 * Load basic files
 */

include_once $arrPhysicalPath['Base']. 'includes/connect.php';
include_once($arrPhysicalPath['Base']. 'AjaxRequest.php');


require_once($arrPhysicalPath['DBAccess']. '/StateCity.php');
require_once($arrPhysicalPath['DBAccess']. '/Student.php');

# Define required paths
$arrPhysicalPath['UserBase'] 	= $arrPhysicalPath['Base']. 'front' . DS;
$arrVirtualPath['UserBase'] 	= $arrVirtualPath['Base']. '/front' . '/';


# Define template paths
$arrPhysicalPath['TemplateBase']		= $arrPhysicalPath['UserBase']. 'templates' . DS;
$arrVirtualPath['TemplateBase'] 		= $arrVirtualPath['UserBase']. 'templates' . '/';

$arrVirtualPath['TemplateImages'] 	= $arrVirtualPath['TemplateBase']. 'images' . '/';
$arrVirtualPath['TemplateCss'] 		= $arrVirtualPath['TemplateBase']. 'css' . '/';
$arrVirtualPath['TemplateJs'] 		= $arrVirtualPath['TemplateBase']. 'js' . '/';

//echo "<pre>";print_r($arrPhysicalPath);die;
$css_file = $arrVirtualPath['TemplateCss'] .'common.css';
$js_file = $arrVirtualPath['TemplateJs'] .'common.js';
//echo "<pre>";print_r($css_file);die;
include_once $arrPhysicalPath['UserBase']. 'Front.php'; 

//echo $css_file;die;
?>
