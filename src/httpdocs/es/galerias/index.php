<?php include dirname(__FILE__) . '/../../../lib/app/includes/common.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo LANG ?>" id="ntte">
<head>
    <title>Galeria | Next Travel Trade Exchange.com</title>
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
                            Galeria
                        </h1>
                    </div>
                    <h2>
                        Photos
                    </h2>
                    <ul class="tiledlist photos">
                        <?php for ($i = 0; $i < count($aPhotoGalleries); $i++) : ?>
                    
                        <li<?php if (($i+1) % 3 == 0) : ?> class="last"<?php endif ?>>
                            <div class="thumb">
                                <a href="<?php echo '/' . LANG . '/galeria/?gid=' . ($i+1)?>">
                                    <img src="<?php echo $aPhotoGalleries[$i]["thumb"]?>"
                                         alt="<?php echo $aPhotoGalleries[$i]["title"]?>" />
                                </a>     
                            </div>
                            <div>
                                <p>
                                    <a href="<?php echo '/' . LANG . '/galeria/?gid=' . ($i+1)?>">
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
                        <i>Para consultas y comentarios, <a href="<?php echo $strContactUsLink ?>"><strong>envíenos un E-mail</strong></a>.</i>
                    </h3>
                    <hr>
                    <p>
                        Las imágenes en alta resolución son de uso exclusivo para media. Si desea obtener las imágenes en alta resolución de #NEXT Travel Trade Exchange, <a href="<?php echo $strContactUsLink ?>">envíenos un E-mail</a>.
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