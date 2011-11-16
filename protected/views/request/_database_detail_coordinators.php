<section class="st-request drop-shadow curved curved-hz-1">
    <h2>ข้อมูลพื้นที่</h2>
    <p><?php echo $location_text ?></p>
    <h2>ผู้ประสานงานในพื้นที่</h2>
    <table class="zebra-striped request_coordinators">
        <thead>
          <tr><th>ชื่อ - นามสกุล</th><th>ตำแหน่ง</th><th>เบอร์โทรศัพท์</th></tr>
        </thead>
        <tbody>
        <?php foreach ($coordinators as $person): ?>
          <tr><td><?php echo $person['fullname'] ?></td><td><?php echo $person['position']?></td><td><?php echo $person['tel'] ?></td></tr>
        <?php endforeach ?>
        </tbody>
    </table>
<?php foreach ($allExtraTexts as $label => $value): ?>
    <div class="col2">
    <h2><?php echo $label ?></h2>
        <ul>
        <?php foreach ($value as $node): ?>
            <li><?php echo $node['label'] ?></li>
        <?php endforeach ?>

        </ul>
    </div><!-- /sth -->
<?php endforeach ?>
</section> <!-- /st-detail -->
<?php     
    Yii::app()->clientScript->registerScript('odd_even',"
    $('tr:odd').addClass('odd');
    $('tr:even').addClass('even');
    ",CClientScript::POS_READY);
?>
