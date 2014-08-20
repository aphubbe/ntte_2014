<?php
define('LOCALE', 'es_MX');
define('LANG', 'es');
$strFBLang = 'es_LA';

$strSiteAbstract = 'Powered by Grupo BT Brands & Travel';
$strEventDate = 'Mayo 2015'/*strftime('%B %Y')*/;
$strContactUsLink = '/' . LANG . '/contacto/';


$aHeaderMenuItems = array(
    array(
        'caption' => 'Agenda del Evento',
        'href' => '/' . LANG . '/agenda-del-evento/'
        ) 
);

$aMainMenuItems = array(
    array(
        'caption' => 'Inicio',
        'href' => '/' . LANG,
        "submenuitems" => array(
            array(
                'caption' => 'Inicio',
                'href' => '/' . LANG
                ),
            array(
                'caption' => 'Agenda',
                'href' => '/' . LANG . '/agenda-del-evento/'
                )
            )
        ),
    array(
        'caption' => 'Expositores',
        'href' => '/' . LANG . '/expositor/',
        "submenuitems" => array(
            array(
                'caption' => 'Perfil del Expositor',
                'href' => '/' . LANG . '/expositor/'
                ),
            array(
                'caption' => 'Oportunidades de Patrocinio',
                'href' => '/' . LANG . '/oportunidades-de-patrocinio/'
                ),
            array(
                'caption' => 'Regístrese Ahora',
                'href' => '/static/docs/NTTE-form2.pdf',
                'target' => '_blank'
                )
            )
        ),
    array(
        'caption' => 'Compradores',
        'href' => '/' . LANG . '/comprador/',
        "submenuitems" => array(
            array(
                'caption' => 'Perfil del Comprador',
                'href' => '/' . LANG . '/comprador/'
                ),
            array(
                'caption' => 'Programa de Comprador Invitado',
                'href' => '/' . LANG . '/programa-de-comprador-invidado/'
                ),
            array(
                'caption' => 'Solicite Registro Hoy',
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
                'caption' => 'Perfil del GSA',
                'href' => '/' . LANG . '/gsa/'
                ),
            array(
                'caption' => 'Solicite Registro Hoy',
                'href' => '/static/docs/NTTE-form1.pdf',
                'target' => '_blank'
                )
            )
        ),
    array(
        'caption' => 'Noticias & Prensa',
        'href' => '/' . LANG . '/comunicados-de-prensa/',
        "submenuitems" => array(
            array(
                'caption' => 'Comunicados de Prensa',
                'href' => '/' . LANG . '/comunicados-de-prensa/'
                ),
            array(
                'caption' => 'Galeria',
                'href' => '/' . LANG . '/galerias/'
                )
            )
        ),
    array(
        'caption' => 'Programa de Conferencias',
        'href' => '/' . LANG . '/agenda-del-evento/',
        "submenuitems" => array(
            array(
                'caption' => 'Agenda',
                'href' => '/' . LANG . '/agenda-del-evento/'
                ),
            array(
                'caption' => 'Oradores',
                'href' => '/' . LANG . '/oradores/'
                ),
            array(
                'caption' => 'Regístrese',
                'href' => '/static/docs/NTTE-form1.pdf',
                'target' => '_blank'
                )
            )
        ),
    array(
        'caption' => 'Viaje y Lugar',
        'href' => '/' . LANG . '/viaje/'
        )    
);

$aFooterMenuItems = array(
    array(
        'caption' => 'Enlaces Útiles',
        'href' => 'javascript:void(0);',
        "submenuitems" => array(
            array(
                'caption' => 'Asista como Comprador',
                'href' => '/' . LANG . '/comprador/'
                ),
            array(
                'caption' => 'Asista como GSA',
                'href' => '/' . LANG . '/gsa/'
                ),
            array(
                'caption' => 'Asista como Expositor',
                'href' => '/' . LANG . '/expositor/'
                ),
            array(
                'caption' => 'Oportunidades de Patrocinio',
                'href' => '/' . LANG . '/oportunidades-de-patrocinio/'
                )
            )
        ),
    array(
        'caption' => 'Redes Sociales',
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
        'caption' => 'Contáctenos',
        'href' => '/' . LANG . '/contacto/',
        "submenuitems" => array(
            array(
                'caption' => 'Email',
                'href' => $strContactUsLink
                ),
            /*array(
                'caption' => 'info@brandsviaje.com',
                'href' => 'mailto:info@brandsviaje.com'
                ),*/
            array(
                'caption' => '+1.305.740.3030',
                'href' => 'javascript:void(0);'
                )
            )
        ),
    array(
        'caption' => 'Acerca de',
        'href' => 'http://www.grupobt.net',
        'target' => '_blank',
        "submenuitems" => array(
            array(
                'caption' => 'Travelista',
                'href' => 'http://viajeistalab.com',
                'target' => '_blank'
                )
            )
        ) 
);

$nameErrVerbose = "Se requiere nombre";
$nameErrVerbose1 = "Solo se permiten letras y espacios";
$emailErrVerbose = "Se requiere Email";
$emailErrVerbose1 = "Formato de Email incorrecto";
$subjectErrVerbose = "Se require asunto";
$commentErrVerbose = "Se require un comentario";
$captchaErrVerbose = "Captcha incorrecto";

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
        'title' => 'Testimonial: Alfredo González, VP de Global Business Development',
        'abstract' => 'Brand USA, en su participación en #NEXT Travel Trade Exchange',
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
        'title' => 'Testimonial: Andrea Wolleter, Gerente General',
        'abstract' => 'Turismo Chile, en su participación en #NEXT Travel Trade Exchange',
        'thumb' => $strVideoThumbPath . 'andrea.jpg',
        'src' => $strVideoPath . 'Entrevista Andrea2.mp4'
        ),
    array(
        'title' => 'Testimonial: Denise Arencibia Directora, Latinoamérica',
        'abstract' => 'Visit Florida, en su participación en #NEXT Travel Trade Exchange',
        'thumb' => $strVideoThumbPath . 'denise.jpg',
        'src' => $strVideoPath . 'Entrevista Denise 2.mp4'
        ),
    array(
        'title' => 'Testimonial Lizzie Cole, Directora de Marketing y Desarrollo',
        'abstract' => 'Riviera Maya en su participación en #NEXT Travel Trade Exchange',
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