<?php

/**
 * @file
 * Mailchimp Automation entity class.
 */

class MailchimpAutomationEntity extends Entity {
  public
    $mailchimp_automation_entity_id,
    $name,
    $label,
    $entity_type,
    $bundle,
    $email_property,
    $list_id,
    $workflow_id,
    $workflow_email_id,
    $entity_path;

  /**
   * Basic __construct implementation.
   */
  public function __construct(array $values = array()) {
    parent::__construct($values, 'mailchimp_automation_entity');
  }

  /**
   * Overrides Entity\Entity::uri().
   */
  public function uri() {
    return array(
      'path' => 'admin/config/services/mailchimp/automations/manage/' . $this->name,
      'options' => array(
        'entity_type' => $this->entityType,
        'entity' => $this,
      ),
    );
  }

}
