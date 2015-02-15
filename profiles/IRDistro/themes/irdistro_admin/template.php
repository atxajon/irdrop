<?php

/**
 * Override or insert variables into the maintenance page template.
 */
function irdistro_admin_preprocess_maintenance_page(&$vars) {
  // While markup for normal pages is split into page.tpl.php and html.tpl.php,
  // the markup for the maintenance page is all in the single
  // maintenance-page.tpl.php template. So, to have what's done in
  // shiny_preprocess_html() also happen on the maintenance page, it has to be
  // called here.
  shiny_preprocess_html($vars);
  if (variable_get('install_task') != 'done') {
    $footer_markup =  '<div class="message">' . t('Proudly built by') . '</div>';
    $footer_markup .=  '<div class="logo">' . t('<a href="@url">Awesome guys</a>', array('@url' => 'http://www.drupal.org')) . '</div>';
    $vars['footer'] = array(
      '#prefix' => '<div id="credit" class="clearfix">',
      '#markup' => $footer_markup,
      '#suffix' => '</div>',
    );
  }
}
