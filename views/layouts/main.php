<?php use yii\helpers\Html;?>
<?php $this->beginPage(); ?>
<DOCTYPE html>
<html>
    <head>
        <title>VideoSchool</title>
        <?php $this->head(); ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <h1>VideoSchool</h1>
        <div class="container">
            <?= $content ?>
        </div>
        <br/>
        <?= (Yii::$app->language == 'en' ? 'English' : Html::a('English','/en'))?> |
        <?= (Yii::$app->language == 'ru' ? 'Русский' : Html::a('Русский','/ru'))?>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage(); ?>