<?php

namespace Drupal\custom_simple_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class SimpleForm extends FormBase
{
      /**
     * {@inheritdoc}
     */
    public function getFormId()
    {
        return 'custom_simple_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['candidate_name'] = array(
            '#type' => 'textfield',
            '#title' => $this->t('Candidate Name:'),
            '#required' => TRUE,
          );
          $form['candidate_mail'] = array(
            '#type' => 'email',
            '#title' => $this->t('Email ID:'),
            '#required' => TRUE,
          );
          $form['candidate_number'] = array (
            '#type' => 'tel',
            '#title' => $this->t('Mobile no'),
          );
          $form['candidate_dob'] = array (
            '#type' => 'date',
            '#title' => $this->t('DOB'),
            '#required' => TRUE,
          );
          $form['candidate_gender'] = array (
            '#type' => 'select',
            '#title' => $this->t('Gender'),
            '#options' => array(
              'Female' => $this->t('Female'),
              'male' => $this->t('Male'),
            ),
          );
          $form['candidate_confirmation'] = array (
            '#type' => 'radios',
            '#title' => ('Are you above 18 years old?'),
            '#options' => array(
              'Yes' =>$this->t('Yes'),
              'No' =>$this->t('No')
            ),
          );
          $form['candidate_copy'] = array(
            '#type' => 'checkbox',
            '#title' => $this->t('Send me a copy of the application.'),
          );
         
          $form['submit'] = array(
            '#type' => 'submit',
            '#value' => $this->t('Save'),
            '#button_type' => 'primary',
          );
        
          return $form;
  
  

    }
    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        foreach ($form_state->getValues() as $key => $value) {
            drupal_set_message($key . ': ' . $value);
    }
    }





}