<?php
/* @var $this ObatController */
/* @var $model Obat */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_obat'); ?>
		<?php echo $form->textField($model,'id_obat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_obat'); ?>
		<?php echo $form->textField($model,'nama_obat',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_obat'); ?>
		<?php echo $form->textField($model,'jenis_obat',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'guna_obat'); ?>
		<?php echo $form->textField($model,'guna_obat',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pantangan'); ?>
		<?php echo $form->textField($model,'pantangan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keterangan'); ?>
		<?php echo $form->textField($model,'keterangan',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->