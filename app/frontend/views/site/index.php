<?php
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Добавление нового переводчика';
?>
<div class="site-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin(['id' => 'translator-form']); ?>
    
        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'language')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'phone')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'is_weekend')->checkbox() ?>

        <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
        </div>

    <?php ActiveForm::end(); ?>
</div>
