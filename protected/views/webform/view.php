<link rel="stylesheet" href="<?php echo bu('css/bootstrap.min.css'); ?>">

<div class="webform-content drop-shadow curved curved-hz-1">

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
  $this->getWebForm($type, $model, $Data)
); ?>

</div>
