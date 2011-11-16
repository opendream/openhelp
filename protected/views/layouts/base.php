<!doctype html>
<html lang="th" dir="ltr">
<head>
	<meta charset="utf-8" />	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta name="title" content="Openhelp" />
	<meta name="description" content="<?php echo CHtml::encode($this->pageTitle); ?>" />
	<meta name="google-site-verification" content="" />
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" />		 	
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style-tambon.css" />
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.5.1.min.js"></script>
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body id="<?php echo $this->id.'-'.$this->action->id; ?>">
<div class="wrapper">
  <div id="header">
		<header>
			<h1 id = "logo"><a href="<?php bu('/'); ?>">Floodtambon</a></h1>
			<form id ="search">
				<label for = "">Search</label>
				<input type="text" class="form-text" value="Search"/>
				<input type="submit" value="&rsaquo;" class = "submit-search"/>
			</form>
			<nav>		
				<?php $this->widget('zii.widgets.CMenu',array(
    			'items'=>array(
    				array('label'=> Yii::t('locale','home'), 'url'=>array('/')),
    				array('label'=> Yii::t('locale','news'), 'url'=>array('/')),
    				array('label'=> Yii::t('locale','volunteer'), 'url'=>array('/')),
    				array('label'=> Yii::t('locale','database'), 'url'=>array('/request/location')),
    				array('label'=> Yii::t('locale','about'), 'url'=>array('/site/page', 'view'=>'about'), 'layout' => 'layout1'),
    				// array('label'=>'Contact', 'url'=>array('/site/contact')),
    				// array('label'=> Yii::t('locale','login'), 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
    				// array('label'=> Yii::t('locale','logout').' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
    			),
    		)); ?>
			</nav>	
		</header>
	</div> <!-- end header -->

  <?php echo $content; ?>

  <div id="footer">	
		<footer>
		  <?php $this->widget('zii.widgets.CMenu',array(
		    'id' => 'nav-footer',
  			'items'=>array(
  				array('label'=> Yii::t('locale','home'), 'url'=>array('/')),
  				array('label'=> Yii::t('locale','news'), 'url'=>array('/')),
  				array('label'=> Yii::t('locale','volunteer'), 'url'=>array('/')),
  				array('label'=> Yii::t('locale','database'), 'url'=>array('/request/location')),
  				array('label'=> Yii::t('locale','about'), 'url'=>array('/site/page', 'view'=>'about')),
  				// array('label'=>'Contact', 'url'=>array('/site/contact')),
  				// array('label'=> Yii::t('locale','login'), 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
  				// array('label'=> Yii::t('locale','logout').' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
  			),
  		)); ?>

			<div id="footer-copyright">
				<a href="http://creativecommons.org/licenses/by-nc-sa/3.0/th/"><img src="<?php echo bu('images/cc-80x15.png'); ?>" width="80" height="15" alt="สัญญาอนุญาต cc by-nc-sa" title="สัญญาอนุญาต cc by-nc-sa แสดงที่มา-ไม่ใช้เพื่อการค้า-อนุญาตแบบเดียวกัน 3.0 ประเทศไทย"></a>แสดงที่มา-ไม่ใช้เพื่อการค้า-อนุญาตแบบเดียวกัน 3.0 ประเทศไทย
			</div>

			<div id="develop">
				<p><small>พัฒนาระบบโดย<a href="http://www.opendream.co.th">โอเพ่นดรีม</a> สนับสนุนโดย openhelp</small></p>
			</div>

		</footer>
	</div> <!-- end footer-->

</div> <!-- end wrapper -->

  
</body>
</html>