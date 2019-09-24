<?php
$this->breadcrumbs=array(
	'Tipe Project'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Tipe Project',
	'subtitle'=>'Edit Tipe Project',
);

$this->menu=array(
	array('label'=>'List Tipe Project', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Tipe Project', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Tipe Project', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>