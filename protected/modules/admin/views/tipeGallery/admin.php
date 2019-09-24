<?php
$this->breadcrumbs=array(
	'Tipe Galleries'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TipeGallery','url'=>array('index')),
	array('label'=>'Add TipeGallery','url'=>array('create')),
);
?>

<h1>Manage Tipe Galleries</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tipe-gallery-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama',
		'sorts',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
