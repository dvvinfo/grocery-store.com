<?php

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);
?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <base href="/">
    <meta charset="<?= Yii::$app->charset ?>">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<!-- header -->
<?= $this->render('//layouts/inc/header') ?>
<!-- //header -->
    <?= $content ?>

    <!-- newsletter -->

    <!-- //newsletter -->
    <!-- footer -->
<?= $this->render('//layouts/inc/footer') ?>
    <!-- //footer -->

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

