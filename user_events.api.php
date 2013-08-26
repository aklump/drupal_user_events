<?php
/**
 * @file
 * API documentation for user_events module.
 *
 * @addtogroup hooks
 * @{
 */

/**
 * Implements hook_user_events_info().
 *
 * @return array
 *   Each element is an array describing an event:
 *   - name
 *   - title
 *
 */
function hook_user_events_info() {
  return array(
    array(
      'name' => 'two_days_post_registration',
      'title' => t('Two Days After Registration'),
    )
  );
}

/**
 * Implements hook_user_events_info_alter().
 *
 * @param array &$events
 *   Each element is an event array, keyed by the event machine name
 */
function hook_user_events_info_alter(&$events) {
  //tbd
}

/** @} */ //end of group hooks
