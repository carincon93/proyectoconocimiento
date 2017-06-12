<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
// $this->params['breadcrumbs'][] = $this->title;
?>
<section class="site-login">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-lg-offset-2 form-wrap">
                
                <div class="form-container">                    
                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'fieldConfig' => [
                            'template' => "{label}\n<div>{input}</div>\n<div>{error}</div>",
                            'labelOptions' => ['class' => 'control-label'],
                        ],
                    ]); ?>

                        <?= $form->field($model, 'email', ['template' => '{input}{beginLabel}Correo Electrónico{endLabel}<span class="focus-border"></span>'])->input('email', ['class' => 'form-control effect-16', 'autofocus' => true]) ?>

                        <?= $form->field($model, 'password', ['template' => '{input}{beginLabel}Contraseña{endLabel}<span class="focus-border"></span>'])->input('password', ['class' => 'form-control effect-16']) ?>

                        <?= $form->field($model, 'rememberMe')->checkbox([
                            'template' => "<div>{input}{label}</div>\n<div>{error}</div>",
                        ]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Inicia Sesión', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>

                    <div style="color:#999;">
                        You may login with <strong>admin@yii.com/admin</strong> or <strong>demo@yii.com/demo</strong>.<br>
                        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
                    </div>
                </div>

                
            </div>
        </div>

    </div>

</section>
