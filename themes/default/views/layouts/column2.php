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
        <div class="booking_heading">Contact address</div>
        <p class="help-block"><strong>Address: </strong>House# 04, Level-3, 3rd Floor, Road# 12, Block# J, Baridhara, Dhaka, 1212 Bangladesh</p>
        <p class="help-block"><strong>Phone: </strong>9884311, 9880642,8860363</p>
        <p class="help-block"><strong>Email: </strong><a href="mailto:info@hellorentacar.com">info@hellorentacar.com</a></p>
        <div class="booking_heading">Our location map</div>
        <iframe width="270" height="700" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=House+number+04,+Road+number+12,+Block+J,+Baridhara,+Dhaka&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=49.310476,93.076172&amp;ie=UTF8&amp;hq=&amp;hnear=Road+No.+12,+Baridhara,+Dhaka,+Dhaka+Division,+Bangladesh&amp;t=m&amp;ll=23.807246,90.419219&amp;spn=0.006871,0.002897&amp;z=17&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=House+number+04,+Road+number+12,+Block+J,+Baridhara,+Dhaka&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=49.310476,93.076172&amp;ie=UTF8&amp;hq=&amp;hnear=Road+No.+12,+Baridhara,+Dhaka,+Dhaka+Division,+Bangladesh&amp;t=m&amp;ll=23.807246,90.419219&amp;spn=0.006871,0.002897&amp;z=17&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
    </div>
    <div class="span9">
        <?php echo $content; ?>
    </div>
</div>
<?php $this->endContent(); ?>