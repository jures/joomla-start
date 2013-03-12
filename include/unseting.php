<?php defined('_JEXEC') or die;

$document = JFactory::getDocument();

// unsetting Default Joomla scripts
unset($this->_scripts[JURI::root(true).'/media/system/js/caption.js']);
unset($this->_scripts[JURI::root(true).'/media/system/js/core.js']);
unset($this->_scripts[JURI::root(true).'/media/system/js/mootools-core.js']);
unset($this->_scripts[JURI::root(true).'/media/system/js/mootools-more.js']);

// remove call to JTooltips
$document->_script = preg_replace('%window\.addEvent\(\'domready\',\s*function\(\)\s*{\s*\$\$\(\'.hasTip\'\).each\(function\(el\)\s*{\s*var\s*title\s*=\s*el.get\(\'title\'\);\s*if\s*\(title\)\s*{\s*var\s*parts\s*=\s*title.split\(\'::\',\s*2\);\s*el.store\(\'tip:title\',\s*parts\[0\]\);\s*el.store\(\'tip:text\',\s*parts\[1\]\);\s*}\s*}\);\s*var\s*JTooltips\s*=\s*new\s*Tips\(\$\$\(\'.hasTip\'\),\s*{\s*maxTitleChars:\s*50,\s*fixed:\s*false}\);\s*}\);', '', $document->_script);

// Metas
$doc->setMetaData( 'viewport', 'width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes' );
$doc->setMetaData( 'HandheldFriendly', 'true' );
$doc->setMetaData( 'apple-mobile-web-app-capable', 'yes' );

// adding stylesheets
$document->addStyleSheet('templates/'.$this->template.'/css/screen.css','text/css','screen handheld');
$document->addStyleSheet('templates/'.$this->template.'/css/enhanced.css','text/css','screen and (min-width: 40.5em)');

// adding apple document icons
if($icon57) {
	$doc->addCustomTag('<link rel="apple-touch-icon-precomposed" sizes="57x57" href="templates/'.$this->template.'/images/icons/apple-touch-icon-57x57-precomposed.png">');
}
if($icon72) {
	$doc->addCustomTag('<link rel="apple-touch-icon-precomposed" sizes="72x72" href="templates/'.$this->template.'/images/icons/apple-touch-icon-72x72-precomposed.png">');
}
if($icon114) {
	$doc->addCustomTag('<link rel="apple-touch-icon-precomposed" sizes="114x114" href="templates/'.$this->template.'/images/icons/apple-touch-icon-114x114-precomposed.png">');
}
if($icon144) {
	$doc->addCustomTag('<link rel="apple-touch-icon-precomposed" sizes="144x144" href="templates/'.$this->template.'/images/icons/apple-touch-icon-144x144-precomposed.png">');
}

// conditional statements for IE
if($IE7) {
$doc->addCustomTag('
<!--[if IE 7]>
	<link rel="stylesheet" href="templates/'.$this->template.'/css/ie7.css" />
<![endif]-->
');
}
if($IE8) {
$doc->addCustomTag('
<!--[if IE 8]>
	<link rel="stylesheet" href="templates/'.$this->template.'/css/ie8.css" />
<![endif]-->
');
}
if($lteIE7) {
$doc->addCustomTag('
<!--[if lte IE 7]>
	<link rel="stylesheet" href="templates/'.$this->template.'/css/lteIE7.css" />
<![endif]-->
');
}
if($lteIE8) {
$doc->addCustomTag('
<!--[if lte IE 8]>
	<link rel="stylesheet" href="templates/'.$this->template.'/css/lteIE8.css" />
<![endif]-->
');
}
if($ie6warning) {
$doc->addCustomTag('
<!--[if lte IE 6]>
  <script src="templates/'.$this->template.'/IE6/warning-ck.js"></script>
  <script src="templates/'.$this->template.'/IE6/localization/en_US-ck.js"></script>
  <script>
    window.onload=function(){
      ie6Warning(function() {
        var languageMap = {};
          //specifies a JSON hash table for localization
        if(window.IE6WarningLocalizations) {
          languageMap = window.IE6WarningLocalizations;
        }
        return {
          imgPath: "./", //specifies the path to the icons of each browser
          localizations:  languageMap
        };
      });
    };
  </script>
<![endif]-->
');
}

// add scripts that must be included in the head
if($modernizr) {
$document->addScript('templates/'.$this->template.'/js/modernizr.js');
}
?>