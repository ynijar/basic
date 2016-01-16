<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Panel';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="site-panel">
    <h1><?= Html::encode($this->title) ?></h1>
    <p><?=  $host ?></p>
</div>
