<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'tb-brosur-form',
    'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>
<?php echo $form->errorSummary($model); ?>
<div class="widget">
<h4 class="widgettitle">Data Brosur</h4>
<div class="widgetcontent">
	<?php echo $form->textFieldRow($model,'titles',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->fileFieldRow($model,'image',array(
	'hint'=>'<b>Note:</b> Ukuran gambar adalah 600 x 600px. <br> Gambar yang lebih besar akan ter-crop otomatis, tolong upload foto ukuran horizontal')); ?>
	<?php if ($model->scenario == 'update'): ?>
	<div class="control-group">
		<label class="control-label">&nbsp;</label>
		<div class="controls">
		<div style="max-width: 25%;">
		<img class="img-polaroid" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(600,600, '/images/brosur/'.$model->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>"/>
		</div>
		</div>
	</div>
	<?php endif; ?>

	<?php echo $form->fileFieldRow($model,'files',array(
	'hint'=>'<b>Note:</b> Max upload size 3Mb.')); ?>
	<?php if ($model->scenario == 'update'): ?>
	<div class="control-group">
		<label class="control-label">&nbsp;</label>
		<div class="controls">
		<a href=""></a>
		</div>
	</div>
	<?php endif; ?>

	<?php echo $form->textFieldRow($model,'sort',array('class'=>'span5')); ?>

		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Add' : 'Save',
		)); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			// 'buttonType'=>'submit',
			// 'type'=>'info',
			'url'=>CHtml::normalizeUrl(array('index')),
			'label'=>'Batal',
		)); ?>
</div>
</div>
<div class="alert">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Warning!</strong> Fields with <span class="required">*</span> are required.
</div>

<?php $this->endWidget(); ?>
