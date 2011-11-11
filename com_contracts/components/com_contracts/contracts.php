<?php
defined('KOOWA') or die;

echo KService::get('com://site/contracts.dispatcher')->dispatch();