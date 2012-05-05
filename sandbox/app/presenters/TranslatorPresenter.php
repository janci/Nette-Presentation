<?php
class TranslatorPresenter extends Nette\Application\UI\Presenter {
    public function renderDefault(){
        $translator = $this->getService('translator');
        $this->template->translate_text = $translator->translate('Original text');
        $this->template->setTranslator($translator);
        
    }
    
    public function createComponentForm(){
        $form = new \Nette\Application\UI\Form;
        $form->addText('name','Username');
        $form->setTranslator($this->getService('translator'));
        return $form;
    }
}

