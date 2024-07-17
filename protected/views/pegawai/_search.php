<?php
/* @var $this PegawaiController */
/* @var $model Pegawai */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_pegawai'); ?>
		<?php echo $form->textField($model,'id_pegawai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_pegawai'); ?>
		<?php echo $form->textField($model,'nama_pegawai',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wilayah'); ?>
		<?php echo $form->textField($model,'wilayah',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_kelamin'); ?>
		<?php echo $form->textField($model,'jenis_kelamin',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->