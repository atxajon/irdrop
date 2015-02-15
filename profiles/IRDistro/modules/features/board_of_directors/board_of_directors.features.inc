<?php
/**
 * @file
 * board_of_directors.features.inc
 */

/**
 * Implements hook_node_info().
 */
function board_of_directors_node_info() {
  $items = array(
    'bod' => array(
      'name' => t('BOD'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
