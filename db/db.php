<?php
session_start();
require 'libs/rb.php';

R::setup('mysql:
	host=localhost;
	dbname=travel',
	'root',
	'root');
 
if (!R::testConnection()) {
	exit ('No connection with database!');
}

?>