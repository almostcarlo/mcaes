<?php
    $menu_list = getdata("select * from tbl_menu where id in ({$_SESSION['mcaes_user']['menu_access']})");
    foreach($menu_list as $k => $v){
        $menu[$v['level']][$v['groupid']][$v['id']] = array('id' => $v['id'], 'title' => $v['title'], 'url' => $v['url'], 'fa_class' => $v['fa_class']);
    }
    // echo "<pre>";
    // var_dump($menu[3]);
    // print_r($menu[3][8]);
    // echo "</pre>";
?>
<!-- SIDEBAR -->
<div class="navbar nav_title" style="border: 0;">
    <!-- <a href="index.php" class="site_title"><img src="images/ams-logo.png" /></a>-->
    <a href="<?php echo BASE_URL;?>home" class="site_title text-center">
        <img src="<?php echo BASE_URL;?>public/images/mcaes-logo-icon.png" style="margin-right:5px;" />
        <span><img src="<?php echo BASE_URL;?>public/images/mcaes-logo-text.png" /></span>
    </a>
</div>

<div class="clearfix"></div>

<div id="sidebar-menu" class="main_menu_side hidden-print">
    <div class="menu_section">

        <ul class="nav side-menu">
            <?php foreach($menu[1][0] as $k => $lvl1):?>
                <!-- LEVEL 1 -->
                <li><a><i class="<?php echo $lvl1['fa_class'];?>"></i> <?php echo $lvl1['title'];?> <span class="fa fa-chevron-down pull-right"></span></a>
                    <ul class="nav child_menu">
                        <?php foreach($menu[2][$k] as $k2 => $lvl2):?>
                            <li>
                                <?php if(isset($menu[3][$k2])):?>
                                    <?php if(isset($menu[3][$k2])):?>
                                        <!-- LEVEL 2 - W/ SUB -->
                                        <a><?php echo $lvl2['title'];?><span class="fa fa-chevron-down pull-right"></span></a>
                                        <ul class="nav child_menu">
                                            <?php foreach($menu[3][$k2] as $k3 => $lvl3):?>
                                                <!-- LEVEL 3 -->
                                                <li><a href="<?php echo BASE_URL.$lvl3['url'];?>"><?php echo $lvl3['title'];?></a></li>
                                            <?php endforeach;?>
                                        </ul>
                                    <?php endif;?>
                                <?php else:?>
                                    <!-- LEVEL 2 - W/O SUB -->
                                    <a href="<?php echo BASE_URL.$lvl2['url'];?>"><?php echo $lvl2['title'];?></a>
                                <?php endif;?>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </li>
            <?php endforeach?>
        </ul>

    </div>
</div>
<!-- END of SIDEBAR -->