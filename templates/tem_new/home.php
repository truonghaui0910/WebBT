<html>
    <head>
        <title>Porn Video HD</title>
        <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />  
        <meta charset="utf-8"/>
        <link rel="stylesheet" href='<?php echo TEM_PART_NEW; ?>css/style.css'/>
        <script type="text/javascript" src="<?php echo TEM_PART_NEW; ?>js/jquery-1.8.2.min.js"></script><!-- Thư viện jquery -->
        <!--<script type="text/javascript" src="ajax/update.js"></script>-->
    </head>
    <body>
        <div id="nav">
            <?php include('modules/layout_nav.php'); ?>
        </div><!-- end navication -->
        <div id="body">
            <div id="noidung" class="noidung">
                <?php
                $com = 'home';
                if (isset($_GET['com']))
                    $com = $_GET['com'];
                $thiscom = 'components/com_' . $com . '/layout.php';
                if (is_file($thiscom) == true)
                    include($thiscom);
                else
                    echo"Com không tồn tại";
                ?>
            </div><!-- end noi dung -->
            <div class="clr"></div><!-- clear -->
        </div><!-- end body -->

        <div id="footer">Thiết kế bởi SEX_TEAM</div><!-- end footer -->

    </body>
</html>
