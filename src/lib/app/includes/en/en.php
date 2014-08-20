<?php
define('LOCALE', 'en_US');
define('LANG', 'en');
$strFBLang = 'en_US'/*'es_LA'*/;

$strSiteAbstract = 'Powered by Grupo BT Brands & Travel';
$strEventDate = 'May 2015'/*strftime('%B %Y')*/;
$strContactUsLink = '/' . LANG . '/contact-us/';


$aHeaderMenuItems = array(
    array(
        'caption' => 'Event Schedule',
        'href' => '/' . LANG . '/event-schedule/'
        ) 
);

$aMainMenuItems = array(
    array(
        'caption' => 'Home',
        'href' => '/' . LANG,
        "submenuitems" => array(
            array(
                'caption' => 'Home',
                'href' => '/' . LANG
                ),
            array(
                'caption' => 'Event Schedule',
                'href' => '/' . LANG . '/event-schedule/'
                )
            )
        ),
    array(
        'caption' => 'Exhibitors',
        'href' => '/' . LANG . '/exhibitor/',
        "submenuitems" => array(
            array(
                'caption' => 'Exhibitor Profile',
                'href' => '/' . LANG . '/exhibitor/'
                ),
            array(
                'caption' => 'Sponsorship Opportunities',
                'href' => '/' . LANG . '/sponsorship-opportunities/'
                ),
            array(
                'caption' => 'Register Now',
                'href' => '/static/docs/NTTE-form2.pdf',
                'target' => '_blank'
                )
            )
        ),
    array(
        'caption' => 'Buyers',
        'href' => '/' . LANG . '/buyer/',
        "submenuitems" => array(
            array(
                'caption' => 'Buyer Profile',
                'href' => '/' . LANG . '/buyer/'
                ),
            array(
                'caption' => 'Hosted Buyer Program',
                'href' => '/' . LANG . '/hosted-buyer-program/'
                ),
            array(
                'caption' => 'Apply Today',
                'href' => '/static/docs/NTTE-form1.pdf',
                'target' => '_blank'
                )
            )
        ),
    array(
        'caption' => 'GSAs',
        'href' => '/' . LANG . '/gsa/',
        "submenuitems" => array(
            array(
                'caption' => 'GSA Profile',
                'href' => '/' . LANG . '/gsa/'
                ),
            array(
                'caption' => 'Apply Today',
                'href' => '/static/docs/NTTE-form1.pdf',
                'target' => '_blank'
                )
            )
        ),
    array(
        'caption' => 'News & Press',
        'href' => '/' . LANG . '/press-releases/',
        "submenuitems" => array(
            array(
                'caption' => 'Press Releases',
                'href' => '/' . LANG . '/press-releases/'
                ),
            array(
                'caption' => 'Media Gallery',
                'href' => '/' . LANG . '/media-gallery/'
                )
            )
        ),
    array(
        'caption' => 'Conference Program',
        'href' => '/' . LANG . '/event-schedule/',
        "submenuitems" => array(
            array(
                'caption' => 'Conference Schedule',
                'href' => '/' . LANG . '/event-schedule/'
                ),
            array(
                'caption' => 'Speakers',
                'href' => '/' . LANG . '/speakers/'
                ),
            array(
                'caption' => 'Register',
                'href' => '/static/docs/NTTE-form1.pdf',
                'target' => '_blank'
                )
            )
        ),
    array(
        'caption' => 'Travel & Venue',
        'href' => '/' . LANG . '/travel/'
        )    
);

