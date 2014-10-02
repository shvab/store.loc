<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\captcha\Captcha;

/**
 * @var yii\web\View $this
 * @var app\models\RegistrationForm $model
 * @var ActiveForm $form
 */
?>
<div class="site-registration">

    <?php $form = ActiveForm::begin(); ?>

	    <?= $form->field($model, 'gmail', ['template' =>'
	    		{label}
<div>{input}@gmail.com</div>
<div class="help-block">{error}</div>']) ?>
	    <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'firstname') ?>
        <?= $form->field($model, 'lastname') ?>
        <?= $form->field($model, 'passwd')->passwordInput() ?>
        <?= $form->field($model, 'passwdVerification')->passwordInput() ?>
        <?= $form->field($model, 'termsOfUse', [
					'template' => '<div class="form-group field-registrationform-termsofuse required">
					<input type="hidden" name="RegistrationForm[termsOfUse]" value="0">
	        		<div class="checkbox">
	        		<label>
	        		<input type="checkbox" id="registrationform-termsofuse" name="RegistrationForm[termsOfUse]" value="1">
	        		I agree to the <a href="'.Url::toRoute('site/terms').'">Terms of Use</a> and <a href="'.Url::toRoute('site/policy').'">Privacy Policy</a></label>
	        		</div>
					<div class="help-block">{error}</div>
					</div>'
				])->checkbox() ?>
        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-12">{image}</div><div class="col-lg-12">{input}</div></div>',
                ]) ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-registration -->
