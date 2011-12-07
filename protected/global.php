<?php

/**
 * This is the shortcut to DIRECTORY_SEPARATOR
 */
defined('DS') or define('DS',DIRECTORY_SEPARATOR);
 
/**
 * This is the shortcut to Yii::app()
 */
function app()
{
    return Yii::app();
}
 
/**
 * This is the shortcut to Yii::app()->clientScript
 */
function cs()
{
    // You could also call the client script instance via Yii::app()->clientScript
    // But this is faster
    return Yii::app()->getClientScript();
}
 
/**
 * This is the shortcut to Yii::app()->user.
 */
function user() 
{
    return Yii::app()->getUser();
}
 
/**
 * This is the shortcut to Yii::app()->createUrl()
 */
function url($route,$params=array(),$ampersand='&')
{
    return Yii::app()->createUrl($route,$params,$ampersand);
}
 
/**
 * This is the shortcut to CHtml::encode
 */
function h($text)
{
    return htmlspecialchars($text,ENT_QUOTES,Yii::app()->charset);
}
 
/**
 * This is the shortcut to CHtml::link()
 */
function l($text, $url = '#', $htmlOptions = array()) 
{
    return CHtml::link($text, $url, $htmlOptions);
}
 
/**
 * This is the shortcut to Yii::t() with default category = 'stay'
 */
function t($message, $category = 'locale', $params = array(), $source = null, $language = null) 
{
    return Yii::t($category, $message, $params, $source, $language);
}
 
/**
 * This is the shortcut to Yii::app()->request->baseUrl
 * If the parameter is given, it will be returned and prefixed with the app baseUrl.
 */
function bu($url=null) 
{
    static $baseUrl;
    if ($baseUrl===null)
        $baseUrl=Yii::app()->getRequest()->getBaseUrl();
    return $url===null ? $baseUrl : $baseUrl.'/'.ltrim($url,'/');
}
 
/**
 * Returns the named application parameter.
 * This is the shortcut to Yii::app()->params[$name].
 */
function param($name) 
{
    return Yii::app()->params[$name];
}

function truncate_utf8($string, $len, $wordsafe = FALSE, $dots = FALSE) {

  if (mb_strlen($string) <= $len) {
    return $string;
  }

  if ($dots) {
    $len -= 4;
  }

  if ($wordsafe) {
    $string = mb_substr($string, 0, $len + 1); // leave one more character
    if ($last_space = strrpos($string, ' ')) { // space exists AND is not on position 0
      $string = substr($string, 0, $last_space);
    }
    else {
      $string = mb_substr($string, 0, $len);
    }
  }
  else {
    $string = mb_substr($string, 0, $len);
  }

  if ($dots) {
    $string .= ' ...';
  }

  return $string;
}


/**
* mixed safe_unserialize(string $serialized)
* Safely unserialize, that is only unserialize string, numbers and arrays, not objects
*
* @license Public Domain
* @author dcz (at) phpbb-seo (dot) com
*/
function safe_unserialize($serialized) {
    // unserialize will return false for object declared with small cap o
    // as well as if there is any ws between O and :
    if (is_string($serialized) && strpos($serialized, "\0") === false) {
        if (strpos($serialized, 'O:') === false) {
            // the easy case, nothing to worry about
            // let unserialize do the job
            return @unserialize($serialized);
        } else if (!preg_match('/(^|;|{|})O:[0-9]+:"/', $serialized)) {
            // in case we did have a string with O: in it,
            // but it was not a true serialized object
            return @unserialize($serialized);
        }
    }
    return false;
}


