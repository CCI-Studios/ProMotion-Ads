<?php
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

$image_path = 'images/galleries/'. $params->get('image_path') .'/';
$images = JFolder::files($image_path);

$document = &JFactory::getDocument();
$document->addStyleSheet('/media/mod_slideshow/css/mod_slideshow.css');
$document->addScript('/media/mod_slideshow/js/mod_slideshow.js');

require(JModuleHelper::getLayoutPath('mod_slideshow'));