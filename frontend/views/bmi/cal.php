<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title='Hello Bmi Calculator 2'; ?>
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-body">
            <div class="card-header">
                <h1 class="text-center"><?=$this->title?></h1>
                
            </div>

            <?php
            $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['class' => 'form-horizontal'],
            ]) ?>
            <?= $form->field($model, 'height') ?>
            <?= $form->field($model, 'weight') ?>
            <div class="form-group">
                <div class="col-lg-offset-1 col-lg-11">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
            <?php ActiveForm::end() ?>
            <?=$bmi?>
            <?php //var_dump($model) ?>
        </div>
    </div>
</div>