<?php
/**
 * Created by PhpStorm.
 * User: kmuldash
 * Date: 23.06.2017

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
	<?php
	NavBar::begin([
		'brandLabel' => 'CodeWay',
		'brandUrl' => Yii::$app->homeUrl,
		'options' => [
			'class' => 'navbar-inverse navbar-fixed-top',
		],
	]);
	echo Nav::widget([
		'options' => ['class' => 'navbar-nav navbar-right'],
		'items' => [
			['label' => 'PHP', 'url' => ['/site/index']],
			['label' => 'HTML', 'url' => ['/site/htmlhint']],
			['label' => 'Вопросы', 'url' => ['/site/question']],
			['label' => 'Contact', 'url' => ['/site/contact']],
			Yii::$app->user->isGuest ? (
			['label' => 'Login', 'url' => ['/site/login']]
			) : (
				'<li>'
				. Html::beginForm(['/site/logout'], 'post')
				. Html::submitButton(
					'Logout (' . Yii::$app->user->identity->username . ')',
					['class' => 'btn btn-link logout']
				)
				. Html::endForm()
				. '</li>'
			)
		],
	]);
	NavBar::end();
	?>

	<?= $content ?>

</div>

<footer class="footer">
	<div class="container">
		<p class="pull-left">&copy; My Company <?= date('Y') ?></p>

		<p class="pull-right"><?= Yii::powered() ?></p>
	</div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
