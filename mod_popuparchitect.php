<?php
defined('_JEXEC') or die('Restricted access');

$formid = $params->get('formid');

if (!empty($formid)) {
	require JModuleHelper::getLayoutPath('mod_popuparchitect','default');
}