<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="image/x-icon" href="/images/main/favicon/favicon.ico" rel="icon">
    <script src="/js/metrika.js"></script>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand и toggle сгруппированы для лучшего отображения на мобильных дисплеях -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"></a>
        </div>

        <!-- Соберите навигационные ссылки, формы, и другой контент для переключения -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class=""><a href="#">Рифмы к словам<span class="sr-only"></span></a>
                <li class=""><a href="#">Рифмы к именам<span class="sr-only"></span></a>

            </ul>
            <?php

            use yii\widgets\ActiveForm;

            $form = ActiveForm::begin([
                'action' => '/residentname/search-city-by-spell-form',
                'options' => ['class' => 'navbar-form navbar-left'],
            ]) ?>

            <div class="form-group">
                <?= $form->field($SearchRhyme, 'query')
                    ->textInput([
                        'class' => 'form-control',
                        'placeholder' => 'Поиск',
                    ])->label('');
                ?>
            </div>

            <?= Html::submitButton('Найти', ['class' => 'btn btn-default buttonCenter']) ?>

            <?php ActiveForm::end() ?>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<?php $this->beginBody() ?>

<div class="wrap">
    <?= $content ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
