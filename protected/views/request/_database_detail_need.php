<section class="st-need">
	  <header><h2>สิ่งของที่ต้องการ</h2></header>
	  <ul>
	  <?php foreach ($items as $key => $item): ?>
	  <li class="need-<?php print $key ?>">
	  	<?php print $item['name'] ?> <span><?php print $item['amount'] ?></span>
	  </li>
	  <?php endforeach; ?>
	  </ul>
</section> <!-- /st-need -->
