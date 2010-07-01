<?php

########################################################################
# Extension Manager/Repository config file for ext "rsextbasetools".
#
# Auto generated 02-06-2010 13:59
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Adapt PageModule Columns',
	'description' => 'stellt das Verhältnis der Spalten fest ein',
	'category' => 'RS WebSystems',
	'author' => 'Steffen Ritter',
	'author_email' => 'info@rs-websystems.de',
	'author_company' => 'RS WebSystems',
	'shy' => '',
	'dependencies' => 'cms',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'pagebrowse' => '1.1.0-',
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:18:{s:32:"Classes/Domain/Model/Address.php";s:4:"7f00";s:36:"Classes/Domain/Model/EntityGroup.php";s:4:"d16d";s:33:"Classes/Domain/Model/Language.php";s:4:"5e63";s:35:"Classes/Domain/Model/ListConfig.php";s:4:"961f";s:39:"Classes/Domain/Model/Static/Country.php";s:4:"a2d2";s:40:"Classes/Domain/Model/Static/Language.php";s:4:"1c02";s:38:"Classes/Domain/Model/Static/Region.php";s:4:"0ab0";s:51:"Classes/Domain/Repository/EntityGroupRepository.php";s:4:"7a9e";s:45:"Classes/Domain/Validator/AddressValidator.php";s:4:"5ae6";s:31:"Classes/Interface/Browsable.php";s:4:"90cd";s:38:"Classes/Validator/BooleanValidator.php";s:4:"ec29";s:37:"Classes/ViewHelpers/BrowsableLink.php";s:4:"b88c";s:47:"Classes/ViewHelpers/BrowsableLinkViewHelper.php";s:4:"235d";s:51:"Classes/ViewHelpers/FormPropertyErrorViewHelper.php";s:4:"a246";s:44:"Classes/ViewHelpers/JavaScriptViewHelper.php";s:4:"8b95";s:45:"Classes/ViewHelpers/PageBrowserViewHelper.php";s:4:"e9f4";s:39:"Classes/ViewHelpers/TitleViewHelper.php";s:4:"5445";s:34:"Configuration/TypoScript/setup.txt";s:4:"d41d";}',
);

?>