<?php
$this->breadcrumbs=array(
	'Bookings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Booking','url'=>array('index')),
	array('label'=>'Create Booking','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('booking-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bookings</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'booking-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'full_name',
		'present_address',
		'nationality',
		'email',
		'phone',
		/*
		'service_type',
		'car_type',
		'number_of_people',
		'passport_no',
		'national_id_no',
		'trip_start',
		'trip_end',
		'message',
		'created_on',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
