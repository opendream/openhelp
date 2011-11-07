<?php
$this->breadcrumbs=array(
	'Requests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Request', 'url'=>array('index')),
	array('label'=>'Manage Request', 'url'=>array('admin')),
);
?>

<h1>Create Request</h1>

<?php
    /* Input dialog with Javascript callback */
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
        'id'=>'addCoordinators',
        'options'=>array(
            'title'=>'Add New Item',
            'autoOpen'=>false,
            'modal'=>true,
            'buttons'=>array(
                'Add Item'=>'js:addItem',
                'Cancel'=>'js:function(){ $(this).dialog("close");}',
            ),
        ),
    ));

    echo '<div class="dialog_input">'.
    $this->renderPartial('_autocomplete', array('model'=>$model)) . 
    '</div>';
    $this->endWidget('zii.widgets.jui.CJuiDialog');

    echo CHtml::link('เพิ่มผู้ประสานงาน', '#', array('onclick'=>'$("#addCoordinators").dialog("open"); return false;',
    ));
?>
<?php /* include your relevant javascript somewhere */ ?>
<script type="text/javascript" >
    function addItem() {
        $(this).dialog("close");
        console.log($('#request-form'));
        // alert( $("#item-name-input").val() + " has been added");
        var inserted_val = $("#item-name-input").val();
        $("item-name-input").html("");
        $('.coordinator-list').append("<div class='coordinator-item'> <input name='Request[coordinators][]' type='text' value = '"+ inserted_val +"'/></div>");
    }
</script>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>