<!doctype html>
<html lang="th" dir="ltr">
<head>
	<meta charset="utf-8" />	
	<title><?php echo $this->pageTitle? CHtml::encode($this->pageTitle).' | ': ''; ?><?php echo Yii::app()->params['siteName']; ?></title>
	<meta name="title" content="Openhelp" />
	<meta name="description" content="<?php echo CHtml::encode($this->pageTitle); ?>" />
	<meta name="google-site-verification" content="" />
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" />		 	
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style-tambon.css" />
	<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	<script type="text/javascript" src="<?php echo bu('js/jquery.form.js'); ?>"></script>
	<script type="text/javascript">
	 var isEquals = function(z, x)
   {
     var p;
     for(p in z) {
         if(typeof(x[p])=='undefined') {return false;}
     }

     for(p in z) {
         if (z[p]) {
             switch(typeof(z[p])) {
                 case 'object':
                     if (!isEquals(z[p], x[p])) { return false; } break;
                 case 'function':
                     if (typeof(x[p])=='undefined' ||
                         (p != 'equals' && z[p].toString() != x[p].toString()))
                         return false;
                     break;
                 default:
                     if (z[p] != x[p]) { return false; }
             }
         } else {
             if (x[p])
                 return false;
         }
     }

     for(p in x) {
         if(typeof(z[p])=='undefined') {return false;}
     }

     return true;
   }
   
   
   var colorToHex = function (c) {
     var m = /rgba?\(\s*(\d+)\s*,\s*(\d+)\s*,\s*(\d+)/.exec(c);
     return m ? '#' + (1 << 24 | m[1] << 16 | m[2] << 8 | m[3]).toString(16).substr(1) : c;
   }
   
	</script>
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body id="<?php echo $this->id.'-'.$this->action->id; ?>">
<div class="wrapper">
  <div id="header">
		<header>
			  
			  <?php if (isset(Yii::app()->params['logo'])): ?>
			    <h1 id="logo-img">
			      <a href="<?php echo bu('/'); ?>"><img src="<?php echo bu(Yii::app()->params['logo']); ?>" /></a>
			    </h1>
			  <?php else: ?>
			    <h1 id = "logo">
			      <a href="<?php echo bu('/'); ?>"><?php echo Yii::app()->params['siteName']; ?></a>
			    </h1>
			  <?php endif ?>
			</h1>
			<nav>
			  <?php 
  			  $menu = array(
    				array(
    				  'label'=> Yii::t('locale','home'), 
    				  'url'=>array('/'),
    				),
    			);
    			$menu[0]['active'] = WidgetManager::isActiveFromUrl($menu[0], $_SERVER['REQUEST_URI']);
    			
    			if (isset(Yii::app()->params['request']) && Yii::app()->params['request']) {    			
            $menu[] = array(
              'label'=> Yii::t('locale','database'), 
              'url'=>array('/request/location'),
            );
            $menu[1]['active'] = WidgetManager::isActiveFromUrl($menu[1], $_SERVER['REQUEST_URI']);
      			
				  }
    			if (isset(Yii::app()->params['content']) && Yii::app()->params['content']) {
    			  foreach (Yii::app()->params['content'] as $type => $conf) {
      			  $_menu = array('label'=> Yii::t('locale',$conf['name']), 'url'=>array('/content?type='.$type));
  				    $isActive = WidgetManager::isActiveFromUrl($_menu, $_SERVER['REQUEST_URI']);
  				    $_menu['active'] = $isActive;
      			  $menu[] = $_menu;
      			}
    			}
    			if (isset(Yii::app()->params['webforms']) && Yii::app()->params['webforms']) {
    			  foreach (Yii::app()->params['webforms'] as $type => $conf) {
      			  $_menu = array('label'=> Yii::t('locale',$conf['name']), 'url'=>array('/webform?type='.$type));
  				    $isActive = WidgetManager::isActiveFromUrl($_menu, $_SERVER['REQUEST_URI']);
  				    $_menu['active'] = $isActive;
      			  $menu[] = $_menu;
      			}
    			}
          if (isset(Yii::app()->params['pages']) && Yii::app()->params['pages']) {
            foreach (Yii::app()->params['pages'] as $url => $page) {
      			  $_menu = array('label'=> Yii::t('locale',$page['label']), 'url'=>array('/page/'.$url));
  				    $isActive = WidgetManager::isActiveFromUrl($_menu, $_SERVER['REQUEST_URI']);
  				    $_menu['active'] = $isActive;
      			  $menu[] = $_menu;
      			}
          }
          
  			?>
				<?php $this->widget('zii.widgets.CMenu',array('items'=>$menu, 'firstItemCssClass' => 'first', 'firstItemCssClass' => 'last')); ?>
				<?php
				if (Yii::app()->user->isGuest) {
          echo '<span class="user-detail">'.t('Login').'</span>';
          echo '<div class="user-manager">';
          echo $this->renderPartial('//site/login');
          echo '</div>';
        }
        else {
          $username = Yii::app()->user->getId();
          echo '<span class="user-detail">'.t('Hello').', <span class="user-name">'.$username.'</span></span>';
          echo '<ul class="user-manager">';
          foreach (Yii::app()->params['webforms'] as $name => $type) {
            if (Yii::app()->user->can('create', 'own', 'webform', $name)) {
              echo '<li>'.l(t('Create').' '.$type['name'], 'webform/create?type='.$name).'</li>';
            }
          }
          echo   '<li>'.l(t('Logout'), 'site/logout').'</li>';
          echo '</ul>';
        }
				?>
			</nav>	
		</header>
	</div> <!-- end header -->
	<?php if ($messages = Yii::app()->user->getFlashes()): ?>
	<div class="flash-message">
	 	<?php foreach($messages as $key => $message): ?>
    <div class="flash-<?php echo $key; ?>"><?php print_r($message); ?></div>
    <?php endforeach ?>
  </div>
	<?php endif ?>


  <?php echo $content; ?>

  <div id="footer">	
		<footer>
			<div id="footer-copyright">
				<a href="http://creativecommons.org/licenses/by-nc-sa/3.0/th/"><img src="<?php echo bu('images/cc-80x15.png'); ?>" width="80" height="15" alt="สัญญาอนุญาต cc by-nc-sa" title="สัญญาอนุญาต cc by-nc-sa แสดงที่มา-ไม่ใช้เพื่อการค้า-อนุญาตแบบเดียวกัน 3.0 ประเทศไทย"></a>แสดงที่มา-ไม่ใช้เพื่อการค้า-อนุญาตแบบเดียวกัน 3.0 ประเทศไทย
			</div>

			<div id="develop">
				<p><small>พัฒนาระบบโดย<a href="http://www.opendream.co.th">โอเพ่นดรีม</a> สนับสนุนโดย openhelp</small></p>
			</div>
			
			<div id="user-form">
				<?php
				  $userForm = array(
    				array('label'=> Yii::t('locale','login'), 'url'=>array('/site/login')),
    				array('label'=> Yii::t('locale','logout'), 'url'=>array('/site/logout')),
    			);
    			$this->widget('zii.widgets.CMenu',array('items'=>$userForm));

				?>
			</div>

		</footer>
	</div> <!-- end footer-->

</div> <!-- end wrapper -->
<script type="text/javascript">
  $('.user-detail').click(function () {
    $('.user-manager').toggle();
  })
</script>
<?php if (Yii::app()->params['googleAnalytic']): ?>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
var _gaq = _gaq || [];_gaq.push(["_setAccount", "<?php echo Yii::app()->params['googleAnalytic']; ?>"]);_gaq.push(["_trackPageview"]);(function() {var ga = document.createElement("script");ga.type = "text/javascript";ga.async = true;ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(ga, s);})();
//--><!]]>
</script>
<?php endif ?>


</body>
</html>