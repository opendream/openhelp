<?php
/**
* Location Test
*/
class LocationTest extends CDbTestCase
{
    
    public $fixtures=array('locations'=>'Location',);


    function testRule()
    {
        // code
        $locationRule = Yii::app()->params['location'];
        $this->assertTrue(is_array($locationRule));
    }

    function testLocationFixture() {
    	$this->assertEquals(3, count($this->locations));
    	$this->assertEquals(3, count(Location::model()->findAll()));
    	$this->assertEquals('กรุงเทพและปริมณฑล', Location::model()->findByPk(1)->level0);
    }
}