$aFooterMenuItems = array(
    array(
        'caption' => 'Useful Links',
        'href' => 'javascript:void(0);',
        "submenuitems" => array(
            array(
                'caption' => 'Attend as a Buyer',
                'href' => '/' . LANG . '/buyer/'
                ),
            array(
                'caption' => 'Attend as a GSA',
                'href' => '/' . LANG . '/gsa/'
                ),
            array(
                'caption' => 'Attend as an Exhibitor',
                'href' => '/' . LANG . '/exhibitor/'
                ),
            array(
                'caption' => 'Sponsorship Opportunities',
                'href' => '/' . LANG . '/sponsorship-opportunities/'
                )
            )
        ),
    array(
        'caption' => 'Social Media',
        'href' => 'javascript:void(0);',
        "submenuitems" => array(
            array(
                'caption' => 'Facebook',
                'href' => 'https://www.facebook.com/NEXT.Travel.Trade.Exchange',
                'target' => '_blank'
                ),
            array(
                'caption' => 'Twitter',
                'href' => 'https://twitter.com/NexTTexchange',
                'target' => '_blank'
                )
            )
        ),
    array(
        'caption' => 'Contact Us',
        'href' => '/' . LANG . '/contact-us/',
        "submenuitems" => array(
            array(
                'caption' => 'E-Mail Us',
                'href' => $strContactUsLink
                ),
            /*array(
                'caption' => 'info@brandstravel.com',
                'href' => 'mailto:info@brandstravel.com'
                ),*/
            array(
                'caption' => '+1.305.740.3030',
                'href' => 'javascript:void(0);'
                )
            )
        ),
    array(
        'caption' => 'About Us',
        'href' => 'http://www.grupobt.net',
        'target' => '_blank',
        "submenuitems" => array(
            array(
                'caption' => 'Travelista',
                'href' => 'http://travelistalab.com',
                'target' => '_blank'
                )
            )
        ) 
);

$nameErrVerbose = "Name is required";
$nameErrVerbose1 = "Only letters and white space allowed";
$emailErrVerbose = "Email is required";
$emailErrVerbose1 = "Invalid email format";
$subjectErrVerbose = "Subject is required";
$commentErrVerbose = "Comment is required";
$captchaErrVerbose = "Captcha is incorrect";

$aPhotoGalleries = array(
    array(
        'title' => '2013 Day 1',
        'abstract' => '',
        'thumb' => $strPhotoGalleryThumbPath . '1/NTTE_2013-1_080_thumb.jpg',
        'fileprefix' => 'NTTE_2013-1_',
        'count' => 92
        ),
    array(
        'title' => '2013 Day 2',
        'abstract' => '',
        'thumb' => $strPhotoGalleryThumbPath . '2/NTTE_2013-2_013_thumb.jpg',
        'fileprefix' => 'NTTE_2013-2_',
        'count' => 63
        )
);

$aVideos = array(
    array(
        'title' => 'Correccion',
        'abstract' => '',
        'thumb' => $strVideoThumbPath . 'andrea.jpg',
        'src' => $strVideoPath . 'correccion_1.mp4'
        ),
    array(
        'title' => 'Testimonial: Alfredo González, VP of Global Business Development',
        'abstract' => 'Brand USA, on their participation in #NEXT Travel Trade Exchange (audio in Spanish)',
        'thumb' => $strVideoThumbPath . 'alfredo.jpg',
        'src' => $strVideoPath . 'Entrevista alfredo 2.mp4'
        ),
    array(
        'title' => 'Testimonial Eduardo',
        'abstract' => '',
        'thumb' => $strVideoThumbPath . 'eduardo.jpg',
        'src' => $strVideoPath . 'Entrevista eduardo 2.mp4'
        ),
    array(
        'title' => 'Testimonial: Andrea Wolleter, General Manager',
        'abstract' => 'Turismo Chile, on their participation in #NEXT Travel Trade Exchange (audio in Spanish)',
        'thumb' => $strVideoThumbPath . 'andrea.jpg',
        'src' => $strVideoPath . 'Entrevista Andrea2.mp4'
        ),
    array(
        'title' => 'Testimonial: Denise Arencibia Director, Latin America',
        'abstract' => 'Visit Florida, on their participation in #NEXT Travel Trade Exchange (audio in Spanish)',
        'thumb' => $strVideoThumbPath . 'denise.jpg',
        'src' => $strVideoPath . 'Entrevista Denise 2.mp4'
        ),
    array(
        'title' => 'Testimonial Lizzie Cole, Director of Development and Marketing',
        'abstract' => 'Riviera Maya on their participation in #NEXT Travel Trade Exchange (audio in Spanish)',
        'thumb' => $strVideoThumbPath . 'lizzie.jpg',
        'src' => $strVideoPath . 'Entrevista Lizzie 2.mp4'
        ),
    array(
        'title' => 'Extracorto',
        'abstract' => '',
        'thumb' => $strVideoThumbPath . 'extracorto.jpg',
        'src' => $strVideoPath . 'extracorto.mp4'
        )
);