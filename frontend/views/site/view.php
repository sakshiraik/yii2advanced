
<?php

use yii\helpers\html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="bg-transparent rounded-3">
        <div class="container-fluid py-5 text-center">
            
            <h1 style="color:#337ab7">View Project</h1>
          
        </div>
    </div>

    <div class="body-content">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $project->title;?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
            <?php echo $project->description;?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
            <?php echo $project->category;?>
            </li>
        </ul>

        <div class="py-4 row col-md-2">                       
            <a href=<?php echo yii::$app->homeURL;?> class="btn btn-primary">Go Back</a>
        </div>  
    </div>
</div>