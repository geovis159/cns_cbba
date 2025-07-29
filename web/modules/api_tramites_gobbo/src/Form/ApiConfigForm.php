<?php

namespace Drupal\api_tramites_gobbo\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class ApiConfigForm extends ConfigFormBase {

  protected function getEditableConfigNames() {
    return ['api_tramites_gobbo.settings'];
  }

  public function getFormId() {
    return 'api_tramites_gobbo_config_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('api_tramites_gobbo.settings');

    $form['api_url'] = [
      '#type' => 'textfield',
      '#title' => $this->t('API URL'),
      '#default_value' => $config->get('api_url'),
      '#required' => TRUE,
    ];

    return parent::buildForm($form, $form_state);
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('api_tramites_gobbo.settings')
      ->set('api_url', $form_state->getValue('api_url'))
      ->save();

    parent::submitForm($form, $form_state);
  }
}
