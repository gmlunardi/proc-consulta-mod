<?php



?>

<h1><?php echo $model->nome; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'nome',
		array(
                    'name' => 'Regional',
                    'value' => Regional::model()->findByPk($model->regional_id)->sigla.' - '. Regional::model()->findByPk($model->regional_id)->nome_associacao
                ),
                array(
                    'label' => 'Concluintes 1ª Edição',
                    'type' => 'raw',
                    'value' => $this->printaCursistas($model->id, '1')
                ),
                array(
                    'label' => 'Concluintes 2ª Edição',
                    'type' => 'raw',
                    'value' => $this->printaCursistas($model->id, '2-1')
                )
),
)); ?>

<?php  $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'link', 'label' => 'Voltar', 'icon' => 'icon-chevron-left', 'url' => 'index.php?r=municipio/pesquisa')) ?>