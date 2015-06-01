<?php

/**
 * PROTOTYPE FUNCTIONS
 * Used only for the sake of the prototype
 * This file should be able to be deleted once we convert this to a Drupal theme
 */

/**
 * Example theme function to be used within templates
 */
function theme($tpl_path, $content_path = null) {

  ob_start();
  include $content_path;
  $content = ob_get_clean();

  include $tpl_path;
}

function theme_block($block_html_id, $content_path, $title = '', $block_class = '') {

  ob_start();
  include $content_path;
  $content = ob_get_clean();

  $block = new stdClass();
  $block->subject = $title;

  //tpl vars
  $title_prefix = $title_suffix = null;

  include 'templates/block.tpl.php';
}

function theme_view($view_name, $view_id, $content_path, $attachment_before_path = null, $attachment_after_path = null, $exposed_path = null, $title = null) {

  $view_name_safe = str_replace('_', '-', $view_name);
  $view_id_safe = str_replace('_', '-', $view_id);
  $classes = "view view-$view_name_safe view-id-$view_id_safe";

  ob_start();
  include $content_path;
  $rows = ob_get_clean();

  ob_start();
  if ($attachment_before_path)
    include $attachment_before_path;
  $attachment_before = ob_get_clean();
  ob_start();
  if ($attachment_after_path)
    include $attachment_after_path;
  $attachment_after = ob_get_clean();
  ob_start();
  if ($exposed_path)
     include $exposed_path;
  $exposed = ob_get_clean();

  


  //tpl Vars
  $title_prefix = $title_suffix = $pager = $more = $feed_icon = $footer = $header = null;

  if (file_exists('templates/view/views-view--' . $view_name_safe . '.tpl.php')) {
    include 'templates/view/views-view--' . $view_name_safe . '.tpl.php';
  }
  else {
    include 'templates/views-view.tpl.php';
  }
}

function theme_node($type, $view_mode = 'full') {

  $classes = "node node-type-$type view-mode-$view_mode";
  $node_url = '#';
  $page = ($view_mode == 'full') ? TRUE : FALSE;

  //tpl Vars
  $attributes = $title_prefix = $title_suffix = $title_attributes = $content_attributes = null;

  if ($view_mode !== 'full' && file_exists('templates/node/node--' . $type . '--' . $view_mode . '.tpl.php')) {
    include 'templates/node/node--' . $type . '--' . $view_mode . '.tpl.php';
  }
  else {
    //FORCE NODE TYPE DUE TO BASIC TPL SYSTEM
    include 'templates/node/node--' . $type . '.tpl.php';
  }
//  else {
//    include 'templates/node.tpl.php';
//  }
}

/**
 * Drupal holders
 */
function render() {
  return null;
}

function hide() {
  
}
