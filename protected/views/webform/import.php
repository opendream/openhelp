<form class="webform-import" action="" method="post">
  <div class="import-files">
  <?php foreach ($existImport as $path): ?>
    <?php $label = explode('/', $path); $label = end($label); ?>
    <div class="import-file"><labal><input type="radio" value="<?php echo $path; ?>" name="path" /><?php echo $label; ?></labal></div>
  <?php endforeach ?>
  </div>
  <input type="submit" value="Import" />
</form>
