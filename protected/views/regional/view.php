<?php
$this->breadcrumbs=array(
	'Regionals'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Regional','url'=>array('index')),
array('label'=>'Create Regional','url'=>array('create')),
array('label'=>'Update Regional','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Regional','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Regional','url'=>array('admin')),
);
?>

<h1>View Regional #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'sigla',
		'nome_associacao',
                array(
                  //'name' => 'img',
                    'type' => 'raw',
                   'value' => CHtml::image(Yii::app()->getBaseUrl(true).'/images/'.$model->sigla.'.png')
                )  
),
)); ?>
