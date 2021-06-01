<?php
namespace Drupal\drupalup_simple_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class SimpleForm extends FormBase
{
    /**
     * {@inheritdoc}
     */
    public function getFormId()
    {
        return 'drupalup_simple_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['number_1']=[
          '#type' => 'textfield',
          '#title' => $this->t('First Number')  
        ];
        $form['number_2']=[
            '#type' => 'textfield',
            '#title' => $this->t('Second Number')  
          ];
          $form['submit']=[
              '#type'=>'submit',
              '#value'=> $this->t('Calculate')
          ];
          
        
          return $form;
  
  

    }
    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $m= $form_state->getValue('number_1')+ $form_state->getValue('number_2');
       drupal_set_message($m);
    }



}