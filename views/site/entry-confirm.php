<?php
use yii\helpers\Html;
?>

<p>Kamu sudah mengikuti petunjuk informasi</p>

<ul>
    <li><label>Nama</label>: <?= Html::encode($model->nama)?></li>
    <li><label>Email</label>: <?= Html::encode($model->email)?></li>
</ul>