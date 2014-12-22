<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 onLoad"  ><![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie10 lt-ie9 lt-ie8 onLoad"><![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie10 lt-ie9 onLoad"><![endif]-->
<!--[if IE 9]><!-->
<html class="no-js lt-ie10"><!--<![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js"><!--<![endif]-->
    <head>
        <title>Build</title>
        <!-- Include php head meta tags -->
        <?php include 'source/inc/meta/head.php'; ?>
    </head>
    <body>

    <div class="content">

        <div class="content-wrapper">

            <!-- Include header -->
            <?php include 'source/inc/blocks/header.php'; ?>

            <!-- Include header carousel -->
            <?php include 'source/inc/blocks/carousel.php'; ?>

            <!-- Center info -->
            <div class="content-center">

                <div class="content-fieldset">
                    <span>Наши партнеры</span>
                </div>

                <div class="container partners">

                    <div class="row">

                        <!-- Include partners blocks -->
                        <?php
                            for ($i = 1; $i < 11; $i++) { include 'source/inc/el/partners.php'; }
                        ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Include js in the end of page -->
    <?php include 'source/inc/meta/js.php'; ?>

    </body>
</html>