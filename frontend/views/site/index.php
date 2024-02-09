<?php

use yii\helpers\html;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">
<?php if(yii::$app->session->hasFlash('message')): ?>
    <div class="alert alert-dismissible alert-success" bis_skin_checked="1">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    
    <?php echo yii::$app->session->getFlash('message');?>

    </div>
    <?php endif; ?>

    <div class="bg-transparent rounded-3">
        <div class="container-fluid py-5 text-center">
            <div class="jumbotron">
            <h1 style="color:#337ab7">Yii2 Crud Application</h1>
            </div>
        </div>
    </div>

    <div class="body-content">
        <div class="row">
            <span style="margin-bottom:20px;"><?= Html::a('Create', ['/site/create'], ['class' => 'btn btn-primary'])?></span>

        <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($projects) > 0) : ?>
                        <?php foreach($projects as $project):?>
                    <tr class="table-active">
                    <th scope="row"><?php echo $project->id; ?></th>
                    <td><?= Html::encode($project->title) ?></td>
                    <td><?php echo $project->description; ?></td>
                    <td><?php echo $project->category; ?></td>
                    <td>
                        <span><?= Html::a('View', ['view', 'id' =>$project->id], ['class' => 'badge rounded-pill bg-primary']) ?></span>
                        <span><?= Html::a('Update', ['update', 'id' =>$project->id], ['class' => 'badge rounded-pill bg-secondary']) ?></span>
                        <span><?= Html::a('Delete', ['delete', 'id' =>$project->id], ['class' => 'badge rounded-pill bg-danger']) ?></span>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td>No Record Found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
                </table>
        </div>

    </div>
</div>
