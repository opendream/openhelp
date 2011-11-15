<section class="st-need">
	  <header><h2>สิ่งของที่ต้องการ</h2></header>
	  <ul>
	  <?php foreach ($items as $item): ?>
	  <li class="need-<?php print $item['id']?>">
           <img src="<?php echo bu() ?>/images/need-<?php echo $item['id'] ?>.png" alt="$item['name']" title="$item['name']" class="in-active"/>
            <div class="bar">
	            <div style="width:50%;">
		            <span class="value"><?php echo $item['amount'] ?></span>
	            </div>
            </div>
	  </li>
	  <?php endforeach; ?>
	  </ul>
</section> <!-- /st-need -->
