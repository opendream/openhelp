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