<?php
// $Id: template.php,v 1.2.2.6 2009/05/22 20:25:24 jmburnz Exp $

/**
 * @file template.php
 */

/**
 * USAGE
 * 1. Rename each function to match your subthemes name,
 *    e.g. if you name your theme genesis_foo then the function
 *    name will be "genesis_foo_preprocess".
 * 2. Uncomment the required fucntion to use. You can delete the
 *    "sample_variable".
 */

/**
 * Override or insert variables into all templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered.
 */
/*
function genesis_SUBTHEME_preprocess(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
*/

/**
 * Override or insert variables into the page templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered.
 */
function genesis_thaihealth_preprocess_page(&$vars, $hook) {
  drupal_add_js(path_to_theme() .'/js/PluginDetect.js', 'theme');
  drupal_add_js(path_to_theme() .'/js/jReject.jquery.js', 'theme');
  
  $script = <<<HTML

$(document).ready( function() {
  $.reject({
    header: 'บราวเซอร์ของคุณควรได้รับการอัพเกรด',
    paragraph1: 'เว็บบราวเซอร์ของท่านตกรุ่น อาจทำงานได้ไม่ดีกับเว็บไซต์ของเรา ท่านสามารถดาวน์โหลดโปรแกรมรุ่นล่าสุดของเว็บบราวเซอร์ยี่ห้อต่างๆ ตามรายการที่แสดงด้านล่างนี้',
    paragraph2: 'คลิกที่รูปไอคอนอันใดอันหนึ่งเพื่อไปยังหน้าดาวน์โหลด',
    closeLink: 'คลิกที่นี่เพื่อปิดกรอบหน้าต่างนี้',
    closeMessage: 'ท่านสามารถเลือกปิดกรอบหน้าต่างโดยไม่อัพเกรดได้ โดยยอมรับปัญหาที่อาจเกิดขึ้นขณะใช้งานเว็บไซต์',
    closeCookie: true
  });
});

HTML;

  drupal_add_js($script, 'inline');
  $variables['scripts'] = drupal_get_js();

  // Set variables for the logo and site name for easy printing in templates.
  $vars['logo_alt']  = 'สำนักงานกองทุนสนับสนุนการสร้างเสริมสุขภาพ';
  $vars['logo_title']  = 'หน้าหลัก';
  $vars['logo_img']  = $vars['logo'] ? '<img src="'. check_url($vars['logo']) .'" alt="'. $vars['logo_alt'] .'" title="'. $vars['logo_title'] .'"/>' : '';
  $vars['site_logo'] = $vars['logo_img'] ? l($vars['logo_img'], '<front>', array('attributes' => array('rel' => 'home'), 'title' => $vars['logo_title'], 'html' => TRUE)) : '';
  //$vars['site_name'] = $vars['site_name'] ? l($vars['site_name'], '<front>', array('attributes' => array('rel' => 'home'), 'title' => t('Home page'))) : '';
}

/**
 * Override or insert variables into the node templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered.
 */
/*
function genesis_SUBTHEME_preprocess_node(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
*/

/**
 * Override or insert variables into the comment templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered.
 */
/*
function genesis_SUBTHEME_preprocess_comment(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
*/

/**
 * Override or insert variables into the block templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered.
 */
/*
function genesis_SUBTHEME_preprocess_block(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
*/

/**
* Selects the parent item if it's in the url
*/
function _set_activelink($links) {
  $current_path = drupal_get_path_alias($_GET['q']);
  $current_path = preg_replace('/(\?|\/*\?).*$/', '', $current_path) .'/';
  foreach ($links as $key => $link) {
    if (strpos($current_path, drupal_get_path_alias($link['href']) .'/') !== FALSE) {
      if (isset($links[$key]['attributes']['class'])) {
        $links[$key]['attributes']['class'] .= ' active';
      }
      else {
        $links[$key]['attributes']['class'] = 'active';
      }
    }
  }

  return $links;
}

/**
 * Override theme_links().
 */
