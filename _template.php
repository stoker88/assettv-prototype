<?php

/**
 * PROTOTYPE FUNCTIONS
 * Used only for the sake of the prototype
 * This file should be able to be deleted once we convert this to a Drupal theme
 */

/**
 * Example theme function to be used within templates
 */
function theme($tpl_path, $content_path) {
  
  ob_start();
  include $content_path;
  $content = ob_get_clean();

  include $tpl_path;
} 
