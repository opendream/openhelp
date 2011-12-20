<?php require 'protected/components/querypath/QueryPath.php'; ?>
<?php require 'protected/controllers/UserController.php'; ?>


<div class="general">
  <div class="meta-wrapper">
    <ul class="meta">
    <li>
      <span class="extra-double-label">
        <?php echo t('ID'); ?>
      </span>
      <span class="extra-double-input">
          <?php echo $model->id; ?>
      </span>
    </li>
    <li>
      <span class="extra-double-label">
        <?php echo t('Date'); ?>
      </span>
      <span class="extra-double-input">
        <?php echo date('d/m/Y', strtotime($model->date_created)); ?>
      </span>
    </li>
    <li>
      <span class="extra-double-label">
        <?php echo t('Author'); ?>
      </span>
      <span class="extra-double-input">
        <?php echo $model->user? $model->user->username: t('system'); ?>
      </span>
    </li>
    </ul>
  </div>
  
	<div class="location-list">
	  <?php foreach ($model->locations as $location): ?>
    <div class="location-item">
      <?php echo LocationHtml::locationView($location->id, array('style' => 'pain')); ?>
    </div>
	  <?php endforeach ?>
  </div>
  
</div>

<div id="map">
  <div id="map-canvas" style="width:598px; height: 245px;"></div>
</div>

<?php echo CGoogleApi::init(); ?>
<script type="text/javascript" src="<?php echo bu('js/markerclusterer.js'); ?>"></script>

<script type="text/javascript">

var mapLoadded = function () {
  var locations = <?php echo CJSON::encode($model->locations); ?>;
  var styles = <?php echo CJSON::encode($styles); ?>;
  
  var markers = [];
  
  var center = new google.maps.LatLng(13.768, 100.554);
  var options = {
    'scrollwheel': false,
    'zoom': 5,
    'center': center,
    'mapTypeId': google.maps.MapTypeId.ROADMAP
  };
  
  var map = new google.maps.Map($('#map-canvas').get(0), options);
  
  var bounds = new google.maps.LatLngBounds;
  
  $.each(locations, function (i, location) {
    var latLng = new google.maps.LatLng(location['lat'], location['lng']);
    var marker = new google.maps.Marker({'position': latLng});
    
    markers.push(marker);
    bounds.extend(latLng);
  });
  
  var markerCluster = new MarkerClusterer(map, markers, {'styles': styles});
  map.panTo(bounds.getCenter());
  if (markers.length > 1) {
    map.fitBounds(bounds);
  }
  else {
    map.setZoom(13);
  }
}

google.load("maps","3",{'callback':'mapLoadded','other_params':'sensor=false'});

</script>

<div class="render-wrapper">
  <?php if (!empty(Yii::app()->params['webforms'][$type]['sections'])): ?>
  <ul class="display-manager">
    <?php foreach (Yii::app()->params['webforms'][$type]['sections'] as $name => $section): ?>
    <?php if ($name == 'filter' || isset($datas[$name])): ?>
    <li><a href="#<?php echo $name; ?>-detail"><?php echo $section['title']; ?></a></li>
    <?php endif ?>
    <?php endforeach ?>
  </ul>
  <?php endif ?>

  <div id="tab-content">
    <?php foreach (Yii::app()->params['webforms'][$type]['sections'] as $name => $section): ?>
    <?php if ($name == 'filter'): ?>
      
    <div id="filter-detail">
      
      <?php 
      
      if (isset(Yii::app()->params['webforms'][$type]['profile']) && Yii::app()->params['webforms'][$type]['profile']['show']) {
        $user = User::model()->findByPk($model->user->id);
        $profileHtml = UserController::getProfile($user);
        $profileHtml = str_replace(array('<![CDATA[', ']]>'), array('', ''), $profileHtml);
        
        $profileHtml = str_replace(
          array(
            '<input',
            '<textarea',
            '<select',
          ), 
          array(
            '<input disabled="disabled"',
            '<textarea disabled="disabled"',
            '<select disabled="disabled"',
          ), 
          $profileHtml
        );
        $profileHtml = '<div class="webform-field">'.$profileHtml.'</div>';
        echo $profileHtml;

      }
      
      $data = safe_unserialize($model->data);
      $data = $data? ($data + array_fill(0, 4000, '')): array_fill(0, 4000, '');
      //print_r($data);
      $form = $this->getWebForm($type, $model, $data);
      
      $qp = qp($form);
      $group = $qp->find(Yii::app()->params['webforms'][$type]['detail']);
      foreach ($group as $key => $value) {
        $html = $value->html();
        $html = str_replace(
          array(
            '<input',
            '<textarea',
            '</textarea>',
            '<select',
          ), 
          array(
            '<input disabled="disabled"',
            '<div class="textarea"',
            '</div>',
            '<select disabled="disabled"',
          ),
          $html
        );
        echo $html = '<div class="webform-field">'.$html.'</div>';
        //echo mb_convert_encoding($html, 'iso-8859-1', 'auto');
      }
      
      $qp = qp($form);
      $styles = $qp->find('style, link');
      foreach ($styles as $style) {
        $html = $style->html();
        $html = str_replace(array('<![CDATA[', ']]>'), array('', ''), $html);
        
        echo mb_convert_encoding($html, 'iso-8859-1', 'auto');
      }
      
      ?>
      <fieldset class="webform-field">
        <legend><?php echo Yii::app()->params['webforms'][$type]['filters']['title']['detail']; ?></legend>
        <?php foreach ($filters as $name => $filter): ?>
          <?php if ($filter['widget'] == 'dropDown'): ?>
          <div class="filter-item filter-item-<?php echo $name; ?>">
            <div class="filter-item-label"><?php echo $filter['label']; ?></div>
            <div class="filter-item-description"><?php //echo $filter['description']; ?></div>
            <div class="filter-item-prefix"><?php echo $filter['prefix']; ?></div>
            <div class="filter-item-value"><?php echo $model->$name; ?></div>
          </div>
          <?php elseif ($filter['widget'] == 'checkBox' && $model->$name): ?>
          <div class="filter-item filter-item-<?php echo $name; ?>">
            <div class="filter-item-label"><?php echo $filter['label']; ?></div>
            <div class="filter-item-description"><?php //echo $filter['description']; ?></div>
            <div class="filter-item-prefix"><?php echo $filter['prefix']; ?></div>
          </div>
          <?php endif ?>

        <?php endforeach ?>
      </fieldset>
      
      <div class="full-description"><a href="<?php echo bu('webform/'.$model->id); ?>"><?php echo t('View full descritpion'); ?></a></div>
    </div>
    <?php else: ?>
    <?php if (isset($datas[$name])): ?>
    <div id="<?php echo $name; ?>-detail">
        <?php echo $datas[$name]; ?>
    </div>
    <?php endif ?>
    <?php endif ?>
    <?php endforeach ?>
  </div>

</div>

<script type="text/javascript" charset="utf-8">
  // Tab
  $('.display-manager a').click(function (e) {
    e.preventDefault();
    $('#tab-content > *').hide();
    $($(this).attr('href')).show();
    $('.display-manager a').removeClass('active');
    $(this).addClass('active');
  });
  $('.display-manager a').eq(0).click();
  
  //$('#filter-detail input').replaceWith(function () { return $('<span></span>').addClass($(this).attr('class')).html($(this).val()); });
  
</script>