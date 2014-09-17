<?php
$this->breadcrumbs=array(
	'Regionals'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Regional','url'=>array('index')),
array('label'=>'Manage Regional','url'=>array('admin')),
);
?>

<h1>Create Regional</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>