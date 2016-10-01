<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ContactGroups */

$this->title = 'Create Contact Groups';
$this->params['breadcrumbs'][] = ['label' => 'Contact Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-groups-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