function imageSmoothArcDrawSegment (&$img, $cx, $cy, $a, $b, $aaAngleX, $aaAngleY, $color, $start, $stop, $seg)
{
    // Originally written from scratch by Ulrich Mierendorff, 06/2006
    // Rewritten and improved, 04/2007, 07/2007
    
    // Please do not use THIS function directly. Scroll down to imageSmoothArc(...).
    
    $fillColor = imageColorExactAlpha( $img, $color[0], $color[1], $color[2], $color[3] );
    
    $xStart = abs($a * cos($start));
    $yStart = abs($b * sin($start));
    $xStop  = abs($a * cos($stop));
    $yStop  = abs($b * sin($stop));
    $dxStart = 0;
    $dyStart = 0;
    $dxStop = 0;
    $dyStop = 0;
    if ($xStart != 0)
        $dyStart = $yStart/$xStart;
    if ($xStop != 0)
        $dyStop = $yStop/$xStop;
    if ($yStart != 0)
        $dxStart = $xStart/$yStart;
    if ($yStop != 0)
        $dxStop = $xStop/$yStop;
    if (abs($xStart) >= abs($yStart)) {
        $aaStartX = true;
    } else {
        $aaStartX = false;
    }
    if ($xStop >= $yStop) {
        $aaStopX = true;
    } else {
        $aaStopX = false;
    }
    //$xp = +1; $yp = -1; $xa = +1; $ya = 0;
    for ( $x = 0; $x < $a; $x += 1 ) {
        /*$y = $b * sqrt( 1 - ($x*$x)/($a*$a) );
        
        $error = $y - (int)($y);
        $y = (int)($y);
        
        $diffColor = imageColorExactAlpha( $img, $color[0], $color[1], $color[2], 127-(127-$color[3])*$error );*/
        
        $_y1 = $dyStop*$x;
        $_y2 = $dyStart*$x;
        if ($xStart > $xStop)
        {
            $error1 = $_y1 - (int)($_y1);
            $error2 = 1 - $_y2 + (int)$_y2;
            $_y1 = $_y1-$error1;
            $_y2 = $_y2+$error2;
        }
        else
        {
            $error1 = 1 - $_y1 + (int)$_y1;
            $error2 = $_y2 - (int)($_y2);
            $_y1 = $_y1+$error1;
            $_y2 = $_y2-$error2;
        }
        /*
        if ($aaStopX)
            $diffColor1 = imageColorExactAlpha( $img, $color[0], $color[1], $color[2], 127-(127-$color[3])*$error1 );
        if ($aaStartX)
            $diffColor2 = imageColorExactAlpha( $img, $color[0], $color[1], $color[2], 127-(127-$color[3])*$error2 );
        */
        
        if ($seg == 0 || $seg == 2)
        {
            $i = $seg;
            if (!($start > $i*M_PI/2 && $x > $xStart)) {
                if ($i == 0) {
                    $xp = +1; $yp = -1; $xa = +1; $ya = 0;
                } else {
                    $xp = -1; $yp = +1; $xa = 0; $ya = +1;
                }
                if ( $stop < ($i+1)*(M_PI/2) && $x <= $xStop ) {
                    $diffColor1 = imageColorExactAlpha( $img, $color[0], $color[1], $color[2], 127-(127-$color[3])*$error1 );
                    $y1 = $_y1; if ($aaStopX) imageSetPixel($img, $cx+$xp*($x)+$xa, $cy+$yp*($y1+1)+$ya, $diffColor1);
                    
                } else {
                    $y = $b * sqrt( 1 - ($x*$x)/($a*$a) );
                    $error = $y - (int)($y);
                    $y = (int)($y);
                    $diffColor = imageColorExactAlpha( $img, $color[0], $color[1], $color[2], 127-(127-$color[3])*$error );
                    $y1 = $y; if ($x < $aaAngleX ) imageSetPixel($img, $cx+$xp*$x+$xa, $cy+$yp*($y1+1)+$ya, $diffColor);
                }
                if ($start > $i*M_PI/2 && $x <= $xStart) {
                    $diffColor2 = imageColorExactAlpha( $img, $color[0], $color[1], $color[2], 127-(127-$color[3])*$error2 );
                    $y2 = $_y2; if ($aaStartX) imageSetPixel($img, $cx+$xp*$x+$xa, $cy+$yp*($y2-1)+$ya, $diffColor2);
                } else {
                    $y2 = 0;
                }
                if ($y2 <= $y1) imageLine($img, $cx+$xp*$x+$xa, $cy+$yp*$y1+$ya , $cx+$xp*$x+$xa, $cy+$yp*$y2+$ya, $fillColor);
            }
        }
        
        if ($seg == 1 || $seg == 3)
        {
            $i = $seg;
            if (!($stop < ($i+1)*M_PI/2 && $x > $xStop)) {
                if ($i == 1) {
                    $xp = -1; $yp = -1; $xa = 0; $ya = 0;
                } else {
                    $xp = +1; $yp = +1; $xa = 1; $ya = 1;
                }
                if ( $start > $i*M_PI/2 && $x < $xStart ) {
                    $diffColor2 = imageColorExactAlpha( $img, $color[0], $color[1], $color[2], 127-(127-$color[3])*$error2 );
                    $y1 = $_y2; if ($aaStartX) imageSetPixel($img, $cx+$xp*$x+$xa, $cy+$yp*($y1+1)+$ya, $diffColor2);
                    
                } else {
                    $y = $b * sqrt( 1 - ($x*$x)/($a*$a) );
                    $error = $y - (int)($y);
                    $y = (int) $y;
                    $diffColor = imageColorExactAlpha( $img, $color[0], $color[1], $color[2], 127-(127-$color[3])*$error );
                    $y1 = $y; if ($x < $aaAngleX ) imageSetPixel($img, $cx+$xp*$x+$xa, $cy+$yp*($y1+1)+$ya, $diffColor);
                }
                if ($stop < ($i+1)*M_PI/2 && $x <= $xStop) {
                    $diffColor1 = imageColorExactAlpha( $img, $color[0], $color[1], $color[2], 127-(127-$color[3])*$error1 );
                    $y2 = $_y1; if ($aaStopX)  imageSetPixel($img, $cx+$xp*$x+$xa, $cy+$yp*($y2-1)+$ya, $diffColor1);
                } else {
                    $y2 = 0;
                }
                if ($y2 <= $y1) imageLine($img, $cx+$xp*$x+$xa, $cy+$yp*$y1+$ya, $cx+$xp*$x+$xa, $cy+$yp*$y2+$ya, $fillColor);
            }
        }
    }
    
    ///YYYYY
    
    for ( $y = 0; $y < $b; $y += 1 ) {
        /*$x = $a * sqrt( 1 - ($y*$y)/($b*$b) );
        
        $error = $x - (int)($x);
        $x = (int)($x);
        
        $diffColor = imageColorExactAlpha( $img, $color[0], $color[1], $color[2], 127-(127-$color[3])*$error );
        */
        $_x1 = $dxStop*$y;
        $_x2 = $dxStart*$y;
        if ($yStart > $yStop)
        {
            $error1 = $_x1 - (int)($_x1);
            $error2 = 1 - $_x2 + (int)$_x2;
            $_x1 = $_x1-$error1;
            $_x2 = $_x2+$error2;
        }
        else
        {
            $error1 = 1 - $_x1 + (int)$_x1;
            $error2 = $_x2 - (int)($_x2);
            $_x1 = $_x1+$error1;
            $_x2 = $_x2-$error2;
        }
/*
        if (!$aaStopX)
            $diffColor1 = imageColorExactAlpha( $img, $color[0], $color[1], $color[2], 127-(127-$color[3])*$error1 );
        if (!$aaStartX)
            $diffColor2 = imageColorExactAlpha( $img, $color[0], $color[1], $color[2], 127-(127-$color[3])*$error2 );
*/
        
        if ($seg == 0 || $seg == 2)
        {
            $i = $seg;
            if (!($start > $i*M_PI/2 && $y > $yStop)) {
                if ($i == 0) {
                    $xp = +1; $yp = -1; $xa = 1; $ya = 0;
                } else {
                    $xp = -1; $yp = +1; $xa = 0; $ya = 1;
                }
                if ( $stop < ($i+1)*(M_PI/2) && $y <= $yStop ) {
                    $diffColor1 = imageColorExactAlpha( $img, $color[0], $color[1], $color[2], 127-(127-$color[3])*$error1 );
                    $x1 = $_x1; if (!$aaStopX) imageSetPixel($img, $cx+$xp*($x1-1)+$xa, $cy+$yp*($y)+$ya, $diffColor1);
                } 
                if ($start > $i*M_PI/2 && $y < $yStart) {
                    $diffColor2 = imageColorExactAlpha( $img, $color[0], $color[1], $color[2], 127-(127-$color[3])*$error2 );
                    $x2 = $_x2; if (!$aaStartX) imageSetPixel($img, $cx+$xp*($x2+1)+$xa, $cy+$yp*($y)+$ya, $diffColor2);
                } else {
                    $x = $a * sqrt( 1 - ($y*$y)/($b*$b) );
                    $error = $x - (int)($x);
                    $x = (int)($x);
                    $diffColor = imageColorExactAlpha( $img, $color[0], $color[1], $color[2], 127-(127-$color[3])*$error );
                    $x1 = $x; if ($y < $aaAngleY && $y <= $yStop ) imageSetPixel($img, $cx+$xp*($x1+1)+$xa, $cy+$yp*$y+$ya, $diffColor);
                }
            }
        }
        
        if ($seg == 1 || $seg == 3)
        {
            $i = $seg;
            if (!($stop < ($i+1)*M_PI/2 && $y > $yStart)) {
                if ($i == 1) {
                    $xp = -1; $yp = -1; $xa = 0; $ya = 0;
                } else {
                    $xp = +1; $yp = +1; $xa = 1; $ya = 1;
                }
                if ( $start > $i*M_PI/2 && $y < $yStart ) {
                    $diffColor2 = imageColorExactAlpha( $img, $color[0], $color[1], $color[2], 127-(127-$color[3])*$error2 );
                    $x1 = $_x2; if (!$aaStartX) imageSetPixel($img, $cx+$xp*($x1-1)+$xa, $cy+$yp*$y+$ya,  $diffColor2);
                } 
                if ($stop < ($i+1)*M_PI/2 && $y <= $yStop) {
                    $diffColor1 = imageColorExactAlpha( $img, $color[0], $color[1], $color[2], 127-(127-$color[3])*$error1 );
                    $x2 = $_x1; if (!$aaStopX)  imageSetPixel($img, $cx+$xp*($x2+1)+$xa, $cy+$yp*$y+$ya, $diffColor1);
                } else {
                    $x = $a * sqrt( 1 - ($y*$y)/($b*$b) );
                    $error = $x - (int)($x);
                    $x = (int)($x);
                    $diffColor = imageColorExactAlpha( $img, $color[0], $color[1], $color[2], 127-(127-$color[3])*$error );
                    $x1 = $x; if ($y < $aaAngleY  && $y < $yStart) imageSetPixel($img,$cx+$xp*($x1+1)+$xa,  $cy+$yp*$y+$ya, $diffColor);
                }
            }
        }
    }
}


