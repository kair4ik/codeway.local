<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';


//$request = file_get_contents("https://api.telegram.org/tekserbot:298419529:AAFdkPMILnYPD5dPBaQCzpLGDE48fxnZ6BU/getMe");
//var_dump($request);

        $url = "https://api.telegram.org/bot298419529:AAFdkPMILnYPD5dPBaQCzpLGDE48fxnZ6BU/getMe";
        $post = 0;
        $myCurl = curl_init();
        curl_setopt($myCurl, CURLOPT_URL, $url ); // отправляем на
        curl_setopt($myCurl, CURLOPT_HEADER, 1);
        curl_setopt($myCurl, CURLOPT_RETURNTRANSFER, 1); // возвратить то что вернул сервер
        curl_setopt($myCurl, CURLOPT_FOLLOWLOCATION, 1); // следовать за редиректами
        curl_setopt($myCurl, CURLOPT_CONNECTTIMEOUT, 30);// таймаут4
        curl_setopt($myCurl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($myCurl, CURLOPT_PORT, 443);
        $data = curl_exec($myCurl);
                    curl_close($myCurl);
//			echo $JSESSIONID = Parse::getJSESSION()."Вывод 1";
var_dump($data);
        echo htmlspecialchars($data);
?>
<!--<div class="site-index">-->

    <div class="jumbotron">
        <h1>codeway.local</h1>
    </div>

    <div class="body-footer">
        <div class="col-lg-3">
            d
        </div>
        <div class="col-lg-3">
            f
        </div>
        <div class="col-lg-3">
            g
        </div>
    </div>
<br>
    <div class="body-content">

            <div class="col-lg-3">
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
                                    return $model->id;
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
<!--</div>-->
