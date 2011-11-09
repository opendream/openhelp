<?php
   
    /* Input dialog with Javascript callback */
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
        'id'=>'addCoordinators',
        'options'=>array(
            'name' => 'Coordinator[fullname]',
            'title'=> Yii::t('locale', 'Add Coordinator'),
            'autoOpen'=>false,
            'modal'=>true,
            'buttons'=>array(
                'Add Item'=>'js:addCoordinator',
                'Cancel'=>'js:function(){ $(this).dialog("close");}',
            ),
        ),
    ));
    
    echo '<div class="add_coordinator_dialog">'.
            '<div class= "item-wrapper">'.
            '<span>fullname: </span>'.
                $this->renderPartial('_autocomplete', array('model'=>$model), true) . 
            '</div>'.
            '<div class= "item-wrapper">'.
            '<span>position: </span>'.
                CHtml::activeTextField(Coordinator::model(), 'position', array()).
            '</div>'.
            '<div class= "item-wrapper">'.
            '<span>tel: </span>'.
                CHtml::activeTextField(Coordinator::model(), 'tel', array()).
            '</div>'.
            '<div class= "item-wrapper">'.
            '<span>detail: </span>'.
                CHtml::activeTextArea(Coordinator::model(), 'detail', array('row' => 6)).
            '</div>'.
         '</div>';
         
    $this->endWidget('zii.widgets.jui.CJuiDialog');
?>

<script type="text/javascript">
    window.addCoordinator = function() {
      var inserted_val, _detail, _position, _tel;
      $(this).dialog("close");
      inserted_val = $.trim($("#item-name-input").val());
      _position = $(':input[name="Coordinator[position]"]').val();
      _tel = $(':input[name="Coordinator[tel]"]').val();
      _detail = $(':input[name="Coordinator[detail]"]').val();
      $("item-name-input").html("");
      if (inserted_val !== "") {
        // return $('.add-coordinator').before("<div class='coordinator-item'> \n    <div class='row-item'>\n        <span class='coordinator-item name'>name: </span>\n        <input name='Request[coordinators][name][]' type='text' value = '" + inserted_val + "'/> \n    </div>\n    <div class='row-item'>\n        <span class='coordinator-item position'>position: </span>\n        <input name='Request[coordinators][position][]' type='text' value = '" + _position + "'/> \n    </div>\n    <div class='row-item'>\n        <span class='coordinator-item tel'>tel: </span>\n        <input name='Request[coordinators][tel][]' type='text' value = '" + _tel + "'/> \n    </div>\n    <div class='row-item'>\n        <span class='coordinator-item detail'>Detail: </span>\n        <input name='Request[coordinators][detail][]' type='text' value = '" + _detail + "'/> \n    </div>\n    <span class='detete'>\n        <a href='#' alt='delete' class='coordinator-item-delete delete'>delete</a>\n    </span>\n</div> ");
        return $('.coordinators tbody').append("<tr><td><input name='Request[coordinators][name][]' type='text' value = '" + inserted_val + "'/></td><td><input name='Request[coordinators][position][]' type='text' value = '" + _position + "'/></td><td><input name='Request[coordinators][tel][]' type='text' value = '" + _tel + "'/></td><td><input name='Request[coordinators][detail][]' type='text' value = '" + _detail + "'/></td><td><span class='detete'><a href='#' alt='delete' class='coordinator-item-delete delete'>delete</a></span></td></tr></tbody></table>");
      }
    };

    $('.coordinator-item-delete').live('click', function(e) {
        e.preventDefault();
        var self = $(this);
        var coordinate_item = self.parent().parent('div');
        coordinate_item.remove();
        
    });    
</script>

<!-- 
<script type="text/coffeescript">
    window.addCoordinator = () ->
        $(this).dialog "close"
        inserted_val = $.trim $("#item-name-input").val()
        _position = $(':input[name="Coordinator[position]"]').val()
        _tel = $(':input[name="Coordinator[tel]"]').val()
        _detail = $(':input[name="Coordinator[detail]"]').val()
        $("item-name-input").html ""
        $('.add-coordinator').before """
            <div class='coordinator-item'> 
                <div class='row-item'>
                    <span class='coordinator-item name'>name: </span>
                    <input name='Request[coordinators][name][]' type='text' value = '#{inserted_val}'/> 
                </div>
                <div class='row-item'>
                    <span class='coordinator-item position'>position: </span>
                    <input name='Request[coordinators][position][]' type='text' value = '#{_position}'/> 
                </div>
                <div class='row-item'>
                    <span class='coordinator-item tel'>tel: </span>
                    <input name='Request[coordinators][tel][]' type='text' value = '#{_tel}'/> 
                </div>
                <div class='row-item'>
                    <span class='coordinator-item detail'>Detail: </span>
                    <input name='Request[coordinators][detail][]' type='text' value = '#{_detail}'/> 
                </div>
                <span class='detete'>
                    <a href='#' alt='delete' class='coordinator-item-delete delete'>delete</a>
                </span>
            </div> 
        """ if inserted_val != ''
</script>
 -->