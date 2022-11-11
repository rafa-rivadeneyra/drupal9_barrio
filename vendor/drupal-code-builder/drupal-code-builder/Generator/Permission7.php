<?php

namespace DrupalCodeBuilder\Generator;

/**
 * Generator for module permission on Drupal 7 and prior.
 */
class Permission7 extends Permission {

  /**
   * Return an array of subcomponent types.
   */
  public function requiredComponents(): array {
    $components = [
      'hooks' => [
        'component_type' => 'Hooks',
        'hooks' => [
          'hook_permission',
        ],
      ],
    ];

    return $components;
  }

  /**
   * {@inheritdoc}
   */
  function containingComponent() {
    return '%self:hooks:hook_permission';
  }

  /**
   * {@inheritdoc}
   */
  protected function buildComponentContents($children_contents) {
    // Return code for a single permission item for the hook.
    $code = [];

    $permission_name = $this->component_data['permission'];
    $permission_description = $this->component_data['description'];
    $code[] = "£permissions['$permission_name'] = array(";
    $code[] = "  'title' => t('$permission_description'),";
    $code[] = "  'description' => t('TODO: enter permission description'),";
    $code[] = ");";

    return [
      'permission' => [
        'role' => 'item',
        'content' => $code,
      ],
    ];
  }

}
