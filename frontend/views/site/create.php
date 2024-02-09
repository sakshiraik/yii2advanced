
<?php

use yii\helpers\html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="bg-transparent rounded-3">
        <div class="container-fluid py-5 text-center">
            
            <h1 style="color:#337ab7">Create Project</h1>
          
        </div>
    </div>

    <div class="body-content">
        <?php 
            $form = ActiveForm::begin()
        ?>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($project, 'title');?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="py-3 form-group">
                <div class="col-lg-6 ">
                <?= $form->field($project, 'description')->textarea(['rows' => 6]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="py-3 col-lg-6">
            <?php $items = ['e-commerce' =>'e-commerce', 'CMS'=>'CMS','MVC'=>'MVC','Framework'=>'Framework'];?>
            <?= $form->field($project, 'category')->dropDownList($items, ['prompt'=>'Select']);?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                        <?= Html::submitButton('Create Project', ['class'=>'btn btn-primary']); ?>
                    
                        <a href=<?php echo yii::$app->homeURL;?> class="btn btn-primary">Go Back</a>
                    
                </div>
            </div>
        </div>

            <?php ActiveForm::end()
            ?>
            

    </div>
</div>