<h1>Escolha uma regional do Estado</h1>

<?php 
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'regional-pesquisa-form',
    'htmlOptions'=>array('class'=>'well'),
    'type' => 'horizontal'

)); ?>

    <legend>Pesquisar concluintes do curso por Regional</legend>
    
    <?php ?>
    
    <?php 
        $regionais = CHtml::listData(Regional::model()->findAll(), 'id', 'sigla');  
        echo $form->dropDownListRow($model, 'id', $regionais);
        
    ?>

    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'link', 'label' => 'Voltar', 'icon' => 'icon-chevron-left', 'url' => Yii::app()->baseUrl));?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'label' => 'Pesquisar', 'icon' => 'icon-search'));?>
    

<?php $this->endWidget(); ?>