function genesis_thaihealth_links($links, $attributes = array('class' => 'links')) {
  global $language;
  $output = '';

  if (count($links) > 0) {

    $num_links = count($links);
    $i = 1;

    // Set active menu. by Rutz
    $links = _set_activelink($links);

    foreach ($links as $key => $link) {
      $class = $key;

      // Add first, last and active classes to the list of links to help out themers.
      if ($i == 1) {
        $class .= ' first';
      }
      if ($i == $num_links) {
        $class .= ' last';
      }
      if (isset($link['href']) && ($link['href'] == $_GET['q'] || ($link['href'] == '<front>' && drupal_is_front_page()))
          && (empty($link['language']) || $link['language']->language == $language->language)) {
        $class .= ' active';
      }
      
      $inner = '';
      if (isset($link['href'])) {
        // Pass in $link as $options, they share the same keys.
        $inner = l($link['title'], $link['href'], $link);
      }
      else if (!empty($link['title'])) {
        // Some links are actually not links, but we wrap these in <span> for adding title and class attributes
        if (empty($link['html'])) {
          $link['title'] = check_plain($link['title']);
        }
        $span_attributes = '';
        if (isset($link['attributes'])) {
          $span_attributes = drupal_attributes($link['attributes']);
        }
        $inner = '<span'. $span_attributes .'>'. $link['title'] .'</span>';
      }

      if (!empty($inner)) {
        $list .= '<li'. drupal_attributes(array('class' => $class)) .'>';
        $list .= $inner . "</li>\n";
        $i++;
      }
    }

    $output = '';
    if ($i > 1) {
      if ($attributes['class'] == 'links tags') {
        $output .= '<h2>' . t('ป้ายคำ') . '</h2>';
      }
      $output .= '<ul'. drupal_attributes($attributes) .'>' . $list;
      $output .= '</ul>';
    }
  }

  return $output;
}


/**
 * Override theme_menu_item_link().
 */
function phptemplate_menu_item_link($link) {
  global $language;

  if (empty($link['localized_options'])) {
    $link['localized_options'] = array();
  }

  $current_path = drupal_get_path_alias($_GET['q']);
  $current_path = preg_replace('/(\?|\/*\?).*$/', '', $current_path) .'/';


  $pos = strpos($current_path, drupal_get_path_alias($link['href']) .'/');
  $matched =
    (strpos($current_path, 'forum') === 0 && $link['href'] == 'healthcontent') ||
    (strpos($current_path, 'multimedia') === 0 && $link['href'] == 'partner') ||
    (strpos($current_path, 'poll') === 0 && $link['href'] == 'healthcontent');

  if (($pos !== FALSE && $pos === 0) || $matched) {
    if (isset($link['localized_options']['attributes']['class'])) {
      $link['localized_options']['attributes']['class'] .= ' active';
    }
    else {
      $link['localized_options']['attributes']['class'] = 'active';
    }
  }

  // Menu unlink.
  if (function_exists('menu_unlink_check') && $_link = menu_unlink_check($link)) {
    return $_link;
  }

  return l($link['title'], $link['href'], $link['localized_options']);
}

/**
 * Render language selector
 */
function genesis_thaihealth_language_selector() {
  $text_for_choose_language = t('Choose language');
  $self = url($_GET['q']);
  $output =<<<LANGFORM
<form action="$self">
<div class="language-selector-option">
<label for="language-selector">$text_for_choose_language</label>
<select id="language-selector">
  <option value="http://thaihealth.or.th">ไทย</option>
  <option value="http://en.thaihealth.or.th">English</option>
  <option value="http://en.thaihealth.or.th/language/french">Française</option>
  <option value="http://en.thaihealth.or.th/language/spanish">Español</option>
  <option value="http://en.thaihealth.or.th/language/mandarin">中文</option>
</select>
</div>
</form>

LANGFORM;

  drupal_add_js(drupal_get_path('theme', 'genesis_thaihealth') .'/js/lang.js');
  return $output;
}

