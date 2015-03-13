<?php
$this->breadcrumbs=array(
	'Bookings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Booking','url'=>array('index')),
	array('label'=>'Create Booking','url'=>array('create')),
	array('label'=>'Update Booking','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Booking','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Booking','url'=>array('admin')),
);
?>

<h1>View Booking #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'full_name',
		'present_address',
		'nationality',
		'email',
		'phone',
		'service_type',
		'car_type',
		'number_of_people',
		'passport_no',
		'national_id_no',
		'trip_start',
		'trip_end',
		'message',
		'created_on',
	),
)); ?>
