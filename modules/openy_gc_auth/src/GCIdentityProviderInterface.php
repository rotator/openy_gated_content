<?php

namespace Drupal\openy_gc_auth;

use Drupal\Component\Plugin\PluginInspectionInterface;
use Drupal\Component\Plugin\ConfigurableInterface;
use Drupal\Core\Plugin\PluginFormInterface;

/**
 * Defines the common interface for all GCIdentityProvider plugins.
 *
 * @see \Drupal\openy_gc_auth\GCIdentityProviderManager
 * @see \Drupal\openy_gc_auth\Annotation\GCIdentityProvider
 * @see plugin_api
 */
interface GCIdentityProviderInterface extends PluginInspectionInterface, ConfigurableInterface, PluginFormInterface {

  /**
   * Get GCIdentityProvider plugin id.
   */
  public function getId();

  /**
   * Get GCIdentityProvider plugin label.
   */
  public function getLabel();

  /**
   * Get plugin configuration name.
   */
  public function getConfigName();

  /**
   * Get plugin configuration data for application.
   *
   * @return array
   *   Configuration Data.
   */
  public function getDataForApp();

}
