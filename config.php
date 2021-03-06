<?php

// This file contains variables with the locations of the data dirs
// and basic functions that every page can use

// mySQL connection information
$MYSQL_HOST = 'hostname';
$MYSQL_USER = 'username';
$MYSQL_PASSWORD = 'password';
$MYSQL_DATABASE = 'databasename';
$MYSQL_PREFIX = '';

// new in 3.50. first element is db handler, the second is the db driver used by the handler
// default is $MYSQL_HANDLER = array('mysql','mysql');
//$MYSQL_HANDLER = array('mysql','mysql');
//$MYSQL_HANDLER = array('pdo','mysql');
$MYSQL_HANDLER = array('mysql','');

// main nucleus directory
$DIR_NUCLEUS = '/your/path/to/nucleus/';

// media dir
$DIR_MEDIA = '/your/path/to/media/';

// extra skin files for imported skins
$DIR_SKINS = '/your/path/to/skins/';

// these dirs are normally subdirs of the nucleus dir, but
// you can redefine them if you wish
$DIR_PLUGINS = $DIR_NUCLEUS . 'plugins/';
$DIR_LANG = $DIR_NUCLEUS . 'language/';
$DIR_LIBS = $DIR_NUCLEUS . 'libs/';

if (!@file_exists($DIR_LIBS . 'globalfunctions.php')) {
	echo 'Configuration error, please run the <a href="install.php">install script</a> or modify config.php';
	exit;
}

// include libs
include($DIR_LIBS.'globalfunctions.php');

?>