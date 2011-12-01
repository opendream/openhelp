<form id="webform-filters" action="api/webform?action=location&type=<?php echo $type; ?>" method="post">
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

<script type="text/javascript" charset="utf-8">
  $('#webform-filters').ajaxForm(function (resp) { 
    console.log(resp);
  });
</script>