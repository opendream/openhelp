<ul>
  <?php foreach (WidgetManager::getAllItemDetails() as $item): ?>
  <li class="need-<?php echo $item['id']; ?>">
    <img src="<?php echo bu($item['image_url']); ?>" alt="<?php echo $item['name']; ?>" title="<?php echo $item['name']; ?>" class="in-active"/>
    <div class="bar">
      <div style="width:<?php echo $item['percent']; ?>%;">
        <span class="value"><?php echo $item['amount']; ?></span>
      </div>
    </div>
  </li>
  <?php endforeach ?>

</ul>