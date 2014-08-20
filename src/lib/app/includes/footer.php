
<footer>
    <div class="footer_wrapper">
        <div class="footer_inner">
            <ul class="footer-menu">
                <?php for ($i = 0; $i < count($aFooterMenuItems); $i++) : ?>                
                <li class="<?php if ($i==0) : ?>first<?php endif ?><?php if (count($aFooterMenuItems) == $i+1) : ?> last<?php endif ?>">
                    <div>
                        <a href="<?php echo $aFooterMenuItems[$i]["href"]?>"<?php if (!empty($aFooterMenuItems[$i]["target"])) : ?> target="<?php echo $aFooterMenuItems[$i]["target"]?>"<?php endif ?>>
                            <span><?php echo $aFooterMenuItems[$i]["caption"]?></span>
                        </a>
                    </div>
                    <?php if (!empty($aFooterMenuItems[$i]["submenuitems"])) : ?>                    
                    <ul>
                        <?php for ($j = 0; $j < count($aFooterMenuItems[$i]["submenuitems"]); $j++) : ?>                        
                        <li class="<?php if (count($aFooterMenuItems[$i]["submenuitems"]) == $j+1) : ?> last<?php endif ?>">
                            <a href="<?php echo $aFooterMenuItems[$i]["submenuitems"][$j]["href"]?>"<?php if (!empty($aFooterMenuItems[$i]["submenuitems"][$j]["target"])) : ?> target="<?php echo $aFooterMenuItems[$i]["submenuitems"][$j]["target"]?>"<?php endif ?>>
                                <span><?php echo $aFooterMenuItems[$i]["submenuitems"][$j]["caption"]?></span>
                            </a>
                        </li>                        
                        <?php endfor ?>                        
                     </ul>                    
                    <?php endif ?>
                </li>
                <?php endfor ?>
            </ul>
            <div class="clear"></div>
            <div class="footer-abstract-wrapper">
                <div class="footer-abstract">
                    <span class="deco">&#183;</span>
                    <span><?php echo $strSiteAbstract; ?><img src="/static/img/gbt_logo.png" alt="Grupo Brands & Travel" /></span>
                    <span class="deco">&#183;</span>
                </div>                
            </div>
        </div>
    </div>
</footer>
