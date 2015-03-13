<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <meta name="author" content="Optimo Solution, Dhaka, Bangladesh">
            <meta name="generator" content="Optimo Solution" />
            <?php Yii::app()->bootstrap->register(); ?>
            <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/favicon.ico" type="image/x-icon" />
            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
            <title><?php echo CHtml::encode($this->pageTitle); ?></title>     
            <?php $this->widget('ext.widgets.googleAnalytics.EGoogleAnalyticsWidget', array('account' => 'UA-44623106-1', 'domainName' => '.hellorentacar.com')); ?>
    </head>
    <body>              
        <div id="wrap">
            <div class="container">
                <div class="row-fluid" style="margin-bottom: 10px;">
                    <div class="span12">
                        <?php
                        $this->widget('bootstrap.widgets.TbNavbar', array(
                            'type' => '', // null or 'inverse'
                            //'brand' => 'Hello',
                            'brand' => CHtml::image(Yii::app()->theme->baseUrl . '/images/logo.png', 'Logo', array('style' => 'height:25px;')),
                            'brandUrl' => array('/site/index'),
                            'collapse' => true, // requires bootstrap-responsive.css
                            'items' => array(
                                array(
                                    'class' => 'bootstrap.widgets.TbMenu',
                                    'items' => array(
                                        array('label' => 'Home', 'url' => array('/site/index')),
                                        array('label' => 'Our Services', 'url' => array('/content/view', 'id' => 2)),
                                        array('label' => 'Quotes & Booking', 'url' => array('/booking/create')),
                                        array('label' => 'Rental Rate', 'url' => array('/content/view', 'id' => 3)),
                                        array('label' => 'Testimonial', 'url' => array('/content/view', 'id' => 4)),
                                        array('label' => 'FAQ', 'url' => array('/content/view', 'id' => 6)),
                                        array('label' => 'Terms & Conditions', 'url' => array('/content/view', 'id' => 5)),
                                        array('label' => 'Special Offer', 'url' => array('/content/view', 'id' => 7)),
                                        array('label' => 'Contact Us', 'url' => array('/site/contact')),
                                    ),
                                ),
                            ),
                        ));
                        ?>
                    </div>
                </div>
                <?php echo $content; ?>  
            </div>
            <div id="push"></div>
        </div>
        <div id="footer">
            <div class="container">                
                <p class="muted credit">
                    Copyright &copy; 2010 - <?php echo date('Y'); ?> <?php echo Yii::app()->params['copyrightName']; ?>. All rights reserved. Website designed and developed by <?php echo CHtml::link('Optimo Solution', 'http://www.optimosolution.com', array('target' => '_blank')); ?>
                </p>                 
            </div>
        </div>
    </body>
</html>