function phptemplate_upload_attachments($files) {
  $header = array(t('Attachment'), t('Size'));
  $rows = array();
  foreach ($files as $file) {

    if (strpos($file->filemime, 'image') === 0) {
      continue;
    }

    $file = (object)$file;
    if ($file->list && empty($file->remove)) {
      $href = file_create_url($file->filepath);
      $text = $file->description ? $file->description : $file->filename;
      $rows[] = array(l($text, $href), format_size($file->filesize));
    }
  }
  if (count($rows)) {
    return theme('table', $header, $rows, array('id' => 'attachments'));
  }
}

function genesis_thaihealth_node_submitted($node) {
  return t('<span>โดย !username | วันที่ !date </span> !fb_like', array(
    '!username' => theme('username', $node),
    '!date' => _thaihealth_format_thai_node_submitted_date($node->created),
    '!fb_like' => !$node->teaser ? _thaihealth_node_facebook_like_html($node) : '',
  ));
}

function genesis_thaihealth_preprocess_comment(&$vars, $hook) {
  $comment = $vars['comment'];
  //drupal_set_message('<pre>' . print_r($vars,1) . '</pre>');
  $vars['submitted'] = t('โดย !username | วันที่ !date !time', array(
    '!username' => theme('username', $comment),
    '!date' => _thaihealth_format_thai_node_submitted_date($comment->timestamp),
    '!time' => date('H:i:s', $comment->timestamp),
  ));
}

function _thaihealth_node_facebook_like_html($node) {
  $path = urlencode(url('', array('absolute' => TRUE)) .'node/'. $node->nid);
  $html =<<<FBHTML
<script type="text/javascript">
//<![CDATA[
document.write('<iframe src="http://www.facebook.com/plugins/like.php?href=$path&amp;layout=standard&amp;show_faces=false&amp;width=300&amp;action=like&amp;colorscheme=light&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:35px;" allowTransparency="true"></iframe>');
//]]>
</script>

FBHTML;

  return $html;
}

function _thaihealth_format_thai_node_submitted_date($created) {
  $month_name = array(
    1 => "มกราคม",
    2 => "กุมภาพันธ์",
    3 => "มีนาคม",
    4 => "เมษายน",
    5 => "พฤษภาคม",
    6 => "มิถุนายน",
    7 => "กรกฎาคม",
    8 => "สิงหาคม",
    9 => "กันยายน",
    10 => "ตุลาคม",
    11 => "พฤศจิกายน",
    12 => "ธันวาคม",
  );

  $created = getdate($created);
  return $created['mday'] ." ". $month_name[$created['mon']] ." ". ($created['year'] + 543);
}

/** CAUTION: hook_breadcrumb is used only for blog core module, cause we mustn't modify it.
 *
*/

function genesis_thaihealth_breadcrumb($breadcrumb) {
  if (arg(0) == 'blog') {
    $author = user_load(arg(1));
    $breadcrumb[1] = l('เพื่อนสร้างสุขภาวะ', 'partner');
    $breadcrumb[2] = l('บล็อก', 'partner/blog');
    $breadcrumb[] = 'บล็อกของ ' . $author->name;
    
  }
  else if (arg(0) == 'node') {
    $node = node_load(arg(1));
    if ($node->type == 'blog') {
      $breadcrumb[1] = l('เพื่อนสร้างสุขภาวะ', 'partner');
      $breadcrumb[2] = l('บล็อก', 'partner/blog');
    }
  }
  
  else if (arg(0) == 'healthcontent' && arg(1) == 'situations' && strlen(arg(2)) > 0) {
    $breadcrumb[] = l(t('Home'), '<front>');
    $breadcrumb[] = l('สาระสุขภาพ', 'healthcontent');
    $breadcrumb[] = l('เกาะติดสถานการณ์', 'healthcontent/situations');
    if (arg(2) == 'microsite') {
      if (is_numeric(arg(3))) {
        $node = node_load(arg(3));      
        $breadcrumb[] = $node->title;
      }
      else {
        $row = db_fetch_object(
          db_query("SELECT n.nid FROM {term_node} t LEFT JOIN {node} n ON n.vid=t.vid WHERE t.tid=%d AND n.type='headline'", array_shift(explode('+', arg(4))))
        );
        if ($row->nid) {
          $node = node_load($row->nid);
          $breadcrumb[] = l($node->title, 'healthcontent/situations/microsite/' . $node->nid);
        }
        $breadcrumb[] = drupal_set_title();
      }
    }
    else if (is_numeric(arg(2))) {
      $term = taxonomy_get_term(arg(2));      
      $breadcrumb[] = $term->name;
    }
  }
  if (is_array($breadcrumb) && count($breadcrumb) > 1) {
   return theme_item_list($breadcrumb, null, 'ul', array('class' => 'breadcrumb')); 
  }
}

