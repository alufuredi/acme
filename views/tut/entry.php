<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<?php
$form = ActiveForm::begin();

echo $form->field($model, 'name') ;

echo $form->field($model, 'email');
?>
<div class="form-group">
    <?php echo Html::submitButton('Submit', ['class' => 'btn btn-primary'])?>
</div>

<?php ActiveForm::end();
