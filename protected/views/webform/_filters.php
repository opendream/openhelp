<form action="api/webform/list" method="get">
  <input type="hidden" name="type" value="<?php echo $type; ?>" />
  <ul>
  <?php foreach ($data as $name => $filter): ?>
    <li>
      <input type="checkbox" name="Allows[<?php echo $name; ?>]" value="1" id="<?php echo $name; ?>" />
      <label for="<?php echo $name; ?>"><?php echo $filter['label'] ?></label>
      <?php if ($filter['widget'] == 'dropDownList'): ?>
        <?php echo CHtml::dropDownList("Filters[$name]", '', WidgetManager::getFilterOptions($type, $name)) ?>
      <?php elseif (false): ?>
        <?php //TODO: make other widget ?>
      <?php endif ?>
    </li>
  <?php endforeach ?>
  </ul>
</form>
