<?php

class EditorWidget extends CInputWidget
{
  public $attribute;
  public $default;
  public $width;
  public $height;

	public function run()
	{
	  $sp = explode(' ', str_replace(array('[', ']'), array(' ', ''), $this->attribute));
	  $options = array(
      "model"=>$sp[0], 
      "attribute"=>$sp[1],
      "defaultValue"=>$this->default,

		);
		$config = array(
			"height"=>isset($this->height)? $this->height: "400px",
			"width"=>isset($this->width)? $this->width: "100%",
			"toolbar"=>array(
			  array('Bold', 'Italic', 'Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink', 'Image'),
			),
      
      "filebrowserBrowseUrl" => Yii::app()->baseUrl.'/filemanager/browser/default/browser.html?Connector='.Yii::app()->baseUrl.'/filemanager/connectors/php/connector.php',
      "filebrowserImageBrowseUrl" =>  Yii::app()->baseUrl.'/filemanager/browser/default/browser.html?Type=Image&Connector='.Yii::app()->baseUrl.'/filemanager/connectors/php/connector.php',
		);
		$options['config'] = $config;
		
    echo '<div class="ckeditor-wrapper">';
    $this->widget('ext.ckeditor.CKEditorWidget', $options);
    echo '</div>';
	}
}
?>