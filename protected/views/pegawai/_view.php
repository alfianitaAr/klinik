<?php
/* @var $this PegawaiController */
/* @var $data Pegawai */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pegawai')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pegawai), array('view', 'id'=>$data->id_pegawai)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_pegawai')); ?>:</b>
	<?php echo CHtml::encode($data->nama_pegawai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wilayah')); ?>:</b>
	<?php echo CHtml::encode($data->wilayah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kelamin')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_kelamin); ?>
	<br />


</div>