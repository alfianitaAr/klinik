<?php
/* @var $this TindakanController */
/* @var $model Tindakan */

$this->breadcrumbs=array(
	'Tindakans'=>array('index'),
	$model->kode_tindakan,
);

$this->menu=array(
	array('label'=>'List Tindakan', 'url'=>array('index')),
	array('label'=>'Create Tindakan', 'url'=>array('create')),
	array('label'=>'Update Tindakan', 'url'=>array('update', 'id'=>$model->kode_tindakan)),
	array('label'=>'Delete Tindakan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_tindakan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tindakan', 'url'=>array('admin')),
);
?>

<h1>View Tindakan #<?php echo $model->kode_tindakan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_tindakan',
		'nama_tindakan',
		'deskripsi',
	),
)); ?>
