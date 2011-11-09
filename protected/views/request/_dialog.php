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
      if (inserted_val !== '') {
        return $('table.coordinators tbody tr:last').after("<tr>\n    <td class='row-item name'>\n        <input name='Request[coordinators][name][]' type='text' value = '" + inserted_val + "'/> \n    </td>\n    <td class='row-item position'>\n        <input name='Request[coordinators][position][]' type='text' value = '" + _position + "'/> \n    </td>\n    <td class='row-item tel'>\n        <input name='Request[coordinators][tel][]' type='text' value = '" + _tel + "'/> \n    </td>\n    <td class='row-item detail'>\n        <input name='Request[coordinators][detail][]' type='text' value = '" + _detail + "'/> \n    </td>\n    <td class='row-item operations'\n        <span class='detete'>\n            <a href='#' alt='delete' class='coordinator-item-delete delete'>delete</a>\n        </span>                \n    </td>\n</tr>");
      }
    };

    $('.coordinator-item-delete').live('click', function(e) {
        e.preventDefault();
        var self = $(this);
        var coordinate_item = self.parent().parent('tr');
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
        $('table.coordinators tbody tr:last').after """
            <tr>
                <td class='row-item name'>
                    <input name='Request[coordinators][name][]' type='text' value = '#{inserted_val}'/> 
                </td>
                <td class='row-item position'>
                    <input name='Request[coordinators][position][]' type='text' value = '#{_position}'/> 
                </td>
                <td class='row-item tel'>
                    <input name='Request[coordinators][tel][]' type='text' value = '#{_tel}'/> 
                </td>
                <td class='row-item detail'>
                    <input name='Request[coordinators][detail][]' type='text' value = '#{_detail}'/> 
                </td>
                <td class='row-item operations'
                    <span class='detete'>
                        <a href='#' alt='delete' class='coordinator-item-delete delete'>delete</a>
                    </span>                
                </td>
            </tr>
        """ if inserted_val != ''
</script>
 -->