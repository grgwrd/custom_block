<?php

namespace Drupal\custom_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a 'MightAlsoLikeBlock' block.
 *
 * @Block(
 *  id = "custom_block",
 *  admin_label = @Translation("Custom Starter block""),
 * )
 */
  class CustomBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $text = [ '#markup' => $this->t('Test') ];

    $build = [
      '#theme' => 'custom_block',
      '#text' => $text
    ];

    return $build;
  }

}
