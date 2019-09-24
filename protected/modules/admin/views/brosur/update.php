<?php
$this->breadcrumbs=array(
	'Brosur'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Brosur',
	'subtitle'=>'Edit Brosur',
);

$this->menu=array(
	array('label'=>'List Brosur', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Brosur', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Brosur', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>