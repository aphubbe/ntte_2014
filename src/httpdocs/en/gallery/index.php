<?php
    include dirname(__FILE__) . '/../../../lib/app/includes/common.php';
    $gallery = $aPhotoGalleries[$_GET['gid']-1];
?>
<!DOCTYPE html>
<html lang="<?php echo LANG ?>" id="ntte">
<head>
    <title>Gallery - <?php echo $gallery['title']?> | Next Travel Trade Exchange.com</title>
    <meta name="description" content="<?php echo $gallery['abstract']?>" />
    <meta name="keywords" content="" />
    <meta property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME']?><?php echo $gallery['thumb']?>">
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
                            Gallery - <?php echo $gallery['title']?>
                        </h1>
                    </div>
                    <ul class="tiledlist gallery">
                        <?php for ($i = 1; $i < $gallery['count']+1; $i++) : ?>
                    
                        <li<?php if (($i) % 3 == 0) : ?> class="last"<?php endif ?>>
                            <div class="thumb">
                                <a href="javascript:void(0);">
                                    <img src="<?php echo $strPhotoGalleryThumbPath . $_GET['gid'] .'/'. $gallery['fileprefix'] . sprintf('%03d', $i) . '_thumb.jpg'?>"
                                         alt="<?php echo $gallery['title']?> - <?php echo $i?>" />
                                </a>     
                            </div>
                        </li>
                        <?php endfor ?>
                        
                    </ul>
                    <div class="clear"></div>
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