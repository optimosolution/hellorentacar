<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
    <div class="span12">
        <object type="application/x-shockwave-flash" data="<?php echo Yii::app()->baseUrl; ?>/images/banner.swf" style="width:1170px;height:405px;margin:0px;">
            <param name="movie" value="<?php echo Yii::app()->baseUrl; ?>/images/banner.swf" />
            <param name="allowfullscreen" value="true" />
            <param name="allowscriptaccess" value="always" />
            <param name="wmode" value="opaque" />
            <param name="quality" value="high" />
            <param name="menu" value="false" />
        </object>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <?php if (isset($this->breadcrumbs)): ?>
            <?php
            $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                'links' => $this->breadcrumbs,
            ));
            ?>
        <?php endif ?>
        <?php
        $this->widget('bootstrap.widgets.TbAlert', array(
            'block' => true,
            'fade' => true,
            'closeText' => '&times;',
        ));
        ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span3">
        <div class="booking_heading">Car rental inquiry</div>
        <?php
        $model = new Booking;
        $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id' => 'booking-form',
            'action' => array('/booking/create'),
            'enableAjaxValidation' => false,
        ));
        ?>
        <?php echo $form->textFieldRow($model, 'full_name', array('class' => 'span12', 'maxlength' => 250, 'label' => false, 'placeholder' => 'Your Name')); ?>
        <?php echo $form->textAreaRow($model, 'present_address', array('rows' => 1, 'cols' => 35, 'class' => 'span12', 'label' => false, 'placeholder' => 'Present Address')); ?>
        <?php echo $form->DropDownListRow($model, 'nationality', CHtml::listData(Country::model()->findAll(array('condition' => 'published=1', "order" => "country_name")), 'id', 'country_name'), array('empty' => 'Nationality', 'label' => false, 'class' => 'span12')); ?>    
        <?php echo $form->textFieldRow($model, 'email', array('class' => 'span12', 'maxlength' => 100, 'label' => false, 'placeholder' => 'Email')); ?>
        <?php echo $form->textFieldRow($model, 'phone', array('class' => 'span12', 'maxlength' => 50, 'label' => false, 'placeholder' => 'Phone/Mobile')); ?>
        <?php echo $form->DropDownListRow($model, 'service_type', array('Daily Basis' => 'Daily Basis', 'Monthly Basis' => 'Monthly Basis'), array('empty' => 'Service Type', 'label' => false, 'class' => 'span12')); ?>    
        <?php echo $form->DropDownListRow($model, 'car_type', array('Microbus' => 'Microbus', 'Jeep' => 'Jeep', 'Toyota' => 'Toyota', 'Bmw' => 'Bmw', 'Hyundai Sonata' => 'Hyundai Sonata', 'Maruti Suzuki' => 'Maruti Suzuki', 'Runx' => 'Runx'), array('empty' => 'Car Type', 'label' => false, 'class' => 'span12')); ?>    
        <?php echo $form->textFieldRow($model, 'number_of_people', array('class' => 'span12', 'label' => false, 'placeholder' => 'Number of People')); ?>
        <?php echo $form->textFieldRow($model, 'passport_no', array('class' => 'span12', 'maxlength' => 50, 'label' => false, 'placeholder' => 'Passport No')); ?>
        <?php echo $form->textFieldRow($model, 'national_id_no', array('class' => 'span12', 'maxlength' => 50, 'label' => false, 'placeholder' => 'National ID No')); ?>
        <?php echo $form->textFieldRow($model, 'trip_start', array('class' => 'span12', 'label' => false, 'placeholder' => 'Trip Start Date')); ?>
        <?php echo $form->textFieldRow($model, 'trip_end', array('class' => 'span12', 'label' => false, 'placeholder' => 'Trip End Date')); ?>
        <?php echo $form->textAreaRow($model, 'message', array('rows' => 2, 'cols' => 50, 'class' => 'span12', 'label' => false, 'placeholder' => 'Message')); ?>
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'label' => $model->isNewRecord ? 'Send Message' : 'Save',
            'icon' => 'icon-envelope icon-white',
            'htmlOptions' => array(),
        ));
        ?>
        <?php $this->endWidget(); ?>
    </div>
    <div class="span9">
        <?php echo $content; ?>
    </div>
</div>
<?php $this->endContent(); ?>