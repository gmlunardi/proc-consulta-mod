<?php
$this->breadcrumbs=array(
	'Municipios'=>array('pesquisa'),
	$model->nome,
); ?>

<h1>View Municipio <?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'nome',
		array(
                    'name' => 'Regional',
                    'value' => Regional::model()->findByPk($model->regional_id)->sigla.' - '. Regional::model()->findByPk($model->regional_id)->nome_associacao
                ),
                array(
                    'name' => 'Concluintes 1 Edicao',
                    'type' => 'raw',
                    'value' => $this->printaCursistas($model->id, '1')
                ),
                array(
                    'name' => 'Concluintes 2 Edicao',
                    'type' => 'raw',
                    'value' => $this->printaCursistas($model->id, '2')
                )
),
)); ?>
