<section class="st-need drop-shadow curved curved-hz-1">
	  <header><h2>สิ่งของที่ต้องการ</h2></header>
	  <ul>
	  <?php foreach ($items as $item): ?>
	  <li class="need-<?php print $item['id']?>">
           <img src="<?php echo bu() ?>/images/need-<?php echo $item['id'] ?>.png" alt="<?php echo $item['name'] ?>" title="<?php echo $item['name'] ?>" class="in-active"/>
            <div class="bar">
	            <div style="width: 0px>;" width="<?php echo $item['percent'] ?>">
		            <span class="value"><?php echo $item['amount'] ?></span>
	            </div>
            </div>
	  </li>
	  <?php endforeach; ?>
	  </ul>
</section> <!-- /st-need -->
