<?php
/**
* ItemCategory Test
*/
class CategoryItemTest extends CDbTestCase
{
   public function testGetCategoryOptions()
   {
	   $categories = CategoryItem::model()->categoryOptions;
	   $this->assertTrue(is_array($categories));
   }
}