function imageSmoothArc ( &$img, $cx, $cy, $w, $h, $color, $start, $stop)
{
    // Originally written from scratch by Ulrich Mierendorff, 06/2006
    // Rewritten and improved, 04/2007, 07/2007
    // compared to old version:
    // + Support for transparency added
    // + Improved quality of edges & antialiasing
    
    // note: This function does not represent the fastest way to draw elliptical
    // arcs. It was written without reading any papers on that subject. Better
    // algorithms may be twice as fast or even more.
    
    // what it cannot do: It does not support outlined arcs, only filled
    
    // Parameters:
    // $cx      - Center of ellipse, X-coord
    // $cy      - Center of ellipse, Y-coord
    // $w       - Width of ellipse ($w >= 2)
    // $h       - Height of ellipse ($h >= 2 )
    // $color   - Color of ellipse as a four component array with RGBA
    // $start   - Starting angle of the arc, no limited range!
    // $stop    - Stop     angle of the arc, no limited range!
    // $start _can_ be greater than $stop!
    // If any value is not in the given range, results are undefined!
    
    // This script does not use any special algorithms, everything is completely
    // written from scratch; see http://de.wikipedia.org/wiki/Ellipse for formulas.
    
    while ($start < 0)
        $start += 2*M_PI;
    while ($stop < 0)
        $stop += 2*M_PI;
    
    while ($start > 2*M_PI)
        $start -= 2*M_PI;
    
    while ($stop > 2*M_PI)
        $stop -= 2*M_PI;
    
    
    if ($start > $stop)
    {
        imageSmoothArc ( $img, $cx, $cy, $w, $h, $color, $start, 2*M_PI);
        imageSmoothArc ( $img, $cx, $cy, $w, $h, $color, 0, $stop);
        return;
    }
    
    $a = 1.0*round ($w/2);
    $b = 1.0*round ($h/2);
    $cx = 1.0*round ($cx);
    $cy = 1.0*round ($cy);
    
    $aaAngle = atan(($b*$b)/($a*$a)*tan(0.25*M_PI));
    $aaAngleX = $a*cos($aaAngle);
    $aaAngleY = $b*sin($aaAngle);
    
    $a -= 0.5; // looks better...
    $b -= 0.5;
    
    for ($i=0; $i<4;$i++)
    {
        if ($start < ($i+1)*M_PI/2)
        {
            if ($start > $i*M_PI/2)
            {
                if ($stop > ($i+1)*M_PI/2)
                {
                    imageSmoothArcDrawSegment($img, $cx, $cy, $a, $b, $aaAngleX, $aaAngleY , $color, $start, ($i+1)*M_PI/2, $i);
                }
                else
                {
                    imageSmoothArcDrawSegment($img, $cx, $cy, $a, $b, $aaAngleX, $aaAngleY, $color, $start, $stop, $i);
                    break;
                }
            }
            else
            {
                if ($stop > ($i+1)*M_PI/2)
                {
                    imageSmoothArcDrawSegment($img, $cx, $cy, $a, $b, $aaAngleX, $aaAngleY, $color, $i*M_PI/2, ($i+1)*M_PI/2, $i);
                }
                else
                {
                    imageSmoothArcDrawSegment($img, $cx, $cy, $a, $b, $aaAngleX, $aaAngleY, $color, $i*M_PI/2, $stop, $i);
                    break;
                }
            }
        }
    }
}

?>