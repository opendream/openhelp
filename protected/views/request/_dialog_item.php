<?php
    /* Input dialog with Javascript callback */
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
        'id'=>'addRItems',
        'options'=>array(
            'title'=> Yii::t('locale', 'Add New Item'),
            'autoOpen'=>false,
            'modal'=>true,
            'buttons'=>array(
                'Add Item'=>'js:addRItem',
                'Cancel'=>'js:function(){ $(this).dialog("close");}',
            ),
        ),
    ));
    echo '<div class="dialog_input">'.
            '<span>เลือกสิ่งของ: </span>'.
            CHtml::activedropDownList($model,'id',Item::model()->ItemList, array('prompt' => Yii::t('locale', '- Select -'))) .
         '</div>';

    $this->endWidget('zii.widgets.jui.CJuiDialog');

?>

<script type="text/javascript" >
    window.addRItem = function() {
      var selected_id, selected_text;
      $(this).dialog("close");
      selected_text = $("#Request_id option:selected").text();
      selected_id = $("#Request_id option:selected").val();
      if (selected_id !== "") {
        return $('.items').append("<div class='item-wrapper'> \n    <div class=\"selected_text\">\n        <span class='item-name'> " + selected_text + " </span>\n        <input type='hidden' name='Request[items][id][]' value='" + selected_id + "' >\n        amount: <input type='text' name='Request[items][amount][]' value='0' >\n    </div> \n    <span class='item-delete delete'>\n        <a href='#' alt='delete' class='needs-item-delete delete'>delete</a>\n    </span>\n</div>");
      }
    };    
    $('.needs-item-delete').live('click', function(e) {
        e.preventDefault();
        var self = $(this);
        var needs_item = self.parent().parent('div');
        needs_item.remove();
        
    });        
</script>
<!-- 
<script type="text/coffeescript">
    window.addRItem = ()  ->
        $(this).dialog("close")
        selected_text = $("#Request_id option:selected").text() 
        selected_id = $("#Request_id option:selected").val() 
        $('.items').append """
            <div class='item-wrapper'> 
                <div class="selected_text">
                    <span class='item-name'> #{selected_text} </span>
                    <input type='text' name='Request[items][id][]' value='#{selected_id}' >
                    <input type='text' name='Request[items][name][]' value='#{selected_text}' >
                    <input type='text' name='Request[items][amount][]' value='0' >
                </div> 
                <span class='item-delete delete'>
                    <a href='#' alt='delete' class='items-item-delete delete'>delete</a>
                </span>
            </div>
        """
</script>
 -->