<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<h1>Bem-Vindo ao <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Aqui você poderá consultar quem já participou do curso do Pró-Conselho/UFSM.</p>

<p>Você pode realizar a consulta através de duas opções:</p>
<ul>
    <li><b>por município:</b> será mostrada uma listagem de quem participou do curso no município selecionado.</li>
    <li><b>por regional:</b> será mostrado o total de concluintes na regional bem como uma listagem dos municípios com seu respectivo total de concluintes.</li>
</ul>

<p>Escolha um dos botões abaixo no qual deseja realizar a pesquisa.</p>

<div id="botoes-pesquisa1">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'link',
        'url' => $this->createAbsoluteUrl('municipio/index'),
        'type' => 'primary',
        'label' => 'Pesquisar por Município',
        'icon' => 'glyphicon glyphicon-stats',
        'size' => 'normal'
            )
    );
    ?>
</div>
<br/>
<div id="botoes-pesquisa2">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'type' => 'info',
        'buttonType' => 'link',
        'url' => $this->createAbsoluteUrl('regional/pesquisa'),
        'label' => 'Pesquisar por Regional',
        'icon' => 'glyphicon glyphicon-asterisk',
            )
    );
    ?>
</div>


