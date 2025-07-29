<?php

namespace Drupal\bloque_generales_gobbo\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Bloque Modal Gobbo' Block.
 *
 * @Block(
 *   id = "bloque_modal_gobbo",
 *   admin_label = @Translation("Bloque modal gobbo"),
 * )
 */
class BloqueModalGobbo extends BlockBase
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        return [
            '#theme' => 'bloque_modal_gobbo',

        ];
    }
}
