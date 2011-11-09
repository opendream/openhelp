<?php
	/* Input dialog with Javascript callback */
	$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
		'id'=>'addRItems',
		'options'=>array(
			'title'=>'Add New Item',
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
	    return $('table.needs').append("<tr>\n	<td class=\"row-item item-name\">\n		<span class='item-name'>" + selected_text + "</span>\n	</td>\n	<td class=\"row-item detail\">\n		<input type=\"text\" name=\"Request[items][amount][]\" value=\"" + selected_id + "\">\n	</td>\n	<td>\n		<input type=\"text\" name=\"Request[items][detail][]\" value=\"DETAIL HARD CORDE\">\n	</td>\n	<td>\n		<span class=\"item-delete delete\">\n			<a href=\"#\" alt=\"delete\" class=\"needs-item-delete delete\">delete</a>\n		</span>\n	</td>\n</tr>			");
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
		$('table.needs').append """
			<tr>
				<td class="row-item item-name">
					<span class='item-name'>#{selected_text}</span>
				</td>
				<td class="row-item detail">
					<input type="text" name="Request[items][amount][]" value="#{selected_id}">
				</td>
				<td>
					<input type="text" name="Request[items][detail][]" value="DETAIL HARD CORDE">
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
