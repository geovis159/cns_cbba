<?php

namespace Drupal\bloque_generales_gobbo\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Bloque Marca Gobbo' Block.
 *
 * @Block(
 *   id = "bloque_marca_gobbo",
 *   admin_label = @Translation("Bloque marca gobbo"),
 * )
 */
class BloqueMarcaGobbo extends BlockBase
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        return [
            '#theme' => 'bloque_marca_gobbo',

        ];
    }
}
