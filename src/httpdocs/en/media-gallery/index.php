<?php include dirname(__FILE__) . '/../../../lib/app/includes/common.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo LANG ?>" id="ntte">
<head>
    <title>Media Gallery | Next Travel Trade Exchange.com</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <?php include INCLUDES_PATH . 'head.php'; ?>
</head>
<body id="media">
    <?php include INCLUDES_PATH . '/header.php'; ?>
    <main>
        <div class="main_wrapper">
            <div class="main_inner">
                <div class="main_content">
                    <div class="main_content-header">
                        <h1>
                            Media Gallery
                        </h1>
                    </div>
                    <h2>
                        Photos
                    </h2>
                    <ul class="tiledlist photos">
                        <?php for ($i = 0; $i < count($aPhotoGalleries); $i++) : ?>
                    
                        <li<?php if (($i+1) % 3 == 0) : ?> class="last"<?php endif ?>>
                            <div class="thumb">
                                <a href="<?php echo '/' . LANG . '/gallery/?gid=' . ($i+1)?>">
                                    <img src="<?php echo $aPhotoGalleries[$i]["thumb"]?>"
                                         alt="<?php echo $aPhotoGalleries[$i]["title"]?>" />
                                </a>     
                            </div>
                            <div>
                                <p>
                                    <a href="<?php echo '/' . LANG . '/gallery/?gid=' . ($i+1)?>">
                                        <span class="title"><?php echo $aPhotoGalleries[$i]["title"]?></span><?php if (!empty($aPhotoGalleries[$i]["abstract"])) : ?><span class="abstract"> - <?php echo $aPhotoGalleries[$i]["abstract"]?></span><?php endif ?>

                                    </a>
                                </p>
                            </div>
                        </li>
                        <?php endfor ?>
                        
                    </ul>
                    <div class="clear"></div>
                    <hr>
                    <h2>
                        Videos
                    </h2>
                    <ul class="tiledlist videos">
                        <?php for ($i = 0; $i < count($aVideos); $i++) : ?>
                    
                        <li<?php if (($i+1) % 3 == 0) : ?> class="last"<?php endif ?>>
                            <div class="thumb">
                                <a href="<?php echo '/' . LANG . '/video/?vid=' . ($i+1)?>">
                                    <img src="<?php echo $aVideos[$i]["thumb"]?>"
                                         alt="<?php echo $aVideos[$i]["title"]?>" />
                                </a>     
                            </div>
                            <div>
                                <p>
                                    <a href="<?php echo '/' . LANG . '/video/?vid=' . ($i+1)?>">
                                        <span class="title"><?php echo $aVideos[$i]["title"]?></span><?php if (!empty($aVideos[$i]["abstract"])) : ?><span class="abstract"> - <?php echo $aVideos[$i]["abstract"]?></span><?php endif ?>

                                    </a>
                                </p>
                            </div>
                        </li>
                        <?php endfor ?>
                        
                    </ul>
                    <div class="clear"></div>
                    <h3>
                        <i>For all Media inquiries, please <a href="<?php echo $strContactUsLink ?>"><strong>send us an email</strong></a>.</i>
                    </h3>
                    <hr>
                    <p>
                        High-resolution images are available for media use only. If you need to inquire about high resolution images from #NEXT Travel Trade Exchange, please <a href="<?php echo $strContactUsLink ?>">send us an email</a>.
                    </p>
                </div>
                <div class="main_sidebar">
                    <?php include INCLUDES_PATH . 'sidebar.php'; ?>
                </div>
                <div class="clear"></div>
            </div>            
        </div>
    </main>
    <?php include INCLUDES_PATH . '/footer.php'; ?>
</body>
</html>