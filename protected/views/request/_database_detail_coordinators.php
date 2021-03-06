<section class="st-request drop-shadow curved curved-hz-1">
    <h2>ข้อมูลพื้นที่</h2>
    <p><?php echo $location_text ?></p>
    <h2>ผู้ประสานงานในพื้นที่</h2>
    <table class="zebra-striped request_coordinators">
        <thead>
          <tr><th>ชื่อ - นามสกุล</th><th>ตำแหน่ง</th><th>เบอร์โทรศัพท์</th><th>หมู่บ้าน</th></tr>
        </thead>
        <tbody>
        <?php foreach ($coordinators as $person): ?>
          <tr><td><?php echo $person['fullname'] ?></td><td><?php echo $person['position']?></td><td><?php echo $person['tel'] ?></td><td><?php echo $person['extra_location0'] ?></td></tr>
        <?php endforeach ?>
        </tbody>
    </table>
    <div class="request_extra_text">
    <?php foreach ($allExtraTexts as $label => $value): ?>  
      <?php if (!empty($value)): ?>
        <div>
        <h2><?php echo $label ?></h2>
            <ul>
            <?php foreach ($value as $node): ?>
                <li><?php echo $node; ?></li>
            <?php endforeach ?>
            </ul>
        </div><!-- /sth -->
      <?php endif ?>
    <?php endforeach ?>
    </div>
</section> <!-- /st-detail -->
<?php     
    Yii::app()->clientScript->registerScript('odd_even',"
    $('tr:odd').addClass('odd');
    $('tr:even').addClass('even');
    ",CClientScript::POS_READY);
?>
