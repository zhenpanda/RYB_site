<?php

#Website Constent Var
define('SITE_NAME', 'RYB');

define('TITLE_MARKUP', '<div class="h1 ryb-purple color-title"><span class="ryb-red">紅</span><span class="ryb-blue">黃</span><span class="ryb-yellow">藍</span>美術學校</div>');
define('TITLE_MARKUP_EN', '<div class="h1 ryb-purple color-title"><span class="ryb-red">R.</span><span class="ryb-blue">Y.</span><span class="ryb-yellow">B.</span>ART</div>');

define('TITLE_MOBILE', '<div class="spacing-reset"><span class="h1 ryb-red">紅</span><span class="h1 ryb-blue">藍</span><span class="h1 ryb-yellow">黃</span><span class="h1 ryb-purple">美術學校</span>');
define('TITLE_MOBILE_EN', '<div class="spacing-reset"><span class="h1 ryb-red">R</span><span class="h1 ryb-blue">Y</span><span class="h1 ryb-yellow">B</span><span class="h1 ryb-purple"> ART</span>');

define('TITLE_REGISTRATION', '<div class="spacing-reset"><span class="h1 ryb-red">紅</span><span class="h1 ryb-blue">藍</span><span class="h1 ryb-yellow">黃</span><span class="h1 ryb-purple">美術學校</span><span class="h1 ryb-brown"> 报名信息</span>');
define('TITLE_REGISTRATION_EN', '<div class="spacing-reset"><span class="h1 ryb-red">R</span><span class="h1 ryb-blue">Y</span><span class="h1 ryb-yellow">B</span><span class="h1 ryb-purple"> ART</span><span class="h1 ryb-brown"> Registration Information</span>');


$language = 'zh-hans';
if (isset($_COOKIE['language'])){
	$language = $_COOKIE['language'];
};

if (isset($_GET['change_language'])){
	$language = language_change($language);
}

function language_change($language){
	$new_language = "";
	switch ($language) {
		case 'zh-hans':
			$new_language = 'en';
			break;
		case 'en':
			$new_language = 'zh-hans';
			break;
	}
	if (!empty($new_language)){
		setcookie('language', $new_language, time()+60*60*24*30);
		return $new_language;
	}
	return $language;
}
#$language = 'en';