<?php defined('_JEXEC') or die;

// Get params
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$config = JFactory::getConfig();
$templatePath = $this->baseurl.'/templates/'.$this->template;
$logo = $this->params->get('logo');
$zepto = $this->params->get('zepto');
$jquery = $this->params->get('jquery');
$sizzle = $this->params->get('sizzle');
$selectivizr = $this->params->get('selectivizr');
$modernizr = $this->params->get('modernizr');
$html5shiv = $this->params->get('html5shiv');
$html5shivprint = $this->params->get('html5shivprint');
$ie6warning = $this->params->get('ie6warning');
$IE7 = $this->params->get('IE7');
$IE8 = $this->params->get('IE8');
$lteIE7 = $this->params->get('lteIE7');
$lteIE8 = $this->params->get('lteIE8');
$icon57 = $this->params->get('icon57');
$icon72 = $this->params->get('icon72');
$icon114 = $this->params->get('icon114');
$icon144 = $this->params->get('icon144');
$templateparams	= $app->getTemplate(true)->params;
?>