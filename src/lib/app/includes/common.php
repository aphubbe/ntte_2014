<?php
define('SITE_FOLDER', dirname(__FILE__) . '/../../../');
define('BASE_PATH', SITE_FOLDER.'httpdocs/');
define('LIB_PATH', SITE_FOLDER.'lib/');
define('INCLUDES_PATH', LIB_PATH . 'app/includes/');
$strVideoPath = '/static/videos/';
$strVideoThumbPath = '/static/img/thumbs/videos/';
$strPhotoGalleryThumbPath = '/static/img/thumbs/galleries/';


$parts = explode("/", $_SERVER['REQUEST_URI']);
define('SITE', empty($parts[1]) ? 'en' : $parts[1]);
include dirname(__FILE__) . '/' . SITE . '/' . SITE . '.php';

setlocale(LC_ALL, LOCALE);
        
$aContactEmails = array(
    'luz.yalj@boletour.com'
);

$strRecaptchaPublicKey = '6Lf1svcSAAAAAKOnfuqPCuTnxSHMCQCTnMeoA3mJ';
$strRecaptchaPrivateKey = '6Lf1svcSAAAAAG906OlBFMgI_9-vNz36yJs-X0st';

$aHeaderLanguages = array(
    array(
        'caption' => 'Español',
        'href' => '/es/',
        'lang' => 'es'
        ),
   array(
        'caption' => 'English',
        'href' => '/en/',
        'lang' => 'en'
        ) 
);

