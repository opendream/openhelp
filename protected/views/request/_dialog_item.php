<?php
	/* Input dialog with Javascript callback */
	$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
		'id'=>'addRItems',
		'options'=>array(
			'title'=> Yii::t('locale', 'Add New Need', array()),
			'autoOpen'=>false,
			'modal'=>true,
            'width' => '400px',			
			'buttons'=>array(
				Yii::t('locale', 'Add Item')=>'js:addRItem',
				Yii::t('locale', 'Cancel')=>'js:function(){ $(this).dialog("close");}',
			),
		),
	));
	echo '<div class="dialog_input">'.
			'<span>'. Yii::t('locale', 'Select Item', array()) .'</span>'.
			CHtml::activedropDownList($model,'id',Item::model()->ItemList, array('prompt' => Yii::t('locale', '- Select -'))) .
            '<div class= "item-wrapper">'.
	            '<span>'. Yii::t('locale', 'Amount', array()) .' ('.Yii::t('locale', 'Please enter numberic') .')</span>'.
	                CHtml::activeTextField(Need::model(), 'amount', array()).
            '</div>'.
            '<div class= "item-wrapper">'.
	            '<span>'. Yii::t('locale', 'Detail', array()) .'</span>'.
	                CHtml::activeTextArea(Need::model(), 'detail', array('row' => 6)).
            '</div>'.
		'</div>';
	$this->endWidget('zii.widgets.jui.CJuiDialog');

?>

<script type="text/javascript" >
	window.addRItem = function() {
	  var selected_amount, selected_detail, selected_id, selected_text;
	  $(this).dialog("close");
	  selected_text = $("#Request_id option:selected").text();
	  selected_id = $("#Request_id option:selected").val();
	  selected_amount = $('input#Need_amount').val();
	  selected_detail = $('textarea#Need_detail').val();
	  if (selected_id !== "") {
	    return $('table.needs').append("<tr>\n	<td class=\"row-item item-name\">\n		<span class='item-name'>" + selected_text + "</span>\n		<input type=\"hidden\" name=\"Request[items][id][]\" value=\"" + selected_id + "\">\n	</td>\n	<td class=\"row-item detail\">\n		<input type=\"text\" name=\"Request[items][amount][]\" value=\"" + selected_amount + "\">\n	</td>\n	<td>\n		<input type=\"text\" name=\"Request[items][detail][]\" value=\"" + selected_detail + "\">\n	</td>\n	<td>\n		<span class=\"item-delete delete\">\n			<a href=\"#\" alt=\"delete\" class=\"needs-item-delete delete\">delete</a>\n		</span>\n	</td>\n</tr>			");
	  }
	};
	$('.needs-item-delete').live('click', function(e) {
		e.preventDefault();
		var self = $(this);
		var needs_item = self.parent().parent().parent('tr');
		needs_item.remove();
		
	});        
</script>
<!-- 
<script type="text/coffeescript">
	window.addRItem = ()  ->
		$(this).dialog("close")
		selected_text = $("#Request_id option:selected").text() 
		selected_id = $("#Request_id option:selected").val() 
		selected_amount = $('input#Need_amount').val()
		selected_detail = $('textarea#Need_detail').val()
		$('table.needs').append """
			<tr>
				<td class="row-item item-name">
					<span class='item-name'>#{selected_text}</span>
					<input type="hidden" name="Request[items][id][]" value="#{selected_id}">
				</td>
				<td class="row-item detail">
					<input type="text" name="Request[items][amount][]" value="#{selected_amount}">
				</td>
				<td>
					<input type="text" name="Request[items][detail][]" value="#{selected_detail}">
				</td>
				<td>
					<span class="item-delete delete">
						<a href="#" alt="delete" class="needs-item-delete delete">delete</a>
					</span>
				</td>
			</tr>			
		""" if selected_id != ""
</script>
 -->
