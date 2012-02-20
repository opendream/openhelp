<!doctype html>
<html lang="th" dir="ltr">
<head>
	<meta charset="utf-8" />
<?php
$au = str_replace('index.php', '', au(''));
?>
<link rel="stylesheet" href="<?php echo $au; ?>css/reset.css" />		 	
<link rel="stylesheet" href="<?php echo $au; ?>css/style-tambon.css" />
<script type="text/javascript" src="<?php echo $au; ?>js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="<?php echo $au; ?>js/jquery.form.js"></script>
<script type="text/javascript" src="<?php echo $au; ?>js/jReject.jquery.js"></script>
<script type="text/javascript">
$(document).ready( function() {
  $.reject({
    header: "<?php echo t('Did you know that your Internet Browser is out of date?'); ?>",
    paragraph1: "<?php echo t('Your browser is out of date, and may not be compatible with our website. A list of the most popular web browsers can be found below.'); ?>",
    paragraph2: "<?php echo t('Just click on the icons to get to the download page'); ?>",
    closeLink: "<?php echo t('Close This Window'); ?>",
    closeMessage: "<?php echo t('By closing this window you acknowledge that your experience on this website may be degraded'); ?>",
    closeCookie: true
  });
  var parent_url = document.location;
  var height = $(document).height();
  
  setInterval(function () {
    //console.log(height);
    parent.postMessage(height, parent_url);
  }, 1000);
  
  
});
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
</head>
<body>
<div class="container widget">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
</body>
</html>