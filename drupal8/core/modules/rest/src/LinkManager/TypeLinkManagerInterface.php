<?php

/**
 * @file
 * Contains \Drupal\rest\LinkManager\TypeLinkManagerInterface.
 */

namespace Drupal\rest\LinkManager;

interface TypeLinkManagerInterface {

  /**
   * Gets the URI that corresponds to a bundle.
   *
   * When using hypermedia formats, this URI can be used to indicate which
   * bundle the data represents. Documentation about required and optional
   * fields can also be provided at this URI.
   *
   * @param $entity_type
   *   The bundle's entity type.
   * @param $bundle
   *   The bundle name.
   *
   * @return string
   *   The corresponding URI for the bundle.
   */
  public function getTypeUri($entity_type, $bundle);

  /**
   * Get a bundle's Typed Data IDs based on a URI.
   *
   * @param string $type_uri
   *   The type URI.
   *
   * @return array | boolean
   *   If the URI matches a bundle, returns an array containing entity_type and
   *   bundle. Otherwise, returns false.
   */
  public function getTypeInternalIds($type_uri);
}
