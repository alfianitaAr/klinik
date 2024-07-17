<?php
/* @var $this TindakanController */
/* @var $model Tindakan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kode_tindakan'); ?>
		<?php echo $form->textField($model,'kode_tindakan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_tindakan'); ?>
		<?php echo $form->textField($model,'nama_tindakan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deskripsi'); ?>
		<?php echo $form->textField($model,'deskripsi',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->