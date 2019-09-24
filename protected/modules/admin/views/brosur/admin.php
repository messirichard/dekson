<?php
$this->breadcrumbs=array(
	'Tb Brosurs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TbBrosur','url'=>array('index')),
	array('label'=>'Add TbBrosur','url'=>array('create')),
);
?>

<h1>Manage Tb Brosurs</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tb-brosur-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'titles',
		'image',
		'files',
		'sort',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
