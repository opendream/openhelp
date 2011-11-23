<section class="st-need drop-shadow curved curved-hz-1">
	  <header><h2>สิ่งของที่ต้องการ</h2></header>
	  <ul>
	  <?php foreach ($items as $item): ?>
	  <li class="need-<?php print $item['id']?>">
           <img src="<?php echo bu() ?>/images/need-<?php echo $item['id'] ?>.png" alt="<?php echo $item['name'] ?>" title="<?php echo $item['name'] ?>" class="in-active"/>
            <div class="bar">
	            <div style="width: 0px;" width="<?php echo $item['percent'] ?>">
		            <span class="value"><?php echo $item['amount'] ?></span>
	            </div>
            </div>
		    <div class="tooltip-popup"> <?php echo $item['name'] ?> </div>
	  </li>
	  <?php endforeach; ?>
	  </ul>
</section> <!-- /st-need -->
<?php 
	$jq_animate = <<<JQ
	$('.bar > div').each(function(k, v) {
	  var self = $(this);
	  var bar = $(v).parent('div');
	  if ($(v).attr('width') < 12) {
	  	$(v).attr('width', 12);
	  }
	  var width = $(v).attr('width') * (bar.width() / 100);
	  $(v).width(width);
	  $('span.value', bar).delay(1500).fadeIn(500);
	  // $(this).animate({width:width, opacity: 1}, { queue: false, duration: 3000 });
	})
JQ;

	cs()->registerScript('jq_animate', $jq_animate, CClientScript::POS_READY);
 ?>	