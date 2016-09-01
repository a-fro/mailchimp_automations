<?php

/**
 * @file
 * Mailchimp_automations hook definitions.
 */

/**
 * Alter the entity options list on the automations entity form.
 *
 * @param array $entity_type_options
 *   The full list of Drupal entities.
 * @param string $automation_entity_label
 *   The label for the automation entity, if it exists.
 */
function hook_mailchimp_automations_entity_options(&$entity_type_options, $automation_entity_label) {

}

/**
 * Alter mergevars before they are sent to MailChimp.
 *
 * @param array $merge_vars
 *   The merge vars that will be passed to MailChimp.
 * @param object $automation_entity
 *   The MailchimpAutomationEntity object.
 * @param object $wrapped_entity
 *   The EntityMetadataWrapper for the triggering entity.
 */
function hook_mailchimp_automations_mergevars_alter(&$merge_vars, $automation_entity, $wrapped_entity) {
}

/**
 * Perform an action after a successful MailChimp workflow automation.
 *
 * @param object $automation_entity
 *   The MailchimpAutomationEntity object.
 * @param string $email
 *   The email_property value from the MailchimpAutomationEntity.
 * @param object $wrapped_entity
 *   The EntityMetadataWrapper for the triggering entity.
 */
function hook_mailchimp_automations_workflow_email_triggered($automation_entity, $email, $wrapped_entity) {

}
