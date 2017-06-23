<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>codeway.local</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-10">
                    <?php
                    use giovdk21\yii2SyntaxHighlighter\SyntaxHighlighter as SyntaxHighlighter;
                    SyntaxHighlighter::begin(['brushes' => ['php']]);
                    echo SyntaxHighlighter::getBlock('
                    <?= GridView::widget([
                        \'dataProvider\' => $dataProvider,
                        \'filterModel\' => $searchModel,
                        \'columns\' => [
                            [\'class\' => \'yii\grid\SerialColumn\'],
                            \'id\',
                            \'sub_service_id\',
                            [
                                \'class\' => \yii\grid\DataColumn::className(),
                                \'attribute\' => \'sub_service_id\',
                                \'label\' => \'Наименование сервиса\',
                                \'value\' => function ($model) {
                                    return SubService::getNameById($model->sub_service_id);
                                },
                            ],
                            \'price_aston\',
                            \'price_rub\',
                            \'price_kzt\',
                            \'price_aed\',
                            \'price_sum\',
                            \'price_usd\',
                            \'status\',
    
                            [\'class\' => \'yii\grid\ActionColumn\'],
                        ],
                    ]);
                    ?>
                    ', 'php');
                    SyntaxHighlighter::end();
                    ?>

            </div>

        </div>

    </div>
</div>
