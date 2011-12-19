<?php
$newModel = get_class($model);
$newModel = new $newModel;
$locations = $model->locations;
?>

<div id="location-multiple">
  <div id="location-selected">
    <?php
    $this->render('locationselected',array(
      "model" => $model,
    	"locations"=>$locations,
    	"join" => $join,
    ));
    ?>
  </div>
  <div id="location-hr">
    <?php
    $this->render('locationlist',array(
    	"model"=> $newModel,
    	"attribute"=>$attribute,
    	"join" => $join,
    	"multiple" => true,
    	"index" => $index,
    	"onclick" => $onclick,
    	"noinput" => true,
    ));
    ?>
  </div>
  <button id="location-add"><?php echo t('Add'); ?></button>
  <script type="text/javascript">
    var baseUrl = '<?php echo bu(''); ?>';
    var model = '<?php echo get_class($model); ?>';
    
    $('a.location-selected-delete').live('click', function (e) {
      e.preventDefault();
      $($(this).attr('href')).remove();
    });
    
    $('#location-add').click(function (e) {
      e.preventDefault();
      
      var levels = {};
      $('#location-hr select').each(function (i, item) {
        var value = $(item).val();
        var level = $(item).attr('id').replace('Location_', '');
        if (value) {
          levels[level] = value;
        }
      });
      
      $.getJSON(baseUrl + 'forms/getLocationFromLevels', {'levels': levels, 'model': model, 'json': 1}, function (resp) {
        $('#location-selected').append($(resp));
      });
      
    });
  </script>
</div>