<?php
/**
* ItemCategory Test
*/
class ItemCategory extends CDbTestCase
{
   public function testGetCategoryOptions()
   {
     $categories = ItemCategory::model()->categoryOptions;
   }
}
