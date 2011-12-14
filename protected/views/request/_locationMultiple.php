<style>
  /* For fufu */
</style>


<div id="<?php echo $name; ?>-widget">
  <?php if (count($items) > 1): ?>
    <?php
      $options = array();
      foreach ($items as $id => $item) {
        $options["#$name-location-id-$id"] = $item['label'];
      }
      echo CHtml::dropDownList('control', current($options), $options, array('id' => $name.'-select'));
    ?>
  <?php endif ?>
  
  <div class="select-content">
    <?php foreach ($items as $id => $item): ?>
    <div class="<?php echo $name; ?>-location-id" id="<?php echo $name; ?>-location-id-<?php echo $id; ?>">
      <?php echo $item['html']; ?>
    </div>
    <?php endforeach ?>
  </div>
  
  <script type="text/javascript">
    (function () {
      var name = '<?php echo $name; ?>';
      $('#' + name + '-select').change(function () {
        $('.' + name + '-location-id').hide();
        $($(this).val()).show();
      })
      $('#' + name + '-select').change();
    }) ();
  </script>
</div>