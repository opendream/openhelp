<form id="webform-filters" action="<?php echo bu("api/webform?action=location&type=$type"); ?>" method="post">
  <ul>
  <?php foreach ($filters['data'] as $name => $filter): ?>
    <li>
      <input type="checkbox" name="Allows[<?php echo $name; ?>]" value="1" id="<?php echo $name; ?>" />
      <label for="<?php echo $name; ?>"><?php echo $filter['label'] ?></label>
      
      <?php if ($filter['widget'] == 'dropDownList'): ?>
        
        <?php echo CHtml::dropDownList(
          "Filters[$name]", 
          '', 
          WidgetManager::getFilterOptions($type, $name), 
          array('id' => $name.'-value')
        ) ?>
        
      <?php elseif (false): ?>
        
        <?php //TODO: make other widget ?>
      
      <?php endif ?>
      
    </li>
  <?php endforeach ?>
  </ul>
</form>

<script type="text/javascript" charset="utf-8">
  $.getJSON($('#webform-filters').attr('action'), function(locations) {
    console.log(locations);
  });
</script>