<?php

namespace backend\controllers;


use backend\models\Image;

class MainController extends \yii\web\Controller
{
    public function actionIndex()
    {
		$url_image = Image::getImageUrl();
		return $this->render('index', ['url_image'=>$url_image]);
    }

	public function actionTest()
	{
		echo 1;
	}

}
