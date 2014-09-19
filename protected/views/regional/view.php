<?php  #$this eh o meu controller aqui
$this->breadcrumbs=array(
	'Regional'=>array('pesquisa'),
	$model->sigla,
);
?>

<h1><?php echo $model->nome_associacao; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data' => $model,
'attributes' => array(
		'sigla',
		'nome_associacao',
                array(
                'name' => 'Municipios',
                'type' => 'raw',
                'value' => $this->printaMunicipios($model->id)
                ),
                array(
                  'name' => 'img',
                  'type' => 'raw',
                  'value' => CHtml::image(Yii::app()->getBaseUrl(true).'/images/'.$model->sigla.'.png')
                )  
                
),
)) ?>

