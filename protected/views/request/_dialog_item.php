<?php
    /* Input dialog with Javascript callback */
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
        'id'=>'addRItems',
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
            '<span>fullname: </span>'.
            CHtml::activedropDownList($model,'id',Item::model()->ItemList, array('prompt' => Yii::t('locale', '- Select -'))) .
         '</div>';

    $this->endWidget('zii.widgets.jui.CJuiDialog');

?>

<script type="text/javascript" >
    function addRItem() {
        $(this).dialog("close");
        var inserted_val = $("#item-name-input").val();
        $("item-name-input").html("");
        $('.add-coordinator').before("<div class='coordinator-item'> <input name='Request[coordinators][]' type='text' value = '"+ inserted_val +"'/> <span class='detete'><a href='#' alt='delete' class='coordinator-item-delete delete'>delete</a></span></div>");
    }
    $('.coordinator-item-delete').live('click', function(e) {
        e.preventDefault();
        var self = $(this);
        var coordinate_item = self.parent().parent('div');
        coordinate_item.remove();
        
    });
</script>
<!-- 
<script type="text/coffeescript">
    window.addItem2 = () -> 
        $(this).dialog "close"
        inserted_val = $("#item-name-input").val()
        $("item-name-input").html ""
        $('.coordinator-list').append "<div class='coordinator-item'> <input name='Request[coordinators][]' type='text' value ='#{inserted_val}'/></div>"
</script>
 -->