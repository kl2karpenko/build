<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"  ><![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie10 lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie10 lt-ie9"><![endif]-->
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

            <!-- Center info -->
            <div class="content-center">

                <div class="container">

                    <h1 class="content-header">
                        <span class="content-header-img">
                            <img src="/assets/img/elm/img/arct.png" alt=""/>
                        </span>
                        <span class="content-header-text">Архитектура и дизайн</span>
                    </h1>

                    <div class="row">
                        <div class="col-xs-8">
                            <p>
                                Наші можливості <br/>
                                Ми представляємо інтереси групи торговельно-будівельних компаній, які спеціалізуються на професійному виконанні робіт з улаштування та реконструкції скатних і плоских покрівель, та гідроізоляції об’єктів будь-якої складності.
                            </p>
                            <p>Відмінною рисою діяльності нашої групи є:</p>
                            <ul class="list-simple">
                                <li>використання новітніх технологій та дотримання вимог діючих норм законодавства;</li>
                                <li>професійне складання кошторисів об’єктів;</li>
                                <li>повна комплектація об’єктів сертифікованими і якісними матеріалами;</li>
                                <li>професійне, високоякісне виконання робіт з улаштування нових і реконструкції існуючих, плоских і скатних покрівель;</li>
                                <li>надання гарантій на виконані роботи від 10 років;</li>
                                <li>своєчасне виконання в повному обсязі взятих на себе зобов’язань;</li>
                                <li>наявність сертифікованої, професійної матеріально-технічної бази, яка дозволяє реалізовувати проекти будь-якої складності, у тому числі з урахуванням дефіциту часу;</li>
                                <li>наявність всього необхідного професійного інструменту та обладнання.</li>
                            </ul>
                        </div>
                        <div class="col-xs-7">
                            <p>
                                <img src="/assets/img/elm/img/pic-01.jpg" alt=""/>
                            </p>
                        </div>
                    </div>

                </div>

                <div class="forums">

                    <div class="content-fieldset _ntt">
                        <span>Разделы</span>
                    </div>

                    <div class="container">
                        <div class="row forums__list">

                            <!-- Include partners blocks -->
                            <?php
                                $info = array(
                                    'ico' => array(
                                        'ico-arcitech', 'ico-big-bulb', 'ico-port', 'ico-house', 'ico-paint'
                                    ),
                                    'name' => array(
                                        'Архитектура','Конструктивная часть','Инженерия','Благоустройство','Дизайн'
                                    ),
                                    'link' => array(
                                        '#','#','#','/beautification.php','#'
                                    )
                                );
                                for ($j = 0; $j < 5; $j++) { include 'source/inc/el/forums.php'; }
                            ?>

                        </div>
                    </div>

                    <div class="content-block">

                        <div class="container _arr">

                            <div class="row">
                                <div class="col-xs-10">
                                    <p class="p-centered">На сьогоднішній день наш досвід підтверджений великим переліком об’єктів, який постійно доповнюється, і відсутністю рекламацій протягом всього часу існування компанії. Якість робіт наших фахівців підтверджено сертифікатами міжнародної системи якості ISO 9001. Ми зацікавлені в укладанні договорів на виконання таких видів робіт: </p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Include footer -->
            <?php include 'source/inc/blocks/footer.php'; ?>

        </div>

    </div>

    <!-- Include js in the end of page -->
    <?php include 'source/inc/meta/js.php'; ?>

    </body>
</html>