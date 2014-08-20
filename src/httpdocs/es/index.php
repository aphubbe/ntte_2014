<?php include dirname(__FILE__) . '/../../lib/app/includes/common.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo LANG ?>" id="ntte">
<head>
    <title>Home | Next Travel Trade Exchange.com</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <?php include INCLUDES_PATH . 'head.php'; ?>
</head>
<body>
    <?php include INCLUDES_PATH . '/header.php'; ?>
    <main>
        <div class="main_wrapper">
            <div class="main_inner">
                <div class="main_home">
                    <div class="left main_home-content">
                        <h1>#NEXT Travel Trade Exchange</h1>
                        <p>
                            Un evento de invitación exclusiva, que ofrece inigualables oportunidades de negocio y contacto para los profesionales del turismo de las Américas. Pensado para ejecutivos e innovadores de alto nivel que creen en una industria del turismo de vanguardia.
                        </p>
                        <p>
                            Los delegados son invitados a elegir hasta 40 citas personalizadas, a partir de una comunidad de hasta 200 compradores y expositores.
                        </p>
                        <p>
                            Nuestro exhaustivo programa de conferencias permite a los asistentes reunirse y aprender de algunos de los pensadores creativos más destacados del mundo. Ofrecemos un espacio clave para la innovación y la generación de negocios. 
                        </p>
                        <p>
                            <blockquote>"La oportunidad que tenemos como producto en este evento es única, pues nos permite ver clientes desde su calidad, no solamente su cantidad. Esa creo que es la magia que trae #NEXT Travel Trade Exchange. El futuro está en eventos de esta naturaleza" - Alfredo González, VP de Global Business Development, Brand USA."</blockquote>
                        </p>
                    </div>
                    <div class="left main_home-hubs-container">
                        <div class="left main_home-hub s">
                            <div class="left main_home-hub-inner">
                                <div class="initial"><a href="<?php echo '/' . LANG . '/oportunidades-de-patrocinio/'?>">P</a></div>
                                <div class="title"><a href="<?php echo '/' . LANG . '/oportunidades-de-patrocinio/'?>">Oportunidades de Patrocinio</div>
                            </div>
                        </div>
                        <div class="left main_home-hub b">
                            <div class="left main_home-hub-inner">
                                <div class="initial"><a href="<?php echo '/' . LANG . '/comprador/'?>">C</a></div>
                                <div class="title"><a href="<?php echo '/' . LANG . '/comprador/'?>">Asista como Comprador</a></div>                           
                            </div>
                        </div>
                        <div class="left main_home-hub g">
                            <div class="left main_home-hub-inner">
                                <div class="initial"><a href="<?php echo '/' . LANG . '/gsa/'?>">G</a></div>
                                <div class="title"><a href="<?php echo '/' . LANG . '/gsa/'?>">Asista como GSA</a></div>                    
                            </div>
                        </div>
                        <div class="left main_home-hub e">
                            <div class="left main_home-hub-inner">
                                <div class="initial"><a href="<?php echo '/' . LANG . '/expositor/'?>">E</a></div>
                                <div class="title"><a href="<?php echo '/' . LANG . '/expositor/'?>">Asista como Expositor</a></div>
                            </div>
                        </div>
                    </div>
                    <img src="/static/img/home_banner.jpg" alt="#NEXT Travel Trade Exchange" class="left main_home-banner" />
                    <div class="left main_home-promo">
                        <div class="left main_home-promo-item">
                            <?php include INCLUDES_PATH . '/twitter.php'; ?>
                        </div>
                        <div class="right main_home-promo-item">
                            <a href="<?php echo $strContactUsLink ?>">
                                <img src ="/static/img/<?php echo LANG ?>/home/banner1.gif" alt="Banner 1" />
                            </a>
                        </div>
                        <div class="clear"></div>
                        <div class="left main_home-promo-item">
                            <?php include INCLUDES_PATH . '/facebook.php'; ?>
                        </div>
                        <div class="right main_home-promo-item">
                            <a href="http://travelistalab.com" target="_blank">
                                <img src ="/static/img/<?php echo LANG ?>/home/banner2.gif" alt="Banner 2" />
                            </a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>            
        </div>
    </main>
    <?php include INCLUDES_PATH . '/footer.php'; ?>
</body>
</html>