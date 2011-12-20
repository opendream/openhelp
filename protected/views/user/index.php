<?php
$this->menu=array(
	array('label'=>t('Update'), 'url'=>array('update')),
);
?>

<div class="webform-content drop-shadow curved curved-hz-1">
  <div class="webform-field">

  <h1><?php echo $this->pageTitle; ?></h1>
  
  <?php echo str_replace(
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
    $this->getProfile($user)
  ); ?>
  </div>
</div>