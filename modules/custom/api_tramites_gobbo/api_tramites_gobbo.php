<?php

/**
 * Implements hook_preprocess_block().
 */

use Drupal\node\Entity\Node;

use Drupal\Core\Entity\Query\QueryFactory;

function api_tramites_gobbo_obtener_nodos_por_tipo($tipo_contenido)
{

  dump('ELIMNAR TIPO DE CONTENIDO:', $tipo_contenido);

  $nodes = Node::loadByProperties(['type' => $tipo_contenido]);

  $nids = array_keys($nodes); // Extraer solo los IDs

  dump('Nodos antes de ser Eliminados:', $nids);
  return $nids;
}




function api_tramites_gobbo_eliminar_contenido($tipo_contenido)
{

  //$nodos_ids = api_tramites_gobbo_obtener_nodos_por_tipo($tipo_contenido);

  $tramites_actuales = \Drupal::entityTypeManager()
    ->getStorage('node')
    ->loadByProperties(['type' => $tipo_contenido]);
  dump('Nodos ID Tramites a Eliminar', $tramites_actuales);
  if (!empty($tramites_actuales)) {
    foreach ($tramites_actuales as $nodo) {
      dump('NODO A ELIMINAR ____', $nodo);
      $nodo->delete();
    }
    dump('TODOS LOS NODOS ELIMINADOS');
  }
}

function api_tramites_gobbo_obtener_tramites()
{
  $id_entidad = theme_get_setting('id_entidad_api_gobbo');
  $url = theme_get_setting('ruta_api_gobbo');
  $api_client = \Drupal::service('api_tramites_gobbo.api_client');
  $token = theme_get_setting('token_api_gobbo');
  $data = $api_client->getApiData($url . '/tramites?idEntidad=' . $id_entidad . '&limite=500&pagina=1', $token);
  return $data;
}
function api_tramites_gobbo_obtener_servicios()
{
  $id_entidad = theme_get_setting('id_entidad_api_gobbo');
  $url = theme_get_setting('ruta_api_gobbo');
  $api_client = \Drupal::service('api_tramites_gobbo.api_client');
  $token = theme_get_setting('token_api_gobbo');
  $data = $api_client->getApiData($url . '/servicios?idEntidad=' . $id_entidad . '&limite=500&pagina=1', $token);
  return $data;
}

function api_tramites_gobbo_cron()
{

  dump('Entrando en CROOOOOOOOOOON');
  $tramites = api_tramites_gobbo_obtener_tramites();
  $servicios = api_tramites_gobbo_obtener_servicios();
  dump($tramites);
  dump($servicios);
  if (!empty($tramites['datos'])) {
    //api_tramites_gobbo_eliminar_contenido('tramites_gobbo');

    $tramites_actuales = \Drupal::entityTypeManager()
      ->getStorage('node')
      ->loadByProperties(['type' => $tipo_contenido]);
    dump('Nodos ID Tramites a Eliminar', $tramites_actuales);
    if (!empty($tramites_actuales)) {
      foreach ($tramites_actuales as $nodo) {
        dump('NODO A ELIMINAR ____', $nodo);
        $nodo->delete();
      }
      dump('TODOS LOS NODOS ELIMINADOS');
    }
    foreach ($tramites['datos'] as $tramite) {
      //dump($tramite);
      $nodo = Node::create([
        'type' => 'tramites_gobbo',
        'title' => 'Trámite - ' . $tramite['nombre'],
        'field_nombre_tramite' => $tramite['nombre'],
        'field_descripcion_tramite' => $tramite['descripcion'],
        'field_codigo_tramite' => $tramite['sigla'] ?? '',
        'field_id_tramite' => $tramite['id_tramite'],
        'field_slug_tramite' => $tramite['slug_tramite'],
        'field_tipo_servicio_tramite' => 'api',
        'status' => 1
      ]);
      $nodo->save();
    }
  }
  dump('Acabo servicio de tramites');

  if (!empty($servicios['datos'])) {
    dump('Procecsando ids_servicios_api');

    $servicios_actuales = \Drupal::entityTypeManager()
      ->getStorage('node')
      ->loadByProperties(['type' => 'servicios']);


    $ids_servicios_actuales = [];
    $ids_servicios_api = [];
    dump('servicios_actuales:', $servicios_actuales);
    foreach ($servicios_actuales as $servicio) {
      $ids_servicios_actuales[$servicio->field_slug_servicios->value] = $servicio->id();
    }

    foreach ($servicios['datos'] as $servicio) {
      dump('servicio:', $servicio);
      $slug = $servicio['slug_servicio'];
      $post_id = $ids_servicios_actuales[$slug] ?? null;
      $ids_servicios_api[] = $slug;
      if ($post_id) {
        $nodo = Node::load($post_id);
        $nodo->set('field_titulo_servicios', $servicio['nombre']);
        $nodo->set('field_anuncio_servicios', $servicio['descripcion']);
        $nodo->save();
      } else {
        $nodo = Node::create([
          'type' => 'servicios',
          'title' => 'Servicio - ' . $servicio['nombre'],
          'field_titulo_servicios' => $servicio['nombre'],
          'field_anuncio_servicios' => $servicio['descripcion'],
          'field_slug_servicios' => $servicio['slug_servicio'],
          'field_api_gobbo_servicios' => 1,
          'status' => 1
        ]);
        $nodo->save();
      }
    }

    // Eliminar servicios que ya no están en la API
    foreach ($ids_servicios_actuales as $slug => $post_id) {
      $nodo = Node::load($post_id);
      $esGobbo = $nodo->field_api_gobbo_servicios->value;
      if ($esGobbo == 1 && !in_array($slug, $ids_servicios_api)) {
        $nodo->delete();
      }
    }

  }

}

function api_tramites_gobbo_preprocess_node(&$variables)
{

  if ($variables['elements']['#node']->type->getValue()[0]['target_id'] == 'servicios') {
    $url = theme_get_setting('ruta_api_gobbo');
    $aux_url = explode("/ws/api/publico", $url);
    $url = $aux_url[0];
    $variables['url_servicio'] = $url . '/tramites/embed/' . $variables['node']->field_slug_servicios->value;
  }
  if ($variables['elements']['#node']->type->getValue()[0]['target_id'] == 'tramites_gobbo') {
    $url = theme_get_setting('ruta_api_gobbo');
    $aux_url = explode("/ws/api/publico", $url);
    $url = $aux_url[0];
    $variables['url_tramite'] = $url . '/tramites/embed/' . $variables['node']->field_slug_tramite->value;
  }


}