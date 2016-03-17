<html>
    <head>
        <title>Porn Video HD</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />  
        <meta charset="utf-8"/>
        <link rel="stylesheet" href='<?php echo TEM_PART_NEW; ?>css/style.css'/>
        <link rel="stylesheet" href='<?php echo TEM_PART_NEW; ?>css/animate.min.css'/>
        <link rel="stylesheet" href='<?php echo TEM_PART_NEW; ?>css/bootstrap.min.css'/>
        <link rel="stylesheet" href='<?php echo TEM_PART_NEW; ?>css/custom.css'/>
        <script type="text/javascript" src="<?php echo TEM_PART_NEW; ?>js/jquery-1.8.2.min.js"></script><!-- Thư viện jquery -->
        <script type="text/javascript" src="<?php echo TEM_PART_NEW; ?>js/script.js"></script><!-- Thư viện jquery -->
        <!--<script type="text/javascript" src="ajax/update.js"></script>-->
    </head>
    <body>
        <header>
            <div id="nav" style="width: 100%">
                <?php include('modules/layout_nav.php'); ?>
            </div><!-- end navication -->
            <div id="slider">
            </div><!--end slider-->
            <div class="clear"></div>
        </header>
        <article>
            <div id="main">
                <div id="main-container" >
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

            </div><!-- end main -->
        </article>
        <footer>
            <div id="footer">Thiết kế bởi SEX_TEAM</div><!-- end footer -->
        </footer>

    </body>
</html>
