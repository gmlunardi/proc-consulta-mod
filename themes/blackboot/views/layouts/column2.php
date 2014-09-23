<?php $this->beginContent('//layouts/main'); ?>
      <div class="row-fluid">
        <div class="span3">
         <?php
			$this->beginWidget('zii.widgets.CPortlet') ?>
            
                       <?php 
                       $total1 = Cursista::model()->countByAttributes(array('edicao' => '1'));
                       $total2 = Cursista::model()->countByAttributes(array('edicao' => '2-1'));
                            $this->widget('booster.widgets.TbHighCharts', array(
                                        'options' => array(
                                            'chart' => array(
                                                'type' => 'column'
                                            ),
                                            'title' => array(
                                                'text' => 'Estatísticas Gerais'
                                            ),
                                            'xAxis' => array(
                                                'categories' => ['Edição']
                                            ),
                                            'yAxis' => array(
                                                'title' => array(
                                                    'text' =>  'nº de cursistas concluintes',
                                                )
                                            ),
                                            'series' => array(
                                            [
                                                'name' => '1ª edição',
                                                'data' => [(int)$total1]
                                            ],
                                            [
                                                'name' => '2ª edição',
                                                'data' => [(int)$total2]
                                            ],
                                            )
                                        )

                                        )
                            );
                       ?>

			<?php $this->endWidget(); ?>
		
		</div><!-- sidebar span3 -->

	<div class="span9">
		<div class="main">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
</div>
<?php $this->endContent(); ?>
