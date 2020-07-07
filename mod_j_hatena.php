<?php
/**
 * J-Hatena Module Entry Point
 * 
 * @package    J-Hatena
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE
 */

// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$hatena_bookmark = modJ_HatenaHelper::getHatenaBookMark($params);
require JModuleHelper::getLayoutPath('mod_j_hatena');
