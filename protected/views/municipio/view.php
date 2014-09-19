<?php
$this->breadcrumbs=array(
	'Municipios'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Municipio','url'=>array('index')),
array('label'=>'Create Municipio','url'=>array('create')),
array('label'=>'Update Municipio','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Municipio','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Municipio','url'=>array('admin')),
);
?>

<h1>View Municipio #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nome',
		'regional_id',
),
)); ?>
