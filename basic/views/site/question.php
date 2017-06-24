<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<br>
<br>
<br>
<br>
<br>
<br>
<div class="container-fluid">
    <div class="row-fluid">

        <div class="col-xs-4">
        </div>
        <div class="col-xs-4">
            <h2>Yii 2 это мощнейший инструмент для разработки проектов на php,освой его! Освой в совершенстве! Всё что там есть!</h2>

            <p>1.Полностью изучить класс <code>Yii</code>
                <br>
                Кстати, здесь красивый var_dump
            </p>
            <?php
                var_dump(Yii::$aliases);
            echo Yii::getAlias('@web');
            ?>

            <p>2.Сделать что-то с логированием!
                <br>
                Ахахах, через 20 минут узнаю о такой вещи как журналирование, при правильной разработке можно отследить каждое действие на сайте каждого юзера!
                <br>
                Надо применить на практике!
            </p>

            <p>3.Значит первое что я сделаю это будет изучение всех фишек Yii2 и применение их на практике.
                <br>
                С соблюдением MVC патерна и в ООП стиле.
            </p>

        </div>
        <div class="col-xs-4">
        </div>




    </div>
</div>