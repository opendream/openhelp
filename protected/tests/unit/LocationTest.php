<?php
/**
* Location Test
*/
class LocationTest extends CDbTestCase
{
    
    function test()
    {
        // code
        $locationRule = Yii::app()->params['location'];
        $this->assertTrue(is_array($locationRule));
    }
}
