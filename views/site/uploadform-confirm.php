<?php
use yii\helpers\Html;
?>

<!-- <p>Kamu sudah mengikuti petunjuk informasi</p> -->

<ul>
    <h1><?= Html::encode($model->imageFile)?></h1>
    <img <?= Html::img('@web/img/'.$model->imageFile)?>></img>
</ul>