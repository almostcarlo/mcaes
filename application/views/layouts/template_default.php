<!DOCTYPE html>
<html lang="en">
    <?php include APPPATH.'views/parts/head.php'; ?>
    

    <body class="nav-md">
        
        <div class="container body">
            
            <div class="main_container">
                
                <div class="col-md-3 left_col">
                    
                    <div class="left_col scroll-view">
                        
                        <!-- SIDEBAR -->
                        <?php include APPPATH.'views/parts/sidebar-menu.php'; ?>
                        <!-- END of SIDEBAR -->
                        
                    </div>
                </div>
                
                <!-- NAVIGATION -->
                <?php include APPPATH.'views/parts/top-navigation.php'; ?>
                <!-- END of NAVIGATION -->

                <!-- PAGE CONTENT -->
                <div class="right_col" role="main">
                    
                    <!-- CONTENT HERE -->
                    <div class="row">
                        
                        <div class="col-md-12">
                            
                            <?php echo $contents;?>
                            
                        </div>
                        
                    </div>

                </div>
                <!-- END of PAGE CONTENT -->

            </div>
        </div>

        <?php include APPPATH.'views/parts/script-list.php'; ?>

        <!-- Load Javascript from Controller -->
        <?php
            $file_javascript = isset($file_javascript) ? $file_javascript : '';
            if (is_array($file_javascript) && count($file_javascript) > 0) {
                foreach ($file_javascript as $value) {
                    echo '<script src="'.BASE_URL.'public/'.$value.'"></script>';
                }
            }
        ?>

    </body>
</html>
