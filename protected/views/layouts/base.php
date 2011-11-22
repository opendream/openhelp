<!doctype html>
<html lang="th" dir="ltr">
<head>
	<meta charset="utf-8" />	
	<title><?php echo $this->pageTitle? CHtml::encode($this->pageTitle).'|': ''; ?><?php echo Yii::app()->params['siteName']; ?></title>
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
			<h1 id = "logo"><a href="<?php echo bu('/'); ?>">Floodtambon</a></h1>
			<nav>
			  <?php 
  			  $menu = array(
    				array('label'=> Yii::t('locale','home'), 'url'=>array('/')),
    				array('label'=> Yii::t('locale','database'), 'url'=>array('/request/location')),
    			);

    			$menu[0]['active'] = WidgetManager::isActiveFromUrl($menu[0], $_SERVER['REQUEST_URI']);
    			$menu[1]['active'] = WidgetManager::isActiveFromUrl($menu[1], $_SERVER['REQUEST_URI']);
    			foreach (Yii::app()->params['content'] as $type => $conf) {
    			  $_menu = array('label'=> Yii::t('locale',$conf['name']), 'url'=>array('/content?type='.$type));
				  $isActive = WidgetManager::isActiveFromUrl($_menu, $_SERVER['REQUEST_URI']);
				  $_menu['active'] = $isActive;
    			  $menu[] = $_menu;
    			}
    			foreach (Yii::app()->params['pages'] as $url => $page) {
    			  $_menu = array('label'=> Yii::t('locale',$page['label']), 'url'=>array('/page/'.$url));
				  $isActive = WidgetManager::isActiveFromUrl($_menu, $_SERVER['REQUEST_URI']);
				  $_menu['active'] = $isActive;
    			  $menu[] = $_menu;
    			}
  			?>
				<?php $this->widget('zii.widgets.CMenu',array('items'=>$menu, 'firstItemCssClass' => 'first', 'firstItemCssClass' => 'last')); ?>
			</nav>	
		</header>
	</div> <!-- end header -->

  <?php echo $content; ?>

  <div id="footer">	
		<footer>
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