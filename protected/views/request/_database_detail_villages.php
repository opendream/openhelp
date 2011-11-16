<section id="st-village" class="drop-shadow curved curved-hz-1">
    <header><h2>หมู่บ้านภายในตำบลนี้</h2></header>
    <ul>
    <?php foreach ($location_extra0s as $key => $village): ?>
      <li><a href="<?php echo bu() . "/request/requestView/". $location_id . "?village=". $village['label']?>"><?php echo $village['label'] ?></a></li>
    <?php endforeach ?>
    </ul>
  </section> <!-- end st-vilage-->
