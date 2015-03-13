<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'booking-form',
    'enableAjaxValidation' => false,
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'full_name', array('class' => 'span5', 'maxlength' => 250)); ?>
<?php echo $form->textAreaRow($model, 'present_address', array('rows' => 2, 'cols' => 35, 'class' => 'span5')); ?>
<?php echo $form->DropDownListRow($model, 'nationality', CHtml::listData(Country::model()->findAll(array('condition' => 'published=1', "order" => "country_name")), 'id', 'country_name'), array('empty' => '--please select--', 'class' => 'span5')); ?>    
<?php echo $form->textFieldRow($model, 'email', array('class' => 'span5', 'maxlength' => 100)); ?>
<?php echo $form->textFieldRow($model, 'phone', array('class' => 'span5', 'maxlength' => 50)); ?>
<?php echo $form->DropDownListRow($model, 'service_type', array('Daily Basis' => 'Daily Basis', 'Monthly Basis' => 'Monthly Basis'), array('empty' => '--please select--', 'class' => 'span5')); ?>    
<?php echo $form->DropDownListRow($model, 'car_type', array('Microbus' => 'Microbus', 'Jeep' => 'Jeep', 'Toyota' => 'Toyota', 'Bmw' => 'Bmw', 'Hyundai Sonata' => 'Hyundai Sonata', 'Maruti Suzuki' => 'Maruti Suzuki', 'Runx' => 'Runx'), array('empty' => '--please select--', 'class' => 'span5')); ?>    
<?php echo $form->textFieldRow($model, 'number_of_people', array('class' => 'span5')); ?>
<?php echo $form->textFieldRow($model, 'passport_no', array('class' => 'span5', 'maxlength' => 50)); ?>
<?php echo $form->textFieldRow($model, 'national_id_no', array('class' => 'span5', 'maxlength' => 50)); ?>
<?php echo $form->textFieldRow($model, 'trip_start', array('class' => 'span5')); ?>
<?php echo $form->textFieldRow($model, 'trip_end', array('class' => 'span5')); ?>
<?php echo $form->textAreaRow($model, 'message', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>
<div class="form-actions">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => $model->isNewRecord ? 'Submit' : 'Save',
        'icon' => 'icon-plus icon-white',
        'htmlOptions' => array(),
    ));
    ?>
</div>
<?php $this->endWidget(); ?>