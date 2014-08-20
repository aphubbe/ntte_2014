
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo $strFBLang?>/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<header>
    <div class="header_wrapper">
        <div class="header_inner">
            <div class="left">
                <a href="/<?php echo LANG ?>">
                    <img src="/static/img/ntte_logo.png" alt="Next Travel Trade Exchange" />
                </a>                
                <ul class="header_left-abstract">
                    <li>
                        <?php echo $strEventDate; ?>                        
                    </li>
                    <li>
                        Mexico
                    </li>
                    <li>
                        <?php echo $strSiteAbstract; ?>
                    
                    </li>
                </ul>
            </div>
            <div class="right">
                <ul class="header_right-menu">
                    <?php for ($i = 0; $i < count($aHeaderMenuItems); $i++) : ?>
                    
                    <li class="header_right-menu-item">
                        <div>
                            <a href="<?php echo $aHeaderMenuItems[$i]["href"]?>">
                                <?php echo $aHeaderMenuItems[$i]["caption"]?>
                                
                            </a>
                        </div>
                    </li>
                    <?php endfor ?>
                    
                    <li class="header_right-menu-item last">                    
                        <ul class="header_right-lang-menu">
                            <?php for ($i = 0; $i < count($aHeaderLanguages); $i++) : ?>
                            
                            <li class="header_right-lang-menu-item<?php if ($aHeaderLanguages[$i]["href"] == '/' . SITE . '/') : ?> active<?php endif ?>">
                                <a href="<?php echo $aHeaderLanguages[$i]["href"]?>" data-lang="<?php echo $aHeaderLanguages[$i]["lang"]?>">
                                    <?php echo $aHeaderLanguages[$i]["caption"]?>
                                    
                                </a>
                            </li>
                            <?php endfor ?>
                            
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div id='mainmenu' class="header_main-menu-wrapper">
            <ul class="header_main-menu">
                <?php for ($i = 0; $i < count($aMainMenuItems); $i++) : ?>
                <li class="header_main-menu-item<?php echo ' m' . $i . ' '?><?php if (!empty($aMainMenuItems[$i]["submenuitems"])) : ?> has-sub<?php endif ?><?php if (count($aMainMenuItems) == $i+1) : ?> last<?php endif ?>">
                    <a href="<?php echo $aMainMenuItems[$i]["href"]?>"<?php if (!empty($aFooterMenuItems[$i]["target"])) : ?> target="<?php echo $aFooterMenuItems[$i]["target"]?>"<?php endif ?>>
                        <span><?php echo $aMainMenuItems[$i]["caption"]?></span>
                    </a>
                    <?php if (!empty($aMainMenuItems[$i]["submenuitems"])) : ?>                    
                    <ul>
                        <?php for ($j = 0; $j < count($aMainMenuItems[$i]["submenuitems"]); $j++) : ?>                        
                        <li<?php if (count($aMainMenuItems[$i]["submenuitems"]) == $j+1) : ?> class="last"<?php endif ?>>
                            <a href="<?php echo $aMainMenuItems[$i]["submenuitems"][$j]["href"]?>"<?php if (!empty($aMainMenuItems[$i]["submenuitems"][$j]["target"])) : ?> target="<?php echo $aMainMenuItems[$i]["submenuitems"][$j]["target"]?>"<?php endif ?>>
                                <span><?php echo $aMainMenuItems[$i]["submenuitems"][$j]["caption"]?></span>
                            </a>
                        </li>                        
                        <?php endfor ?>                        
                     </ul>                    
                    <?php endif ?>
                </li>
                <?php endfor ?>
            </ul>
        </div>
    </div>
</header>

