<?php
$this->pageTitle = 'Booking Form - ' . Yii::app()->name;
$this->breadcrumbs = array(
    'Booking Form',
);
?>
<div class="welcome_heading">Booking Form</div>
<?php echo $this->renderPartial('_form', array('model' => $model)); ?>