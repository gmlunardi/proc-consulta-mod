

<h1>Escolha um município do Estado</h1>

<?php 
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'municipio-pesquisa-form',
    'htmlOptions'=>array('class'=>'well'),
    'type' => 'horizontal'

)); ?>

    <legend>Pesquisar concluintes do curso por Município</legend>
    
    <?php ?>
    
    <?php 
        $municipios = CHtml::listData(Municipio::model()->findAll(), 'id', 'nome');  
        echo $form->dropDownListRow($model, 'id', $municipios);
        
    ?>

    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'link', 'label' => 'Voltar', 'icon' => 'icon-chevron-left', 'url' => Yii::app()->baseUrl));?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'label' => 'Pesquisar', 'icon' => 'icon-search'));?>
    

<?php $this->endWidget(); ?>
