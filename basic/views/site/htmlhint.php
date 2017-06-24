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
            <h1><p>Первая запись</p></h1>
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
            <h1><p>Вторая запись</p></h1>
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



    </div>
</div>