<?php
$this->breadcrumbs=array(
	'Regionals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Regional','url'=>array('index')),
	array('label'=>'Create Regional','url'=>array('create')),
	array('label'=>'View Regional','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Regional','url'=>array('admin')),
	);
	?>

	<h1>Update Regional <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>