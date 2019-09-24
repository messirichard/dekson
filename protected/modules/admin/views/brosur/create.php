<?php
$this->breadcrumbs=array(
	'Brosur'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Brosur',
	'subtitle'=>'Add Brosur',
);

$this->menu=array(
	array('label'=>'List Brosur', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>