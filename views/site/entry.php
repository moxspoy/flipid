<?php

/**
 * Created by   : MNurilmanBaehaqi
 * Date         : 03 October 2019
 * Time         : 20:59
 * Github       : https://github.com/moxspoy
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();
?>

<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email') ?>

<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>