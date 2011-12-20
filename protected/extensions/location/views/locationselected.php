<?php foreach ($locations as $location): ?>
<?php 
if (is_numeric($location)) {
  $id = $location;
}
else {
  $location = (object) $location;
  $id = $location->id;
}

$model = is_string($model)? $model: get_class($model);
?>
<div class="location-selected-item" id="location-selected-item-<?php echo $id ?>">
  <a class="location-selected-delete display-hide" href="#location-selected-item-<?php echo $id ?>">
    <?php echo t('Delete'); ?>
  </a>
  <span class="location-selected-labal">
    <?php echo LocationHtml::locationView($id); ?>
  </span>
  <input type="hidden" name="<?php echo $model; ?>[locations][]" value="<?php echo $id; ?>" />
</div>
<?php endforeach ?>
