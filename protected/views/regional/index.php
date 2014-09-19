<?php
$this->breadcrumbs=array(
	'Regionals',
);

$this->menu=array(
array('label'=>'Create Regional','url'=>array('create')),
array('label'=>'Manage Regional','url'=>array('admin')),
);
?>

<h1>Regionals</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
