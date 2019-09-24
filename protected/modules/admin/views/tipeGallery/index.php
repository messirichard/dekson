<?php
$this->breadcrumbs=array(
	'Tipe Project',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Tipe Project',
	'subtitle'=>'Data Tipe Project',
);

$this->menu=array(
	array('label'=>'Add Tipe Project', 'icon'=>'plus-sign','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<h1>Tipe Project</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tipe-gallery-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		// 'id',
		'nama',
		// 'sorts',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete}',
		),
	),
)); ?>
