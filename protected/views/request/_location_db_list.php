<?php foreach ($locationList as $location): ?>
<article class="db-list">
  <hgroup class="db-item1">
    <?php echo LocationHtml::locationView($location['id'], array('style' => 'endLevelLink')); ?>
  </hgroup> <!-- /db-item1 -->

  <?php if ($extraDouble): ?>
  <div class="db-item2">
      <table>
        <tbody>
        <?php foreach ($extraDouble as $key => $row): ?>
        <tr>
          <td id="extra-double-label-<?php echo $key; ?>" class="extra-double-label"><?php echo $row['label']; ?></td>
          <td class="extra-double-input">
            <span id="extra-double-prefic-<?php echo $key; ?>" class="extra-double-prefix"><?php echo $row['prefix']; ?></span>
            <span id="extra-double-value-<?php echo $key; ?>" class="extra-double-value">
              <?php echo $location['extra_double'.$key]; ?>
            </span>
            <span id="extra-double-suffix-<?php echo $key; ?>" class="extra-double-suffix"><?php echo $row['suffix']; ?></span>
          </td>
        </tr>
        <?php endforeach ?>
        </tbody>
      </table>
  </div>
  <?php endif ?>
  <?php if (!isset($hideNeed) || !$hideNeed): ?>
    <div class="db-item3">
      <ul>
        <?php $itemDetails = WidgetManager::getItemDetails($location['id']);?>
        <?php foreach ($itemDetails as $item): ?>
        <li class="need-<?php echo $item['id']; ?>">
          <img 
            src="<?php echo bu($item['image_url']); ?>" 
            alt="<?php echo $item['name']; ?>" 
            title="<?php echo $item['name']; ?>" 
            class="<?php echo $item['amount']? 'active': 'in-active'; ?>"/>
          <div class="tooltip-popup"><?php echo $item['name']; ?> <?php echo $item['amount']; ?></div>
        </li>
        <?php endforeach ?>
      </ul>
    </div> <!-- /db-item3 -->
  <?php endif ?>
</article><!-- /db-list -->
<?php endforeach ?>