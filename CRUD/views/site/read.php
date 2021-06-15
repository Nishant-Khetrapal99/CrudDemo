<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <h1 style="color: #337ab7;">View Entry</h1>
    <div class="body-content">
    <ul class="list-group">
       <li class="list-group-item d-flex justify-content-between align-items-center">
         <?php echo $post->Name;?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $post->Remarks;?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $post->Class;?>
  </li>
</ul>
                 
    </div>
    <a href=<?php echo yii::$app->homeURL;?> class="btn btn-danger">Go Back</a>  
</div>

 