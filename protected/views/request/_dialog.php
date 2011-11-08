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
