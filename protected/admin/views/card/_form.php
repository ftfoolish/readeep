<?php
/* @var $this CardController */
/* @var $model Card */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'card-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'thumb'); ?>
		<?php $this->widget('ext.yii-elFinder.ServerFileInput', array(
		        'model' => $model,
		        'attribute' => 'thumb',
		        'connectorRoute' => 'elfinder/connector',
		    )
		);?>
		<?php echo $form->error($model,'thumb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->textField($model,'image',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'music'); ?>
		<?php echo $form->textField($model,'music',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'music'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'admin_id'); ?>
		<?php echo $form->textField($model,'admin_id'); ?>
		<?php echo $form->error($model,'admin_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->