<?php
$this->breadcrumbs=array(
	'Bookings'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'active' => true, 'icon' => 'icon-home'),
    array('label' => 'New', 'url' => array('create'), 'active' => true, 'icon' => 'icon-file'),
    array('label' => 'Details', 'url' => array('view', 'id' => $model->id), 'active' => true, 'icon' => 'icon-th-large'),
);
?>

<div class="form-actions">
    <h2><?php echo $model->full_name; ?></h2>
</div>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>