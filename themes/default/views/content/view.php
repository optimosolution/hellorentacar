<?php
$this->pageTitle = $model->title . ' - ' . Yii::app()->name;
$this->breadcrumbs = array(
    $model->title,
);
?>
<div class="welcome_heading"><?php echo $model->title; ?></div>
<p><?php $this->widget('application.extensions.addThis.addThis', array('id' => 'id', 'username' => 'saidurwd@gmail.com', 'defaultButtonCaption' => 'Share', 'showDefaultButton' => true, 'showDefaultButtonCaption' => true, 'separator' => '|', 'htmlOptions' => array(), 'linkOptions' => array(), 'showServices' => array('separator', 'facebook', 'twitter', 'google', 'myspace', 'email', 'print'), 'showServicesTitle' => false, 'config' => array('ui_language' => 'en'), 'share' => array())); ?></p>
<p><?php echo $model->introtext; ?></p>
