<?php
/**
 * This file is part of the Nette Presentation project
 *
 * Copyright (c) 2012 Jan Svantner, Peter Szabo
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 */

/**
 * Demo presenter for demonstration nette snippetns and handlers 
 * @author Svantner Jan <posta.janci@gmail.com>
 */
class AdvancedPresenter extends BasePresenter {
    public function renderDefault() {
        $basic_form = $this->getSession('basic-form');
        
        if (isset($basic_form->values)){
            \Nette\Diagnostics\Debugger::barDump($basic_form->values);
            unset($basic_form->values);
        }
    }
    
    public function createComponentBasicform(){
        $form = new \Nette\Application\UI\Form;
        $form->addText('el1', 'Text input');
        $form->addTextArea('el2','Textarea');
        $form['nameOfElement'] = new Nette\Forms\Controls\TextArea("New textarea");
        $form->addSubmit('send', 'Send to session');
        
        $form->onSuccess[] = array($this, 'successFormSend');
        return $form;
    }
    
    public function createComponentAdvform(){
        $form = new \Nette\Application\UI\Form;
        $form->addText('ell1', 'Text input')
                ->addRule(Nette\Forms\Form::FILLED, 'Text input is required.')
                ->addRule(Nette\Forms\Form::EMAIL, 'Text input must have email format.');
        $form['ell1']->getControlPrototype()->style('border: 1px solid blue');

	//<label style="color: red" data-mykey="U12347" for="frm-advform-ell1">Element1</label>
        $form['ell1']->getLabelPrototype()->style('color: red')->{'data-mykey'}('U12347');
        
        $form->addTextArea('ell2','Textarea');
        $form->addSubmit('send', 'Send to session');
        
        $form->onSuccess[] = array($this, 'successFormSend');
        return $form;
    }
    
    public function createComponentErrform(){
        $form = new \Nette\Application\UI\Form;
        $form->addText('eli1', 'Text input');
        $form['eli1']->getControlPrototype()->{'data-demo'}('my-information');
        $form->addTextArea('eli2','Textarea');
        $form->addSubmit('send', 'Send to session');
        $form->onSuccess[] = array($this, 'allerr');
        return $form;
    }
    
    public function allerr(Nette\Forms\Form $form ){
        $form->addError('Error with server validation.');
    }
    
    public function successFormSend(Nette\Forms\Form $form){
        $values = $form->getValues();
        
        $session = $this->getSession('basic-form');
        $session->values = $values;
        
        $this->redirect('this');
    }
}
