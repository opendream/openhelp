<div class="db-list">
  
  <hgroup class="db-item1">

    <table>
      <tbody>
      <tr>
        <td class="extra-double-label">
          <?php echo t('ID'); ?>
        </td>
        <td class="extra-double-input">
            <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
        </td>
      </tr>
      <tr>
        <td class="extra-double-label">
          <?php echo t('Date'); ?>
        </td>
        <td class="extra-double-input">
          <?php echo CHtml::encode(date('d/m/Y', strtotime($data->date_created))); ?>
        </td>
      </tr>
      <tr>
        <td class="extra-double-label">
          <?php echo t('Author'); ?>
        </td>
        <td class="extra-double-input">
          <?php echo $data->user? CHtml::encode($data->user->username): t('none'); ?>
        </td>
      </tr>
      </tbody>
    </table>
	</hgroup> <!-- /db-item1 -->
	<?php if (!empty($data->locations)): ?>
	  <div class="db-item2">
      <?php echo LocationHtml::locationView($data->locations[0]['id'], array(
        'style' => 'endLevelLink',
        'link' => CController::createUrl("/webform/view/".$data->id),
      )); ?>
    </div>
	<?php endif ?>



</div>