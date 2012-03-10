<?php
class PresentationPresenter extends BasePresenter
{
    public function handleMyhandler(){
        $this->template->message = 'Call handler `Myhandler`.';
        $this->invalidateControl('changeMessage');
        //$this->validateControl('changeMessage');
    }
    
    public function handleSetback(){
        unset($this->template->message);
        $this->invalidateControl('changeMessage');
    }
    
    public function renderDefault(){
        $this->getService('myclass');
    }
    
}