<?php $this->beginContent('//layouts/main'); ?>
      <div class="row-fluid">
        <div class="span3">
         <?php
			$this->beginWidget('zii.widgets.CPortlet') ?>
            
                            <img src="<?php echo Yii::app()->getBaseUrl().'/'?>images/logoOficial.png"/>
                            <br/><br/>
                            <div style="text-align: center"><h2>Estatísticas Gerais</h2>
                            
                            <h4>
                           
                                Total 1ª Edição: <?php echo Cursista::model()->countByAttributes(array('edicao' => '1'))?> cursistas.<br/>
                                
                                Total 2ª Edição: <?php echo Cursista::model()->countByAttributes(array('edicao' => '2-1'))?> cursistas.
                          
                            </h4>
                                </div>
                                
                                
                            
			<?php $this->endWidget(); ?>
		
		</div><!-- sidebar span3 -->

	<div class="span9">
		<div class="main">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
</div>
<?php $this->endContent(); ?>
