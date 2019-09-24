<?php
$this->breadcrumbs=array(
	'Tipe Project'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Tipe Project',
	'subtitle'=>'Add Tipe Project',
);

$this->menu=array(
	array('label'=>'List Tipe Project', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>