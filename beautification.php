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
                            <img src="/assets/img/elm/img/beaut.png" alt=""/>
                        </span>
                    <span class="content-header-text">Благоустройство</span>
                </h1>

                <div class="info beautification">

                    <!-- Include partners blocks -->
                    <?php
                    $info = array(
                        'img' => array(
                            'img-01', 'img-02', 'img-03'
                        ),
                        'name' => array(
                            'Гидроизоляционная ПВХ-мембрана Ruvimat',
                            'Открытая терраса,плюсы и минусы',
                            'Зеленая кровля'
                        ),
                        'text' => array(
                            'Відмінною рисою діяльності нашої групи є: використання новітніх технологій та дотримання вимог діючих норм законодавства; професійне складання кошторисів об’єктів; повна комплектація об’єктів сертифікованими і якісними матеріалами; професійне, високоякісне виконання робіт з улаштування нових і реконструкції існуючих, плоских і скатних покрівель;',
                            '«Центр надійної покрівлі» виконує гідроізоляцію відкритих терас за допомогою спеціальної системи, розробленої в Німеччині, яка успішно зарекомендувала себе у всіх країнах Європи.',
                            'Зелені дахи» з кожним роком набувають все більшої популярності у всьому світі. Нами технологія виготовлення такої покрівлі освоєна ще у 2009 році. Основна перевага такої покрівлі в тому, що висаджені на даху рослини не допускають попадання ультрафіолету до гідроізоляційного шару покрівлі, таким чином не допускаючи руйнування пвх-мембрани. Отже, така покрівля може прослужити дуже довго.'
                        )
                    );
                    for ($j = 0; $j < 3; $j++) { include 'source/inc/el/info-block.php'; }
                    ?>
                </div>

                <?php

                include 'source/inc/el/pagination.php';

                ?>

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