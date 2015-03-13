<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'full_name',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textAreaRow($model,'present_address',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'nationality',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'phone',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'service_type',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'car_type',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'number_of_people',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'passport_no',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'national_id_no',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'trip_start',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'trip_end',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'message',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'created_on',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
