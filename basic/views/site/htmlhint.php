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

        <div class="col-xs-12">
            <h1><p>Первая запись </p></h1>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Code</th>
                    <th>Результат</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td class="col-xs-4">
                        <?php
                        use giovdk21\yii2SyntaxHighlighter\SyntaxHighlighter as SyntaxHighlighter;
                        SyntaxHighlighter::begin(['brushes' => ['php']]);
                        echo SyntaxHighlighter::getBlock('
                            <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="col-xs-12">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Code</th>
                                                <th>Результат</th>
                                            </tr>
                                            </thead>
                            
                                            <tbody>
                                            <tr>
                                                <td>Иван</td>
                                                <td>Чмель</td>
                                            </tr>
                                            </tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                    ', 'php');
                        SyntaxHighlighter::end();
                        ?>

                    </td>
                    <td>
                        <div class="container-fluid">
                            <div class="row-fluid">
                                <div class="col-xs-12">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Результат</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>html</td>
                                            <td>Результат html</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>

                </tbody>
            </table>
        </div>

        <div class="col-xs-12">
            <h1><p>Работа с письмами </p></h1>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Code</th>
                    <th>Результат</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td class="col-xs-4">
                        <?php
                        SyntaxHighlighter::begin(['brushes' => ['php']]);
                        echo SyntaxHighlighter::getBlock('
                            Конфиг
                        
                           \'mailer\' => [
                                \'class\' => \'yii\swiftmailer\Mailer\',
                                // send all mails to a file by default. You have to set
                                // \'useFileTransport\' to false and configure a transport
                                // for the mailer to send real emails.
                                \'viewPath\' => \'@app/mail\',
                                \'htmlLayout\' => \'layouts/main-html\',
                                \'textLayout\' => \'layouts/main-text\',
                                \'messageConfig\' => [
                                    \'charset\' => \'UTF-8\',
                                    \'from\' => [\'noreply@site.com\' => \'Site Name\'],
                                ],
                                \'useFileTransport\' => true,
                            ],
                            
                            Модель юзер
                            public $email;
                            
                              private static $users = [
                                    \'100\' => [
                                        \'id\' => \'100\',
                                        \'username\' => \'admin\',
                                        \'password\' => \'admin\',
                                        \'authKey\' => \'test100key\',
                                        \'accessToken\' => \'100-token\',
                                        \'email\' => \'admin@site.com\',
                                    ],
                                    \'101\' => [
                                        \'id\' => \'101\',
                                        \'username\' => \'demo\',
                                        \'password\' => \'demo\',
                                        \'authKey\' => \'test101key\',
                                        \'accessToken\' => \'101-token\',
                                        \'email\' => \'demo@site.com\',
                                    ],
                                ];
                            
                            	public function sendMail($view, $subject, $params = []) {
                                    // Set layout params
                                    \Yii::$app->mailer->getView()->params[\'userName\'] = $this->username;
                            
                                    $result = \Yii::$app->mailer->compose([
                                        \'html\' => \'views/\' . $view . \'-html\',
                                        \'text\' => \'views/\' . $view . \'-text\',
                                    ], $params)->setTo([$this->email => $this->username])
                                        ->setSubject($subject)
                                        ->send();
                            
                                    // Reset layout params
                                    \Yii::$app->mailer->getView()->params[\'userName\'] = null;
                            
                                    return $result;
                                }
                                
                                Тестовая отправка письма
                                
                                $mail =  \app\models\User::findByUsername(\'admin\')->sendMail(\'example\', \'Пример письма\', [\'paramExample\' => \'Прикольно\']);
                                if ($mail) {
                                    echo "отправлено!";
                                }
                                
                                Ну и ссылочка, на то где я учился.
                                http://atoumus.github.io/yii2-swiftmailer.html
                                
                                !@yii/swiftmailer! - познакомился с этим) супер!
                                
                    ', 'php');
                        SyntaxHighlighter::end();
                        ?>

                    </td>
                    <td>
                        <div class="container-fluid">
                            <div class="row-fluid">
                                <div class="col-xs-12">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Результат</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>html</td>
                                            <td>Результат html</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>

                </tbody>
            </table>
        </div>



    </div>
</div>