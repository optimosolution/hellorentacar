<?php
$this->breadcrumbs = array(
    'Bookings' => array('admin'),
    $model->id,
);

$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'active' => true, 'icon' => 'icon-home'),
    array('label' => 'New', 'url' => array('create'), 'active' => true, 'icon' => 'icon-file'),
    array('label' => 'Edit', 'url' => array('update', 'id' => $model->id), 'active' => true, 'icon' => 'icon-pencil'),
    array('label' => 'Delete', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?'), 'active' => true, 'icon' => 'icon-remove'),
);
?>

<div class="form-actions">
    <h2><?php echo $model->full_name; ?></h2>
</div>
<?php
$this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
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
));
?>