function genesis_thaihealth_pager($tags = array(), $limit = 10, $element = 0, $parameters = array(), $quantity = 9) {
  if (arg(0) == 'event') {
    return theme_pager(array('«', '‹', '', '›', '»'), $limit, $element, $parameters, 3);
  }
  else {
    return theme_pager($tags, $limit, $element, $parameters, $quantity);
  }
}

function genesis_thaihealth_radio($element) {
  _form_set_class($element, array('form-radio'));
  $output = '<input type="radio" ';
  $output .= 'id="' . $element['#id'] . '" ';
  $output .= 'name="' . $element['#name'] . '" ';
  $output .= 'value="' . $element['#return_value'] . '" ';
  $output .= (check_plain($element['#value']) == $element['#return_value']) ? ' checked="checked" ' : ' ';
  $output .= drupal_attributes($element['#attributes']) . ' />';
  if (!is_null($element['#title'])) {
    $output = $output . '<label class="option" for="' . $element['#id'] . '"> ' . $element['#title'] . '</label>';
  }

  unset($element['#title']);
  return theme('form_element', $element, $output);
}

/**
 * Override implementation of theme_tagadelic_weighted().
 * Note: add bullet list output.
 */
function genesis_thaihealth_tagadelic_weighted($terms) {
  $output = '<ul class="tagadelic-list">';
  foreach ($terms as $term) {
    $output .= '<li>' . l($term->name, taxonomy_term_path($term), array('attributes' => array('class' => "tagadelic level$term->weight", 'rel' => 'tag'))) ."</li>\n";
  }
  return $output . '</ul>';
}

/**
 * Implementation of theme_nice_menus_tree().
 */
function genesis_thaihealth_nice_menus_tree($menu_name = NULL, $mlid = NULL, $depth = -1, $menu = NULL) {
  // Load the full menu array.
  $menu = isset($menu) ? $menu : menu_tree_all_data($menu_name);

  if (isset($menu)) {
    $page_menu = menu_tree_page_data($menu_name);
    $trail = nice_menus_build_page_trail($page_menu);
    unset($page_menu);
  }
  
  genesis_thaihealth_unset_accesskey_recursive($menu);

  // Allow i18n module to translate strings where available.
  if (module_exists('i18nmenu')) {
    i18nmenu_localize_tree($menu);
  }

  // For custom $menus and menus built all the way from the top-level we
  // don't need to "create" the specific sub-menu and we need to get the title
  // from the $menu_name since there is no "parent item" array.

  // Create the specific menu if we have a mlid.
  if (!empty($mlid)) {
    // Load the parent menu item.
    $item = menu_link_load($mlid);
    $title = check_plain($item['title']);
    // The depth for our parent item.
    $parent_depth = $item['depth'];

    // Narrow down the full menu to the specific sub-tree we need.
    for ($p = 1; $p < 10; $p++) {
      if ($sub_mlid = $item["p$p"]) {
        $subitem = menu_link_load($sub_mlid);
        // Menu sets these ghetto-ass keys in _menu_tree_check_access().
        $menu = $menu[(50000 + $subitem['weight']) .' '. $subitem['title'] .' '. $subitem['mlid']]['below'];
      }
    }
  }
  // Otherwise just set a title and move on.
  else {
    // Get the title from the DB since we don't have it in the $menu.
    $result = db_result(db_query("SELECT title FROM {menu_custom} WHERE menu_name = '%s'", $menu_name));
    $title = check_plain($result);
  }

  $output['content'] = '';
  $output['subject'] = $title;

  if ($menu) {
    // Set the total menu depth counting from this parent if we need it.
    $depth =  ($depth > 0) ? ($parent_depth + $depth) : $depth;
    $output['content'] .= theme('nice_menus_build', $menu, $depth, $trail);
  }
  return $output;
}

