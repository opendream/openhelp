<?php

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>new CArrayDataProvider($model->coordinators),
    'columns'=>array('fullname','position', 'tel', 'detail'),
));