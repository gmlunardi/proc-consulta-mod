<?php  #$this eh o meu controller aqui


?>

<h1><?php echo $model->nome_associacao; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data' => $model,
'attributes' => array(
		'sigla',
		'nome_associacao',
                array(
                    'label' => 'Total de cursistas concluintes na regional',
                    'value' => $this->contCursistas($model->id)
                ),
                array(
                    'label' => 'Municipios que participaram',
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

<?php  $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'link', 'label' => 'Voltar', 'icon' => 'icon-chevron-left', 'url' => 'index.php?r=regional/pesquisa')) ?>