function genesis_thaihealth_unset_accesskey_recursive(&$menu) {
  if (is_array($menu)) {
    foreach ($menu as $key => $submenu) {
      if ($submenu['link']['depth'] > 1) { // Leave only 1st level
        unset($menu[$key]['link']['options']['attributes']['accesskey'],
          $menu[$key]['link']['localized_options']['attributes']['accesskey']
        );
      }
      if (isset($submenu['below'])) {
        genesis_thaihealth_unset_accesskey_recursive($menu[$key]['below']);
      }
    }
  }
}

/**
 * Implementation of theme_upload_attachments().
 */
function genesis_thaihealth_upload_attachments($files) {
  $header = array(t('Attachment'), t('Size'));
  $rows = array();
  foreach ($files as $file) {
    $file = (object)$file;
    if ($file->list && empty($file->remove)) {
      $href = file_create_url($file->filepath);
      $text = $file->description ? $file->description : $file->filename;
      $rows[] = array(l($text, $href), format_size($file->filesize));
    }
  }
  if (count($rows)) {
    return theme('table', $header, $rows, array('id' => 'attachments', 'summary' => t('ตารางแสดงเอกสารที่แนบมากับเนื้อหา')), t('รายการเอกสารแนบ'));
  }
}

function phptemplate_imagecache($presetname, $path, $alt = '', $title = '', $attributes = NULL, $getsize = TRUE, $absolute = TRUE) {
  // Check is_null() so people can intentionally pass an empty array of
  // to override the defaults completely.
  if (is_null($attributes)) {
    $attributes = array('class' => 'imagecache imagecache-' . $presetname);
  }
  $ours = array(
    'src' => imagecache_create_url($presetname, $path, FALSE, $absolute), 
    'alt' => $alt, 
    'title' => $title,
  );
  if ($getsize && ($image = image_get_info(imagecache_create_path($presetname, $path)))) {
    $ours += array(
      'width' => $image['width'],
      'height' => $image['height'],
    );
  }

  return '<img' . drupal_attributes($ours + $attributes) . '/>';
}



/**
 * Helper function that builds the nested lists of a Nice menu.
 *
 * @param $menu
 *   Menu array from which to build the nested lists.
 * @param $depth
 *   The number of children levels to display. Use -1 to display all children
 *   and use 0 to display no children.
 * @param $trail
 *   An array of parent menu items.
 */
