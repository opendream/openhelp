<div class="db-list">
  <hgroup class="db-item1">
    <table>
      <tbody>
      <tr>
        <td class="extra-double-label">
          <?php echo t('ID'); ?>
        </td>
        <td class="extra-double-input">
            <a href="<?php echo bu(); ?>/webform/${webform_id}">${webform_id}</a>
        </td>
      </tr>
      <tr>
        <td class="extra-double-label">
          <?php echo t('Date'); ?>
        </td>
        <td class="extra-double-input">
          ${date_created}
        </td>
      </tr>
      <tr>
        <td class="extra-double-label">
          <?php echo t('Author'); ?>
        </td>
        <td class="extra-double-input">
          ${username}
        </td>
      </tr>
      </tbody>
    </table>
	</hgroup> <!-- /db-item1 -->
	  <div class="db-item2">
      <?php
      $levels = array_reverse(Yii::app()->params['locationDisplay']);
      $firstLevel = array_shift($levels);
      ?>
      <table>
        <tbody>
          <tr class="first">
            <td class="label">
              <?php echo Yii::t('locale', $firstLevel); ?>
            </td>
            <td class="<?php echo $firstLevel; ?>">
              <a href="<?php echo bu(); ?>/webform/${webform_id}">
                ${<?php echo $firstLevel; ?>}
              </a>
            </td>
          </tr>
          <?php foreach ($levels as $level): ?>
          <tr>
            <td class="label">
              <?php echo Yii::t('locale', $level); ?>
            </td>
            <td class="<?php echo $level; ?>">
              ${<?php echo $level; ?>}
            </td>
          </tr>
          <?php endforeach ?>    
        </tbody>
      </table>
    </div>
</div>