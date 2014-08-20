<?php
    include dirname(__FILE__) . '/../../../lib/app/includes/common.php';
    $video = $aVideos[$_GET['vid']-1];
?>
<!DOCTYPE html>
<html lang="<?php echo LANG ?>" id="ntte">
<head>
    <title>Video - <?php echo $video['title']?> | Next Travel Trade Exchange.com</title>
    <meta name="description" content="<?php echo $video['abstract']?>" />
    <meta name="keywords" content="" />
    <meta property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME']?><?php echo $video['thumb']?>">
    <meta property="og:video" content="http://<?php echo $_SERVER['SERVER_NAME']?><?php echo $video['src']?>" />
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
                            Video - <?php echo $video['title']?>
                        </h1>
                    </div>
                    <video width="525" height="390" controls>
                        <source src="<?php echo $video['src']?>" type="video/mp4">
                        Su explorador no soporta video.
                    </video>                     
                    <p>                   
                        <?php echo $video['abstract']?>
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