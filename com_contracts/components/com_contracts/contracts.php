<?php
defined('KOOWA') or die;

ini_set('display_errors',1); 
error_reporting(E_ALL);

include 'mapping.php';
echo KService::get('com://site/contracts.dispatcher')->dispatch();