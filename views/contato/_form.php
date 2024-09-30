<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Estado;
use yii\helpers\ArrayHelper;
use kartik\widgets\Select2;

/** @var yii\web\View $this */
/** @var app\models\Contato $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="contato-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'endereco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cep')->textInput(['maxlength' => true]) ?>
 
    <?php
        $query = Estado::find();
        $itens = ArrayHelper::map(\app\models\Estado::find()->orderBy('nome_estado')->asArray()->all(), 'id', 'nome_estado');
        echo $form->field($model, 'id_estado')->dropDownList($itens, ['prompt' => 'Selecione...'])->label('Estados');
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