function phptemplate_nice_menus_build($menu, $depth = -1, $trail = NULL) {
  $output = '';
  // Prepare to count the links so we can mark first, last, odd and even.
  $index = 0;
  $count = 0;
  foreach ($menu as $menu_count) {
    if ($menu_count['link']['hidden'] == 0) {
      $count++;
    }
  }
  // Get to building the menu.
  foreach ($menu as $menu_item) {
    $mlid = $menu_item['link']['mlid'];
    // Check to see if it is a visible menu item.
    if (!isset($menu_item['link']['hidden']) || $menu_item['link']['hidden'] == 0) {
      // Check our count and build first, last, odd/even classes.
      $index++;
      $first_class = $index == 1 ? ' first ' : '';
      $oddeven_class = $index % 2 == 0 ? ' even' : ' odd';
      $last_class = $index == $count ? ' last' : '';
      // Build class name based on menu path
      // e.g. to give each menu item individual style.
      // Strip funny symbols.
      $clean_path = str_replace(array('http://', 'www', '<', '>', '&', '=', '?', ':', '.'), '', $menu_item['link']['href']);
      // Convert slashes to dashes.
      $clean_path = str_replace('/', '-', $clean_path);
      $class = 'menu-path-' . $clean_path;
      if ($trail && in_array($mlid, $trail)) {
        $class .= ' active-trail';
      }
      // If it has children build a nice little tree under it.
      if ((!empty($menu_item['link']['has_children'])) && (!empty($menu_item['below'])) && $depth != 0) {
        // Keep passing children into the function 'til we get them all.
        $children = theme('nice_menus_build', $menu_item['below'], $depth, $trail);
        // Set the class to parent only of children are displayed.
        $parent_class = ($children && ($menu_item['link']['depth'] <= $depth || $depth == -1)) ? 'menuparent ' : '';
        $output .= '<li class="menu-' . $mlid . ' ' . $parent_class . $class . $first_class . $oddeven_class . $last_class . '">' . theme('menu_item_link', $menu_item['link']);
        // Check our depth parameters.
        if ($menu_item['link']['depth'] <= $depth || $depth == -1) {
          // Build the child UL only if children are displayed for the user.
          if ($children) {
            $output .= '<ul>';
            $output .= $children;
            $output .= "</ul>\n";
          }
        }
        $output .= "</li>\n";
      }
      else {
        $output .= '<li class="menu-' . $mlid . ' ' . $class . $first_class . $oddeven_class . $last_class . '">' . theme('menu_item_link', $menu_item['link']) . '</li>' . "\n";
      }
    }
  }
  return $output;
}

function genesis_thaihealth_fb_social_comments_block_comments_view($url) {
  global $_fb_script_init;
  $_fb_script_init = TRUE;
  
  $xid = url($_GET['q'], array(
      'absolute' => TRUE, 
      'alias' => TRUE 
  )); 
  
  $attrs = array(
      'xid' => urlencode($xid),  // why is drupal_urlencode not working ?
      'title' => $node->title, 
      'href' => $url, 
      'numposts' => variable_get('fb_social_comments_numposts', 10), 
      'width' => variable_get('fb_social_comments_width', 420), 
      'simple' => variable_get('fb_social_comments_simple', 0) ? 'true' : 'false', 
      'reverse' => variable_get('fb_social_comments_reverse', 0) ? 'true' : 'false', 
      'publish_feed' => variable_get('fb_social_comments_publish_feed', 0) ? 'true' : 'false' 
  );
  
  if ($css = variable_get('fb_social_comments_css', '')) {
    $attrs['css'] = $css;
  }
  
  $fb_attrs = drupal_attributes($attrs);
  $res = '<div id="fb-social-comments">';
  $res .= <<<CODE
<script type="text/javascript">
//<![CDATA[
  document.write('<fb:comments $fb_attrs></fb:comments>');
  //document.write('<fb:title>Comments on: {$node->title}</fb:title>');
//]]>
</script>
<noscript><p class="noscript noscript-fb-comment">ขณะนี้ Browser ไม่ได้เปิด JavaScript อาจทำให้ไม่สามารถแสดงความคิดเห็นใน Facebook Comment ได้</p></noscript>

CODE;

  $res .= '</div>';
  return $res;
}

function genesis_thaihealth_menu_item_link($link) {
  if ($link['type'] & MENU_LOCAL_TASK) {
    if ($link['path'] === 'node/%/view') {
      $path = explode('/', $link['href']);
      $node = node_load($path[1]);
      if ($node->type == 'poll') {
        $link['title'] = 'โหวตโพล';
      }
    }
    else if ($link['path'] === 'node/%/results') {
      $path = explode('/', $link['href']);
      $node = node_load($path[1]);
      if ($node->type == 'poll') {
        $link['title'] = 'ผลโหวตโพล';
      }
    }
    else if ($link['path'] === 'user/%/view') {
      //drupal_set_message('<pre>'.print_r($link,1).'</pre>');
      $link['title'] = 'ข้อมูลสมาชิก';
    }
    else if ($link['path'] === 'user/%/edit') {
      $link['title'] = 'แก้ไขข้อมูลสมาชิก';
    }
  }
  
  if (empty($link['localized_options'])) {
    $link['localized_options'] = array();
  }

  return l($link['title'], $link['href'], $link['localized_options']);
}

