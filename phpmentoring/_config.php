<?php
global $project;
$project = 'phpmentoring';

global $database;
$database = 'phpmentoring';

MySQLDatabase::set_connection_charset('utf8');
SSViewer::set_theme('phpmentoring');
if(class_exists('SiteTree')) SiteTree::enable_nested_urls();

foreach(glob(__DIR__."/_config_*.php") as $configFile)
	include_once($configFile);

require_once('conf/ConfigureFromEnv.php');

