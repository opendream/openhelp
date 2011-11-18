<article class="view <?php echo ($index % 2)? 'event': 'odd'; ?>">
  <span class="date-time"><?php echo date('d/m/Y - H:i', strtotime($data->date_created)); ?></span>
  <p class="title"><?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?></p>
  <p class="desc"><?php echo truncate_utf8(trim(str_replace(array("\r", "\n", "\c"), array("", "", ""), strip_tags($data->detail))), 700, true, true); ?></p>
</article>