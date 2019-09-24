<?php
$this->breadcrumbs=array(
	'Brosur',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Brosur',
	'subtitle'=>'Data Brosur',
);

$this->menu=array(
	array('label'=>'Add Brosur', 'icon'=>'plus-sign','url'=>array('create')),
);
?>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>
    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>
<?php endif; ?>
<h1>Brosur</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tb-brosur-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		// 'id',
		'titles',
		// 'image',
		'files',
		// 'sort',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete}',
		),
	),
)); ?>
