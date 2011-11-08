<?php
defined('KOOWA') or die;

echo KService::get('com://admin/contracts.dispatcher')->dispatch();