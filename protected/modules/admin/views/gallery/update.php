<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-tag',
	'title'=>'Projects',
	'subtitle'=>'Data Projects',
);

$this->menu=array(
	array('label'=>'List Projects', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Projects', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Projects', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php echo $this->renderPartial('_form',array('model'=>$model, 'modelDesc'=>$modelDesc, 'modelImage'=>$modelImage)); ?>
