<?php
$this->pageTitle = Yii::app()->name . ' - Contact Us';
$this->breadcrumbs = array(
    'Contact',
);
?>
<div class="welcome_heading">Contact Us</div>
<?php if (Yii::app()->user->hasFlash('contact')): ?>

    <?php
    $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts' => array('contact'),
    ));
    ?>
<?php else: ?>
    <p class="help-block"><strong>Address: </strong>House# 04, Level-3, 3rd Floor, Road# 12, Block# J, Baridhara, Dhaka, 1212 Bangladesh</p>
    <p class="help-block"><strong>Phone: </strong>9884311, 9880642,8860363</p>
    <p class="help-block"><strong>Email: </strong><a href="mailto:info@hellorentacar.com">info@hellorentacar.com</a></p>
    <hr />
    <p>If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.</p>
    <div class="form">
        <?php
        $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id' => 'contact-form',
            'type' => 'horizontal',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        ));
        ?>
        <p class="note">Fields with <span class="required">*</span> are required.</p>
        <?php echo $form->errorSummary($model); ?>
        <?php echo $form->textFieldRow($model, 'name'); ?>
        <?php echo $form->textFieldRow($model, 'email'); ?>
        <?php echo $form->textFieldRow($model, 'subject'); ?>
        <?php echo $form->textAreaRow($model, 'body', array('rows' => 6, 'class' => 'span6')); ?>
        <?php if (CCaptcha::checkRequirements()): ?>
            <?php
            echo $form->captchaRow($model, 'verifyCode', array(
                'hint' => 'Please enter the letters as they are shown in the image above.<br/>Letters are not case-sensitive.',
            ));
            ?>
        <?php endif; ?>
        <div class="form-actions">
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'label' => 'Submit',
                'type' => 'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                'size' => '', // null, 'large', 'small' or 'mini'
                'buttonType' => 'submit', //link, button, submit, submitLink, reset, ajaxLink, ajaxButton and ajaxSubmit
            ));
            ?>
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'label' => 'Reset',
                'type' => 'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                'size' => '', // null, 'large', 'small' or 'mini'
                'buttonType' => 'reset', //link, button, submit, submitLink, reset, ajaxLink, ajaxButton and ajaxSubmit
            ));
            ?>
        </div>
        <?php $this->endWidget(); ?>
    </div><!-- form -->
<?php endif; ?>