function genesis_thaihealth_status_messages($display = NULL) {
  $output = '';
  foreach (drupal_get_messages($display) as $type => $messages) {
    $output .= "<div class=\"messages $type\">\n";
    global $user;
    
    if ($type == 'error' && arg(0) == 'user' && ((strlen(arg(1)) < 1 && $user->uid < 1) || arg(1) == 'register' || arg(1) == 'password')) {
      $output .= '  <h2>คุณกรอกข้อมูลไม่ถูกต้อง</h2>';
    }
    else if ($type == 'error') {
      $output .= '  <h2>พบข้อผิดพลาด</h2>';
    }
    else if ($type == 'status') {
      $output .= '  <h2>สถานะที่ดำเนินการ</h2>';
    }
    else if ($type == 'warning') {
      $output .= '  <h2>คำเตือน</h2>';
    }
    if (count($messages) > 1) {
      $output .= " <ul>\n";
      foreach ($messages as $message) {
        $output .= '  <li>' . $message . "</li>\n";
      }
      $output .= " </ul>\n";
    }
    else {
      $output .= $messages[0];
    }
    $output .= "</div>\n";
  }
  return $output;
}

function genesis_thaihealth_quicktabs_tabs($quicktabs, $active_tab = 'none') {
  $output = '';
  $tabs_count = count($quicktabs['tabs']);
  if ($tabs_count <= 0) {
    return $output;
  }

  $index = 1;
  $output .= '<ul class="quicktabs_tabs quicktabs-style-'. drupal_strtolower($quicktabs['style']) .'">';
  foreach ($quicktabs['tabs'] as $tabkey => $tab) {
    $class = 'qtab-'. $tabkey;
    // Add first, last and active classes to the list of tabs to help out themers.
    $class .= ($tabkey == $active_tab ? ' active' : '');
    $class .= ($index == 1 ? ' first' : '');
    $class .= ($index == $tabs_count ? ' last': '');
    $attributes_li = drupal_attributes(array('class' => $class));
    $options = _quicktabs_construct_link_options($quicktabs, $tabkey);
    // Support for translatable tab titles with i18nstrings.module.
    if (module_exists('i18nstrings')) {
      $tab['title'] = tt("quicktabs:tab:$quicktabs[qtid]--$tabkey:title", $tab['title']);
    }
    //$output .= '<li'. $attributes_li .'>'. l($tab['title'], $_GET['q'], $options) .'</li>';
    $output .= '<li'. $attributes_li .'>'. $tab['title'] .'</li>';
    $index++;
  }
  $output .= '</ul>';
  return $output;
}

function genesis_thaihealth_pager_link($text, $page_new, $element, $parameters = array(), $attributes = array()) {
  $page = isset($_GET['page']) ? $_GET['page'] : '';
  $new_page = implode(',', pager_load_array($page_new[$element], $element, explode(',', $page)));
  if ($new_page || (arg(0) == 'event' && $new_page === '0')) {
    $parameters['page'] = $new_page;
  }

  $query = array();
  if (count($parameters)) {
    $query[] = drupal_query_string_encode($parameters, array());
  }
  $querystring = pager_get_querystring();
  if ($querystring != '') {
    $query[] = $querystring;
  }

  // Set each pager link title
  if (!isset($attributes['title'])) {
    static $titles = NULL;
    if (!isset($titles)) {
      $titles = array(
        t('« first') => t('Go to first page'), 
        t('‹ previous') => t('Go to previous page'), 
        t('next ›') => t('Go to next page'), 
        t('last »') => t('Go to last page'),
      );
    }
    if (isset($titles[$text])) {
      $attributes['title'] = $titles[$text];
    }
    else if (is_numeric($text)) {
      $attributes['title'] = t('Go to page @number', array('@number' => $text));
    }
  }

  return l($text, $_GET['q'], array('attributes' => $attributes, 'query' => count($query) ? implode('&', $query) : NULL));
}
