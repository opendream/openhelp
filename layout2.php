<?php $this->beginContent('//layouts/base'); ?>
	  <div class="content-manager">
	  	<?php
  			$this->beginWidget('zii.widgets.CPortlet', array(
  				'title'=>'Operations',
  			));
  			$this->widget('zii.widgets.CMenu', array(
  				'items'=>$this->menu,
  				'htmlOptions'=>array('class'=>'operations'),
  			));
  			$this->endWidget();
  		?>
	  </div>
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
<?php $this->endContent(); ?>