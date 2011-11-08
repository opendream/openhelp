<?php

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>new CArrayDataProvider($model->needs),
    'columns'=>array('item.name','amount', 'detail'),
));