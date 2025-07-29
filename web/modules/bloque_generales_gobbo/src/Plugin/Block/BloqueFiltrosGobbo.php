<?php

namespace Drupal\bloque_generales_gobbo\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Bloque Filtros Gobbo' Block.
 *
 * @Block(
 *   id = "bloque_filtros_gobbo",
 *   admin_label = @Translation("Bloque filtros gobbo"),
 * )
 */
class BloqueFiltrosGobbo extends BlockBase
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        return [
            '#theme' => 'bloque_filtros_gobbo',
            '#title' => $this->t('Título del Bloque'),
            '#content' => $this->t('Contenido del Bloque'),
        ];
    }
}
