<?php
/* @var $this ObatController */
/* @var $data Obat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_obat')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_obat), array('view', 'id'=>$data->id_obat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_obat')); ?>:</b>
	<?php echo CHtml::encode($data->nama_obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_obat')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('guna_obat')); ?>:</b>
	<?php echo CHtml::encode($data->guna_obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pantangan')); ?>:</b>
	<?php echo CHtml::encode($data->pantangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />


</div>