<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
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
    <?php $this->registerCsrfMetaTags() ?>
    <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl;
    ?>/img/Kadirov.png" type="image/x-icon" />
    
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body >
<?php $this->beginBody() ?>
<div class="wrap" >
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top ',
        ],
    ]);
    echo Nav::widget([
    
        'options' => ['class' => 'navbar-nav navbar-right' ],
        'items' => [
            ['label' => 'О нас ', 'url' => ['/site/index'],'options'=>[
                'onclick' => '(function(){
                $("html, body").animate({scrollTop: "0px"}, 800)
                })();'],],
            ['label' => 'Данные об автопарке', 'url' => 'index.php#about','options'=>[
                'onclick' => '(function(){
                $("html, body").animate({scrollTop: "500px"}, 800)
                })();'], ],
            ['label' => 'Сотрудники', 'url' => 'index.php#portfolio','options'=>[
                'onclick' => '(function(){
                $("html, body").animate({scrollTop: "1450px"}, 800)
                })();'], ],
            ['label' => 'Найти нас', 'url' => 'index.php#maps','options'=>[
                'onclick' => '(function(){
                $("html, body").animate({scrollTop: "1750px"}, 800)
                })();'],],
            ['label' => 'Запросы', 'url'=>['/querie/queries']],
            ['label' => 'Админка', 'url'=>['/admin/default/index'],'visible'=>!Yii::$app->user->isGuest],
            Yii::$app->user->isGuest ? (
                ['label' => 'Вход', 'url' => ['/site/login']]
            ) : (

                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Выход (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )

                . Html::endForm()

                . '</li>'

            ),

        ],
    ]);
    NavBar::end();
    ?>

  
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
 
</div>

<footer class="footer">
    <div class="container">
        <div style="height: 30px">
        <p class="pull-left">&copy; <?= Yii::$app->name; date('Y') ?></p>

        <p class="pull-right"><img src="img/logo.png" width="30" height="30"></p>
    </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

