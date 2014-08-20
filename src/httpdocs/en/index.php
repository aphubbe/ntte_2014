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
                            An invitation-only event, that offers unrivalled business and networking opportunities for travel industry professionals in the Americas. It is designed for top-level executives and innovators who believe in a newforward thinking travel industry.
                        </p>
                        <p>
                            Attendees are invited to choose up to 40 one-to-one meetings from a select community of up to 200 buyers and exhibitors.
                        </p>
                        <p>
                            Our extensive conference program allows attendees to meet and learn from some of the world’s most creative thinkers.
                        </p>
                        <p>
                            We offer a key hotspot for innovation and business generation.
                        </p>
                        <p>
                            <blockquote>"The opportunity we have at this event is unique, because we are able to focus on the quality of clients and not just quantity. I think that is the magic behind #NEXT Travel Trade Exchange. The future resides in this type of events" - Alfredo González, VP of Global Business Development, Brand USA."</blockquote>
                        </p>
                    </div>
                    <div class="left main_home-hubs-container">
                        <div class="left main_home-hub s">
                            <div class="left main_home-hub-inner">
                                <div class="initial"><a href="<?php echo '/' . LANG . '/sponsorship-opportunities/'?>">S</a></div>
                                <div class="title"><a href="<?php echo '/' . LANG . '/sponsorship-opportunities/'?>">SPONSORSHIP OPPORTUNITIES</div>
                            </div>
                        </div>
                        <div class="left main_home-hub b">
                            <div class="left main_home-hub-inner">
                                <div class="initial"><a href="<?php echo '/' . LANG . '/buyer/'?>">B</a></div>
                                <div class="title"><a href="<?php echo '/' . LANG . '/buyer/'?>">ATTEND AS A BUYER</a></div>                           
                            </div>
                        </div>
                        <div class="left main_home-hub g">
                            <div class="left main_home-hub-inner">
                                <div class="initial"><a href="<?php echo '/' . LANG . '/gsa/'?>">G</a></div>
                                <div class="title"><a href="<?php echo '/' . LANG . '/gsa/'?>">ATTEND AS A GSA</a></div>                    
                            </div>
                        </div>
                        <div class="left main_home-hub e">
                            <div class="left main_home-hub-inner">
                                <div class="initial"><a href="<?php echo '/' . LANG . '/exhibitor/'?>">E</a></div>
                                <div class="title"><a href="<?php echo '/' . LANG . '/exhibitor/'?>">ATTEND AS AN EXHIBITOR</a></div>
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